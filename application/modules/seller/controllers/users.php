<?php

    class Users extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('admin');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $model = new Common_model();
            $data["alldata"] = $model->getAllData("*", TABLE_USERS);
//            prd($data);

            $this->template->write_view("content", "users/user-list", $data);
            $this->template->render();
        }

        public function addUser()
        {
            $data["form_heading"] = "Add User";
            $data["form_action"] = base_url("admin/users/addUser");

            $this->template->write_view("content", "users/user-form", $data);
            $this->template->render();

            if ($this->input->post())
            {
                $model = new Common_model();
                $arr = $this->input->post();

                if (!empty($arr["user_password"]))
                    $arr["user_password"] = md5($arr["user_password"]);
                else
                    unset($arr["user_password"]);

                $arr["user_ipaddress"] = $this->session->userdata["ip_address"];
                $arr["user_agent"] = $this->session->userdata["user_agent"];
                $arr["user_added_by"] = "admin";
//                prd($arr);
                $user_id = $arr["user_id"];
                if (empty($user_id))
                {
                    $is_email_exist = $this->checkIfUserEmailExists($arr["user_email"]);
                }
                else
                {
                    $is_email_exist = $this->checkIfUserEmailExists($arr["user_email"], $user_id);
                }

                if (empty($is_email_exist))
                {
                    if (empty($user_id))
                    {
                        $model->insertData(TABLE_USERS, $arr);
                        $this->session->set_flashdata("success", "User added");
                    }
                    else
                    {
                        $model->updateData(TABLE_USERS, $arr, array("user_id" => $user_id));
                        $this->session->set_flashdata("success", "User edited");
                    }
                    redirect("admin/users");
                }
                else
                {
                    $this->session->set_flashdata("error", "Email already exists");
                    if (empty($user_id))
                        redirect(base_url("admin/users/addUser"));
                    else
                        redirect(base_url("admin/users/editUser/" . $user_id));
                }
            }
        }

        public function editUser($user_id)
        {
            if ($user_id)
            {
                $model = new Common_model();
                $record = $model->fetchSelectedData("*", TABLE_USERS, array("user_id" => $user_id));
                $data["record"] = $record[0];
                $data["form_heading"] = "Edit User";
                $data["form_action"] = base_url("admin/users/addUser");

                $config = array(
                    array(
                        'field' => 'first_name',
                        'label' => 'Please input first_name',
                        'rules' => 'required'
                    ),
                );

                $this->form_validation->set_rules($config);

                $this->template->write_view("content", "users/user-form", $data);
                $this->template->render();
            }
        }

        public function deactivateUser($user_id)
        {
            if ($user_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_USERS, array('user_status' => '0'), array('user_id' => $user_id));
                $this->session->set_flashdata("success", "User deactivated");
            }
            redirect(base_url("admin/users"));
        }

//        public function deleteUser($user_id)
//        {
//            if ($user_id)
//            {
//                $model = new Common_model();
//                $model->deleteData(TABLE_USERS, array("user_id" => $user_id));
//                $this->session->set_flashdata("success", "User removed");
//            }
//            redirect(base_url("admin/users"));
//        }

        public function checkIfUserEmailExists($user_email, $user_id = NULL)
        {
            $returnValue = FALSE;
            $model = new Common_model();

            $whereCondArr = array("user_email" => $user_email);
            if ($user_id != NULL)
                $whereCondArr = array("user_email" => $user_email, "user_id !=" => $user_id);

//            prd($whereCondArr);

            $is_exists = $model->is_exists("user_id", TABLE_USERS, $whereCondArr);
            if (!empty($is_exists))
                $returnValue = TRUE;

            return $returnValue;
        }

        public function userDetail($user_id)
        {
            if ($user_id)
            {
                $model = new Common_model();
                $data = array();

                $record = $model->fetchSelectedData("*", TABLE_USERS, array("user_id" => $user_id));
                $record = $record[0];
                unset($record["user_password"], $record["user_id"], $record["user_facebook_array"]);
                $data["record"] = $record;

                $this->template->write_view("content", "users/user-detail", $data);
                $this->template->render();
            }
        }

        public function userLog()
        {
            $model = new Common_model();
            $data = array();

            $record = $model->getAllDataFromJoin("ul.*, u.first_name, u.last_name", TABLE_USER_LOG . " as ul", array(TABLE_USERS . " as u" => "u.user_id = ul.user_id"), "LEFT");
            $data["alldata"] = $record;

            $this->template->write_view("content", "users/user-log", $data);
            $this->template->render();
        }

        public function adminLog()
        {
            $model = new Common_model();
            $data = array();

            $record = $model->getAllDataFromJoin("*", TABLE_ADMIN_LOG . " as al", array(TABLE_ADMIN . " as a" => "a.admin_id = al.admin_id"), "LEFT");
            $data["alldata"] = $record;

            $this->template->write_view("content", "users/admin-log", $data);
            $this->template->render();
        }

    }
    