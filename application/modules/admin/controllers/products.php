<?php

    class Products extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('admin');
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

        public function deleteProduct($product_id)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $model->deleteData(TABLE_PRODUCTS, array("product_id" => $product_id));

                for ($i = "1"; $i <= MAX_PRODUCT_IMAGES; $i++)
                {
                    $file_name = APPPATH . "../" . PRODUCT_IMG_PATH_LARGE . "/" . $product_id . "-" . $i . ".jpg";
                    if (is_file($file_name))
                    {
                        unlink($file_name);
                    }
                }

                $this->session->set_flashdata("success", "Product removed");
            }
            redirect(base_url_admin("products"));
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
                redirect(base_url_admin("products"));
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
                redirect(base_url_admin("products"));
        }

        public function uploadImages($fileName, $filesTmp, $width = PRODUCT_IMG_WIDTH_LARGE, $height = PRODUCT_IMG_HEIGHT_LARGE)
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
            $path_large = PRODUCT_IMG_PATH_LARGE . "/" . $fileName;
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

        public function featuredList()
        {
            $model = new Common_model();
            $fields = "*";
            $tableArrayWithJoinCondition = array(
                TABLE_PRODUCTS . " as p" => "product_id = feature_product_id"
            );
            $records = $model->getAllDataFromJoin($fields, TABLE_FEATURED . " as f", $tableArrayWithJoinCondition, "LEFT", NULL, "product_id", "DESC");

            $data["alldata"] = $records;
//            prd($data);

            $this->template->write_view("content", "products/featured-list", $data);
            $this->template->render();
        }

        public function editFeaturedProduct($feature_id)
        {
            if ($feature_id)
            {
                $model = new Common_model();
                $product_records = $model->fetchSelectedData("product_id, product_title, product_code", TABLE_PRODUCTS);
//                prd($product_records);
                $data["form_heading"] = "Add Featured Product";
                $data["form_action"] = base_url_admin("products/addFeaturedProduct");
                $data["product_array"] = $product_records;
                $record = $model->fetchSelectedData("*", TABLE_FEATURED, array("feature_id" => $feature_id));
                $data["record"] = $record[0];
//                prd($record[0]);

                $this->template->write_view("content", "products/featured-form", $data);
                $this->template->render();
            }
            else
            {
                redirect(base_url_admin("products/FeaturedList"));
            }
        }

        public function addFeaturedProduct()
        {
            $model = new Common_model();
            $product_records = $model->fetchSelectedData("product_id, product_title, product_code", TABLE_PRODUCTS);
            $data["form_heading"] = "Add Featured Product";
            $data["form_action"] = "";
            $data["product_array"] = $product_records;

            $this->template->write_view("content", "products/featured-form", $data);
            $this->template->render();

            if ($this->input->post())
            {
                $arr = $this->input->post();
                $feature_id = $arr["feature_id"];
//                prd($arr);
                $todays_date = strtotime(date("Y-m-d"));
                if (strtotime($arr["start_time"]) < $todays_date)
                {
                    // date wrong, earlier date selected
                    $this->session->set_flashdata("error", "Start time should be either today or greater than today's time");
                    if (empty($feature_id))
                        redirect(base_url_admin("products/addFeaturedProduct"));
                    else
                        redirect(base_url_admin("products/editFeaturedProduct/$feature_id"));
                }
                else
                {
                    if (strtotime($arr["end_time"]) <= $todays_date)
                    {
                        // wrong end date, either current time or earlier date selected
                        $this->session->set_flashdata("error", "End time should be greater than today's time");
                        if (empty($feature_id))
                            redirect(base_url_admin("products/addFeaturedProduct"));
                        else
                            redirect(base_url_admin("products/editFeaturedProduct/$feature_id"));
                    }
                    else
                    {
                        $arr["added_by"] = $this->session->userdata["admin_id"];
                        $arr["user_ipaddress"] = USER_IP;
                        $arr["user_agent"] = USER_AGENT;
                        if (empty($feature_id))
                        {
                            // insert
                            $model->insertData(TABLE_FEATURED, $arr);
                            $this->session->set_flashdata("success", "Featured product added");
                        }
                        else
                        {
                            // update
                            $model->updateData(TABLE_FEATURED, $arr, array("feature_id" => $feature_id));
                            $this->session->set_flashdata("success", "Featured product edited");
                        }
                    }
                }
                redirect(base_url_admin("products/FeaturedList"));
            }
        }

        public function removeFeatured($feature_id)
        {
            if ($feature_id)
            {
                $model = new Common_model();
                $model->deleteData(TABLE_FEATURED, array("feature_id" => $feature_id));
                $this->session->set_flashdata("success", "Product removed from featured list");
            }
            redirect(base_url_admin("products/FeaturedList"));
        }

        public function productDetail($product_id)
        {
            if ($product_id)
            {
                $custom_model = new Custom_model();
                $data = array();

                $product_fields = 'product_id, product_code, product_title, product_description, product_price, product_seller_price, product_profit_percent, product_shipping_charge, product_gift_charge, product_status, product_verified, seller_fullname, seller_company_name, seller_id';
                $detail_fields = 'pd_id, pd_size, pd_color_name, pd_quantity, pd_min_quantity, pd_status';
                $images_fields = 'pi_id, pi_image_title, pi_image_path';
                $record = $custom_model->getAllProductsDetails($product_id, $product_fields, $detail_fields, $images_fields, NULL);
//                prd($record);

                $data["record"] = $record;
                $this->template->write_view("content", "products/product-detail", $data);
                $this->template->render();
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

        public function updateProductDetailStatus($pd_id, $code)
        {
            $model = new Common_model();
            $product_record = $model->fetchSelectedData('pd_product_id', TABLE_PRODUCT_DETAILS, array('pd_id' => $pd_id));
            $model->updateData(TABLE_PRODUCT_DETAILS, array('pd_status' => $code), array('pd_id' => $pd_id));
            $this->session->set_flashdata('success', 'Product details status updated');
            redirect(base_url_admin('products/productDetail/' . $product_record[0]['pd_product_id']));
        }

    }
    