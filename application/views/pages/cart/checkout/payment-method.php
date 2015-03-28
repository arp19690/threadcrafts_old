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
        <a href="<?php echo base_url("cart/paymentGateway"); ?>" class="btn btn-success"><i class="icon-credit-card"></i>&nbsp;&nbsp;Pay Now</a>
    </h3>
</div>

<!--<hr />

<span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
<div class="shifted-left-45 clearfix">
    <h3 class="no-margin">
        <span class="light">PayPal</span> &nbsp; &nbsp; &nbsp; 
        <a href="<?php echo base_url("checkout/paypalCheckout"); ?>"><img src="<?php echo IMAGES_PATH; ?>/buttons/paypal.gif" alt="PayPal" width="145" height="42" /></a>
    </h3>
    <p>(For Non-Indian bank accounts)</p>
</div>-->

<hr />

<?php
    $this->load->view("pages/cart/checkout/footer");
?>