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

        public function getProductColorsOnSize($product_id)
        {
            if ($product_id)
            {
                $str = '';
                $model = new Common_model();
                $custom_model = new Custom_model();
                $record = $custom_model->getAllProductsList('product_detail_array', array('product_id' => $product_id));
//                prd($record);
                if (!empty($record))
                {
                    $product_detail_array = json_decode($record[0]['product_detail_array']);
                    if (!empty($product_detail_array))
                    {
                        $str .= '&nbsp;';
                        $str .= '<select name="product_color" id="product_color" class="span2 required" required="required">';
                        $str .= '<option value="">Choose Color</option>';
                        foreach ($product_detail_array as $key => $value)
                        {
                            if (!empty($value->color))
                            {
                                foreach ($value->color as $cKey => $cValue)
                                {
                                    if (!empty($cValue))
                                        $str .= '<option value="' . trim($cValue) . '" data-stock="' . $value->stock[$cKey] . '">' . ucwords(trim($cValue)) . '</option>';
                                }
                            }
                        }
                        $str .= '</select>';
                    }
                }
                echo $str;
            }
        }

    }