<?php

    class User extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            if (isset($this->session->userdata["user_id"]))
            {
                $this->user_id = $this->session->userdata["user_id"];
            }
            else
            {
                $this->user_id = "0";
            }
        }

        public function index()
        {
            $this->myAccount();
        }

        public function myAccount()
        {
            if (isset($this->session->userdata["user_id"]))
            {
                $model = new Common_model();
                $custom_model = new Custom_model();
                $user_id = $this->session->userdata["user_id"];
                $user_full_name = $this->session->userdata["user_fullname"];

                $whereCondArr = array("wishlist_user_id" => $user_id, "product_status" => "1");
                $tableArrayWithJoinCondition = array(
                    TABLE_PRODUCTS . " as p" => "p.product_id = wishlist_product_id"
                );

                $user_records = $model->fetchSelectedData("user_fullname, user_gender,user_contact,", TABLE_USERS, array("user_id" => $user_id));
                $data["user_record"] = $user_records[0];

                $user_address_records = $model->fetchSelectedData('ua_id, ua_line1, ua_line2, ua_location, ua_postcode', TABLE_USER_ADDRESSES, array('ua_user_id' => $user_id, 'ua_status' => '1', 'ua_deleted' => '0'));
                $data["user_address_records"] = $user_address_records;

                $breadcrumbArray = array(
                    "My Account" => base_url("my-account"),
                );
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = ucwords($user_full_name) . " | " . SITE_NAME;
                $this->template->write_view("content", "pages/user/my-account", $data);
                $this->template->render();
            }
            else
            {
                redirect(base_url());
            }
        }

        public function removeFromCompare($compare_id)
        {
            if ($compare_id && isset($this->session->userdata["user_id"]))
            {
                $whereCondArr = array();
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];

                if (is_numeric($compare_id))
                {
                    $whereCondArr = array("compare_id" => $compare_id, "user_id" => $user_id);
                }
                else if ($compare_id == "all")
                {
                    $whereCondArr = array("user_id" => $user_id);
                }

                $model->deleteData(TABLE_COMPARE, $whereCondArr);
                $compare_count_record = $model->getTotalCount("compare_id", TABLE_COMPARE, array("user_id" => $user_id));
                echo $compare_count_record[0]["totalcount"];
            }
        }

        public function updateAccountInfo()
        {
            if ($this->input->post() && $this->session->userdata["user_id"])
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];
                $arr = $this->input->post();

                $data_array = array(
                    "user_fullname" => trim($arr["user_fullname"]),
                    "user_gender" => trim($arr["user_gender"]),
                    "user_contact" => trim($arr["user_contact"]),
                );

                $model->updateData(TABLE_USERS, $data_array, array("user_id" => $user_id));

                $this->session->set_userdata("user_fullname", trim($arr["user_fullname"]));
                $this->session->set_flashdata("success", "<strong>Success!</strong> Account details updated");
            }
            redirect(base_url("my-account"));
        }

        public function updatePassword()
        {
            if ($this->input->post() && $this->session->userdata["user_id"])
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];
                $arr = $this->input->post();
                $new_password = trim($arr["new_password"]);
                $confirm_password = trim($arr["confirm_password"]);

                if (!empty($new_password) && !empty($confirm_password))
                {
                    if (strcmp($new_password, $confirm_password) == 0)
                    {
                        $data_array = array(
                            "user_password" => md5($confirm_password),
                        );
                        $model->updateData(TABLE_USERS, $data_array, array("user_id" => $user_id));
                        $this->session->set_flashdata("success", "<strong>Success!</strong> Password changed");
                    }
                    else
                    {
                        $this->session->set_flashdata("warning", "<strong>Warning!</strong> Passwords you enter did not match.");
                    }
                }
                else
                {
                    $this->session->set_flashdata("warning", "<strong>Warning!</strong> Password fields cannot be left blank.");
                }
            }
            redirect(base_url("my-account"));
        }

        public function myWishlist()
        {
            if (isset($this->session->userdata["user_id"]))
            {
                $user_id = $this->session->userdata["user_id"];
                $custom_model = new Custom_model();
                $model = new Common_model();

                $whereCondArr = array('wishlist_user_id' => $user_id);
                $records = $custom_model->getMyWishlistRecords(NULL, $whereCondArr);
                $data["records"] = $records;

                $breadcrumbArray = array(
                    "My Wishlist" => base_url("my-wishlist"),
                );
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = "My Wishlist | " . SITE_NAME;
                $this->template->write_view("content", "pages/user/my-wishlist", $data);
                $this->template->render();
            }
        }

        public function removeFromWishlist()
        {
            if ($this->input->get('id') && isset($this->session->userdata["user_id"]))
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];
                $wishlist_id = getEncryptedString($this->input->get('id'), 'decode');

                $whereCondArr = array("wishlist_id" => $wishlist_id, "wishlist_user_id" => $user_id);
                $model->deleteData(TABLE_WISHLIST, $whereCondArr);

                $this->session->set_flashdata('success', 'Product removed from your wishlist');
                redirect(base_url('my-wishlist'));
            }
        }

        public function removeAddress()
        {
            if (isset($this->session->userdata["user_id"]) && $this->input->get('id'))
            {
                $enc_ua_id = $this->input->get('id');
                $user_id = $this->session->userdata["user_id"];
                $ua_id = getEncryptedString($enc_ua_id, 'decode');
                $model = new Common_model();
                $is_valid = $model->is_exists('ua_id', TABLE_USER_ADDRESSES, array('ua_user_id' => $user_id, 'ua_id' => $ua_id, 'ua_deleted' => '0'));
                if (!empty($is_valid))
                {
                    $model->updateData(TABLE_USER_ADDRESSES, array('ua_deleted' => '1'), array('ua_user_id' => $user_id, 'ua_id' => $ua_id, 'ua_deleted' => '0'));
                    $this->session->set_flashdata('success', 'Address successfully removed');
                }
            }
            redirect(base_url('my-account#address'));
        }

        public function myOrders()
        {
            if (isset($this->session->userdata["user_id"]))
            {
                $custom_model = new Custom_model();
                $user_id = $this->session->userdata["user_id"];

                $records = $custom_model->getMyOrdersList($user_id);
//                prd($records);
                $breadcrumbArray = array(
                    "My Orders" => base_url("my-orders"),
                );

                $data["records"] = $records;
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = "My orders | " . SITE_NAME;
                $this->template->write_view("content", "pages/user/my-orders", $data);
                $this->template->render();
            }
        }

    }
    