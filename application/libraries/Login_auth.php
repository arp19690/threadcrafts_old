<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Login_auth
    {

        public function __construct()
        {
            $this->ci = & get_instance();
            $this->ci->load->database();
            $this->ci->load->model('Common_model');
            $this->checkIfLoggedIn();
        }

        public function login($user_email, $user_password, $success_redirect_to = NULL, $error_redirect_to = NULL)
        {
            $model = $this->ci->Common_model;
            $whereCondArr = array("user_email" => $user_email, "user_password" => $user_password);
            $record = $model->fetchSelectedData("*", TABLE_USERS, $whereCondArr, NULL, NULL, "1");
            if (!empty($record))
            {
                $record = $record[0];
                $user_status = $record["user_status"];
                if ($user_status == "1")
                {
                    //login successful

                    $data_array = array(
                        "ul_user_id" => $record["user_id"],
                        "ul_login_time" => time(),
                        "ul_useragent" => $this->ci->session->userdata["user_agent"],
                        "ul_ipaddress" => $this->ci->session->userdata["ip_address"]);
                    $model->insertData(TABLE_USER_LOG, $data_array);

                    $user_array = array(
                        "user_id" => $record["user_id"],
                        "user_email" => $record["user_email"],
                        "user_fullname" => stripslashes($record["user_fullname"]),
                        "user_session_expire_time" => time() + USER_TIMEOUT_TIME,
                    );

                    foreach ($user_array as $key => $value)
                    {
                        $this->ci->session->set_userdata($key, $value);
                    }

                    $this->checkAndAddCartIfAny($record["user_id"]);

                    if ($success_redirect_to == NULL)
                        $success_redirect_to = base_url();

                    redirect($success_redirect_to);
                }
                else
                {
                    $this->ci->session->set_flashdata("warning", "Your account is not active yet");
                    redirect(base_url());
                }
            }
            else
            {
                if ($error_redirect_to == NULL)
                    $error_redirect_to = base_url();

                $this->ci->session->set_flashdata('error', "<strong>Error!</strong> Invalid Email or Password.");
                redirect($error_redirect_to);
            }
        }

        public function checkIfLoggedIn($user_id = NULL)
        {
            if (isset($this->ci->session->userdata["user_id"]))
            {
                //logged in
                if ($user_id == NULL)
                    $user_id = $this->ci->session->userdata["user_id"];

                $user_session_expire_time = $this->ci->session->userdata["user_session_expire_time"];

                if ($user_session_expire_time >= time())
                {
                    //Update User session time
                    $newTime = (time() + ADMIN_TIMEOUT_TIME);
                    @$this->ci->session->set_userdata("user_session_expire_time", $newTime);
                }
                else
                {
                    //Session expired, logout
                    $this->logout($user_id, base_url(), "<strong>Sorry!</strong> Your session expired.");
                }
            }
        }

        public function logout($user_id = NULL, $redirect_to = NULL, $logout_message = NULL)
        {
            if ($user_id == NULL)
            {
                if (isset($this->ci->session->userdata["user_id"]))
                {
                    $user_id = $this->ci->session->userdata ["user_id"];
                }
            }

            if ($redirect_to == NULL)
                $redirect_to = base_url();

            if ($user_id != NULL || !empty($user_id))
            {
                $model = $this->ci->Common_model;

                $record = $model->fetchSelectedData("user_log_id", TABLE_USER_LOG, array("user_id" => $user_id, "logout_time" => ""), "user_log_id", "DESC", "1");
                $user_log_id = $record[0]["user_log_id"];

                $update_data_array = array();
                $update_data_array["logout_time"] = time();

                $whereCondArr = array();
                $whereCondArr["user_log_id"] = $user_log_id;
                $whereCondArr["user_id"] = $user_id;

                $model->updateData(TABLE_USER_LOG, $update_data_array, $whereCondArr);
            }


            $this->ci->session->unset_userdata();
            $this->ci->session->sess_destroy();
            if ($logout_message != NULL)
                $this->ci->session->set_flashdata('error', $logout_message);

            redirect($redirect_to);
        }

        public function checkAndAddCartIfAny($user_id)
        {
            $model = new Common_model();
            $whereCondArr = array("user_id" => $user_id);
            $tableArrayWithJoinCondition = array(
                TABLE_PRODUCTS . " as p" => "p.product_id = sc.product_id"
            );
            $fields = "p.product_id, product_title, product_cost_price, product_quantity,sc.product_size,sc.product_color,product_status";
            $cart_records = $model->getAllDataFromJoin($fields, TABLE_SHOPPING_CART . " as sc", $tableArrayWithJoinCondition, "INNER", $whereCondArr);
            if (!empty($cart_records))
            {
                foreach ($cart_records as $key => $value)
                {
                    if ($value["product_status"] == "1")
                    {
                        $options_array = array();
                        if (!empty($value["product_size"]))
                            $options_array["product_size"] = $value["product_size"];

                        if (!empty($value["product_color"]))
                            $options_array["product_color"] = $value["product_color"];

                        $data = array(
                            'id' => $value["product_id"],
                            'qty' => $value["product_quantity"],
                            'price' => $value["product_cost_price"],
                            'name' => $value["product_title"],
                            'options' => $options_array
                        );

                        $this->ci->cart->insert($data);
                    }
                }
            }
        }

    }