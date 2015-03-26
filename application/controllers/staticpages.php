<?php

    class Staticpages extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index($static_page_key)
        {
            if ($static_page_key)
            {
                $static_page_key = urldecode($static_page_key);
//                prd($static_page_key);
                $data = array();

                $model = new Common_model();
                $record = $model->fetchSelectedData("static_page_content,static_page_title,static_page_key", TABLE_STATIC_PAGES, array("static_page_key" => $static_page_key));
                if (!empty($record))
                {
                    $breadcrumbArray = array(
                        $record[0]["static_page_title"] => base_url("static/" . $record[0]["static_page_key"])
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["static_page_title"] = $record[0]["static_page_title"];
                    $data["content"] = $record[0]["static_page_content"];

                    $this->template->write_view("content", "pages/static/static-content", $data);
                    $this->template->render();
                }
                else
                {
                    require_once APPPATH . "controllers/index.php";
                    $indexController = new Index();
                    $indexController->pageNotFound();
                }
            }
        }

        public function contactUs()
        {
            $data = array();

            $breadcrumbArray = array(
                "Contact Us" => base_url("contact-us")
            );
            $data["breadcrumbArray"] = $breadcrumbArray;

            $this->template->write_view("content", "pages/static/contactus", $data);
            $this->template->render();

            if ($this->input->post())
            {
                $arr = $this->input->post();
                $arr["user_ipaddress"] = $this->session->userdata["ip_address"];
                $arr["user_agent"] = $this->session->userdata["user_agent"];
                $wc_request_id = "#TCC" . substr(generateUniqueKeyEverytime(), 0, 8);
                $arr["wc_request_id"] = $wc_request_id;

                $model = new Common_model();

                $is_exist = $model->is_exists("wc_id", TABLE_WEBSITE_CONTACT, array("wc_request_id" => $wc_request_id));
                if (!empty($is_exist))
                {
                    $wc_request_id = "#" . strtoupper(substr(md5($arr["user_ipaddress"] . USE_SALT . time() . strtotime(time())), 0, 9));
                    $arr["wc_request_id"] = $wc_request_id;
                }

                $model->insertData(TABLE_WEBSITE_CONTACT, $arr);

                if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1')
                {
                    $this->load->model('Email_model');
                    $this->load->library('EmailTemplates');

                    $Email_model = new Email_model();
                    $EmailTemplates = new EmailTemplates();

                    $contactUsMailText = $EmailTemplates->contactUsEmail($arr["full_name"], $wc_request_id);

                    $to_email = trim($arr["user_email"]);
                    $subject = SITE_NAME . " : Request received";
                    $Email_model->sendMail($to_email, $subject, $contactUsMailText);

                    $mySelfText = '
                                <p><strong>Full Name: </strong>' . $arr["full_name"] . '</p><br/>
                                <p><strong>Email: </strong>' . $arr["user_email"] . '</p><br/>
                                <p><strong>Contact Number: </strong>' . $arr["user_contact"] . '</p><br/>
                                <p><strong>Subject: </strong>' . $arr["wc_subject"] . '</p><br/>
                                <p><strong>Message: </strong>' . addslashes($arr["wc_message"]) . '</p><br/>
                        ';
                    $Email_model->sendMail(SITE_EMAIL_GMAIL, "You have received a new message via website", $mySelfText);
                }

                $this->session->set_flashdata("success", "<strong>Thank you!</strong> You request will be processed soon.");
                redirect(base_url('contact-us'));
            }
        }

        public function updateSitemap()
        {
            $this->ci = & get_instance();
            $this->ci->load->database();
            $this->ci->load->model('Common_model');
//            $model = $this->ci->Common_model;
            $model = new Common_model();

            $xml = '<?xml version = "1.0" encoding = "UTF-8"?>' . "\n";
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
            $xml .= '<url><loc>' . base_url() . '</loc><changefreq>weekly</changefreq><priority>1.00</priority></url>' . "\n";

            // all the static links
            $static_links_without_base_url = array(
                'home',
                'blog',
                'products',
                'contact-us',
                'about-us',
                'disclaimer',
                'privacy-policy',
                'return-policy',
                'shipping-details',
                'terms',
                'login',
                'signup',
                'forgot-password',
            );
            foreach ($static_links_without_base_url as $slKey => $slValue)
            {
                $xml .= '<url><loc>' . base_url($slValue) . '</loc><changefreq>weekly</changefreq><priority>0.85</priority></url>' . "\n";
            }

            // all the active grand categories
            $grand_category_records = $model->fetchSelectedData('gc_name', TABLE_GRAND_CATEGORY);
            foreach ($grand_category_records as $gcKey => $gcValue)
            {
                $grand_category_url = base_url('products/view/' . $gcValue['gc_name']);
                $xml .= '<url><loc>' . $grand_category_url . '</loc><changefreq>weekly</changefreq><priority>0.85</priority></url>' . "\n";
            }

            // all the active parent categories
            $parent_category_records = $model->getAllDataFromJoin('gc_name, pc_name', TABLE_PARENT_CATEGORY . ' as pc', array(TABLE_GRAND_CATEGORY . ' as gc' => 'pc_gc_id = gc_id'), 'LEFT');
            foreach ($parent_category_records as $pcKey => $pcValue)
            {
                $parent_category_url = base_url('products/view/' . $pcValue['gc_name'] . '/' . $pcValue['pc_name']);
                $xml .= '<url><loc>' . $parent_category_url . '</loc><changefreq>weekly</changefreq><priority>0.85</priority></url>' . "\n";
            }

            // all the active child categories
            $child_category_records = $model->getAllDataFromJoin('gc_name, pc_name, cc_name', TABLE_CHILD_CATEGORY . ' as cc', array(TABLE_PARENT_CATEGORY . ' as pc' => 'cc_pc_id = pc_id', TABLE_GRAND_CATEGORY . ' as gc' => 'pc_gc_id = gc_id'), 'LEFT');
            foreach ($child_category_records as $pcKey => $pcValue)
            {
                $child_category_url = base_url('products/view/' . $pcValue['gc_name'] . '/' . $pcValue['pc_name'] . '/' . $pcValue['cc_name']);
                $xml .= '<url><loc>' . $child_category_url . '</loc><changefreq>weekly</changefreq><priority>0.85</priority></url>' . "\n";
            }

            // all the active products
            $product_records = $model->fetchSelectedData('product_id', TABLE_PRODUCTS, array('product_status' => '1'));
            foreach ($product_records as $pKey => $pValue)
            {
                $product_url = getProductUrl($pValue['product_id']);
                $xml .= '<url><loc>' . $product_url . '</loc><changefreq>weekly</changefreq><priority>0.85</priority></url>' . "\n";
            }

            $xml .= '</urlset>';
//            prd($xml);

            $file = fopen((APPPATH . '/../sitemap.xml'), 'w');
            fwrite($file, $xml);
            fclose($file);
            die;
        }

    }
    