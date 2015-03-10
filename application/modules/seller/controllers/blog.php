<?php

    class Blog extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('admin');
        }

        public function index($type = "all")
        {
            $model = new Common_model();

            if ($type == "all")
            {
                $whereCondArr = NULL;
                $pageTitle = "All Blogs";
            }
            else if ($type == "active")
            {
                $whereCondArr = array("b.blog_status" => "1");
                $pageTitle = "Active Blogs";
            }
            else
            {
                $whereCondArr = array("b.blog_status" => "0");
                $pageTitle = "Deactive Blogs";
            }

            $blog_records = $model->getAllDataFromJoin("b.*,u.first_name,u.last_name", TABLE_BLOGS . " as b", array(TABLE_USERS . " as u" => "u.user_id = b.user_id"), "INNER", $whereCondArr, "blog_id", "DESC");
            $data["alldata"] = $blog_records;
            $data["pageTitle"] = $pageTitle;
//            prd($data);

            $this->template->write_view("content", "blog/blog-list", $data);
            $this->template->render();
        }

        public function detail($blog_id)
        {
            if ($blog_id)
            {
                $model = new Common_model();
                $whereCondArr = array("blog_id" => $blog_id);
                $blog_records = $model->getAllDataFromJoin("b.*,u.first_name,u.last_name", TABLE_BLOGS . " as b", array(TABLE_USERS . " as u" => "u.user_id = b.user_id"), "INNER", $whereCondArr, "blog_id", "DESC");
                $data["record"] = $blog_records[0];
//            prd($data);

                $this->template->write_view("content", "blog/blog-detail", $data);
                $this->template->render();
            }
        }

        public function changeStatus($blog_id, $status_code = 0)
        {
            if ($blog_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_BLOGS, array("blog_status" => $status_code), array("blog_id" => $blog_id));
                $this->session->set_flashdata('success', 'Blog status changed');
            }
            redirect('admin/blog');
        }

        public function deleteBlog($blog_id)
        {
            if ($blog_id)
            {
                $model = new Common_model();
                $model->deleteData(TABLE_BLOGS, "blog_id = $blog_id");
                @unlink(BLOG_IMG_PATH . "/" . getEncryptedString($blog_id) . ".jpg");
                $this->session->set_flashdata('success', 'Blog removed');
            }
            redirect('admin/blog');
        }

    }

    