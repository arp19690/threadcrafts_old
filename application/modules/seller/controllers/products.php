<?php

    class Products extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('seller');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->load->model('custom_model');
            $custom_model = new Custom_model();
            $data["alldata"] = $custom_model->getAllProductsList("*");
//            prd($data);

            $this->template->write_view("content", "products/products-list", $data);
            $this->template->render();
        }

        public function addProduct()
        {
            $model = new Common_model();
            $data["grand_cat_array"] = $model->fetchSelectedData("*", TABLE_GRAND_CATEGORY, NULL, "gc_name");
            $data["form_heading"] = "Add Product";
            $data["form_action"] = "";

            $this->template->write_view("content", "products/product-form", $data);
            $this->template->render();

            if ($this->input->post())
            {
                $arr = $this->input->post();
//                prd($arr);

                $arr["product_detail_array"] = json_encode($arr['product_detail']);
                $arr["product_added_by"] = $this->session->userdata["seller_id"];
                $arr["user_ipaddress"] = $this->session->userdata["ip_address"];
                $arr["user_agent"] = $this->session->userdata["user_agent"];

                if (isset($arr["pc_id"]))
                {
                    $arr["product_parent_category"] = $arr["pc_id"];
                    unset($arr["pc_id"]);
                }

                $product_detail_arr = $arr['product_detail'];
                unset($arr['product_detail']);

                $image_i = "1";
                $product_id = $arr["product_id"];

                $image_array = array();
                foreach ($_FILES["product_img"]["tmp_name"] as $fKey => $fValue)
                {
                    if (!empty($fValue))
                    {
                        $fileName = getEncryptedString(time() . $arr['product_img_color'][$fKey]) . ".jpg";
                        $image_array[$arr['product_img_color'][$fKey]] = $fileName;

                        $this->uploadImages($fileName, $_FILES["product_img"]["tmp_name"][$fKey]);
                        $image_i++;
                    }
                }
                $arr['product_image_and_color'] = json_encode($image_array);
                unset($arr["product_img_color"]);

                if (empty($product_id))
                {
                    //insert
                    $is_exists = $model->is_exists("product_id", TABLE_PRODUCTS, array("product_code" => $arr["product_code"]));
                    if (empty($is_exists))
                    {
                        // to store meta keywords into the database
                        $meta_str = $arr["product_title"] . " " . $arr["product_code"] . " " . getNWordsFromString($arr["product_description"], 10) . " " . SITE_NAME;
                        $meta_str = str_replace(" ", ", ", $meta_str);
                        $arr["meta_keywords"] = $meta_str;

                        $meta_desc = substr($arr["product_description"], 0, 200);
                        $arr["meta_description"] = $meta_desc;

                        $model->insertData(TABLE_PRODUCTS, $arr);
                        $product_id = $this->db->insert_id();

                        // to update the url_key param for this product id
                        $url_key = str_replace(" ", "-", $arr["product_title"]) . '-' . $product_id;
                        $model->updateData(TABLE_PRODUCTS, array('url_key' => $url_key), array('product_id' => $product_id));

                        $this->updateProductDetails($product_detail_arr, $product_id);

                        if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1')
                        {
                            // to send emails to the newsletter subscribers
                            $newsletter_email_records = $model->fetchSelectedData("user_email", TABLE_NEWSLETTER);
                            if (!empty($newsletter_email_records))
                            {
                                $this->load->library('EmailTemplates');
                                $EmailTemplates = new EmailTemplates();
                                $email_model = new Email_model();
                                $product_url = getProductUrl($product_id);
                                $email_content = $EmailTemplates->newProductAdded($product_url);

                                foreach ($newsletter_email_records as $nlKey => $nlValue)
                                {
                                    $newsletter_email = $nlValue["user_email"];
                                    $email_model->sendMail($newsletter_email, "New product introduced | " . SITE_NAME, $email_content);
                                }
                            }
                        }

                        $this->session->set_flashdata("success", "Product Added");
                        redirect(base_url_seller("products"));
                    }
                    else
                    {
                        $this->session->set_flashdata("error", "Product code already exists");
//                        redirect(base_url_seller("addProduct"));

                        $data["record"] = $arr;
                        $data["grand_cat_array"] = $model->fetchSelectedData("*", TABLE_GRAND_CATEGORY, NULL, "gc_name");
                        $data["parent_cat_array"] = $model->fetchSelectedData("*", TABLE_PARENT_CATEGORY, array("pc_gc_id" => $record[0]["product_grand_category"]), "pc_name");
                        $data["child_cat_array"] = $model->fetchSelectedData("*", TABLE_CHILD_CATEGORY, array("cc_pc_id" => $record[0]["product_parent_category"]), "cc_name");
                        $data["form_heading"] = "Add Product";
                        $data["form_action"] = base_url_seller("product/addProduct");
                        $this->template->write_view("content", "product/product-form", $data);
                        $this->template->render();
                    }
                }
                else
                {
                    //update
                    $is_exists = $model->is_exists("product_id", TABLE_PRODUCTS, array("product_code" => $arr["product_code"], "product_id != " => $product_id));
                    if (empty($is_exists))
                    {
                        // to update meta keywords and description into the database
                        $meta_str = $arr["product_title"] . " " . $arr["product_code"] . " " . getNWordsFromString($arr["product_description"], 10) . " " . SITE_NAME;
                        $meta_str = str_replace(" ", ", ", $meta_str);
                        $arr["meta_keywords"] = $meta_str;

                        $meta_desc = substr($arr["product_description"], 0, 200);
                        $arr["meta_description"] = $meta_desc;

                        $model->updateData(TABLE_PRODUCTS, $arr, array("product_id" => $product_id));

                        $this->updateProductDetails($product_detail_arr, $product_id);

                        $this->session->set_flashdata("success", "Product edited");
                        redirect(base_url_seller("products"));
                    }
                    else
                    {
                        $this->session->set_flashdata("error", "Product code already exists");
                        redirect(base_url_seller("editProduct/" . $product_id));
                    }
                }
            }
        }

        public function editProduct($product_id)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $record = $model->fetchSelectedData("*", TABLE_PRODUCTS, array("product_id" => $product_id));
                $data["record"] = $record[0];
                $data["grand_cat_array"] = $model->fetchSelectedData("*", TABLE_GRAND_CATEGORY, NULL, "gc_name");
                $data["parent_cat_array"] = $model->fetchSelectedData("*", TABLE_PARENT_CATEGORY, array("pc_gc_id" => $record[0]["product_grand_category"]), "pc_name");
                $data["child_cat_array"] = $model->fetchSelectedData("*", TABLE_CHILD_CATEGORY, array("cc_pc_id" => $record[0]["product_parent_category"]), "cc_name");
                $data["form_heading"] = "Edit product";
                $data["form_action"] = base_url_seller("products/addProduct");
                $this->template->write_view("content", "products/product-form", $data);
                $this->template->render();
            }
            else
            {
                redirect(base_url_seller("products"));
            }
        }

        public function deactivateProduct($product_id, $ajax = FALSE)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_PRODUCTS, array("product_status" => "0"), array("product_id" => $product_id));
                $this->session->set_flashdata("success", "Product deactivated");
            }

            if ($ajax == FALSE)
                redirect(base_url_seller("products"));
        }

        public function activateProduct($product_id, $ajax = FALSE)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_PRODUCTS, array("product_status" => "1"), array("product_id" => $product_id));
                $this->session->set_flashdata("success", "Product deactivated");
            }

            if ($ajax == FALSE)
                redirect(base_url_seller("products"));
        }

        public function uploadImages($fileName, $filesTmp, $width = PRODUCT_IMG_WIDTH, $height = PRODUCT_IMG_HEIGHT)
        {
            $this->load->library("SimpleImage");
            $img = new SimpleImage();
            $img->load($filesTmp);

            if ($height == NULL || empty($height))
            {
                $img->resizeToWidth($width);
            }
            else
            {
                $img->resize($width, $height);
            }

            //save large size image
            $path_large = PRODUCT_IMG_PATH . "/" . $fileName;
//            move_uploaded_file($filesTmp, $path_large);
            $img->save($path_large);
        }

        public function resizeImage($source, $width, $height, $createThumb = FALSE, $maintainRatio = FALSE)
        {
            $config['image_library'] = 'gd2';
            $config['source_image'] = $source;
            $config['create_thumb'] = $createThumb;
            $config['maintain_ratio'] = $maintainRatio;
            $config['width'] = $width;
            if ($height != NULL)
                $config['height'] = $height;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
        }

        public function productDetail($product_id)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $custom_model = new Custom_model();
                $data = array();

                $record = $custom_model->getAllProductsList("*", array('p.product_id' => $product_id));
                $record = $record[0];
                unset($record["cc_id"], $record["pc_id"], $record["gc_id"], $record["pc_gc_id"], $record["cc_gc_id"], $record["cc_pc_id"]);

                $product_detail_record = $model->fetchSelectedData('*', TABLE_PRODUCT_DETAILS, array('product_id' => $product_id));

                $added_by_record = $model->fetchSelectedData("seller_email", TABLE_SELLER, array("seller_id" => $record["product_added_by"]));

                $record["product_added_by"] = $added_by_record[0]["seller_email"];
                $data["record"] = $record;
                $data["product_detail_record"] = $product_detail_record;

                $this->template->write_view("content", "products/product-detail", $data);
                $this->template->render();
            }
        }

        public function updateStock($product_id = NULL, $size = NULL)
        {
            $model = new Common_model();
            $data = array();

            if ($product_id != NULL)
            {
                $product_detail_record = $model->fetchSelectedData('DISTINCT(product_size) as product_size', TABLE_PRODUCT_DETAILS, array('product_id' => $product_id));
//                prd($product_detail_record);
                $data['product_sizes'] = $product_detail_record;
                $data['selected_product_id'] = $product_id;

                if ($size != NULL)
                {
                    $product_color_records = $model->fetchSelectedData('product_color', TABLE_PRODUCT_DETAILS, array('product_id' => $product_id));
                    $data['product_colors'] = $product_color_records;
                    $data['selected_product_size'] = $size;
                }
            }

            $product_records = $model->fetchSelectedData("product_id,product_title,product_code", TABLE_PRODUCTS, NULL, "product_title");
            $data["product_records"] = $product_records;
            $data["form_heading"] = "Update Stock";

            $this->template->write_view("content", "products/update-stock", $data);
            $this->template->render();

            if ($this->input->post())
            {
                $arr = $this->input->post();
                $product_id = $arr["product_id"];
                $product_size = $arr["product_size"];
                $product_color = $arr["product_color"];
                $product_stock_count = trim($arr["product_stock"]);

                $this->db->set('product_stock', 'product_stock + (' . $product_stock_count . ')', FALSE);
                $this->db->where('product_id', $product_id);
                $this->db->where('product_size', $product_size);
                $this->db->where('product_color', $product_color);
                $this->db->update(TABLE_PRODUCT_DETAILS);

                $this->session->set_flashdata("success", "Product stock updated");
                redirect(base_url_seller("products/updateStock"));
            }
        }

        public function updateProductDetails($product_detail_arr, $product_id)
        {
            if (!empty($product_id) && !empty($product_detail_arr))
            {
                $model = new Common_model();
                $model->deleteData(TABLE_PRODUCT_DETAILS, array('product_id' => $product_id));
                foreach ($product_detail_arr as $key => $value)
                {
                    if (!empty($value['size']))
                    {
                        $size = $value['size'];
                        foreach ($value['color'] as $tmpKey => $tmpValue)
                        {
                            if (!empty($tmpValue))
                            {
                                $color = $tmpValue;
                                $stock_count = $value['stock'][$tmpKey];

                                $data_array = array(
                                    'product_id' => $product_id,
                                    'product_size' => $size,
                                    'product_color' => $color,
                                    'product_stock' => $stock_count,
                                );
                                $model->insertData(TABLE_PRODUCT_DETAILS, $data_array);
                            }
                        }
                    }
                }
            }
        }

    }

    