<?php
    $this->load->view("pages/cart/checkout/header");
?>

<!--  ==========  -->
<!--  = Shipping address form =  -->
<!--  ==========  -->

<h3 class="offset2">Shipping Address:</h3>

<form action="<?php echo base_url("checkout/stepThree"); ?>" method="post" class="form-horizontal form-checkout validate-form">
    <div class="control-group">
        <label class="control-label" for="shipping_full_name">Full Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_full_name" name="shipping_full_name" class="span4 required" value="<?php echo $user_record["user_fullname"]; ?>" required="required"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shipping_contact">Contact Number<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="tel" id="shipping_contact" name="shipping_contact" class="span4 required" value="<?php echo $user_record["user_contact"]; ?>" required="required"/>
            <span class="help-inline">(Contact Number is necessary)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shipping_email">Email<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="email" id="shipping_email" name="shipping_email" class="span4 required" value="<?php echo $user_record["user_email"]; ?>" required="required"/>
        </div>
    </div>

    <hr />

    <!--Billing details starts from here-->

    <h3 class="offset2">Billing Address:</h3>

    <div class="control-group">
        <label class="control-label" for="billing_full_name">Full Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_full_name" name="billing_full_name" class="span4 required" value="<?php echo $user_record["user_fullname"]; ?>" required="required"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="billing_contact">Contact Number<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="tel" id="billing_contact" name="billing_contact" class="span4 required" value="<?php echo $user_record["user_contact"]; ?>" required="required"/>
            <span class="help-inline">(Contact Number is necessary)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="billing_email">Email<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="email" id="billing_email" name="billing_email" class="span4 required" value="<?php echo $user_record["user_email"]; ?>" required="required"/>
            <span class="help-inline">(Invoice will be sent to this email address)</span>
        </div>
    </div>

    <p class="right-align">
        In the next step you will confirm your order &nbsp; &nbsp;
        <input type="submit" class="btn btn-primary higher bold" value="CONTINUE" name="bttn_submit_two"/>
    </p>

</form>

<?php
    $this->load->view("pages/cart/checkout/footer");