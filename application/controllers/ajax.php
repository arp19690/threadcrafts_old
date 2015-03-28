<?php

    class Ajax extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function removeProductFromCartAjax($rowid)
        {
            $temp_data_array = array();
            $whereCondArr = array();

            foreach ($this->cart->contents() as $items)
            {
                if ($items["rowid"] == $rowid)
                {
                    $temp_data_array = $items;
                    $items["qty"] = 0;
                    $this->cart->update($items);
                }
            }

            if (isset($this->session->userdata["user_id"]))
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];

                $whereCondArr = array(
                    "user_id" => $user_id,
                    "product_id" => $temp_data_array["id"],
                    "product_quantity" => $temp_data_array["qty"],
                );

                if (isset($temp_data_array["options"]["product_size"]))
                {
                    $whereCondArr["product_size"] = $temp_data_array["options"]["product_size"];
                }

                if (isset($temp_data_array["options"]["product_color"]))
                {
                    $whereCondArr["product_color"] = $temp_data_array["options"]["product_color"];
                }

                $model->deleteData(TABLE_SHOPPING_CART, $whereCondArr);
            }

            $response_array = array(
                "total_items" => $this->cart->total_items(),
                "cart_price" => displayProductPrice($this->cart->total())
            );

            echo json_encode($response_array);
        }

        public function addToWishlist($product_id, $product_quantity)
        {
            if ($product_id && $product_quantity && $this->session->userdata["user_id"])
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];
                $whereCondArr = array("product_id" => $product_id, "user_id" => $user_id);
                $is_exists = $model->is_exists("wishlist_id", TABLE_WISHLIST, $whereCondArr);
                if (empty($is_exists))
                {
                    $data_array = array(
                        "product_id" => $product_id,
                        "product_quantity" => $product_quantity,
                        "user_id" => $user_id,
                        "user_ipaddress" => USER_IP,
                        "user_agent" => USER_AGENT
                    );
                    $model->insertData(TABLE_WISHLIST, $data_array);
                    echo 'added';
                }
                else
                {
                    $model->deleteData(TABLE_WISHLIST, $whereCondArr);
                    echo 'removed';
                }
            }
        }

        public function getProductColorsOnSize($product_id, $product_size)
        {
            if ($product_id)
            {
                $str = '';
                $custom_model = new Custom_model();
                $record = $custom_model->getAllProductsDetails($product_id, 'product_id', 'pd_id, pd_color_name', 'pi_id', array('product_id' => $product_id, 'pd_size' => $product_size));
//                prd($record);
                if (!empty($record))
                {
                    $str .= '&nbsp;';
                    $str .= '<select name="product_color" id="product_color" class="span2 required" required="required">';
                    $str .= '<option value="">Choose Color</option>';
                    foreach ($record['details_arr'] as $key => $value)
                    {
                        $str .= '<option value="' . stripslashes($value['pd_color_name']) . '">' . stripslashes($value['pd_color_name']) . '</option>';
                    }
                    $str .= '</select>';
                }
                echo $str;
            }
        }

    }
    