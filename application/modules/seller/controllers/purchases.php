<?php

    class Purchases extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->template->set_template('seller');
            $this->load->library('form_validation');
            $this->load->model('custom_model');
        }

        public function index()
        {
            $model = new Common_model();
            $records = $model->getAllDataFromJoin('*', TABLE_PURCHASES . " as pu", array(TABLE_CLIENTS . " as cl" => "cl.client_id = pu.client_id"), 'INNER');
//            prd($records);
            $data["alldata"] = $records;
            $data["page_title"] = 'All Purchases';

            $this->template->write_view("content", "purchases/purchase-list", $data);
            $this->template->render();
        }

        public function selectClient()
        {
            $model = new Common_model();
            $records = $model->fetchSelectedData('*', TABLE_CLIENTS);
//            prd($records);
            $data["record"] = $records;
            $data["form_heading"] = 'Select Client';

            $this->template->write_view("content", "purchases/select-client-form", $data);
            $this->template->render();
        }

        public function addPurchase($client_id)
        {
            if ($client_id)
            {
                $model = new Common_model();

                if ($this->input->post())
                {
                    $arr = $this->input->post();

                    $arr['purchase_added_by'] = $this->session->userdata['seller_id'];
                    $arr['purchase_ipaddress'] = USER_IP;
                    $arr['user_agent'] = USER_AGENT;
//                    prd($arr);

                    $purchase_id = $arr['purchase_id'];
                    if (empty($purchase_id))
                    {
                        //insert
                        $model->insertData(TABLE_PURCHASES, $arr);
                        $purchase_id = $this->db->insert_id();
                        $this->session->set_flashdata('success', 'Purchase entry has been added successfully');
                    }
                    else
                    {
                        // update
                        $model->updateData(TABLE_PURCHASES, $arr, array('purchase_id' => $arr['purchase_id']));
                        $this->session->set_flashdata('success', 'Purchase entry has been updated successfully');
                    }

//                    prd($_FILES['purchase_docs']);
                    if (isset($_FILES['purchase_docs']['size']) && !empty($_FILES['purchase_docs']['size']))
                    {
                        $docs_array = array();
                        foreach ($_FILES['purchase_docs']['size'] as $key => $value)
                        {
                            if ($value > 0 && !empty($value) && $_FILES['purchase_docs']['error'][$key] == 0)
                            {
                                $file_ext = getFileExtension($_FILES['purchase_docs']['name'][$key]);
                                $filename = $arr['product_name'] . date('d-m-Y h:i:s') . '.' . $file_ext;
                                $docs_array[] = $filename;

                                $source = $_FILES['purchase_docs']['tmp_name'][$key];
                                $destination = PRODUCT_PURCHASES_DOCS_PATH . '/' . $filename;

                                move_uploaded_file($source, $destination);
                            }
                        }
                        $model->updateData(TABLE_PURCHASES, array('docs_array' => json_encode($docs_array)), array('purchase_id' => $purchase_id));
                    }

                    redirect(base_url('admin/purchases'));
                }
                else
                {
                    $records = $model->getAllDataFromJoin('*', TABLE_PURCHASES . " as pu", array(TABLE_CLIENTS . " as cl" => "cl.client_id = pu.client_id"), 'RIGHT', array('cl.client_id' => $client_id));
//                    prd($records);
                    if (!empty($records))
                    {
                        $data["record"] = $records[0];
                        $data["client_id"] = $records[0]['client_id'];
                        $data["form_heading"] = 'Edit Purchase';

                        $this->template->write_view("content", "purchases/purchase-form", $data);
                        $this->template->render();
                    }
                    else
                    {
                        $this->session->set_flashdata('success', 'Irrelevant data');
                        redirect(base_url('admin/purchases'));
                    }
                }
            }
        }

        public function editPurchase($purchase_id)
        {
            if ($purchase_id)
            {
                $model = new Common_model();

                $records = $model->getAllDataFromJoin('*', TABLE_PURCHASES . " as pu", array(TABLE_CLIENTS . " as cl" => "cl.client_id = pu.client_id"), 'INNER', array('pu.purchase_id' => $purchase_id));

                if (!empty($records))
                {
                    $data["record"] = $records[0];
                    $data["client_id"] = $records[0]['client_id'];
                    $data["form_heading"] = 'Edit Purchase';
                    $data["form_action"] = base_url('admin/purchases/addPurchase/' . $records[0]['client_id']);

                    $this->template->write_view("content", "purchases/purchase-form", $data);
                    $this->template->render();
                }
                else
                {
                    $this->session->set_flashdata('success', 'Irrelevant data');
                    redirect(base_url('admin/purchases'));
                }
            }
        }

        public function deletePurchase($purchase_id)
        {
            if ($purchase_id)
            {
                $model = new Common_model();
                $record = $model->fetchSelectedData('docs_array', TABLE_PURCHASES, array('purchase_id' => $purchase_id));
                $docs_array = json_decode($record[0]['docs_array']);
                $model->deleteData(TABLE_PURCHASES, array('purchase_id' => $purchase_id));
                foreach ($docs_array as $key => $value)
                {
                    $filename = PRODUCT_PURCHASES_DOCS_PATH . '/' . $value;
                    @unlink($filename);
                }
                $this->session->set_flashdata('success', 'Purchase entry has been removed successfully');
                redirect(base_url('admin/purchases'));
            }
        }

        public function clientList()
        {
            $model = new Common_model();
            $records = $model->fetchSelectedData('*', TABLE_CLIENTS);
//            prd($records);
            $data["alldata"] = $records;
            $data["page_title"] = 'All Clients';

            $this->template->write_view("content", "purchases/client-list", $data);
            $this->template->render();
        }

        public function addClient()
        {
            $model = new Common_model();
            if ($this->input->post())
            {
                $arr = $this->input->post();
                $arr['client_added_by'] = $this->session->userdata['seller_id'];
                $arr['client_ipaddress'] = USER_IP;
                $arr['user_agent'] = USER_AGENT;

//                prd($arr);

                if (empty($arr['client_id']) || $arr['client_id'] == '0')
                {
                    //insert
                    $model->insertData(TABLE_CLIENTS, $arr);
                    $this->session->set_flashdata('success', 'Client entry has been added successfully');
                }
                else
                {
                    // update
                    $model->updateData(TABLE_CLIENTS, $arr, array('client_id' => $arr['client_id']));
                    $this->session->set_flashdata('success', 'Client entry has been updated successfully');
                }

                redirect(base_url('admin/purchases/clientList'));
            }
            else
            {
                $data["form_heading"] = 'Add Client';

                $this->template->write_view("content", "purchases/client-form", $data);
                $this->template->render();
            }
        }

        public function editClient($client_id)
        {
            if ($client_id)
            {
                $model = new Common_model();
                $records = $model->fetchSelectedData('*', TABLE_CLIENTS, array('client_id' => $client_id));
                $data["record"] = $records[0];
                $data["form_heading"] = 'Edit Client Details';
                $data["form_action"] = base_url('admin/purchases/addClient/' . $client_id);

                $this->template->write_view("content", "purchases/client-form", $data);
                $this->template->render();
            }
        }

    }

    