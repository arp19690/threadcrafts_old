<?php
    $this->load->view("pages/cart/checkout/header");
?>

<!--  ==========  -->
<!--  = Shipping address form =  -->
<!--  ==========  -->

<h3 class="offset2">Shipping Address:</h3>

<form action="<?php echo base_url("checkout/stepThree"); ?>" method="post" class="form-horizontal form-checkout validate-form">
    <div class="control-group">
        <label class="control-label" for="shipping_first_name">First Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_first_name" name="shipping_first_name" class="span4 required" value="<?php echo $user_record["first_name"]; ?>" required="required"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shipping_last_name">Last Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_last_name" name="shipping_last_name" class="span4 required" value="<?php echo $user_record["last_name"]; ?>" required="required"/>
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
    <div class="control-group">
        <label class="control-label" for="shipping_address">Address<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_address" name="shipping_address" value="<?php echo $user_record["user_address"]; ?>" class="span4 required" required="required"/>
            <span class="help-inline">(Your order will be shipped to this address)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shipping_city">City<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_city" name="shipping_city" value="<?php echo $user_record["user_city"]; ?>" class="span4 gMapLocation required" required="required">
            <span class="help-inline">(City is necessary)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shipping_postcode">Postcode<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_postcode" name="shipping_postcode" value="<?php echo $user_record["user_postcode"]; ?>" class="span4 required" required="required">
            <span class="help-inline">(Postcode is necessary)</span>
        </div>
    </div>

    <!--  ==========  -->
    <!--  = Countries =  -->
    <!--  ==========  -->
    <div class="control-group">
        <label class="control-label" for="shipping_country">Country<span class="red-clr bold">*</span></label>
        <div class="controls">
            <select id="shipping_country" class="as-span4" name="shipping_country">
                <?php
                    foreach ($country_records as $cKey => $cValue)
                    {
                        $country_selected = "";
                        if (strcmp($cValue["country_name"], $user_record["user_country"]) == 0)
                            $country_selected = "selected='selected'";
                        elseif ($cValue["country_name"] == 'India')
                            $country_selected = "selected='selected'";

                        echo '<option value="' . $cValue["country_code"] . '" ' . $country_selected . '>' . $cValue["country_name"] . '</option>';
                    }
                ?>
            </select>
            <span class="help-inline">(Country is necessary)</span>
        </div>
    </div> <!-- /countries -->

    <hr />

    <!--Billing details starts from here-->

    <h3 class="offset2">Billing Address:</h3>

    <div class="control-group">
        <label class="control-label" for="billing_first_name">First Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_first_name" name="billing_first_name" class="span4 required" value="<?php echo $user_record["first_name"]; ?>" required="required"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="billing_last_name">Last Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_last_name" name="billing_last_name" class="span4 required" value="<?php echo $user_record["last_name"]; ?>" required="required"/>
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
    <div class="control-group">
        <label class="control-label" for="billing_address">Address<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_address" name="billing_address" value="<?php echo $user_record["user_address"]; ?>" class="span4 required" required="required"/>
            <span class="help-inline">(Your order will be shipped to this address)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="billing_city">City<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_city" name="billing_city" value="<?php echo $user_record["user_city"]; ?>" class="span4 gMapLocation required" required="required">
            <span class="help-inline">(City is necessary)</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="billing_postcode">Postcode<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="billing_postcode" name="billing_postcode" value="<?php echo $user_record["user_postcode"]; ?>" class="span4 required" required="required">
            <span class="help-inline">(Postcode is necessary)</span>
        </div>
    </div>

    <!--  ==========  -->
    <!--  = Countries =  -->
    <!--  ==========  -->
    <div class="control-group">
        <label class="control-label" for="billing_country">Country<span class="red-clr bold">*</span></label>
        <div class="controls">
            <select id="billing_country" class="as-span4" name="billing_country">
                <?php
                    foreach ($country_records as $cKey => $cValue)
                    {
                        $country_selected = "";
                        if (strcmp($cValue["country_name"], $user_record["user_country"]) == 0)
                            $country_selected = "selected='selected'";
                        elseif ($cValue["country_name"] == 'India')
                            $country_selected = "selected='selected'";

                        echo '<option value="' . $cValue["country_code"] . '" ' . $country_selected . '>' . $cValue["country_name"] . '</option>';
                    }
                ?>
            </select>
            <span class="help-inline">(Country is necessary)</span>
        </div>
    </div> <!-- /countries -->

    <p class="right-align">
        In the next step you will confirm your order &nbsp; &nbsp;
        <input type="submit" class="btn btn-primary higher bold" value="CONTINUE" name="bttn_submit_two"/>
    </p>

</form>

<?php
    $this->load->view("pages/cart/checkout/footer");
?>