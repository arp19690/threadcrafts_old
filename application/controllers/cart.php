<?php

    class Cart extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();

            if (!isset($this->session->userdata["user_id"]))
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {
            $this->checkoutStepOne();
        }

        public function checkout()
        {
            $this->checkoutStepOne();
        }

        public function checkoutStepOne()
        {
            $model = new Common_model();
            $custom_model = new Custom_model();
            if ($this->input->get('coupon_code'))
            {
                $coupon_code = $this->input->get('coupon_code');
                $couponWhereCond = array(
                    "dc_code" => $coupon_code,
                    "dc_status" => "1",
                    "dc_count_available >" => "0",
                    "dc_end_time >" => "'" . date('Y-m-d H:m:s') . "'",
                );
                $is_exists = $model->is_exists("dc_percent", TABLE_DISCOUNT_COUPONS, $couponWhereCond);
                if (empty($is_exists))
                {
                    $this->session->set_flashdata("warning", "Invalid coupon code");
                }
                else
                {
                    $dc_percent = $is_exists[0]["dc_percent"];
                    $cart_discount_array = array(
                        "coupon_code" => $coupon_code,
                        "discount_percent" => $dc_percent
                    );

                    $this->session->set_userdata("cart_discount", $cart_discount_array);
                }

                redirect(base_url("checkout"));
            }

            $data = array();
            $user_id = $this->session->userdata["user_id"];

            $data["step1_class"] = "active";
            $data["step2_class"] = "";
            $data["step3_class"] = "";
            $data["step4_class"] = "";

            $cart_records = $custom_model->getCartDetails($user_id);
            $data["cart_records"] = $cart_records;

            $this->load->view("pages/cart/checkout/checkout-step-1", $data);
        }

        public function checkoutStepTwo()
        {
            $model = new Common_model();
            $user_id = $this->session->userdata["user_id"];

            $user_record = $model->fetchSelectedData("user_fullname, user_email, user_contact", TABLE_USERS, array("user_id" => $user_id));
            $data["user_record"] = $user_record[0];

            $address_records = $model->fetchSelectedData('*', TABLE_USER_ADDRESSES, array('ua_user_id' => $user_id, 'ua_status' => '1', 'ua_deleted' => '0'));
            $data["address_records"] = $address_records;

            $data["step1_class"] = "done";
            $data["step2_class"] = "active";
            $data["step3_class"] = "";
            $data["step4_class"] = "";

            $this->load->view("pages/cart/checkout/checkout-step-2", $data);
        }

        public function checkoutStepThree()
        {
            $data = array();
            $custom_model = new Custom_model();
            $model = new Common_model();
            $user_id = $this->session->userdata["user_id"];

            $data["step1_class"] = "done";
            $data["step2_class"] = "done";
            $data["step3_class"] = "active";
            $data["step4_class"] = "";

            $cart_records = $custom_model->getCartDetails($user_id);
            $data["cart_records"] = $cart_records;

            $total_shipping_charge = 0;
            if ($this->input->post() && $this->input->post('bttn_submit_two'))
            {
                $arr = $this->input->post();
//                prd($this->input->post());

                $user_address = $model->fetchSelectedData('ua_line1, ua_line2, ua_location, ua_postcode', TABLE_USER_ADDRESSES, array('ua_user_id' => $user_id, 'ua_status' => '1', 'ua_id' => $arr['shipping_address']));
                $user_address = $user_address[0];

                foreach ($cart_records as $key => $value)
                {
                    $whereCondArr = array(
                        'sd_user_id' => $user_id,
                        'sd_pd_id' => $value['pd_id'],
                        'sd_quantity' => $value['cart_quantity'],
                        'sd_shipping_contact' => $arr['shipping_contact'],
                        'sd_shipping_email' => $arr['billing_email'],
                        'sd_product_price' => $value['product_price'],
                        'sd_shipping_address' => trim($user_address['ua_line1'] . ' ' . $user_address['ua_line2']),
                        'sd_shipping_location' => trim($user_address['ua_location']),
                        'sd_shipping_postcode' => trim($user_address['ua_postcode']),
                    );

                    $model->deleteData(TABLE_SHIPPING_DETAILS, array('sd_user_id' => $user_id, 'sd_status' => '1', 'sd_paid' => '0', 'sd_order_id' => NULL));
                    // to get profit percent on the category to calculate seller earning, and shipping charge
                    $product_detail = $custom_model->getAllProductsDetails(NULL, 'product_shipping_charge, cc_profit_percent', 'pd_id', 'pi_id', array('pd_id' => $value['pd_id']));

                    $discount_percent = 0;
                    if (isset($this->session->userdata["cart_discount"]))
                    {
                        $discount_percent = $this->session->userdata["cart_discount"]["discount_percent"];
                        $whereCondArr['sd_discount_coupon'] = $this->session->userdata["cart_discount"]["coupon_code"];
                        $whereCondArr['sd_discount_percent'] = $discount_percent;
                    }

                    $shipping_charge = $product_detail['product_shipping_charge'];
                    $profit_percent = $product_detail['cc_profit_percent'];
                    $sub_total = ($value['product_price'] * $value['cart_quantity']);
                    $total_shipping_charge = $total_shipping_charge + $shipping_charge;
                    $discount_amount = $sub_total * ($discount_percent / 100);
                    $seller_earning = $sub_total - ($sub_total * ($profit_percent / 100)) + $shipping_charge - $discount_amount;

                    $whereCondArr['sd_ipaddress'] = USER_IP;
                    $whereCondArr['sd_useragent'] = USER_AGENT;
                    $whereCondArr['sd_shipping_fullname'] = ucwords($arr['shipping_fullname']);
                    $whereCondArr['sd_shipping_charge'] = $shipping_charge;
                    $whereCondArr['sd_seller_earning'] = $seller_earning;
                    $whereCondArr['sd_vat_collected'] = ($sub_total + $shipping_charge - $discount_amount) * (VAT_TAX_PERCENT / 100);
                    $whereCondArr['sd_total_price'] = getFinalPriceForCheckout($sub_total, $discount_percent, $shipping_charge, VAT_TAX_PERCENT);
                    $model->insertData(TABLE_SHIPPING_DETAILS, $whereCondArr);
                }
            }
            $data['total_shipping_charge'] = $total_shipping_charge;
            $this->load->view("pages/cart/checkout/checkout-step-3", $data);
        }

        public function paymentMethod()
        {
            $data = array();
            $data["step1_class"] = "done";
            $data["step2_class"] = "done";
            $data["step3_class"] = "done";
            $data["step4_class"] = "active";

            $model = new Common_model();
            $user_id = $this->session->userdata["user_id"];
            $user_record = $model->fetchSelectedData('user_contact', TABLE_USERS, array('user_id' => $user_id));
            $amount_record = $model->fetchSelectedData('SUM(sd_total_price) as subtotal', TABLE_SHIPPING_DETAILS, array('sd_user_id' => $user_id, 'sd_order_id' => NULL, 'sd_paid' => '0', 'sd_status' => '1'), 'sd_id', 'DESC', 1);

            $data['user_contact'] = $user_record[0]['user_contact'];
            $data['final_amount'] = round($amount_record[0]['subtotal'], 2);
            $this->load->view("pages/cart/checkout/payment-method", $data);
        }

        public function removeCouponCode()
        {
            if (isset($this->session->userdata["cart_discount"]))
            {
                $this->session->unset_userdata('cart_discount');
            }
            redirect(base_url("checkout"));
        }

        public function paypalCheckout()
        {
//            prd($this->session->all_userdata());

            if (!isset($this->session->userdata["cart_session"]))
            {
                redirect(base_url('checkout'));
            }
            else
            {
                $model = new Common_model();
                $cart_session_arr = $this->session->userdata["cart_session"];
//                prd($cart_session_arr);

                if (isset($cart_session_arr['sd_id']) && !empty($cart_session_arr['sd_id']))
                {
                    $model->deleteData(TABLE_SHIPPING_DETAILS, array('sd_id' => $cart_session_arr['sd_id']));
                    redirect(base_url('checkout'));
                }

                $shipping_charge_in_inr = $cart_session_arr["shipping_charge_in_inr"];

                $last_sd_id = array();
                foreach ($cart_session_arr["product_id_array"] as $csKey => $csValue)
                {
                    $cart_session_arr["product_id"] = $csValue;
                    $cart_session_arr["product_id_csv"] = implode(", ", $cart_session_arr["product_id_array"]);
                    $cart_session_arr["product_quantity"] = $cart_session_arr["product_quantity_array"][$csKey];
                    $insert_array = $cart_session_arr;

                    unset($insert_array["product_id_array"], $insert_array["product_quantity_array"]);

                    $model->insertData(TABLE_SHIPPING_DETAILS, $insert_array);
                    $last_sd_id[] = $this->db->insert_id();
                }
//                pr($last_sd_id);
                $sd_id = $this->db->insert_id();
                $cart_session_arr["sd_id"] = $sd_id;
                @$this->session->set_userdata("cart_session", $cart_session_arr);

                $record = $this->db->select('*');
                $record = $this->db->where_in("sd.sd_id", $last_sd_id);
                $record = $this->db->join(TABLE_PRODUCTS . " as p", "p.product_id = sd.product_id", "RIGHT");
                $record = $this->db->get(TABLE_SHIPPING_DETAILS . " as sd");
                $record = $record->result_array();
//                prd($record);

                $discount_percent = "";
                if (isset($this->session->userdata["cart_discount"]))
                {
                    $discount_percent = $this->session->userdata["cart_discount"]["discount_percent"];
                }

                $paypal_email = PAYPAL_EMAIL;
                $form_action = PAYPAL_FORM_URL;
                $return_url = base_url("checkout/paypalSuccess");
                $cancel_url = base_url("checkout/paymentCancel");

                echo "<h3 style='font-family:helvetica;'>You are being redirected. Please wait...</h3>";
                echo '<form action="' . $form_action . '" name="payment_frm" id="payment_frm" method="post">';
                echo '<input type="hidden" name="cmd" value="_cart">';
                echo '<input type="hidden" name="upload" value="1">';
                echo '<input type="hidden" name="custom" value="">';
                echo '<input type="hidden" name="business" value="' . $paypal_email . '">';

                $k = 1;
                foreach ($record as $key => $value)
                {
                    $product_name = $value["product_title"];
                    $product_weight = $value["product_weight"];
                    $product_quantity = $value["product_quantity"];
                    $price_with_tax = getProductPrice($value["product_price"], FALSE, FALSE, FALSE);
                    $price = convertCurrency("INR", "USD", $price_with_tax);

                    if ($discount_percent > 0 && !empty($discount_percent))
                    {
                        $price = $price - ($price * ($discount_percent / 100));
                    }

                    echo '<input type="hidden" name="item_name_' . $k . '" value="' . $product_name . '">';
                    echo '<input type="hidden" name="amount_' . $k . '" value="' . round($price, 2) . '">';
                    echo '<input type="hidden" name="quantity_' . $k . '" value="' . $product_quantity . '">';
//                    echo '<input type="hidden" name="shipping_' . $k . '" value="' . $shipping . '">';

                    $k++;
                }

                if ($shipping_charge_in_inr > 0 && !empty($shipping_charge_in_inr))
                {
                    $shipping_charge_in_usd = convertCurrency("INR", "USD", $shipping_charge_in_inr);

                    echo '<input type="hidden" name="item_name_' . $k . '" value="Shipping Charge">';
                    echo '<input type="hidden" name="amount_' . $k . '" value="' . round($shipping_charge_in_usd) . '">';
                    echo '<input type="hidden" name="quantity_' . $k . '" value="1">';
                }

                echo '<input type="hidden" name="currency_code" value="USD">';
                echo '<input type="hidden" name="charset" value="utf-8">';
                echo '<input type="hidden" name="rm" value="2" >';
                echo '<input type="hidden" name="return" id="return" value="' . $return_url . '"/>';
                echo '<input type="hidden" name="cancel_return" value="' . $cancel_url . '">';
                echo '<input type="submit" value="Paypal" name="btn" style="display:none;" />';
                echo '</form>';
//                die;
                echo '<script>window.document.payment_frm.submit();</script>';
            }
        }

        public function paypalSuccess()
        {
            if ($this->input->post())
            {
                $model = new Common_model();
                $arr = $this->input->post();
                $cart_contents = $this->session->userdata("cart_contents");
                $cart_session = $this->session->userdata("cart_session");
                $product_id_array = $cart_session["product_id_array"];
                $product_quantity_array = $cart_session["product_quantity_array"];

//                prd($this->session->userdata("cart_session"));
//                prd($arr);

                $user_id = $this->session->userdata("user_id");
                $data_array = array(
                    "sd_id" => $cart_session["sd_id"],
                    "product_id_csv" => implode(", ", $product_id_array),
                    "user_id" => $user_id,
                    "payment_amount" => $arr["mc_gross"],
                    "payment_currency" => "USD",
                    "payment_method" => "PayPal",
                    "cart_details" => json_encode($cart_contents),
                    "shipping_details" => json_encode($cart_session),
                    "payment_detail_array" => json_encode($arr),
                    "user_ipaddress" => $this->session->userdata("ip_address"),
                    "user_agent" => $this->session->userdata("user_agent"),
                    "transaction_id" => $arr["txn_id"],
                );

                // to insert the payment details into the payment table
                $model->insertData(TABLE_PAYMENT, $data_array);

                // to decrease the stock count by the number of quantities ordered
                foreach ($cart_contents as $cKey => $cValue)
                {
                    $product_size = $cValue['options']['product_size'];
                    $product_color = $cValue['options']['product_color'];
                    $product_quantity = $cValue['qty'];
                    $product_id = $cValue["id"];

                    $this->db->set('product_stock', 'product_stock - ' . $product_quantity, FALSE);
                    $this->db->where('product_id', $product_id);
                    $this->db->where('product_size', $product_size);
                    $this->db->where('product_color', $product_color);
                    $this->db->update(TABLE_PRODUCT_DETAILS);
                }

                // to delete the cart items
                foreach ($product_id_array as $piKey => $piValue)
                {
                    $model->deleteData(TABLE_SHOPPING_CART, array("product_id" => $piValue, "user_id" => $user_id));
                }

                // to unset the cart sessions created during checkout
                $this->session->unset_userdata("cart_contents");
                $this->session->unset_userdata("cart_session");

                // to clear the cart as well
                $this->cart->destroy();

                $this->session->set_flashdata("success", "<strong>Success</strong> Your order has been placed successfully.");
                redirect(base_url('my-account#myOrders'));
            }
            else
            {
                redirect(base_url("checkout"));
            }
        }

        public function paymentCancel()
        {
            // to unset the cart sessions created during checkout
//            prd($this->session->all_userdata());

            $this->session->unset_userdata("cart_session");

            if ($this->session->userdata('cart_discount'))
            {
                $cart_session = $this->session->userdata['cart_discount'];
                $coupon_code = $cart_session["coupon_code"];
                $this->session->unset_userdata('cart_discount');

                $this->db->set('dc_count_available', 'dc_count_available + 1', FALSE);
                $this->db->where('dc_code', $coupon_code);
                $this->db->update(TABLE_DISCOUNT_COUPONS);
            }

            $this->session->set_flashdata("warning", "<strong>Sorry!</strong> Your payment could not be processed. Please try again.");
            redirect(base_url('checkout'));
        }

        public function paymentGateway_ccavenue()
        {
            require_once APPPATH . '/libraries/CCAvenue.php';
            $CCAvenue = new CCAvenue();
            $model = new Common_model();

            if ($this->input->post())
            {
                $post_Array = $this->input->post();
//                prd($post_Array);
                $CCAvenue->requestHandler($post_Array);
            }
            else
            {
                $amount = $this->session->userdata['cart_session']['total_price'];
                $order_id = 'TH-' . time();

                $redirect_url = base_url('cart/paymentGatewaySuccess');
                $cancel_url = base_url('cart/paymentCancel');

                $billing_country_name_records = $model->fetchSelectedData('country_name', TABLE_COUNTRY, array('country_code' => $this->session->userdata['cart_session']['billing_country']));

                $billing_name = ucwords($this->session->userdata['cart_session']['billing_first_name'] . ' ' . $this->session->userdata['cart_session']['billing_last_name']);
                $billing_address = $this->session->userdata['cart_session']['billing_address'];
                $billing_city = $this->session->userdata['cart_session']['billing_city'];
                $billing_state = '';
                $billing_country = $billing_country_name_records[0]['country_name'];
                $billing_zip = $this->session->userdata['cart_session']['billing_postcode'];
                $billing_email = $this->session->userdata['cart_session']['billing_email'];
                $billing_tel = $this->session->userdata['cart_session']['billing_contact'];

                $shipping_name = ucwords($this->session->userdata['cart_session']['shipping_first_name'] . ' ' . $this->session->userdata['cart_session']['shipping_last_name']);
                $shipping_address = $this->session->userdata['cart_session']['shipping_address'];
                $shipping_city = $this->session->userdata['cart_session']['shipping_city'];
                $shipping_state = '';
                $shipping_country = $this->session->userdata['cart_session']['shipping_country'];
                if ($this->session->userdata['cart_session']['billing_country'] == $shipping_country)
                {
                    $shipping_country = $billing_country;
                }
                else
                {
                    $shipping_country_name_records = $model->fetchSelectedData('country_name', TABLE_COUNTRY, array('country_code' => $this->session->userdata['cart_session']['shipping_country']));
                    $shipping_country = $shipping_country_name_records[0]['country_name'];
                }
                $shipping_zip = $this->session->userdata['cart_session']['shipping_postcode'];
                $shipping_email = $this->session->userdata['cart_session']['shipping_email'];
                $shipping_tel = $this->session->userdata['cart_session']['shipping_contact'];

                $str = '
                        <form action="" method="post" name="customerData" id="customerData">
                        <input type="hidden" name="merchant_id" value="' . PAYMENT_GATEWAY_MERCHANT_ID . '" />
                        <input type="hidden" name="order_id" value="' . $order_id . '" />
                        <input type="hidden" name="amount" value="' . str_replace(',', '', $amount) . '" />
                        <input type="hidden" name="currency" value="INR" />
                        <input type="hidden" name="language" value="EN" />
                        <input type="hidden" name="redirect_url" value="' . $redirect_url . '" />
                        <input type="hidden" name="cancel_url" value="' . $cancel_url . '" />
                            
                        <input type="hidden" name="billing_name" value="' . $billing_name . '" />
                        <input type="hidden" name="billing_address" value="' . $billing_address . '" />
                        <input type="hidden" name="billing_city" value="' . $billing_city . '" />
                        <input type="hidden" name="billing_state" value="' . $billing_state . '" />
                        <input type="hidden" name="billing_zip" value="' . $billing_zip . '" />
                        <input type="hidden" name="billing_country" value="' . $billing_country . '" />
                        <input type="hidden" name="billing_tel" value="' . $billing_tel . '" />
                        <input type="hidden" name="billing_email" value="' . $billing_email . '" />
                            
                        <input type="hidden" name="delivery_name" value="' . $shipping_name . '" />
                        <input type="hidden" name="delivery_address" value="' . $shipping_address . '" />
                        <input type="hidden" name="delivery_city" value="' . $shipping_city . '" />
                        <input type="hidden" name="delivery_state" value="' . $shipping_state . '" />
                        <input type="hidden" name="delivery_zip" value="' . $shipping_zip . '" />
                        <input type="hidden" name="delivery_country" value="' . $shipping_country . '" />
                        <input type="hidden" name="delivery_tel" value="' . $shipping_tel . '" />
                        <input type="hidden" name="delivery_email" value="' . $shipping_email . '" />
                            
                        <input type="hidden" name="customer_identifier" value="' . $billing_email . '" />
                        </form>
                        <script>window.document.customerData.submit();</script>
                            ';

                echo $str;
            }
        }

        public function paymentGatewaySuccess_ccavenue()
        {
            require_once APPPATH . '/libraries/CCAvenue.php';
            $CCAvenue = new CCAvenue();

            $post_array = $this->input->post();
            $responseHandler = $CCAvenue->responseHandler($post_array);
        }

    }
    