<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class CartHook
    {

        function __construct()
        {
            $this->CI = & get_instance();
            $this->CI->load->library("cart");
            $this->CI->load->database();
        }

        function addProductsFromCartToDB()
        {
            if (isset($this->CI->session->userdata["user_id"]))
            {
                $data_array = array();
                $model = new Common_model();
                $user_id = $this->CI->session->userdata["user_id"];

                if ($this->CI->cart->total_items() > 0)
                {
                    foreach ($this->CI->cart->contents() as $items)
                    {

                        $data_array = array(
                            "user_id" => $user_id,
                            "product_id" => $items["id"],
                            "product_quantity" => $items["qty"],
                            "user_ipaddress" => USER_IP,
                            "user_agent" => USER_AGENT,
                        );

                        $whereCondArr = array(
                            "user_id" => $user_id,
                            "product_id" => $items["id"],
                            "product_quantity" => $items["qty"],
                        );

                        if (isset($items["options"]["product_size"]))
                        {
                            $data_array["product_size"] = $items["options"]["product_size"];
                            $whereCondArr["product_size"] = $items["options"]["product_size"];
                        }

                        if (isset($items["options"]["product_color"]))
                        {
                            $data_array["product_color"] = $items["options"]["product_color"];
                            $whereCondArr["product_color"] = $items["options"]["product_color"];
                        }

                        $is_exists = $model->is_exists("cart_id", TABLE_SHOPPING_CART, $whereCondArr);

                        if (!empty($is_exists))
                        {
                            // update
                            $model->updateData(TABLE_SHOPPING_CART, $data_array, array("cart_id" => $is_exists[0]["cart_id"]));
                        }
                        else
                        {
                            // insert into table
                            $model->insertData(TABLE_SHOPPING_CART, $data_array);
                        }
                    }
                }
                else
                {
//                    $model->deleteData(TABLE_SHOPPING_CART, array("user_id" => $user_id));
                }
            }
        }

    }

    