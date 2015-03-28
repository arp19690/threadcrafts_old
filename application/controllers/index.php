<?php

    class Index extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data = array();

            $model = new Common_model();
            $custom_model = new Custom_model();

            $whereCondArr = array("product_status" => "1");
            $featured_records = $custom_model->getFeaturedProducts('product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title', $whereCondArr);
            $new_products_array = $custom_model->getAllProductsList('product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title', $whereCondArr, 'product_id', 'DESC', 8);
            $popular_products = $custom_model->getPopularProducts('product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title', $whereCondArr);

            $data["featured_array"] = $featured_records;
            $data["new_products_array"] = $new_products_array;
            $data["popular_products"] = $popular_products;

            $this->template->write_view("content", "pages/index/index", $data);
            $this->template->render();
        }

        public function loginsocial($network = "facebook")
        {
            if (!empty($network) && $network != NULL)
            {
                $this->load->library("SocialLib");
                $socialLib = new SocialLib();

                $login_url = base_url();
                if ($network == "facebook")
                {
                    $login_url = $socialLib->getFacebookLoginUrl();
                }

                redirect($login_url);
            }
            else
            {
                redirect(base_url());
            }
        }

        public function loginWithFacebook()
        {
            $this->load->library("SocialLib");
            $socialLib = new SocialLib();
            $socialLib->loginWithFacebook();
        }

        public function signup()
        {
            if (!isset($this->session->userdata["user_id"]))
            {
                if ($this->input->post())
                {
                    $model = new Common_model();
                    $arr = $this->input->post();
                    $user_email = $arr["user_email"];
                    $user_password = $arr["user_password"];
                    $url = $arr["url"];
                    unset($arr["url"]);

                    $is_exists = $model->is_exists("user_id", TABLE_USERS, array("user_email" => $user_email));
                    if (empty($is_exists))
                    {
                        $activationCode = getActivationKey($user_email . USER_IP . time());
                        $arr["activation_code"] = $activationCode;
                        $arr["user_password"] = md5($user_password);
                        $arr["user_ipaddress"] = USER_IP;
                        $arr["user_agent"] = USER_AGENT;
                        $model->insertData(TABLE_USERS, $arr);

                        // to insert into the newsletters db table
                        $newsletter_data_array = array(
                            "user_email" => $arr["user_email"],
                            "user_ipaddress" => $this->session->userdata["ip_address"],
                            "user_agent" => $this->session->userdata["user_agent"],
                        );
                        $model->insertData(TABLE_NEWSLETTER, $newsletter_data_array);

                        if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1')
                        {
                            // send email here
                            $full_name = ucwords($arr["first_name"] . " " . $arr["last_name"]);
                            $confirmation_link = SITE_BASE_URL . "activation/" . $activationCode;
                            $subject = SITE_NAME . " : Confirm email address";
                            $to_email = trim($arr["user_email"]);

                            $this->load->library('EmailTemplates');
                            $this->load->model('Email_model');
                            $EmailTemplate = new EmailTemplates();
                            $Email_model = new Email_model();

                            $registerEmailText = $EmailTemplate->registerEmail($full_name, $confirmation_link);
                            $Email_model->sendMail($to_email, $subject, $registerEmailText);
                        }

                        $this->session->set_flashdata("success", "<strong>Success!</strong> We have sent you a confirmation link on your email. Please check.");
                    }
                    else
                    {
                        $this->session->set_flashdata("error", "<strong>Sorry!</strong> Email already exists.");
                    }
                    redirect($url);
                }
                else
                {
                    $data = array();

                    $breadcrumbArray = array(
                        "Signup" => base_url("signup"),
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["meta_title"] = "Signup | " . SITE_NAME;

                    $this->template->write_view("content", "pages/index/signup", $data);
                    $this->template->render();
                }
            }
            else
            {
                redirect(base_url("my-account"));
            }
        }

        public function login()
        {
            if (!isset($this->session->userdata["user_id"]))
            {
                if ($this->input->post())
                {
                    $arr = $this->input->post();
                    $user_email = $arr["user_email"];
                    $user_password = md5($arr["user_password"]);
                    $url = $arr["url"];
                    $loginAuth = new Login_auth();
                    $loginAuth->login($user_email, $user_password, $url, $url);
                }
                else
                {
                    $data = array();

                    $breadcrumbArray = array(
                        "Login" => base_url("login"),
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["meta_title"] = "Login | " . SITE_NAME;

                    $this->template->write_view("content", "pages/index/login", $data);
                    $this->template->render();
                }
            }
            else
            {
                redirect(base_url("my-account"));
            }
        }

        public function logout()
        {
            $loginAuth = new Login_auth();
            $loginAuth->logout();
        }

        public function pageNotFound()
        {
            $data = array();

            $this->template->write_view("content", "pages/page-not-found", $data);
            $this->template->render();
        }

        public function forgotPassword()
        {
            if ($this->input->post())
            {
                $arr = $this->input->post();
                $model = new Common_model();
                $user_email = trim($arr["user_email"]);
                $url = $arr["url"];
                $is_exists = $model->is_exists("user_id", TABLE_USERS, array("user_email" => $user_email));
                if (!empty($is_exists))
                {
                    $new_password_str = md5($user_email . USE_SALT . time());
                    $new_password = strtoupper(substr($new_password_str, 0, 8));
                    $model->updateData(TABLE_USERS, array("user_password" => md5($new_password)), array("user_id" => $is_exists[0]["user_id"]));

                    if ($_SERVER["REMOTE_ADDR"] != '127.0.0.1')
                    {
                        //send email here
                        $full_name = ucwords($arr["first_name"] . " " . $arr["last_name"]);
                        $subject = SITE_NAME . " : Your new password";
                        $to_email = $user_email;

                        $this->load->library('EmailTemplates');
                        $this->load->model('Email_model');
                        $EmailTemplate = new EmailTemplates();
                        $Email_model = new Email_model();

                        $newPasswordEmailText = $EmailTemplate->forgotPassword($full_name, $new_password);
                        $Email_model->sendMail($to_email, $subject, $newPasswordEmailText);
                    }

                    $this->session->set_flashdata("success", "<strong>Hey there!</strong> We have sent you a new password on your email address.");
                    $url = base_url("login");
                }
                else
                {
                    $this->session->set_flashdata("error", "<strong>Sorry</strong> No such email found");
                    $url = base_url("forgot-password");
                }
                redirect($url);
            }
            else
            {
                $data = array();
                $data["meta_title"] = "Forgot Password | " . SITE_NAME;

                $this->template->write_view("content", "pages/index/forgot-password", $data);
                $this->template->render();
            }
        }

        public function activation($activation_code)
        {
            if ($activation_code)
            {
                $model = new Common_model();
                $is_exists = $model->is_exists("activation_code, user_status, user_id", TABLE_USERS, array("activation_code" => $activation_code));
                if (!empty($is_exists))
                {
                    $user_status = $is_exists[0]["user_status"];
                    if ($user_status == "1")
                    {
                        $this->session->set_flashdata("warning", "<strong>Hey!</strong> Your account is already activated");
                    }
                    else
                    {
                        $user_id = $is_exists[0]["user_id"];
                        $model->updateData(TABLE_USERS, array("user_status" => "1"), array("user_id" => $user_id));
                        $this->session->set_flashdata("success", "<strong>Welcome!</strong> You can now login with your email and password");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error", "<strong>Sorry!</strong> No such record found");
                }
            }
            redirect(base_url('login'));
        }

        public function unsubscribeNewsletter()
        {
            if ($this->input->get('email'))
            {
                $email = $this->input->get('email');
                $model = new Common_model();
                $is_exists = $model->is_exists('newsletter_id', TABLE_NEWSLETTER, array('user_email' => $email, 'newsletter_status' => '1'));
                if (empty($is_exists))
                {
                    //invalid
                    $this->session->set_flashdata('warning', 'No such record found');
                    redirect(base_url());
                }
                else
                {
                    //valid
                    $model->updateData(TABLE_NEWSLETTER, array('newsletter_status' => '0'), array('user_email' => $email));
                    $this->session->set_flashdata('success', 'You successfully unsubscribed from our newsletters');
                    redirect(base_url());
                }
            }
        }

        public function newsletterSignup()
        {
            if ($this->input->post())
            {
                $model = new Common_model();
                $arr = $this->input->post();
                $user_email = trim($arr["user_email"]);
                $url = $arr["url"];
                $is_exists = $model->is_exists("newsletter_id, newsletter_status", TABLE_NEWSLETTER, array("user_email" => $user_email));
                if (empty($is_exists))
                {
                    $model->insertData(TABLE_NEWSLETTER, array("user_email" => $user_email, "user_ipaddress" => USER_IP, "user_agent" => USER_AGENT));
                    $this->session->set_flashdata("success", "<strong>Success!</strong> Your email has been saved for newsletters");
                }
                else
                {
                    if ($is_exists[0]['newsletter_status'] == '0')
                    {
                        $model->updateData(TABLE_NEWSLETTER, array('newsletter_status' => '1', "user_ipaddress" => USER_IP, "user_agent" => USER_AGENT), array('user_email' => $user_email));
                        $this->session->set_flashdata("success", "<strong>Success!</strong> Your email has been saved for newsletters");
                    }
                    else
                    {
                        $this->session->set_flashdata("warning", "<strong>Hey!</strong> We are happy to say that you have already signed up for our newsletters");
                    }
                }
                redirect($url);
            }
            else
            {
                redirect(base_url());
            }
        }

    }
    