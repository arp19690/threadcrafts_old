<?php

    class Sellers extends CI_Controller
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
            $data["alldata"] = $model->getAllData("*", TABLE_SELLER);
//            prd($data);

            $this->template->write_view("content", "sellers/seller-list", $data);
            $this->template->render();
        }

        public function addSeller($seller_id = NULL)
        {
            
        }

        public function deactivateSeller($seller_id)
        {
            if ($seller_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_SELLER, array('seller_status' => '0'), array('seller_id' => $seller_id));
                $this->session->set_flashdata("success", "Seller deactivated");
            }
            redirect(base_url_admin("sellers"));
        }

        public function activateSeller($seller_id)
        {
            if ($seller_id)
            {
                $model = new Common_model();
                $model->updateData(TABLE_SELLER, array('seller_status' => '1'), array('seller_id' => $seller_id));
                $this->session->set_flashdata("success", "Seller activated");
            }
            redirect(base_url_admin("sellers"));
        }

        public function checkIfSellerEmailExists($seller_email, $seller_id = NULL)
        {
            $returnValue = FALSE;
            $model = new Common_model();

            $whereCondArr = array("seller_email" => $seller_email);
            if ($seller_id != NULL)
                $whereCondArr = array("seller_email" => $seller_email, "seller_id !=" => $seller_id);

//            prd($whereCondArr);

            $is_exists = $model->is_exists("seller_id", TABLE_SELLER, $whereCondArr);
            if (!empty($is_exists))
                $returnValue = TRUE;

            return $returnValue;
        }

        public function sellerDetail($seller_id)
        {
            if ($seller_id)
            {
                $model = new Common_model();
                $data = array();

                $record = $model->fetchSelectedData("*", TABLE_SELLER, array("seller_id" => $seller_id));
                $record = $record[0];
                unset($record["seller_password"], $record["seller_id"], $record["seller_facebook_array"]);

                $bank_record = $model->fetchSelectedData('*', TABLE_SELLER_BANK, array('sb_seller_id' => $seller_id, 'sb_status' => '1'));

                $data["record"] = $record;
                $data["bank_record"] = @$bank_record[0];
                $data["page_title"] = ucwords($record['seller_fullname']);

                $this->template->write_view("content", "sellers/seller-detail", $data);
                $this->template->render();
            }
        }

        public function sellerLog()
        {
            $model = new Common_model();
            $data = array();

            $record = $model->getAllDataFromJoin("sl.*, seller_fullname, seller_company_name, seller_id", TABLE_SELLER_LOG . " as sl", array(TABLE_SELLER . " as s" => "seller_id = sl_seller_id"), "LEFT");
            $data["alldata"] = $record;

            $this->template->write_view("content", "sellers/seller-log", $data);
            $this->template->render();
        }

    }
    