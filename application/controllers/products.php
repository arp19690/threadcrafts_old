<?php

    class Products extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->allProductsList();
        }

        public function view($gc_name, $pc_name = null, $cc_name = null, $url_key = null)
        {
            if (isset($gc_name))
            {
                if (isset($gc_name) && !isset($pc_name) && !isset($cc_name) && !isset($url_key))
                {
                    $gc_name = urldecode($gc_name);
                    $this->parentList($gc_name);
                }
                else if (isset($pc_name) && !isset($cc_name) && !isset($url_key))
                {
                    $pc_name = urldecode($pc_name);
                    $this->childList($pc_name);
                }
                else if (isset($cc_name) && !isset($url_key))
                {
                    $cc_name = urldecode($cc_name);
                    $this->productsList($cc_name);
                }
                else if (isset($url_key))
                {
                    $url_key = urldecode($url_key);
                    $this->productDetail($url_key);
                }
            }
            else
            {
                $this->grandList();
            }
        }

        public function grandList()
        {
            $this->allProductsList();
        }

        public function parentList($gc_name)
        {
            $custom_model = new Custom_model();
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("gc_name" => $gc_name, "product_status" => "1"), "product_id", "DESC");
            $category_name_records = array();
            foreach ($records as $key => $value)
            {
                $category_name_records[] = $value['cc_name'];
            }

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($gc_name);
            $breadcrumbArray = array(
                urldecode($gc_name) => base_url("products/view/" . rawurlencode($gc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["gc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function childList($pc_name)
        {
            $custom_model = new Custom_model();
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("pc_name" => $pc_name, "product_status" => "1"), "product_id", "DESC");
            $gc_name = stripslashes($records[0]['gc_name']);
            $category_name_records = array();
            foreach ($records as $key => $value)
            {
                $category_name_records[] = $value['cc_name'];
            }

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($pc_name);
            $breadcrumbArray = array(
                $gc_name => base_url("products/view/" . urlencode($gc_name)),
                $pc_name => base_url("products/view/" . rawurlencode($gc_name) . "/" . rawurlencode($pc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["pc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function productsList($cc_name)
        {
            $custom_model = new Custom_model();
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("cc_name" => $cc_name, "product_status" => "1"), "product_id", "DESC");
            $gc_name = $records[0]["gc_name"];
            $pc_name = $records[0]["pc_name"];

            $data["records"] = $records;

            $category_name_records = array();
            foreach ($records as $key => $value)
            {
                $category_name_records[] = $value['cc_name'];
            }
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($cc_name);
            $breadcrumbArray = array(
                $gc_name => base_url("products/view/" . rawurlencode($gc_name)),
                urldecode($pc_name) => base_url("products/view/" . rawurlencode($gc_name) . "/" . rawurlencode($pc_name)),
                urldecode($cc_name) => base_url("products/view/" . rawurlencode($gc_name) . "/" . rawurlencode($pc_name) . "/" . rawurlencode($cc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["cc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function allProductsList($whereCondArr = NULL, $pageHeading = NULL)
        {
            $data = array();
            $custom_model = new Custom_model();

            if ($whereCondArr == NULL)
            {
                if ($pageHeading == NULL)
                {
                    $pageHeading = "All Products";
                }
            }
            else
            {
                if ($pageHeading == NULL)
                {
                    $pageHeading = "Search results";
                }
            }
            $whereCondArr['product_status'] = 1;

            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, $whereCondArr, "product_id", "DESC");

            $category_name_records = array();
            foreach ($records as $key => $value)
            {
                $category_name_records[] = $value['cc_name'];
            }

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = $pageHeading;
            $breadcrumbArray = array(
                $pageHeading => base_url("products"),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $pageHeading . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function productDetail($url_key)
        {
            require_once APPPATH . "controllers/index.php";
            $indexController = new Index();
            $data = array();
            $model = new Common_model();
            $custom_model = new Custom_model();
            $product_record = $model->fetchSelectedData('product_id', TABLE_PRODUCTS, array("product_url_key" => $url_key, 'product_status' => '1'));

            if (empty($product_record))
            {
                $indexController->pageNotFound();
            }
            else
            {
                $product_id = $product_record[0]['product_id'];
                $product_fields = "*";
                $detail_fields = "*";
                $images_fields = "*";
                $record = $custom_model->getAllProductsDetails($product_id, $product_fields, $detail_fields, $images_fields, array("product_url_key" => $url_key, 'product_status' => '1'));
//                prd($record);
                if ($record["product_status"] == "0")
                {
                    $indexController->pageNotFound();
                }
                else
                {
                    $similar_records = $custom_model->getAllProductsList($product_fields, array("product_id != " => $product_id, "pc_id" => $record["pc_id"]), 'rand()', 'DESC', 4);
//                prd($similar_records);
                    $is_in_wishlist = FALSE;
                    if (isset($this->session->userdata['user_id']))
                    {
                        $is_exists_wishlist = $model->fetchSelectedData('wishlist_id', TABLE_WISHLIST, array('wishlist_product_id' => $product_id, 'wishlist_user_id' => $this->session->userdata['user_id']));
                        if (!empty($is_exists_wishlist))
                        {
                            $is_in_wishlist = TRUE;
                        }
                    }

                    $data["record"] = $record;
                    $data["similar_records"] = $similar_records;
                    $data["is_in_wishlist"] = $is_in_wishlist;

                    $breadcrumbArray = array(
                        $record["gc_name"] => base_url("products/view/" . rawurlencode($record["gc_name"])),
                        $record["pc_name"] => base_url("products/view/" . rawurlencode($record["gc_name"]) . "/" . rawurlencode($record["pc_name"])),
                        $record["cc_name"] => base_url("products/view/" . rawurlencode($record["gc_name"]) . "/" . rawurlencode($record["pc_name"]) . "/" . rawurlencode($record["cc_name"])),
                        $record["product_title"] => getProductUrl($product_id),
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["meta_title"] = stripslashes($record["product_title"]) . " | " . getSellerDisplayName($record['seller_fullname'], $record['seller_company_name']) . " | " . SITE_NAME;
                    $data["meta_keywords"] = stripslashes($record["product_meta_keywords"]);
                    $data["meta_description"] = stripslashes($record["product_meta_description"]);
                    $data["meta_logo_image"] = getImage(@$record['images_arr'][0]['pi_image_path']);

                    if (USER_IP != '127.0.0.1')
                    {
                        $this->addProductVisit($product_id);
                    }

                    $this->template->write_view("content", "pages/products/product-detail", $data);
                    $this->template->render();
                }
            }
        }

        public function addToCart($redirect_url = NULL)
        {
            if ($redirect_url == NULL)
            {
                $redirect_url = base_url();
            }

            if ($this->input->post())
            {
                $model = new Common_model();
                $custom_model = new Custom_model();
                $user_id = $this->session->userdata['user_id'];
                $arr = $this->input->post();

                $product_details = $custom_model->getAllProductsDetails($arr['product_id'], 'product_id', 'pd_id', 'pi_id', array('pd_product_id' => $arr['product_id'], 'pd_color_name' => $arr['product_color'], 'pd_size' => $arr['product_size']));
//                prd($product_details);
                if (!empty($product_details))
                {
                    $pd_id = $product_details['details_arr'][0]['pd_id'];
                    $is_exist = $model->is_exists('cart_id', TABLE_SHOPPING_CART, array('cart_pd_id' => $pd_id, 'cart_quantity' => $arr['product_quantity'], 'cart_user_id' => $user_id));
                    if (empty($is_exist))
                    {
                        $data_array = array(
                            'cart_pd_id' => $pd_id,
                            'cart_quantity' => $arr['product_quantity'],
                            'cart_user_id' => $user_id,
                            'cart_ipaddress' => USER_IP,
                            'cart_useragent' => USER_AGENT
                        );
                        $model->insertData(TABLE_SHOPPING_CART, $data_array);
                        $this->session->set_flashdata("success", "<strong>Success!</strong> Your cart has been updated");
                    }
                    else
                    {
                        $this->session->set_flashdata("warning", "This product is already in your cart");
                    }
                    redirect(getProductUrl($arr["product_id"]));
                }
                else
                {
                    $this->session->set_flashdata("warning", "<strong>Sorry!</strong> Unexpected error occurred");
                }

                redirect(base_url());
            }
            else
            {
                redirect($redirect_url);
            }
        }

        public function addToCompare($product_id)
        {
            $model = new Common_model();
            if ($product_id && isset($this->session->userdata["user_id"]))
            {
                $product_detail = $model->fetchSelectedData("product_status", TABLE_PRODUCTS, array("product_id" => $product_id));
                if ($product_detail[0]["product_status"] == "1")
                {
                    $user_id = $this->session->userdata["user_id"];
                    $is_exists = $model->is_exists("compare_id", TABLE_COMPARE, array("product_id" => $product_id, "user_id" => $user_id));
//                    prd($is_exists);
                    if (empty($is_exists))
                    {
                        $data_array = array(
                            "product_id" => $product_id,
                            "user_id" => $user_id,
                            "user_ipaddress" => USER_IP,
                            "user_agent" => USER_AGENT
                        );
                        $model->insertData(TABLE_COMPARE, $data_array);
                        $this->session->set_flashdata("success", "<strong>Success!</strong> Product added to your compare list");
                    }
                    else
                    {
                        $this->session->set_flashdata("warning", "<strong>Wait!</strong> You already have this product in your compare list");
                    }
                }
            }
            else
            {
                $this->session->set_flashdata("warning", "<strong>Just a sec!</strong> You will need to login to add a product to compare list");
            }
            redirect(getProductUrl($product_id));
        }

        public function search()
        {
            if ($this->input->get("search"))
            {
                $model = new Common_model();
                $query = urldecode($this->input->get("search"));
//                prd($query);
                $this->session->set_userdata("user_search_query", $query);
                $whereCondArr = array(
                    'product_title' => $query,
                    'product_description' => $query,
                );
                $whereString = 'product_title = "' . $query . '" ';
                foreach ($whereCondArr as $wKey => $wValue)
                {
                    $whereString .= ' OR ' . $wKey . ' LIKE "%' . $wValue . '%" ';
                }

                $sql = ' SELECT * FROM ' . TABLE_PRODUCTS . ' as p 
                            INNER JOIN ' . TABLE_CHILD_CATEGORY . ' as cc ON cc.cc_id=p.product_child_category                    
                            INNER JOIN ' . TABLE_PARENT_CATEGORY . ' as pc ON pc.pc_id=p.product_parent_category                   
                            INNER JOIN ' . TABLE_GRAND_CATEGORY . ' as gc ON gc.gc_id=p.product_grand_category        
                            WHERE ' . $whereString . ' ORDER BY rand()
';
                $records = $this->db->query($sql)->result_array();

                $product_size_array = array();
                $product_color_array = array();
                foreach ($records as $key => $value)
                {
                    $product_size_records = $model->fetchSelectedData('DISTINCT(product_size) as product_size', TABLE_PRODUCT_DETAILS, array('product_id' => $value['product_id']));
                    foreach ($product_size_records as $psKey => $psValue)
                    {
                        $product_size_array[] = $psValue['product_size'];
                    }
                    $records[$key]['product_size_array'] = $product_size_array;

                    $product_color_records = $model->fetchSelectedData('DISTINCT(product_color) as product_color', TABLE_PRODUCT_DETAILS, array('product_id' => $value['product_id']));
                    foreach ($product_color_records as $psKey => $psValue)
                    {
                        $product_color_array[] = $psValue['product_color'];
                    }
                    $records[$key]['product_color_array'] = $product_color_array;
                }
//            prd($records);

                $category_name_records = $model->fetchSelectedData("cc_name", TABLE_CHILD_CATEGORY, NULL, "cc_name");

                $pageHeading = 'Search Results';
                $data["records"] = $records;
                $data["category_name_records"] = $category_name_records;
                $data["product_page_heading"] = $pageHeading;
                $breadcrumbArray = array(
                    $pageHeading => base_url("products"),
                );
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = $pageHeading . " | " . SITE_NAME;
                $this->template->write_view("content", "pages/products/products-grid", $data);
                $this->template->render();
            }
            else
            {
                $this->allProductsList();
            }
        }

        public function addProductVisit($product_id, $user_id = NULL)
        {
            // storing the product visit in the table
            if ($user_id == NULL)
            {
                $user_id = 0;
                if (isset($this->session->userdata["user_id"]))
                {
                    $user_id = $this->session->userdata["user_id"];
                }
            }

            $visit_data_array = array(
                "pv_product_id" => $product_id,
                "pv_user_id" => $user_id,
                "pv_ipaddress" => USER_IP,
                "pv_useragent" => USER_AGENT
            );
            $model = new Common_model();
            $model->insertData(TABLE_PRODUCT_VISIT, $visit_data_array);
        }

    }
    