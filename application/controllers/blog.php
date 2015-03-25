<?php

    class Blog extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $feed = array();
            $model = new Common_model();
            $blog_records = $model->getAllDataFromJoin("b.*,u.first_name,u.last_name", TABLE_BLOGS . " as b", array(TABLE_USERS . " as u" => "u.user_id = b.user_id"), "INNER", array("b.blog_status" => "1", "u.user_status" => "1"), "blog_id", "DESC");
//            prd($blog_records);
            $output = array();
            foreach ($blog_records as $bKey => $bValue)
            {
                $item = array(
                    "blog_id" => $bValue["blog_id"],
                    "title" => $bValue["blog_title"],
                    "desc" => strip_tags($bValue["blog_content"]),
                    "link" => base_url('blog/read/' . $bValue["url_key"]),
                    "date" => $bValue["creation_timestamp"],
                    "author" => ucwords($bValue["first_name"] . " " . $bValue["last_name"])
                );
                $output[] = $item;
            }

            $data = array();
            $data["record"] = $output;

            $breadcrumbArray = array(
                "Blog" => base_url("blog"),
            );
            $data["breadcrumbArray"] = $breadcrumbArray;
            $data["meta_title"] = "Blogs | " . SITE_NAME;

            $this->template->write_view("content", "pages/blog/index", $data);
            $this->template->render();
        }

        public function read($url_key)
        {
            if ($url_key)
            {
                $model = new Common_model();
                $record = $model->fetchSelectedData("*", TABLE_BLOGS, array("url_key" => $url_key, "blog_status" => "1"));
                $record = $model->getAllDataFromJoin("b.*,u.first_name,u.last_name", TABLE_BLOGS . " as b", array(TABLE_USERS . " as u" => "u.user_id = b.user_id"), "INNER", array("b.url_key" => $url_key, "b.blog_status" => "1", "u.user_status" => "1"));
                if (!empty($record))
                {
                    $data["record"] = $record[0];

                    $recent_blogs = $model->fetchSelectedData("blog_id, blog_title", TABLE_BLOGS, array("blog_status" => "1", "url_key != " => $url_key), "blog_id", "rand()");
                    $data["recent_blogs"] = $recent_blogs;

                    $breadcrumbArray = array(
                        "Blogs" => base_url("blog"),
                        ucwords($record[0]["blog_title"]) => base_url("blog/read/" . $record[0]["url_key"]),
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["meta_title"] = ucwords($record[0]["blog_title"]) . " | " . SITE_NAME;
                    $data["meta_keywords"] = $record[0]["meta_keywords"];
                    $data["meta_description"] = strip_tags($record[0]["meta_description"]);

                    $this->template->write_view("content", "pages/blog/read", $data);
                    $this->template->render();
                }
                else
                {
                    redirect("blog");
                }
            }
            else
            {
                redirect("blog");
            }
        }

        public function edit($url_key)
        {
            $model = new Common_model();
            $record = $model->fetchSelectedData('*', TABLE_BLOGS, array('url_key' => $url_key));
            $data = array();
            if (isset($this->session->userdata["user_id"]))
            {
                $breadcrumbArray = array(
                    "Blogs" => base_url("blog"),
                    $record[0]['blog_title'] => base_url("blog/read/" . $url_key),
                );
                $data["breadcrumbArray"] = $breadcrumbArray;
                $data["meta_title"] = "Edit Blog | " . SITE_NAME;
                $data["record"] = $record[0];
                $data["form_action"] = base_url('blog/write/' . $url_key);

                $this->template->write_view("content", "pages/blog/write", $data);
                $this->template->render();
            }
        }

        public function write()
        {
            $data = array();
            if (isset($this->session->userdata["user_id"]))
            {
                if ($this->input->post())
                {
                    $arr = $this->input->post();

                    $blog_id = $arr["blog_id"];
                    $blog_title = $arr["blog_title"];
                    $blog_content = $arr["blog_content"];
                    $url_key = getUniqueBlogUrlKey(str_replace(' ', '-', $blog_title));

                    $model = new Common_model();

                    if (empty($blog_id))
                    {
                        // insert case
                            $meta_keywords = str_replace(" ", ",", $blog_title);
                            $meta_keywords = str_replace(",,", ",", $meta_keywords);

                            $data_array = array(
                                "blog_title" => $blog_title,
                                "blog_content" => addslashes($blog_content),
                                "url_key" => $url_key,
                                "meta_keywords" => $meta_keywords,
                                "meta_description" => strip_tags(substr($blog_content, 0, 220)),
                                "user_id" => $this->session->userdata["user_id"],
                                "user_ipaddress" => $this->session->userdata["ip_address"],
                                "user_agent" => $this->session->userdata["user_agent"],
                            );
                            $model->insertData(TABLE_BLOGS, $data_array);
                            $blog_id = $this->db->insert_id();

                            if (isset($_FILES["blog_img"]) && $_FILES["blog_img"]["size"] > 0 && !empty($_FILES["blog_img"]))
                            {
                                $source = $_FILES["blog_img"]["tmp_name"];
                                $destination = BLOG_IMG_PATH . "/" . getEncryptedString($blog_id) . ".jpg";
                                $width = BLOG_IMG_WIDTH;
                                $height = BLOG_IMG_HEIGHT;

                                $this->load->library("SimpleImage");
                                $img = new SimpleImage();
                                $img->load($source);

                                if ($height == NULL || empty($height))
                                {
                                    $img->resizeToWidth($width);
                                }
                                else
                                {
                                    $img->resize($width, $height);
                                }

                                //save image
                                $img->save($destination);
                            }

                            $this->session->set_flashdata('success', 'Your blog has been sent for review and will be published soon');
                            redirect(base_url('blog'));
                    }
                    else
                    {
                        // update case 
                            $meta_keywords = str_replace(" ", ",", $blog_title);
                            $meta_keywords = str_replace(",,", ",", $meta_keywords);

                            $data_array = array(
                                "blog_title" => $blog_title,
                                "blog_content" => addslashes($blog_content),
                                "url_key" => $url_key,
                                "meta_keywords" => $meta_keywords,
                                "meta_description" => strip_tags(substr($blog_content, 0, 220)),
                                "user_id" => $this->session->userdata["user_id"],
                                "user_ipaddress" => $this->session->userdata["ip_address"],
                                "user_agent" => $this->session->userdata["user_agent"],
                            );
                            $model->updateData(TABLE_BLOGS, $data_array, array('blog_id' => $blog_id));

                            if (isset($_FILES["blog_img"]) && $_FILES["blog_img"]["size"] > 0 && !empty($_FILES["blog_img"]))
                            {
                                $source = $_FILES["blog_img"]["tmp_name"];
                                $destination = BLOG_IMG_PATH . "/" . getEncryptedString($blog_id) . ".jpg";
                                $width = BLOG_IMG_WIDTH;
                                $height = BLOG_IMG_HEIGHT;

                                $this->load->library("SimpleImage");
                                $img = new SimpleImage();
                                $img->load($source);

                                if ($height == NULL || empty($height))
                                {
                                    $img->resizeToWidth($width);
                                }
                                else
                                {
                                    $img->resize($width, $height);
                                }

                                //save image
                                $img->save($destination);
                            }

                            $this->session->set_flashdata('success', 'Your blog has been published now');
                            redirect(base_url('blog'));
                    }
                }
                else
                {
                    $breadcrumbArray = array(
                        "Blogs" => base_url("blog"),
                        "Write a Blog" => base_url("blog/write"),
                    );
                    $data["breadcrumbArray"] = $breadcrumbArray;
                    $data["meta_title"] = "Write a Blog | " . SITE_NAME;
                    $data["form_action"] = '';

                    $this->template->write_view("content", "pages/blog/write", $data);
                    $this->template->render();
                }
            }
            else
            {
                $this->session->set_flashdata('warning', 'Please login in order to write a Blog');
                redirect('login?next=' . base_url('blog/write'));
            }
        }

        public function delete($url_key)
        {
            if (isset($this->session->userdata["user_id"]) && $url_key)
            {
                $user_id = $this->session->userdata["user_id"];
                $model = new Common_model();
                $model->deleteData(TABLE_BLOGS, array("user_id" => $user_id, "url_key" => $url_key));
                $this->session->set_flashdata('success', 'Your blog has been deleted permanently');
                redirect(base_url('myAccount'));
            }
            else
            {
                redirect("blog");
            }
        }

    }
    