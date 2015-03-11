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
            $seller_id = $this->session->userdata['seller_id'];
            $data["alldata"] = $custom_model->getAllProductsList("*", array('product_seller_id' => $seller_id));
//            prd($data);

            $this->template->write_view("content", "products/products-list", $data);
            $this->template->render();
        }

        public function addProduct()
        {
            $model = new Common_model();

            if ($this->input->post())
            {
                $arr = $this->input->post();
                $seller_id = $this->session->userdata['seller_id'];

                $profit_percent_record = $model->fetchSelectedData('cc_profit_percent', TABLE_CHILD_CATEGORY, array('cc_id' => $arr['product_child_category']));

                $data_array = array(
                    'product_title' => ucwords(addslashes($arr['product_title'])),
                    'product_description' => (addslashes($arr['product_description'])),
                    'product_child_category' => $arr['product_child_category'],
                    'product_price' => addProfitPercentToPrice($arr['product_seller_price'], $profit_percent_record[0]['cc_profit_percent'], $arr['product_shipping_charge']),
                    'product_seller_price' => round($arr['product_seller_price'], 2),
                    'product_shipping_charge' => round($arr['product_shipping_charge'], 2),
                    'product_gift_charge' => round($arr['product_gift_charge'], 2),
                    'product_ipaddress' => USER_IP,
                    'product_useragent' => USER_AGENT,
                    'product_meta_keywords' => addslashes(getNWordsFromString($arr['product_description'], 20)),
                    'product_meta_description' => addslashes(getNWordsFromString($arr['product_description'], 40)),
                    'product_url_key' => getUniqueProductURLKey($arr['product_title']),
                    'product_code' => getUniqueProductCode(),
                    'product_status' => '3',
                    'product_seller_id' => $seller_id,
                    'product_profit_percent' => $profit_percent_record[0]['cc_profit_percent'],
                );
                $model->insertData(TABLE_PRODUCTS, $data_array);
                $product_id = $this->db->insert_id();

                $this->session->set_flashdata('success','Product added. Please add the details about your product');
                redirect(base_url_seller('products/addProductStepTwo/' . $product_id));
            }
            else
            {
                $data["grand_cat_array"] = $model->fetchSelectedData("gc_id, gc_name", TABLE_GRAND_CATEGORY, NULL, "gc_name");
                $data["form_heading"] = "Add Product";
                $data["form_action"] = "";

                $this->template->write_view("content", "products/product-form", $data);
                $this->template->render();
            }
        }

        public function addProductStepTwo($product_id)
        {
            $model = new Common_model();

            if ($this->input->post() && isset($product_id))
            {
                $arr = $this->input->post();
                $seller_id = $this->session->userdata['seller_id'];
                prd($arr);

                $profit_percent_record = $model->fetchSelectedData('cc_profit_percent', TABLE_CHILD_CATEGORY, array('cc_id' => $arr['product_child_category']));

                $data_array = array(
                    'product_title' => ucwords(addslashes($arr['product_title'])),
                    'product_description' => (addslashes($arr['product_description'])),
                    'product_child_category' => $arr['product_child_category'],
                    'product_price' => addProfitPercentToPrice($arr['product_seller_price'], $profit_percent_record[0]['cc_profit_percent'], $arr['product_shipping_charge']),
                    'product_seller_price' => round($arr['product_seller_price'], 2),
                    'product_shipping_charge' => round($arr['product_shipping_charge'], 2),
                    'product_gift_charge' => round($arr['product_gift_charge'], 2),
                    'product_ipaddress' => USER_IP,
                    'product_useragent' => USER_AGENT,
                    'product_meta_keywords' => addslashes(getNWordsFromString($arr['product_description'], 20)),
                    'product_meta_description' => addslashes(getNWordsFromString($arr['product_description'], 40)),
                    'product_url_key' => getUniqueProductURLKey($arr['product_title']),
                    'product_code' => getUniqueProductCode(),
                    'product_status' => '3',
                    'product_seller_id' => $seller_id,
                    'product_profit_percent' => $profit_percent_record[0]['cc_profit_percent'],
                );
                $model->insertData(TABLE_PRODUCTS, $data_array);
            }
            else
            {
                $data["grand_cat_array"] = $model->fetchSelectedData("gc_id, gc_name", TABLE_GRAND_CATEGORY, NULL, "gc_name");
                $data["form_heading"] = "Add Product";
                $data["form_action"] = "";

                $this->template->write_view("content", "products/product-form-step-two", $data);
                $this->template->render();
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

        public function productDetail($product_id)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $seller_id = $this->session->userdata['seller_id'];
                $custom_model = new Custom_model();
                $data = array();

                $record = $custom_model->getAllProductsList("*", array('product_id' => $product_id, 'product_seller_id' => $seller_id));
                $record = $record[0];
                unset($record["cc_id"], $record["pc_id"], $record["gc_id"], $record["pc_gc_id"], $record["cc_gc_id"], $record["cc_pc_id"]);

                $product_detail_record = $model->fetchSelectedData('*', TABLE_PRODUCT_DETAILS, array('pd_product_id' => $product_id));

                $data["record"] = $record;
                $data["product_detail_record"] = $product_detail_record;

                $this->template->write_view("content", "products/product-detail", $data);
                $this->template->render();
            }
        }

        public function updateStock($product_id = NULL, $size = NULL)
        {
            $model = new Common_model();
            $seller_id = $this->session->userdata['seller_id'];
            $data = array();

            if ($product_id != NULL)
            {
                $product_detail_record = $model->fetchSelectedData('DISTINCT(product_size) as product_size', TABLE_PRODUCT_DETAILS, array('product_id' => $product_id, 'product_seller_id' => $seller_id));
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

        public function getParentCategoriesAjax($gc_id)
        {
            if ($gc_id)
            {
                $model = new Common_model();
                $records = $model->fetchSelectedData("*", TABLE_PARENT_CATEGORY, array("pc_gc_id" => $gc_id), "pc_name");
//                prd($records);

                $str = '<div class="control-group">
                                <label class="control-label">Parent Category<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="pc_id" class="span6 m-wrap" id="pc_id">';

                if (!empty($records))
                {
                    $str .= '<option value="">Select</option>';
                    foreach ($records as $pcKey => $pcValue)
                    {
                        $pc_id = $pcValue["pc_id"];
                        $pc_name = $pcValue["pc_name"];

                        $str .= '<option value="' . $pc_id . '">' . $pc_name . '</option>';
                    }
                }
                else
                {
                    $str .= '<option>No data</option>';
                }

                $str .= '</select>
                                </div>
                            </div>';

                echo $str;
            }
        }

        public function getChildCategoriesAjax($pc_id)
        {
            if ($pc_id)
            {
                $model = new Common_model();
                $records = $model->fetchSelectedData("*", TABLE_CHILD_CATEGORY, array("cc_pc_id" => $pc_id), "cc_name");
//                prd($records);

                $str = '<div class="control-group">
                                <label class="control-label">Child Category<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="product_child_category" class="span6 m-wrap" id="cc_id">';

                if (!empty($records))
                {
                    $str .= '<option value="">Select</option>';
                    foreach ($records as $pcKey => $pcValue)
                    {
                        $cc_id = $pcValue["cc_id"];
                        $cc_name = $pcValue["cc_name"];

                        $str .= '<option value="' . $cc_id . '">' . $cc_name . '</option>';
                    }
                }
                else
                {
                    $str .= '<option>No data</option>';
                }

                $str .= '</select>
                                </div>
                            </div>';

                echo $str;
            }
        }

    }
    