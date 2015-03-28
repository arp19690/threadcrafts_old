<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class SocialLib
    {

        public function __construct()
        {
            $this->ci = & get_instance();
            $this->ci->load->database();
            $this->ci->load->model('Common_model');
        }

        public function getFacebookLoginUrl($appId = FACEBOOK_APP_ID, $secretId = FACEBOOK_SECRET_ID, $redirect_uri = FACEBOOK_CALLBACK_URL)
        {
            require_once APPPATH . "../assets/front/social/facebook/facebook.php";

// Create our Application instance (replace this with your appId and secret).
            $facebook = new Facebook(array(
                'appId' => $appId,
                'secret' => $secretId,
            ));

            $loginUrl = $facebook->getLoginUrl(array(
                "redirect_uri" => $redirect_uri,
                "scope" => "email"
            ));

            return $loginUrl;
        }

        public function getFacebookLogoutUrl($appId = FACEBOOK_APP_ID, $secretId = FACEBOOK_SECRET_ID)
        {
            require_once APPPATH . "../assets/front/social/facebook/facebook.php";

// Create our Application instance (replace this with your appId and secret).
            $facebook = new Facebook(array(
                'appId' => $appId,
                'secret' => $secretId,
            ));

            $logoutUrl = $facebook->getLogoutUrl();

            return $logoutUrl;
        }

        public function loginWithFacebook()
        {
            require_once APPPATH . "../assets/front/social/facebook/facebook.php";

            // Create our Application instance (replace this with your appId and secret).
            $facebook = new Facebook(array(
                'appId' => FACEBOOK_APP_ID,
                'secret' => FACEBOOK_SECRET_ID,
            ));

            // Get User ID
            $user = $facebook->getUser();

            // We may or may not have this data based on whether the user is logged in.
            //
            // If we have a $user id here, it means we know the user is logged into
            // Facebook, but we don't know if the access token is valid. An access
            // token is invalid if the user logged out of Facebook.

            if ($user)
            {
                try
                {
                    // Proceed knowing you have a logged in user who's authenticated.
                    $user_profile = $facebook->api('/me');
//                    prd($user_profile);

                    $returnArray = array();
                    $model = new Common_model();

                    $fields = "user_id,first_name,last_name,user_email,user_facebook_id,user_facebook_username";
                    $is_email_exists = $model->is_exists($fields, TABLE_USERS, array("user_email" => $user_profile["email"]));
                    if (empty($is_email_exists))
                    {
                        $is_exists = $model->is_exists($fields, TABLE_USERS, array("user_facebook_id" => $user_profile["id"]));
                        if (!empty($is_exists))
                        {
                            // login here
                            $session_data_array = array(
                                "user_id" => $is_exists[0]["user_id"],
                                "first_name" => $is_exists[0]["first_name"],
                                "last_name" => $is_exists[0]["last_name"],
                                "user_email" => $is_exists[0]["user_email"],
                            );

                            $returnArray["session_array"] = $session_data_array;
                        }
                        else
                        {
                            // register here
                            $insert_data_array = array(
                                "first_name" => $user_profile["first_name"],
                                "last_name" => $user_profile["last_name"],
                                "user_gender" => $user_profile["gender"],
                                "username" => $user_profile["username"],
                                "user_email" => $user_profile["email"],
                                "user_city" => $user_profile["location"]["name"],
                                "user_location" => $user_profile["hometown"]["name"],
                                "user_status" => "1",
                                "user_facebook_id" => $user_profile["id"],
                                "user_facebook_username" => $user_profile["username"],
                                "user_facebook_link" => $user_profile["link"],
                                "user_facebook_array" => json_encode($user_profile),
                                "user_ipaddress" => USER_IP,
                                "user_agent" => USER_AGENT,
                            );
                            $model->insertData(TABLE_USERS, $insert_data_array);
                            $record_array = $model->getMaxId("user_id", TABLE_USERS);

                            // to insert into the newsletters db table
                            $newsletter_data_array = array(
                                "user_email" => $user_profile["email"],
                                "user_ipaddress" => $this->ci->session->userdata["ip_address"],
                                "user_agent" => $this->ci->session->userdata["user_agent"],
                            );
                            $model->insertData(TABLE_NEWSLETTER, $newsletter_data_array);

                            $session_data_array = array(
                                "user_id" => $record_array[0]["maxid"],
                                "first_name" => $user_profile["first_name"],
                                "last_name" => $user_profile["last_name"],
                                "user_email" => $user_profile["email"],
                            );

                            $returnArray["flash_type"] = "success";
                            $returnArray["flash_message"] = "<strong>Welcome!</strong> Please complete all your account details, also choose a password";
                            $returnArray["return_url"] = "my-account";
                            $returnArray["session_array"] = $session_data_array;
                        }
                    }
                    else
                    {
                        // update here    
                        $has_facebook_id = $is_email_exists[0]["user_facebook_id"];

                        $update_data_array = array(
                            "user_city" => $user_profile["location"]["name"],
                            "username" => $user_profile["username"],
                            "user_status" => "1",
                            "user_facebook_id" => $user_profile["id"],
                            "user_facebook_username" => $user_profile["username"],
                            "user_facebook_link" => $user_profile["link"],
                        );
                        $model->updateData(TABLE_USERS, $update_data_array, array("user_email" => $is_email_exists[0]["user_email"]));

                        $session_data_array = array(
                            "user_id" => $is_email_exists[0]["user_id"],
                            "first_name" => $is_email_exists[0]["first_name"],
                            "last_name" => $is_email_exists[0]["last_name"],
                            "user_email" => $is_email_exists[0]["user_email"],
                        );

                        if (empty($has_facebook_id))
                        {
                            $returnArray["flash_type"] = "success";
                            $returnArray["flash_message"] = "<strong>Success!</strong> Facebook account connected with your profile";
                        }

                        $returnArray["session_array"] = $session_data_array;
                    }
                }
                catch (FacebookApiException $e)
                {
                    error_log($e);
                    $user = null;
                }
            }
            else
            {
                $returnArray["flash_type"] = "error";
                $returnArray["flash_message"] = "<strong>Sorry!</strong> An error occured while authenticating. Please try again.";
                $returnArray["session_array"] = array();
            }

            $redirect_url = base_url();
            if (isset($returnArray["flash_type"]) && isset($returnArray["flash_message"]))
            {
                @$this->ci->session->set_flashdata($returnArray["flash_type"], $returnArray["flash_message"]);
            }

            if (isset($returnArray["session_array"]) && !empty($returnArray["session_array"]))
            {
                $returnArray["session_array"]["user_session_expire_time"] = time() + USER_TIMEOUT_TIME;

                // insert and entry into the user_log table
                $data_array = array(
                    "user_id" => $returnArray["session_array"]["user_id"],
                    "login_time" => time(),
                    "user_agent" => $this->ci->session->userdata["user_agent"],
                    "user_ipaddress" => $this->ci->session->userdata["ip_address"],
                    "login_via" => "facebook"
                );
                $model->insertData(TABLE_USER_LOG, $data_array);

                // setting up session here
                foreach ($returnArray["session_array"] as $sKey => $sValue)
                {
                    $this->ci->session->set_userdata($sKey, $sValue);
                }

                $this->ci->load->library('Login_auth');
                $loginAuth = new Login_auth();
                $loginAuth->checkAndAddCartIfAny($returnArray["session_array"]["user_id"]);
//                prd($returnArray["session_array"]["user_id"]);
            }

            if (isset($returnArray["return_url"]) && !empty($returnArray["return_url"]))
            {
                $redirect_url = $returnArray["return_url"];
            }

            redirect($redirect_url);
        }

    }