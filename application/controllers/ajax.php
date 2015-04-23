<?php

    class Ajax extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function removeProductFromCartAjax($cart_id)
        {
            $model = new Common_model();
            $custom_model = new Custom_model();
            if (isset($this->session->userdata["user_id"]))
            {
                $user_id = $this->session->userdata["user_id"];
                $model->deleteData(TABLE_SHOPPING_CART, array('cart_id' => $cart_id, 'cart_user_id' => $user_id));
            }

            $response_array = $custom_model->getCartDetails($user_id);
            echo json_encode($response_array);
        }

        public function addToWishlist()
        {
            if ($this->session->userdata["user_id"])
            {
                $model = new Common_model();
                $user_id = $this->session->userdata["user_id"];
                $product_id = getEncryptedString($this->input->get('id'), 'decode');
                $whereCondArr = array("wishlist_product_id" => $product_id, "wishlist_user_id" => $user_id);
                $is_exists = $model->is_exists("wishlist_id", TABLE_WISHLIST, $whereCondArr);
                if (empty($is_exists))
                {
                    $data_array = array(
                        "wishlist_product_id" => $product_id,
                        "wishlist_user_id" => $user_id,
                        "wishlist_ipaddress" => USER_IP,
                        "wishlist_useragent" => USER_AGENT
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
    