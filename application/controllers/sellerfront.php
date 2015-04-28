<?php

    class Sellerfront extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function viewStore($seller_url_key)
        {
            $model = new Common_model();
            $fields = 'seller_id, seller_fullname, seller_company_name, seller_location, seller_logo_image, seller_cover_image';
            $record = $model->fetchSelectedData($fields, TABLE_SELLER, array('seller_url_key' => urldecode($seller_url_key), 'seller_status' => '1'));
            if (empty($record))
            {
                require_once APPPATH . '/controllers/index.php';
                $indexController = new Index();
                $indexController->pageNotFound();
            }
            else
            {
                $custom_model = new Custom_model();
                $product_fields = 'product_id, product_title, product_price, gc_name, pc_name, cc_name, pi_image_path, seller_fullname, seller_company_name';
                $product_records = $custom_model->getAllProductsList($product_fields, array('product_seller_id' => $record[0]['seller_id'], 'product_status' => '1'), 'rand()');
                $category_name_records = array();
                foreach ($product_records as $key => $value)
                {
                    $category_name_records[] = $value['cc_name'];
                }

                $price_range_sql = 'SELECT MAX(product_price) as max_price FROM ' . TABLE_PRODUCTS . ' WHERE product_status = "1" AND product_seller_id = ' . $record[0]['seller_id'];
                $price_range_record = $this->db->query($price_range_sql)->result_array();

                $seller_display_name = getSellerDisplayName($record[0]['seller_fullname'], $record[0]['seller_company_name']);
                $breadcrumbArray = array(
                    $seller_display_name => base_url('seller/' . urlencode($seller_url_key)),
                );

                $data['records'] = $product_records;
                $data['seller_record'] = $record[0];
                $data['price_range_array'] = array('max_price' => $price_range_record[0]['max_price'], 'min_price' => 0);
                $data['seller_display_name'] = $seller_display_name;
                $data['category_name_records'] = $category_name_records;
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = $seller_display_name . " | " . SITE_NAME;
                $this->template->write_view("content", "pages/seller/view-store", $data);
                $this->template->render();
            }
        }

    }
    