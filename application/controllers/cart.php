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
                    "dc_end_time >" => "'" . time() . "'",
                );
                $is_exists = $model->is_exists("dc_id, dc_percent", TABLE_DISCOUNT_COUPONS, $couponWhereCond);
                if (empty($is_exists))
                {
                    $this->session->set_flashdata("warning", "<strong>Oops!</strong> Invalid coupon code");
                }
                else
                {
                    $dc_id = $is_exists[0]["dc_id"];
                    $dc_percent = $is_exists[0]["dc_percent"];
                    $cart_discount_array = array(
                        "coupon_code" => $coupon_code,
                        "discount_percent" => $dc_percent
                    );

                    $this->db->set('dc_count_available', 'dc_count_available-1', FALSE);
                    $this->db->where('dc_id', $dc_id);
                    $this->db->update(TABLE_DISCOUNT_COUPONS);

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
            $total_vat = 0;
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

                    $model->deleteData(TABLE_SHIPPING_DETAILS, array('sd_user_id' => $user_id, 'sd_status' => '1', 'sd_paid' => '0', 'sd_order_id' => ''));
                    // to get profit percent on the category to calculate seller earning, and shipping charge
                    $product_detail = $custom_model->getAllProductsDetails(NULL, 'product_shipping_charge, cc_profit_percent', 'pd_id', 'pi_id', array('pd_id' => $value['pd_id']));

                    $shipping_charge = $product_detail['product_shipping_charge'];
                    $profit_percent = $product_detail['cc_profit_percent'];
                    $total_price = ($value['product_price'] * $value['cart_quantity']) + $shipping_charge;
                    $seller_earning = $value['product_price'] - ($value['product_price'] * ($profit_percent / 100)) + $shipping_charge;
                    $total_shipping_charge = $total_shipping_charge + $shipping_charge;
                    $vat_collected = $total_price * (VAT_TAX_PERCENT / 100);
                    $total_vat = $total_vat + $vat_collected;

                    $whereCondArr['sd_ipaddress'] = USER_IP;
                    $whereCondArr['sd_useragent'] = USER_AGENT;
                    $whereCondArr['sd_shipping_fullname'] = ucwords($arr['shipping_fullname']);
                    $whereCondArr['sd_shipping_charge'] = $shipping_charge;
                    $whereCondArr['sd_seller_earning'] = $seller_earning;
                    $whereCondArr['sd_total_price'] = $total_price + $total_vat;
                    $whereCondArr['sd_vat_collected'] = $vat_collected;
                    $model->insertData(TABLE_SHIPPING_DETAILS, $whereCondArr);
                }
            }
            $data['total_vat'] = $total_vat;
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
            $amount_record = $model->fetchSelectedData('sd_total_price', TABLE_SHIPPING_DETAILS, array('sd_user_id' => $user_id, 'sd_order_id' => '', 'sd_paid' => '0'), 'sd_id', 'DESC', 1);

            $data['user_contact'] = $user_record[0]['user_contact'];
            $data['total_amount'] = $amount_record[0]['sd_total_price'];
            $this->load->view("pages/cart/checkout/payment-method", $data);
        }

        public function removeCouponCode($coupon_code)
        {
            if ($coupon_code && isset($this->session->userdata["cart_discount"]))
            {
                $this->session->unset_userdata('cart_discount');

                $this->db->set('dc_count_available', 'dc_count_available + 1', FALSE);
                $this->db->where('dc_code', $coupon_code);
                $this->db->update(TABLE_DISCOUNT_COUPONS);
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

        public function checkoutPayU()
        {
//            prd($this->session->userdata['cart_session']['total_price']);
            // Merchant key here as provided by Payu
            $MERCHANT_KEY = "JBZaLc";

// Merchant Salt as provided by Payu
            $SALT = "GQs7yium";

// End point - change to https://secure.payu.in for LIVE mode
            $PAYU_BASE_URL = PAYU_BASE_URL;

            $action = '';

            $posted = array();
            if (!empty($_POST))
            {
                //print_r($_POST);
                if (!empty($_POST['hash']))
                {
                    $this->savePayuDetails($_POST);
                    die;
                }
                else
                {
                    foreach ($_POST as $key => $value)
                    {
                        $posted[$key] = $value;
                    }
                }
            }

            $formError = 0;

            if (empty($posted['txnid']))
            {
                // Generate random transaction id
                $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            }
            else
            {
                $txnid = $posted['txnid'];
            }
            $hash = '';
// Hash Sequence
            $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
            if (empty($posted['hash']) && sizeof($posted) > 0)
            {
                if (
                        empty($posted['key']) || empty($posted['txnid']) || empty($posted['amount']) || empty($posted['firstname']) || empty($posted['email']) || empty($posted['phone']) || empty($posted['productinfo']) || empty($posted['surl']) || empty($posted['furl']) || empty($posted['service_provider'])
                )
                {
                    $formError = 1;
                }
                else
                {
                    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
                    $hashVarsSeq = explode('|', $hashSequence);
                    $hash_string = '';
                    foreach ($hashVarsSeq as $hash_var)
                    {
                        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                        $hash_string .= '|';
                    }

                    $hash_string .= $SALT;


                    $hash = strtolower(hash('sha512', $hash_string));
                    $action = $PAYU_BASE_URL . '/_payment';
                }
            }
            elseif (!empty($posted['hash']))
            {
                $hash = $posted['hash'];
                $action = $PAYU_BASE_URL . '/_payment';
            }

            $firstname = $this->session->userdata['cart_session']['billing_first_name'];
            $lastname = $this->session->userdata['cart_session']['billing_last_name'];
            $amount = $this->session->userdata['cart_session']['total_price'];
            $email = $this->session->userdata['cart_session']['shipping_email'];
            $phone = $this->session->userdata['cart_session']['shipping_contact'];
            $address1 = $this->session->userdata['cart_session']['billing_address'];
            $address2 = '';
            $city = $this->session->userdata['cart_session']['billing_city'];
            $state = '';
            $country = $this->session->userdata['cart_session']['billing_country'];
            $zipcode = $this->session->userdata['cart_session']['billing_postcode'];
            $productinfo = 'To ' . SITE_NAME;
            $success_url = current_url();
            $cancel_url = base_url('cart/paymentCancel');
            $failure_url = base_url('cart/paymentCancel');

            $str = '
                        <form action="' . $action . '" method="post" name="payuForm" id="payuForm">
                        <input type="hidden" name="key" value="' . $MERCHANT_KEY . '" />
                        <input type="hidden" name="hash" value="' . $hash . '"/>
                        <input type="hidden" name="txnid" value="' . $txnid . '" />
                        <input type="hidden" name="amount" value="' . $amount . '" />
                        <input type="hidden" name="firstname" value="' . $firstname . '" />
                        <input type="hidden" name="lastname" value="' . $lastname . '" />
                        <input type="hidden" name="email" value="' . $email . '" />
                        <input type="hidden" name="phone" value="' . $phone . '" />
                        <input type="hidden" name="address1" value="' . $address1 . '" />
                        <input type="hidden" name="address2" value="' . $address2 . '" />
                        <input type="hidden" name="city" value="' . $city . '" />
                        <input type="hidden" name="state" value="' . $state . '" />
                        <input type="hidden" name="country" value="' . $country . '" />
                        <input type="hidden" name="zipcode" value="' . $zipcode . '" />
                        <input type="hidden" name="productinfo" value="' . $productinfo . '" />
                        <input type="hidden" name="surl" value="' . $success_url . '" />
                        <input type="hidden" name="curl" value="' . $cancel_url . '" />
                        <input type="hidden" name="furl" value="' . $failure_url . '" />
                        <input type="hidden" name="service_provider" value="payu_paisa" />
                        </form>
                        <script>window.document.payuForm.submit();</script>
                            ';

            echo $str;
        }

        public function savePayuDetails($post_params)
        {
            $model = new Common_model();
            $arr = $post_params;
            $test_arr = array();
            $product_quant_unit_arr = array();
            $cart_contents = $this->cart->contents();
            foreach ($cart_contents as $ccKey => $ccValue)
            {
                $profit_percent = $ccValue['options']['profit_percent'];
                $test_arr['product'] = $ccValue['name'];
                $test_arr['quantity'] = $ccValue['qty'];
                $test_arr['unit_price'] = getProductPrice($ccValue['price'], FALSE, TRUE, TRUE, $profit_percent);
                $product_quant_unit_arr[] = $test_arr;
            }

            $cart_session = $this->session->userdata["cart_session"];
            $product_id_array = $cart_session["product_id_array"];

            $cart_session_arr = $this->session->userdata["cart_session"];
//            prd($this->session->all_userdata());

            $product_id_array_new = array();
            $tmp_product_id_array = $cart_session_arr["product_id_array"];

            $shipping_charge_in_inr = $cart_session_arr["shipping_charge_in_inr"];
            foreach ($tmp_product_id_array as $ckey => $cvalue)
            {
                $product_id_array_new[] = key($cvalue);
            }

            foreach ($cart_session_arr["product_id_array"] as $csKey => $csValue)
            {
                $cart_session_arr["product_id"] = key($csValue);
                $cart_session_arr["product_size"] = $cart_session_arr["product_id_array"][$csKey][key($csValue)]['product_size'];
                $cart_session_arr["product_color"] = $cart_session_arr["product_id_array"][$csKey][key($csValue)]['product_color'];
                $cart_session_arr["product_id_csv"] = implode(", ", $product_id_array_new);
                $cart_session_arr["product_quantity"] = $cart_session_arr["product_quantity_array"][$csKey];
                $insert_array = $cart_session_arr;

                unset($insert_array["product_id_array"], $insert_array["product_quantity_array"], $insert_array['sd_id']);

                $model->insertData(TABLE_SHIPPING_DETAILS, $insert_array);
                $sd_id = $this->db->insert_id();
            }

//                prd($this->session->userdata("cart_session"));
//                prd($arr);

            $user_id = $this->session->userdata("user_id");
            $amount = $arr["amount"];

            $coupon_code_arr = @$this->session->userdata['cart_discount'];
            $coupon_code = '';
            $discount_percent = 0;
            $discount_price = 0;
            if (!empty($coupon_code_arr))
            {
                $coupon_code = $coupon_code_arr['coupon_code'];
                $discount_percent = $coupon_code_arr['discount_percent'];
                $discount_price = $amount - ($amount * ($coupon_code_arr['discount_percent'] / 100));
            }
            $this->session->unset_userdata('cart_discount');

            $data_array = array(
                'order_id' => getUniqueOrderId(),
                "sd_id" => $sd_id,
                "product_id_csv" => implode(", ", $product_id_array_new),
                "user_id" => $user_id,
                "payment_amount" => $amount,
                'discount_coupon' => $coupon_code,
                'discount_percent' => $discount_percent,
                'discount_price' => $discount_price,
                "payment_currency" => "INR",
                "payment_method" => "PayU",
                "cart_details" => json_encode($cart_contents),
                "shipping_details" => json_encode($cart_session),
                "payment_detail_array" => json_encode($arr),
                "user_ipaddress" => $this->session->userdata("ip_address"),
                "user_agent" => $this->session->userdata("user_agent"),
                "transaction_id" => $arr["txnid"],
                'payu_payid' => $arr['mihpayid'],
                'payu_mode' => $arr['mode'],
                'payu_addedon' => $arr['addedon'],
                'payu_firstname' => $arr['firstname'],
                'payu_lastname' => $arr['lastname'],
                'payu_email' => $arr['email'],
                'payu_phone' => $arr['phone'],
                'payu_hash' => $arr['hash'],
                'payu_errormessage' => $arr['error_Message'],
                'payu_moneyid' => $arr['payuMoneyId'],
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

//                $sql = 'UPDATE ' . TABLE_PRODUCT_DETAILS . ' SET product_stock = (product_stock - ' . $product_quantity . ') WHERE product_id = "' . $product_id . '" AND product_size = "' . $product_size . '" AND product_color = "' . $product_color . '"';
////                echo $sql;die;
//                $this->db->query($sql);
                $this->db->set('product_stock', 'product_stock - ' . $product_quantity, FALSE);
                $this->db->where('product_id', $product_id);
                $this->db->where('product_size', $product_size);
                $this->db->where('product_color', $product_color);
                $this->db->update(TABLE_PRODUCT_DETAILS);
            }

            // to delete the cart items
            foreach ($product_id_array_new as $piKey => $piValue)
            {
                $model->deleteData(TABLE_SHOPPING_CART, array("product_id" => $piValue, "user_id" => $user_id));
            }

            // to unset the cart sessions created during checkout
            $this->session->unset_userdata("cart_contents");
            $this->session->unset_userdata("cart_session");

            if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
            {
                // sending email receipt to the client
                require_once APPPATH . '/libraries/EmailTemplates.php';
                $EmailTemplates = new EmailTemplates();

                $emailFields = 'billing_first_name, billing_last_name, billing_email, billing_address, billing_city, billing_country, billing_postcode, payment_amount, order_id, discount_price, payment_currency';
                $sd_Record = $model->getAllDataFromJoin($emailFields, TABLE_PAYMENT . ' as py', array(TABLE_SHIPPING_DETAILS . ' as sd' => 'sd.sd_id = py.sd_id'), 'INNER', array('sd_id' => $sd_id));

                $client_full_name = ucwords($sd_Record[0]['billing_first_name'] . ' ' . $sd_Record[0]['billing_last_name']);
                $client_address = $sd_Record[0]['billing_address'] . ', ' . $sd_Record[0]['billing_city'] . ', ' . $sd_Record[0]['billing_country'];
                $billing_email = $sd_Record[0]['billing_email'];
                $order_id = $sd_Record[0]['order_id'];
                $discount_price = $sd_Record[0]['discount_price'];
                $grand_total_price = $sd_Record[0]['payment_amount'];

                $payment_currency = 'Rs.';
                if ($sd_Record[0]['payment_currency'] == 'USD')
                    $payment_currency = '$';

                $messageText = $EmailTemplates->invoiceTemplate($client_full_name, $client_address, $order_id, $discount_price, $grand_total_price, $product_quant_unit_arr, $payment_currency);

                require_once APPPATH . '/models/email_model.php';
                $Email_model = new Email_model();

                $subject = 'Invoice #' . $order_id . ' | ' . SITE_NAME;
                $Email_model->sendMail($billing_email, $subject, $messageText);
            }

            // to clear the cart as well
            $this->cart->destroy();

            $this->session->set_flashdata("success", "<strong>Success</strong> Your order has been placed successfully.");
            redirect(base_url('my-account#myOrders'));
        }

        public function paymentGateway()
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

        public function paymentGatewaySuccess()
        {
            require_once APPPATH . '/libraries/CCAvenue.php';
            $CCAvenue = new CCAvenue();

            $post_array = $this->input->post();
            $responseHandler = $CCAvenue->responseHandler($post_array);
        }

    }
    