<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Seller extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('seller');
            if (isset($this->session->userdata["seller_id"]))
            {
                $this->seller_id = $this->session->userdata["seller_id"];
            }
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

                    require_once APPPATH . '/libraries/SellerLogin_auth.php';
                    $SellerLogin_auth = new SellerLogin_auth();
                    $SellerLogin_auth->login($seller_email, $seller_password, base_url_seller("dashboard"), base_url_seller());
                }
            }
            else
            {
//                redirect(base_url_seller("dashboard"));
                $this->dashboard();
            }
        }

        public function forgotPassword()
        {
            if (!$this->session->userdata("seller_id"))
            {
                if ($this->input->post())
                {
                    $arr = $this->input->post();
                    $seller_email = $arr["seller_email"];

                    $model = new Common_model();
                    $is_exists = $model->fetchSelectedData('seller_email, seller_status', TABLE_SELLER, array('seller_email' => $seller_email));
                    if (!empty($is_exists))
                    {
                        // valid
                        if ($is_exists[0]['seller_status'] == 1)
                        {
                            // active, send new password here
                            $newpassword = getRandomNumberLength($seller_email . time());
                            $model->updateData(TABLE_SELLER, array('seller_password' => md5($newpassword)), array('seller_email' => $seller_email));

                            $message = '<p>New password for your seller panel is <strong>' . $newpassword . '</strong></p><p>You can login to seller panel by clicking on ' . base_url_seller() . '</p>';
                            sendMail($seller_email, 'Forgot password | Seller Panel | ' . SITE_NAME, $message);

                            $this->session->set_flashdata('success', "New password sent to your email ID");
                            redirect(base_url_seller());
                        }
                        else
                        {
                            // not active
                            $this->session->set_flashdata('error', "Your account is not active");
                            redirect(base_url_seller("forgotPassword"));
                        }
                    }
                    else
                    {
                        // not valid
                        $this->session->set_flashdata('error', "No such email found");
                        redirect(base_url_seller("forgotPassword"));
                    }
                }
                else
                {
                    $this->load->view("index/forgot-password");
                }
            }
            else
            {
                redirect(base_url_seller("dashboard"));
            }
        }

        public function dashboard()
        {
            $model = new Common_model();
            $seller_id = $this->seller_id;

            $total_products_whereCondArr = array('product_seller_id' => $seller_id, 'product_status' => '1');
            $total_products = $model->getTotalCount('product_id', TABLE_PRODUCTS, $total_products_whereCondArr);

            $data = array(
                'total_earnings' => 0,
                'total_products' => $total_products[0]['totalcount'],
            );

            $this->template->write_view("content", "index/dashboard", $data);
            $this->template->render();
        }

        public function logout()
        {
            require_once APPPATH . '/libraries/SellerLogin_auth.php';
            $SellerLogin_auth = new SellerLogin_auth();
            $SellerLogin_auth->logout($this->session->userdata("seller_id"));
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

    }
    