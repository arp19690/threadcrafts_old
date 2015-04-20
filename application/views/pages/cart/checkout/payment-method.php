<?php
    $this->load->view("pages/cart/checkout/header");
?>
<!--  ==========  -->
<!--  = Payment =  -->
<!--  ==========  -->

<span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
<div class="shifted-left-45 clearfix">
    <h3 class="no-margin">
        <span class="light">Netbanking / Debit card / Credit card</span> &nbsp; &nbsp; &nbsp; 
        <a href="<?php echo base_url("cart/paymentGateway"); ?>" class="btn btn-success hidden" id="pay-now-btn"><i class="icon-credit-card"></i>&nbsp;&nbsp;Pay Now</a>
    </h3>
    <p style="margin-top: 10px;">(Recommended for Non-Indian bank accounts)</p>
</div>

<!--<hr />

<span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
<div class="shifted-left-45 clearfix">
    <h3 class="no-margin">
        <span class="light">PayPal</span> &nbsp; &nbsp; &nbsp; 
        <a href="<?php echo base_url("checkout/paypalCheckout"); ?>"><img src="<?php echo IMAGES_PATH; ?>/buttons/paypal.gif" alt="PayPal" width="145" height="42" /></a>
    </h3>
    <p style="margin-top: 10px;">(Recommended for Non-Indian bank accounts)</p>
</div>-->

<hr />

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var total_amount = '<?php echo $total_amount; ?>';
    var options = {
        "key": "<?php echo RAZORPAY_KEY; ?>",
        "amount": total_amount * 100,
        "name": "<?php echo SITE_NAME; ?>",
        "description": "Please pay <?php echo DEFAULT_CURRENCY .' '. $total_amount; ?>",
        "image": "<?php echo IMAGES_PATH . '/logo.png'; ?>",
        "handler": function (response) {
            alert(response.razorpay_payment_id);
        },
        "prefill": {
            "name": "<?php echo $this->session->userdata['user_fullname']; ?>",
            "email": "<?php echo $this->session->userdata['user_email']; ?>",
            "contact": "<?php echo $user_contact; ?>"
        },
    };
    var rzp1 = new Razorpay(options);

    $(document).ready(function () {
        $("#pay-now-btn").click(function (e) {
            rzp1.open();
            e.preventDefault();
        });

        $('#pay-now-btn').removeClass('hidden');
    });
</script>

<?php
    $this->load->view("pages/cart/checkout/footer");
    