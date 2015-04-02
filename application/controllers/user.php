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

                $wishlist_records = $model->getAllDataFromJoin("p.product_id,product_title,product_price,wishlist_product_quantity,wishlist_comments", TABLE_WISHLIST . " as w", $tableArrayWithJoinCondition, "LEFT", $whereCondArr, "wishlist_id", "DESC");
                $data["wishlist_records"] = $wishlist_records;

                $user_records = $model->fetchSelectedData("user_fullname, user_gender,user_contact,", TABLE_USERS, array("user_id" => $user_id));
//                prd($user_records);
                $data["user_record"] = $user_records[0];

                $user_address_records = $model->fetchSelectedData('ua_line1, ua_line2, ua_location, ua_postcode', TABLE_USER_ADDRESSES, array('ua_user_id' => $user_id, 'ua_status' => '1'));
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

        public function removeFromWishlist($product_id)
        {
            if ($product_id && isset($this->session->userdata["user_id"]))
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];

                $whereCondArr = array("product_id" => $product_id, "wishlist_user_id" => $user_id);

                $model->deleteData(TABLE_WISHLIST, $whereCondArr);

                $wishlist_count_record = $model->fetchSelectedData("COUNT(wishlist_id) as total", TABLE_WISHLIST, array("wishlist_user_id" => $user_id));
                echo $wishlist_count_record[0]["total"];
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
                    "first_name" => trim($arr["first_name"]),
                    "last_name" => trim($arr["last_name"]),
                    "user_gender" => trim($arr["user_gender"]),
                    "user_contact" => trim($arr["user_contact"]),
                    "user_address" => trim($arr["user_address"]),
                    "user_location" => trim($arr["user_location"]),
                    "user_postcode" => trim($arr["user_postcode"]),
                );

                $user_location = trim($arr["user_location"]);
                if (!empty($user_location))
                {
                    $getLocationCityState = parse_address_google($user_location);

                    $data_array["user_country"] = $getLocationCityState['country'];
                    $data_array["user_state"] = $getLocationCityState['state'];
                    $data_array["user_city"] = $getLocationCityState['city'];
                }

                $model->updateData(TABLE_USERS, $data_array, array("user_id" => $user_id));

                $this->session->set_userdata("first_name", trim($arr["first_name"]));
                $this->session->set_userdata("last_name", trim($arr["last_name"]));
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

        public function saveWishlist()
        {
            if ($this->input->post() && isset($this->session->userdata["user_id"]))
            {
                $model = new Common_model();
                $arr = $this->input->post();
                $user_id = $this->session->userdata["user_id"];
                $product_quantity = $arr["product_quantity"];
                $wishlist_comments = $arr["wishlist_comments"];
                $product_id = $arr["product_id"];

                $data_array = array(
                    "product_id" => $product_id,
                    "user_id" => $user_id,
                    "product_quantity" => $product_quantity,
                    "wishlist_comments" => $wishlist_comments,
                    "user_ipaddress" => $this->session->userdata["ip_address"],
                    "user_agent" => $this->session->userdata["user_agent"],
                );

                $model->updateData(TABLE_WISHLIST, $data_array, array("user_id" => $user_id, "product_id" => $product_id));
                $this->session->set_flashdata('success', 'Your wishlist has been updated successfully');
                redirect(base_url('my-account#wishlist'));
            }
        }

    }
    