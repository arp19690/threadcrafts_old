<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Seller extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('admin');
            $this->seller_id = $this->session->userdata("seller_id");
        }

        public function index()
        {
            if (!$this->session->userdata("seller_id"))
            {
                $this->load->view("index/index");

                if ($this->input->post())
                {
                    $arr = $this->input->post();
                    $seller_email = $arr["seller_email"];
                    $seller_password = md5($arr["seller_password"]);
//                prd($arr);
                    $AdminLogin_auth = new AdminLogin_auth();
                    $AdminLogin_auth->login($seller_email, $seller_password, base_url_seller("dashboard"), base_url_seller());
                }
            }
            else
            {
//                redirect(base_url_seller("dashboard"));
                $this->dashboard();
            }
        }

        public function dashboard()
        {
            $model = new Common_model();
            $custom_model = new Custom_model();

            $users_count = $model->getTotalCount("user_id", TABLE_USERS);
            $data["totalusers"] = $users_count[0]["totalcount"];

            $products_count = $model->getTotalCount("product_id", TABLE_PRODUCTS);
            $data["totalproducts"] = $products_count[0]["totalcount"];

            $earnings_inr_sum = $model->getTotalSum("payment_amount", TABLE_PAYMENT, array('payment_currency' => 'INR'));
            $data["totalinrearnings"] = $earnings_inr_sum[0]["totalsum"];
            $earnings_usd_sum = $model->getTotalSum("payment_amount", TABLE_PAYMENT, array('payment_currency' => 'USD'));
            $data["totalusdearnings"] = $earnings_usd_sum[0]["totalsum"];

            $pending_orders_records = $custom_model->getMyOrdersList(NULL, "DESC", NULL, "processing");
            $data["pending_orders_records"] = $pending_orders_records;
            
            $dispatched_orders_records = $custom_model->getMyOrdersList(NULL, "DESC", NULL, "dispatched");
//            prd($dispatched_orders_records);
            $data["dispatched_orders_records"] = $dispatched_orders_records;

            $new_user_records = $model->fetchSelectedData("user_id, first_name, last_name, creation_timestamp, user_status", TABLE_USERS, NULL, "user_id", "DESC", "10");
            $data["new_user_records"] = $new_user_records;

            $this->template->write_view("content", "index/dashboard", $data);
            $this->template->render();
        }

        public function logout()
        {
            $AdminLogin_auth = new AdminLogin_auth();
            $AdminLogin_auth->logout($this->session->userdata("seller_id"));
        }

        public function changepassword()
        {
            $this->template->write_view("content", "index/changepassword");
            $this->template->render();

            if ($this->input->post())
            {
                $model = new Common_model();
                $arr = $this->input->post();
                $old_password = md5($arr["old_password"]);
                $new_password = md5($arr["new_password"]);
                $confirm_password = md5($arr["confirm_password"]);

                $whereCondArr = array(
                    "seller_id" => $this->seller_id,
                    "seller_password" => $old_password
                );

                $is_exists = $model->is_exists("*", TABLE_SELLER, $whereCondArr);
                if (!empty($is_exists))
                {
                    //update
                    if (strcmp($new_password, $confirm_password) == 0)
                    {
                        //update
                        $data_array = array(
                            "seller_password" => $confirm_password
                        );
                        $model->updateData(TABLE_SELLER, $data_array, $whereCondArr);
                        $this->session->set_flashdata('success', "Password changed");
                    }
                    else
                    {
                        //new and confirm not match
                        $this->session->set_flashdata('error', "New password and confirm password does not match");
                    }
                }
                else
                {
                    //wrong old password
                    $this->session->set_flashdata('error', "Old password does not match");
                }
                redirect(base_url_seller("changepassword"));
            }
        }

        public function websiteContact($wc_id = FALSE)
        {
            $model = new Common_model();
            $data = array();

            if (!$wc_id)
            {
                $data["alldata"] = $model->fetchSelectedData("*", TABLE_WEBSITE_CONTACT);

                $this->template->write_view("content", "index/website-contact-list", $data);
                $this->template->render();
            }
            else
            {
                $record = $model->fetchSelectedData("*", TABLE_WEBSITE_CONTACT, array("wc_id" => $wc_id));
                $data["record"] = $record[0];
                $data["form_heading"] = "Reply to <strong>" . $record[0]["full_name"] . "</strong> (" . $record[0]["user_email"] . ")";
                $data["form_action"] = current_url($wc_id);

                $this->template->write_view("content", "index/website-contact-form", $data);
                $this->template->render();

                if ($this->input->post())
                {
                    $arr = $this->input->post();

                    $wc_processed = $arr["wc_processed"];
                    $reply_message = trim($arr["reply_message"]);

                    $reply_data_array = array(
                        "wc_id" => $wc_id,
                        "reply_message" => $reply_message,
                        "wc_processed" => $wc_processed,
                        "seller_id" => $this->session->userdata["seller_id"],
                        "user_ipaddress" => USER_IP,
                        "user_agent" => USER_AGENT,
                    );

                    $model->insertData(TABLE_REPLY_MESSAGES, $reply_data_array);
                    $model->updateData(TABLE_WEBSITE_CONTACT, array("wc_processed" => $wc_processed), array("wc_id" => $wc_id));

                    $flashMessage = "Record updated";

                    if (!empty($reply_message))
                    {
                        if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1')
                        {
                            $fetchData = $model->fetchSelectedData("wc_request_id,user_email", TABLE_WEBSITE_CONTACT, array("wc_id" => $wc_id));
                            $wc_request_id = $fetchData[0]["wc_request_id"];
                            $user_email = $fetchData[0]["user_email"];

                            $this->load->model('Email_model');
                            $Email_model = new Email_model();
                            $to_email = $user_email;
                            $subject = "Response to request " . $wc_request_id;
                            $Email_model->sendMail($to_email, $subject, $reply_message);
                        }

                        $flashMessage = "Reply successfully sent to " . $user_email;
                    }
                    $this->session->set_flashdata("success", $flashMessage);
                    redirect(base_url_seller("websiteContact"));
                }
            }
        }

    }

    