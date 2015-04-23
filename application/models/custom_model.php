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
            {
                $fields = "COUNT(pv.pv_product_id) as count";
            }
            else
            {
                $fields .= ", COUNT(pv.pv_product_id) as count";
            }

            if ($orderByFieldName == NULL)
                $orderByFieldName = "count";

            if ($orderByType == NULL)
                $orderByType = "DESC";

            $result = $this->db->select($fields);
            $result = $result->group_by("product_id");
            $result = $result->join(TABLE_PRODUCTS . " as p", "p.product_id=pv.pv_product_id", "INNER");
            $result = $result->join(TABLE_PRODUCT_IMAGES . " as pi", "pi_product_id=product_id AND pi_primary = 1", "LEFT");
            $result = $result->order_by($orderByFieldName, $orderByType);
            $result = $result->limit($limit);
            $result = $result->get_where(TABLE_PRODUCT_VISIT . " as pv", $whereCondArr);
            $result = $result->result_array();

            return $result;
        }

        public function getFeaturedProducts($fields = null, $whereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            if ($fields == NULL)
            {
                $fields = 'product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title';
            }

            $result = $this->db->select($fields);
            $result = $result->group_by("product_id");
            $result = $result->join(TABLE_PRODUCTS . " as p", "p.product_id=f.feature_product_id", "LEFT");
            $result = $result->join(TABLE_PRODUCT_IMAGES . " as pi", "pi_product_id=product_id AND pi_primary = 1", "LEFT");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            $result = $result->get_where(TABLE_FEATURED . " as f", $whereCondArr);
            $result = $result->result_array();

            return $result;
        }

        public function getAllProductsDetails($product_id, $product_fields, $detail_fields = '*', $images_fields = '*', $whereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            $result = $this->db->select($product_fields);
            $result = $result->join(TABLE_PRODUCT_DETAILS . " as pd", "pd.pd_product_id=p.product_id", "LEFT");
            $result = $result->join(TABLE_PRODUCT_IMAGES . " as pi", "pi.pi_product_id=p.product_id", "LEFT");
            $result = $result->join(TABLE_CHILD_CATEGORY . " as cc", "cc.cc_id=p.product_child_category", "INNER");
            $result = $result->join(TABLE_PARENT_CATEGORY . " as pc", "pc.pc_id=cc.cc_pc_id", "INNER");
            $result = $result->join(TABLE_GRAND_CATEGORY . " as gc", "gc.gc_id=pc.pc_gc_id", "INNER");
            $result = $result->join(TABLE_SELLER . " as s", "s.seller_id=p.product_seller_id", "INNER");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            if ($product_id != NULL || $product_id != 0)
            {
                $whereCondArr['product_id'] = $product_id;
            }
            $result = $result->get_where(TABLE_PRODUCTS . " as p", $whereCondArr);

            $result = $result->result_array();

            // to get product details and images now
            $model = new Common_model();
            $result[0]['details_arr'] = $details_Record = $model->fetchSelectedData($detail_fields, TABLE_PRODUCT_DETAILS, array('pd_product_id' => $product_id));
            $result[0]['images_arr'] = $images_Record = $model->fetchSelectedData($images_fields, TABLE_PRODUCT_IMAGES, array('pi_product_id' => $product_id), 'pi_primary', 'ASC');

            return $result[0];
        }

        public function getAllSearchProductsList($product_fields = NULL, $productWhereCondStr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            if ($product_fields == NULL)
            {
                $product_fields = 'product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title, gc_name, cc_name, pc_name';
            }

            $result = $this->db->select($product_fields);
            $result = $this->db->group_by('product_id');
            $result = $result->join(TABLE_CHILD_CATEGORY . " as cc", "cc.cc_id=p.product_child_category", "INNER");
            $result = $result->join(TABLE_PARENT_CATEGORY . " as pc", "pc.pc_id=cc.cc_pc_id", "INNER");
            $result = $result->join(TABLE_GRAND_CATEGORY . " as gc", "gc.gc_id=pc.pc_gc_id", "INNER");
            $result = $result->join(TABLE_SELLER . " as s", "s.seller_id=p.product_seller_id", "INNER");
            $result = $result->join(TABLE_PRODUCT_IMAGES . " as pi", "product_id = pi_product_id AND pi_primary = 1", "LEFT");
            $result = $result->join(TABLE_PRODUCT_DETAILS . " as pd", "product_id = pd_product_id", "LEFT");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            $result = $result->get_where(TABLE_PRODUCTS . " as p", $productWhereCondStr);
            $result = $result->result_array();

            return $result;
        }

        public function getAllProductsList($product_fields = NULL, $productWhereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            if ($product_fields == NULL)
            {
                $product_fields = 'product_id, product_title, product_code, product_price, product_description, pi_image_path, pi_image_title, gc_name, cc_name, pc_name';
            }

            $result = $this->db->select($product_fields);
            $result = $this->db->group_by('product_id');
            $result = $result->join(TABLE_CHILD_CATEGORY . " as cc", "cc.cc_id=p.product_child_category", "INNER");
            $result = $result->join(TABLE_PARENT_CATEGORY . " as pc", "pc.pc_id=cc.cc_pc_id", "INNER");
            $result = $result->join(TABLE_GRAND_CATEGORY . " as gc", "gc.gc_id=pc.pc_gc_id", "INNER");
            $result = $result->join(TABLE_SELLER . " as s", "s.seller_id=p.product_seller_id", "INNER");
            $result = $result->join(TABLE_PRODUCT_IMAGES . " as pi", "product_id = pi_product_id AND pi_primary = 1", "LEFT");
            $result = $result->join(TABLE_PRODUCT_DETAILS . " as pd", "product_id = pd_product_id", "LEFT");

            if ($orderByFieldName != NULL)
            {
                $result = $result->order_by($orderByFieldName, $orderByType);
            }

            if ($limit != NULL)
            {
                $result = $result->limit($limit);
            }

            $result = $result->get_where(TABLE_PRODUCTS . " as p", $productWhereCondArr);
            $result = $result->result_array();

            return $result;
        }

        public function getAllProductsList_old($fields, $whereCondArr = NULL, $orderByFieldName = NULL, $orderByType = "ASC", $limit = null)
        {
            $result = $this->db->select($fields);
            $result = $result->join(TABLE_CHILD_CATEGORY . " as cc", "cc.cc_id=p.product_child_category", "INNER");
            $result = $result->join(TABLE_PARENT_CATEGORY . " as pc", "pc.pc_id=cc.cc_pc_id", "INNER");
            $result = $result->join(TABLE_GRAND_CATEGORY . " as gc", "gc.gc_id=pc.pc_gc_id", "INNER");

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

        public function getMyOrdersList($user_id, $fields = null, $whereCondArr = null, $orderByField = 'sd_id', $orderByType = "DESC", $limit = NULL)
        {
            if ($fields == NULL)
            {
                $fields = 'sd_quantity, sd_order_id, sd_shipping_fullname, sd_shipping_contact, sd_shipping_email, sd_shipping_address, sd_shipping_location, sd_shipping_postcode, payment_amount, sd_timestamp, sd_status, pd_color_name, pd_size, product_title, pi_image_path, sod_order_id, sod_order_status';
            }

            $whereCondArr['sd_user_id'] = $user_id;
            $whereCondArr['pi_primary'] = '1';
            $records = $this->db->select($fields)
                    ->join(TABLE_SHIPPING_DETAILS . ' as sd', 'sod_order_id = sd_order_id', 'LEFT')
                    ->join(TABLE_PRODUCT_DETAILS . ' as pd', 'pd_id = sd_pd_id', 'INNER')
                    ->join(TABLE_PRODUCTS . ' as p', 'product_id = pd_product_id', 'INNER')
                    ->join(TABLE_PRODUCT_IMAGES . ' as pi', 'product_id = pi_product_id', 'LEFT')
                    ->join(TABLE_PAYMENTS . ' as py', 'payment_sod_id = sod_id', 'LEFT')
                    ->group_by('sd_order_id')
                    ->order_by($orderByField, $orderByType);

            if ($limit != NULL)
            {
                $records = $records->limit($limit);
            }
            $records = $records->get_where(TABLE_SHIPPING_ORDER_DETAILS . ' as sod', $whereCondArr)->result_array();

            return $records;
        }

        public function getMyOrdersList_old($user_id = null, $orderByType = "DESC", $limit = NULL, $package_status = null, $displayAllFields = false, $whereCondArr = null)
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
                    ->group_by('sd_order_id')
                    ->order_by('py.payment_id', 'DESC');

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

        public function getCartDetails($user_id, $fields = NULL, $whereCondArr = null, $orderByField = 'cart_id', $orderByType = "DESC", $limit = NULL)
        {
            if ($fields == NULL)
            {
                $fields = 'product_id, product_title, cart_quantity, pi_image_path, product_price, cart_id, pd_color_name, pd_size, pd_id';
            }

            $whereCondArr['cart_user_id'] = $user_id;
            $whereCondArr['cart_status'] = '1';
            $whereCondArr['pi_primary'] = '1';
            $records = $this->db->select($fields)
                    ->join(TABLE_PRODUCT_DETAILS . ' as pd', 'pd_id = cart_pd_id', 'INNER')
                    ->join(TABLE_PRODUCTS . ' as p', 'product_id = pd_product_id', 'INNER')
                    ->join(TABLE_PRODUCT_IMAGES . ' as pi', 'product_id = pi_product_id', 'LEFT')
                    ->order_by($orderByField, $orderByType);

            if ($limit != NULL)
            {
                $records = $records->limit($limit);
            }
            $records = $records->get_where(TABLE_SHOPPING_CART . ' as sc', $whereCondArr)->result_array();

            return $records;
        }

    }
    