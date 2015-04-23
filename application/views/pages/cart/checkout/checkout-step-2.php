<?php
    $this->load->view("pages/cart/checkout/header");
?>
<style>
    .address-ul{display: inline-block;width: 100%;margin: 15px 0 0 0;}
    .address-ul > li{list-style: none;display: inline-block;max-width: 200px;margin-right: 15px}
    .address-ul > li .address-outer{padding: 20px 15px;border-radius: 5px;border: 1px solid #e1e1e1;}
    .address-ul > li .address-outer p{margin: 0}
    .address-ul > li .address-outer div.radio-div, .address-ul > li .address-outer div.text{display: table-cell;vertical-align: top;}
    .address-ul > li .address-outer div.radio-div{min-width: 25px;}
    li .address-outer div.text label{font-weight: normal;}
</style>

<!--  ==========  -->
<!--  = Shipping address form =  -->
<!--  ==========  -->

<form action="<?php echo base_url("checkout/stepThree"); ?>" method="post" class="form-horizontal form-checkout validate-form">

    <h3 class="">Shipping Address:
        <a href="#addressModal" role="button" data-toggle="modal" class="btn btn-success offset1"><span class="icon icon-plus"></span>&nbsp;Add new</a>
    </h3>

    <div class="shipping_address">
        <ul class="address-ul">
            <?php
                foreach ($address_records as $sKey => $sValue)
                {
                    ?>
                    <li>
                        <div class="address-outer">
                            <div class="radio-div"><input type="radio" name="shipping_address" value="<?php echo $sValue['ua_id']; ?>" id="s-<?php echo $sValue['ua_id']; ?>" class="required" required="required"/></div>
                            <div class="text">
                                <label for="s-<?php echo $sValue['ua_id']; ?>">
                                    <p><?php echo stripslashes($sValue['ua_line1']); ?></p>
                                    <p><?php echo stripslashes($sValue['ua_line2']); ?></p>
                                    <p><?php echo stripslashes($sValue['ua_location']); ?></p>
                                    <p><?php echo stripslashes($sValue['ua_postcode']); ?></p>
                                </label>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>

    <hr />

    <div class="control-group">
        <label class="control-label" for="shipping_fullname">Full Name<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_fullname" name="shipping_fullname" value="<?php echo $user_record["user_fullname"]; ?>" class="span4 required" required="required"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="shipping_contact">Contact<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="text" id="shipping_contact" name="shipping_contact" maxlenth="10" value="<?php echo $user_record["user_contact"]; ?>" class="span4 required" required="required"/>
            <span class="help-inline">(10 digit mobile number)</span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="billing_email">Email<span class="red-clr bold">*</span></label>
        <div class="controls">
            <input type="email" id="billing_email" name="billing_email" value="<?php echo $user_record["user_email"]; ?>" class="span4 required" required="required"/>
            <span class="help-inline">(Invoice will be sent on this email address)</span>
        </div>
    </div>

    <hr/>

    <div>
        <p class="pull-left"><a href="<?php echo goBack(); ?>">Back</a></p>
        <p class="pull-right">
            In the next step you will confirm your order &nbsp; &nbsp;
            <input type="submit" class="btn btn-primary higher bold" value="CONTINUE" name="bttn_submit_two"/>
        </p>
    </div>

</form>

<?php
//    Address Modal
    $this->load->view('pages/user/add-new-address-modal');
//    checkout footer
    $this->load->view("pages/cart/checkout/footer");
    