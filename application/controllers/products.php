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
            $model = new Common_model();
            $custom_model = new Custom_model();
            $record = $model->fetchSelectedData("gc_id", TABLE_GRAND_CATEGORY, array("gc_name" => $gc_name));
            $gc_id = $record[0]["gc_id"];
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("product_grand_category" => $gc_id, "product_status" => "1"), "product_id", "DESC");
            $category_name_records = $model->fetchSelectedData("cc_name", TABLE_CHILD_CATEGORY, array("cc_gc_id" => $gc_id), "cc_name");
//            prd($records);

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($gc_name);
            $breadcrumbArray = array(
                urldecode($gc_name) => base_url("products/view/" . urlencode($gc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["gc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function childList($pc_name)
        {
            $category_name_records = array();
            $gc_name = "";
            $model = new Common_model();
            $custom_model = new Custom_model();
            $record = $model->fetchSelectedData("pc_id", TABLE_PARENT_CATEGORY, array("pc_name" => $pc_name));
            $pc_id = $record[0]["pc_id"];
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("product_parent_category" => $pc_id, "product_status" => "1"), "product_id", "DESC");
            if (!empty($records))
            {
                $category_name_records = $model->fetchSelectedData("cc_name", TABLE_CHILD_CATEGORY, array("cc_pc_id" => $pc_id), "cc_name");
//            prd($records);

                $gc_name = $records[0]["gc_name"];
            }

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($pc_name);
            $breadcrumbArray = array(
                $gc_name => base_url("products/view/" . urlencode($gc_name)),
                urldecode($pc_name) => base_url("products/view/" . urlencode($gc_name) . "/" . urlencode($pc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["pc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function productsList($cc_name)
        {
            $category_name_records = array();
            $gc_name = "";
            $pc_name = "";

            $model = new Common_model();
            $custom_model = new Custom_model();
            $record = $model->fetchSelectedData("cc_id", TABLE_CHILD_CATEGORY, array("cc_name" => $cc_name));
            $cc_id = $record[0]["cc_id"];
            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, array("product_child_category" => $cc_id, "product_status" => "1"), "product_id", "DESC");
            if (!empty($records))
            {
                $category_name_records = $model->fetchSelectedData("cc_name", TABLE_CHILD_CATEGORY, array("cc_id" => $cc_id), "cc_name");
//            prd($records);

                $gc_name = $records[0]["gc_name"];
                $pc_name = $records[0]["pc_name"];
            }

            $data["records"] = $records;
            $data["category_name_records"] = $category_name_records;
            $data["product_page_heading"] = urldecode($cc_name);
            $breadcrumbArray = array(
                $gc_name => base_url("products/view/" . urlencode($gc_name)),
                urldecode($pc_name) => base_url("products/view/" . urlencode($gc_name) . "/" . urlencode($pc_name)),
                urldecode($cc_name) => base_url("products/view/" . urlencode($gc_name) . "/" . urlencode($pc_name) . "/" . urlencode($cc_name)),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = $records[0]["cc_name"] . " | " . SITE_NAME;
            $this->template->write_view("content", "pages/products/products-grid", $data);
            $this->template->render();
        }

        public function allProductsList($whereCondArr = NULL, $pageHeading = NULL)
        {
            $data = array();
            $model = new Common_model();
            $custom_model = new Custom_model();

            if ($whereCondArr == NULL)
            {
                $whereCondArr = array("product_status" => "1");
                if ($pageHeading == NULL)
                    $pageHeading = "All Products";
            }
            else
            {
                $whereCondArr["product_status"] = "1";
                if ($pageHeading == NULL)
                    $pageHeading = "Search results";
            }

            $fields = "*";
            $records = $custom_model->getAllProductsList($fields, $whereCondArr, "product_id", "DESC");

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
            $data = array();
            $model = new Common_model();
            $custom_model = new Custom_model();
            $fields = "*";
            $record = $custom_model->getAllProductsList($fields, array("url_key" => $url_key));
            if ($record[0]["product_status"] == "0")
            {
                require_once APPPATH . "controllers/index.php";
                $indexController = new Index();
                $indexController->pageNotFound();
            }
            else
            {
                $product_id = $record[0]['product_id'];
                $similar_records = $custom_model->getAllProductsList($fields, array("product_id != " => $product_id, "product_parent_category" => $record[0]["pc_id"]), "rand()", "DESC", "4");
//                prd($similar_records);

                $is_in_wishlist = "no";
                $added_to_cart = "no";
                if (isset($this->session->userdata["user_id"]))
                {
                    $user_id = $this->session->userdata["user_id"];
                    $wishlist_record = $model->is_exists("wishlist_id", TABLE_WISHLIST, array("product_id" => $product_id, "user_id" => $user_id));
                    if (!empty($wishlist_record))
                        $is_in_wishlist = "yes";

                    $cart_record = $model->is_exists("cart_id", TABLE_SHOPPING_CART, array("product_id" => $product_id, "user_id" => $user_id));
                    if (!empty($cart_record))
                        $added_to_cart = "yes";
                }
                $data["is_in_wishlist"] = $is_in_wishlist;
                $data["added_to_cart"] = $added_to_cart;

                $breadcrumbArray = array(
                    $record[0]["gc_name"] => base_url("products/view/" . urlencode($record[0]["gc_name"])),
                    $record[0]["pc_name"] => base_url("products/view/" . urlencode($record[0]["gc_name"]) . "/" . urlencode($record[0]["pc_name"])),
                    $record[0]["cc_name"] => base_url("products/view/" . urlencode($record[0]["gc_name"]) . "/" . urlencode($record[0]["pc_name"]) . "/" . urlencode($record[0]["cc_name"])),
                    $record[0]["product_title"] => getProductUrl($record[0]["product_id"]),
                );
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["record"] = $record[0];
                $data["similar_records"] = $similar_records;

                $data["meta_title"] = $record[0]["product_title"] . " | " . SITE_NAME;
                $data["meta_keywords"] = $record[0]["meta_keywords"];
                $data["meta_description"] = $record[0]["meta_description"];
                $product_image = getProductImages($record[0]['product_image_and_color']);
                $data["meta_logo_image"] = $product_image[0]['url'];

                // storing the product visit in the table
                $user_id = 0;
                if (isset($this->session->userdata["user_id"]))
                    $user_id = $this->session->userdata["user_id"];

                $visit_data_array = array(
                    "product_id" => $product_id,
                    "user_id" => $user_id,
                    "visit_time" => time(),
                    "user_ipaddress" => USER_IP,
                    "user_agent" => USER_AGENT
                );
                $model->insertData(TABLE_PRODUCT_VISIT, $visit_data_array);

                $this->template->write_view("content", "pages/products/product-detail", $data);
                $this->template->render();
            }
        }

        public function addToCartGet($product_id, $redirect_url = NULL)
        {
            if ($redirect_url == NULL)
                $redirect_url = base_url();

            if ($product_id)
            {
                $model = new Common_model();

                $product_detail = $model->fetchSelectedData("product_title,product_cost_price,product_status, profit_percent", TABLE_PRODUCTS, array("product_id" => $product_id));
                if ($product_detail[0]["product_status"] == "1")
                {
                    $product_size_color_record = $model->fetchSelectedData('product_size, product_color, product_stock', TABLE_PRODUCT_DETAILS, array('product_id' => $product_id));

                    if ($product_size_color_record[0]['product_stock'] <= 0)
                    {
                        $this->session->set_flashdata("error", "<strong>Sorry!</strong> We are out of stock, you may try selecting differenct color/size");
                        redirect($redirect_url);
                    }
                    else
                    {
                        $options_array = array();
                        if (!empty($product_size_color_record[0]["product_size"]))
                            $options_array["product_size"] = $product_size_color_record[0]["product_size"];
                        if (!empty($product_size_color_record[0]["product_color"]))
                            $options_array["product_color"] = $product_size_color_record[0]["product_color"];

                        $options_array['profit_percent'] = $product_detail[0]['profit_percent'];

                        $data = array(
                            'id' => $product_id,
                            'qty' => "1",
                            'price' => $product_detail[0]["product_cost_price"],
                            'name' => $product_detail[0]["product_title"],
                            'options' => $options_array
                        );

                        if (count($this->cart->contents() == 0))
                        {
                            $this->cart->insert($data);
                        }
                        else
                        {
                            $this->cart->update($data);
                        }
                        $this->session->set_flashdata("success", "<strong>Success!</strong> Your cart has been updated");
                    }
                }
            }

            redirect($redirect_url);
        }

        public function addToCart($redirect_url = NULL)
        {
            if ($redirect_url == NULL)
                $redirect_url = base_url();

            if ($this->input->post())
            {
                $model = new Common_model();
                $arr = $this->input->post();

                $product_detail = $model->fetchSelectedData("product_title,product_cost_price,product_status, profit_percent", TABLE_PRODUCTS, array("product_id" => $arr["product_id"]));
                if ($product_detail[0]["product_status"] == "1")
                {
                    $options_array = array();
                    if (isset($arr["product_size"]))
                        $options_array["product_size"] = $arr["product_size"];
                    if (isset($arr["product_color"]))
                        $options_array["product_color"] = $arr["product_color"];

                    $options_array["profit_percent"] = $product_detail[0]["profit_percent"];

                    $data = array(
                        'id' => $arr["product_id"],
                        'qty' => $arr["product_quantity"],
                        'price' => $product_detail[0]["product_cost_price"],
                        'name' => $product_detail[0]["product_title"],
                        'options' => $options_array
                    );

                    if (count($this->cart->contents() == 0))
                    {
                        $this->cart->insert($data);
                    }
                    else
                    {
                        $this->cart->update($data);
                    }
                    $this->session->set_flashdata("success", "<strong>Success!</strong> Your cart has been updated");
                    redirect($this->getProductUrl($arr["product_id"]));
                }
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

        public function getProductUrl($product_id)
        {
            if ($product_id)
            {
                $model = new Common_model();
                $custom_model = new Custom_model();
                $fields = "product_id,cc_name,pc_name,gc_name,url_key";
                $whereCondArr = array("product_id" => $product_id);
                $record = $custom_model->getAllProductsList($fields, $whereCondArr);
                $record = $record[0];

                $path = "products/view/" . $record["gc_name"] . "/" . $record["pc_name"] . "/" . $record["cc_name"] . "/" . $record["url_key"];
                $url = base_url($path);
                $url = str_replace(" ", "-", $url);
                return $url;
            }
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

    }