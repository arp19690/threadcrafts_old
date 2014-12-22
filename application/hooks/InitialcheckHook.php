<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class InitialcheckHook
    {

        public function __construct()
        {
            $this->CI = & get_instance();
            $this->setTimezone();
            $this->checkLoggedIn();
            $this->CI->load->database();
        }

        public function checkLoggedIn()
        {
            if ($this->CI->router->fetch_module() == "admin")
            {
                $this->CI->template->set_template('admin');

                $loginAuth = new AdminLogin_auth();
                $loginAuth->checkIfLoggedIn();
            }
            else
            {
                $loginAuth = new Login_auth();
                $loginAuth->checkIfLoggedIn();
            }
        }

        public function setTimezone()
        {
            $this->CI->load->database();
            $this->CI->db->cache_on();
            $this->CI->db->query("SET SESSION time_zone = '+5:30'");
            date_default_timezone_set("Asia/Kolkata");
        }

        public function checkIfProductMetaNotEmpty()
        {
//            $this->checkProductMetaKeywordsNotEmpty();
//            $this->checkProductMetaDescriptionNotEmpty();
        }

        public function checkProductMetaKeywordsNotEmpty()
        {
            $model = new Common_model();
            $custom_record = new Custom_model();
            $whereCondArr = array(
                "meta_keywords" => ""
            );
            $records = $custom_record->getAllProductsList("p.product_id,product_title,product_code,gc_name,pc_name,cc_name", $whereCondArr);

            if (!empty($records))
            {
                foreach ($records as $key => $value)
                {
                    $str = $records[$key]["product_title"] . " " . $records[$key]["product_code"] . " " . $records[$key]["gc_name"] . " " . $records[$key]["pc_name"] . " " . $records[$key]["cc_name"] . " " . SITE_NAME;
                    $str = str_replace(" ", ", ", $str);
                    $model->updateData(TABLE_PRODUCTS, array("meta_keywords" => $str), array("product_id" => $records[$key]["product_id"]));
                }
            }
        }

        public function checkProductMetaDescriptionNotEmpty()
        {
            $model = new Common_model();
            $whereCondArr = array(
                "meta_description" => ""
            );
            $records = $model->fetchSelectedData("product_id, product_description", TABLE_PRODUCTS, $whereCondArr);

            if (!empty($records))
            {
                foreach ($records as $key => $value)
                {
                    $desc = substr($value["product_description"], 0, 200);
                    $model->updateData(TABLE_PRODUCTS, array("meta_description" => $desc), array("product_id" => $value["product_id"]));
                }
            }
        }

    }