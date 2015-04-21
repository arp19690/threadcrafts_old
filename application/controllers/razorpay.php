<?php

    require_once APPPATH . '../assets/razorpay/Razorpay.php';

    use Razorpay\Api\Api;

    class Razorpay extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();

            $this->api = new Api(RAZORPAY_KEY, RAZORPAY_SECRET);
        }

        public function index()
        {
            
        }

        public function verifyTransactionAjax()
        {
            if ($this->input->post() && isset($this->session->userdata['user_id']))
            {
                $model = new Common_model();
                $user_id = $this->session->userdata['user_id'];
                $amount_record = $model->fetchSelectedData('sd_total_price', TABLE_SHIPPING_DETAILS, array('sd_user_id' => $user_id, 'sd_order_id' => NULL, 'sd_paid' => '0', 'sd_status' => '1'), 'sd_id', 'DESC', 1);

                $razorpay_payment_id = $this->input->post('razorpay_payment_id');
                $arr = $this->capturePayment($razorpay_payment_id, ($amount_record[0]['sd_total_price'] * 100));

                // generate a unique order id here
                $order_id = getUniqueOrderId($user_id);

                // update shipping details table
                $model->updateData(TABLE_SHIPPING_DETAILS, array('sd_order_id' => $order_id, 'sd_paid' => '1'), array('sd_paid' => '0', 'sd_status' => '1', 'sd_order_id' => NULL, 'sd_user_id' => $user_id));
                // inserting data into shipping order detail table
                $data_array = array(
                    'sod_order_id' => $order_id,
                    'sod_ipaddress' => USER_IP,
                    'sod_useragent' => USER_AGENT
                );
                $model->insertData(TABLE_SHIPPING_ORDER_DETAILS, $data_array);
                $sod_id = $this->db->insert_id();

                // inserting data into payments table
                $payment_array = array(
                    'payment_user_id' => $user_id,
                    'payment_sod_id' => $sod_id,
                    'payment_transaction_id' => $arr['id'],
                    'payment_amount' => $arr['amount'] / 100,
                    'payment_currency' => $arr['currency'],
                    'payment_created_at' => $arr['created_at'],
                    'payment_ipaddress' => USER_IP,
                    'payment_useragent' => USER_AGENT
                );
                $model->insertData(TABLE_PAYMENTS, $payment_array);

                // emptying the shopping cart for the customer now
                $model->deleteData(TABLE_SHOPPING_CART, array('cart_user_id' => $user_id, 'cart_status' => '1'));
                return json_encode(array('response' => 'success', 'order_id' => $order_id));
            }
        }

        public function capturePayment($payment_id, $amount)
        {
            $api = $this->api;
            $payment = $api->payment->fetch($payment_id)->capture(array('amount' => $amount))->toArray();
            return $payment;
        }

        public function paymentDetails($payment_id)
        {
            $api = $this->api;
            $payment = $api->payment->fetch($payment_id)->toArray();
            return $payment;
        }

        public function trycatch($post_array)
        {
            try
            {
                $post_array;
                $message = TRUE;
            }
            catch (GATEWAY_ERROR $e)
            {
                // Since it's a decline, Stripe_CardError will be caught 
                $body = $e->getJsonBody();
                $err = $body['error'];
                $message = $err['description'];
            }
            catch (BAD_REQUEST_ERROR $e)
            {
                // Since it's a decline, Stripe_CardError will be caught 
                $body = $e->getJsonBody();
                $err = $body['error'];
                $message = $err['description'];
            }
            catch (SERVER_ERROR $e)
            {
                // Since it's a decline, Stripe_CardError will be caught 
                $body = $e->getJsonBody();
                $err = $body['error'];
                $message = $err['description'];
            }

            return $message;
        }

    }
    