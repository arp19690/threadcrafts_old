<?php

    class Custom_model extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
            // Load DB here
            $this->load->database();
        }

        public function getPopularProducts($fields, $whereCondArr = NULL, $orderByFieldName = null, $orderByType = null, $limit = "4")
        {
            if (empty($fields))
                $fields = "COUNT(pv.product_id) as count";
            else
                $fields .= ",COUNT(pv.product_id) as count";

            if ($orderByFieldName == NULL)
                $orderByFieldName = "count";

            if ($orderByType == NULL)
                $orderByType = "DESC";

            $result = $this->db->select($fields);
            $result = $result->join(TABLE_PRODUCTS . " as p", "p.product_id=pv.product_id", "INNER");
            $result = $result->order_by($orderByFieldName, $orderByType);
            $result = $result->group_by("pv.product_id");
            $result = $result->limit($limit);

            $tableName = TABLE_PRODUCT_VISIT . " as pv";
            if ($whereCondArr == NULL)
            {
                $whereCondArr = array();
            }
            $whereCondArr["p.product_id !="] = "";

            $result = $result->get_where($tableName, $whereCondArr);

            $result = $result->result_array();

            return $result;
        }

        public function getFeaturedProducts($fields, $whereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            $result = $this->db->select($fields);
            $result = $result->join(TABLE_PRODUCTS . " as p", "p.product_id=f.product_id", "LEFT");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            $tableName = TABLE_FEATURED . " as f";
            if ($whereCondArr != NULL)
                $result = $result->get_where($tableName, $whereCondArr);
            else
                $result = $result->get($tableName);

            $result = $result->result_array();

            return $result;
        }

        public function getAllProductsList($fields, $whereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            $result = $this->db->select($fields);
            $result = $result->join(TABLE_CHILD_CATEGORY . " as cc", "cc.cc_id=p.product_child_category", "INNER");
            $result = $result->join(TABLE_PARENT_CATEGORY . " as pc", "pc.pc_id=p.product_parent_category", "INNER");
            $result = $result->join(TABLE_GRAND_CATEGORY . " as gc", "gc.gc_id=p.product_grand_category", "INNER");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            $tableName = TABLE_PRODUCTS . " as p";
            if ($whereCondArr != NULL)
                $result = $result->get_where($tableName, $whereCondArr);
            else
                $result = $result->get($tableName);

            $result = $result->result_array();

            return $result;
        }

        public function getNestedGrandAndParentCategory()
        {
            $data = array();
            $output = array();
            $grand_result = $this->db->select("*")->order_by("gc_name", "ASC")->limit("8")->get(TABLE_GRAND_CATEGORY)->result_array();
//            prd($grand_result);

            foreach ($grand_result as $gKey => $gValue)
            {
                $parent_result = $this->db->select("pc_id,pc_name")->order_by("pc_name", "ASC")->get_where(TABLE_PARENT_CATEGORY, array("pc_gc_id" => $gValue["gc_id"]))->result_array();
                if (!empty($parent_result))
                {
                    $output["grand_cat"] = $gValue;
                    $output["grand_cat"]["parent_cat"] = $parent_result;
                    $data[] = $output;
                }
            }
            return $data;
        }

        public function getMyOrdersList($user_id = null, $orderByType = "DESC", $limit = NULL, $package_status = null, $displayAllFields = false, $whereCondArr = null)
        {
            $fields = "payment_id, sd.product_id, sd.product_quantity,package_status, py.payment_timestamp as payment_time, p.product_title, p.product_code, p.product_cost_price, product_image_and_color";
            if ($displayAllFields)
            {
                $fields = "*";
            }

            $shipping_records = $this->db->select($fields)
                    ->join(TABLE_PAYMENT . ' as py', 'py.sd_id = sd.sd_id', 'LEFT')
                    ->join(TABLE_PRODUCTS . ' as p', 'p.product_id= sd.product_id', 'LEFT')
                    ->where('payment_id !=', '')
                    ->order_by('py.payment_id', 'DESC')
            ;

            if ($whereCondArr != NULL)
            {
                $shipping_records = $this->db->where($whereCondArr);
            }

            if ($package_status != NULL)
            {
                $shipping_records = $this->db->where(array("py.package_status" => $package_status));
            }

            if ($limit != NULL)
            {
                $shipping_records = $this->db->limit($limit);
            }

            if ($user_id != NULL)
            {
                $shipping_records = $this->db->get_where(TABLE_SHIPPING_DETAILS . ' as sd', array("sd.user_id" => $user_id))
                        ->result_array();
            }
            else
            {
                $shipping_records = $this->db->get(TABLE_SHIPPING_DETAILS . ' as sd')
                        ->result_array();
            }

//            prd($shipping_records);
            return $shipping_records;
        }

        public function getSellerEarnings($seller_id, $fields = '*', $whereCondArr = NULL, $orderByName = 'payment_id', $orderType = 'DESC', $limit = NULL)
        {

        }

    }
    