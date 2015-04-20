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

<h3 class="offset2">Shipping Address:</h3>

<form action="<?php echo base_url("checkout/stepThree"); ?>" method="post" class="form-horizontal form-checkout validate-form">
    <div class="billing_address">
        <ul class="address-ul">
            <?php
                foreach ($address_records as $sKey => $sValue)
                {
                    ?>
                    <li>
                        <div class="address-outer">
                            <div class="radio-div"><input type="radio" name="billing_address" value="<?php echo $sValue['ua_id']; ?>" id="b-<?php echo $sValue['ua_id']; ?>"/></div>
                            <div class="text">
                                <label for="b-<?php echo $sValue['ua_id']; ?>">
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

    <!--Billing details starts from here-->

    <h3 class="offset2">Billing Address:</h3>
    
    <div class="shipping_address">
        <ul class="address-ul">
            <?php
                foreach ($address_records as $sKey => $sValue)
                {
                    ?>
                    <li>
                        <div class="address-outer">
                            <div class="radio-div"><input type="radio" name="shipping_address" value="<?php echo $sValue['ua_id']; ?>" id="s-<?php echo $sValue['ua_id']; ?>"/></div>
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

    <p class="right-align" style="margin-top: 20px">
        In the next step you will confirm your order &nbsp; &nbsp;
        <input type="submit" class="btn btn-primary higher bold" value="CONTINUE" name="bttn_submit_two"/>
    </p>

</form>

<?php
    $this->load->view("pages/cart/checkout/footer");
    