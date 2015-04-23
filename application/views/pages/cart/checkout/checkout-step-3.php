<?php
    $this->load->view("pages/cart/checkout/header");
?>

<!--  ==========  -->
<!--  = Selected Items =  -->
<!--  ==========  -->
<table class="table table-items">
    <thead>
        <tr>
            <th colspan="2">Product</th>
            <th style="text-align: center;">Quantity</th>
            <th style="text-align: right;">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $cart_subtotal = 0;
            foreach ($cart_records as $crKey => $crValue)
            {
                $pd_id = $crValue["pd_id"];
                $product_id = $crValue["product_id"];
                $product_title = stripslashes($crValue["product_title"]);
                $cart_quantity = $crValue["cart_quantity"];
                $product_price = $crValue["product_price"];
                $total_price = $product_price * $cart_quantity;
                $pd_color_name = $crValue["pd_color_name"];
                $pd_size = $crValue["pd_size"];
                $cart_subtotal = $cart_subtotal + ($total_price);
                $product_image = getImage($crValue['pi_image_path']);
                ?>
                <tr>
                    <td class="image"><img src="<?php echo $product_image; ?>" alt="<?php echo $product_title; ?>" width="124" height="124" /></td>
                    <td class="desc">
                        <p><?php echo $product_title; ?></p>
                        <p>
                            <?php
                            if (!empty($pd_size))
                            {
                                ?>
                                <span class="light-clr qty">
                                    Size: <?php echo $pd_size; ?>,
                                    &nbsp;
                                </span>
                                <?php
                            }

                            if (!empty($pd_color_name))
                            {
                                ?>
                                <span class="light-clr qty">
                                    Color: <?php echo $pd_color_name; ?>
                                    &nbsp;
                                </span>
                                <?php
                            }
                            ?>
                        </p>
                    </td>
                    <td class="qty"><?php echo $cart_quantity; ?></td>
                    <td class="price"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($total_price, 2); ?></td>
                </tr>
                <?php
            }
        ?>

        <tr>
            <td colspan="2" rowspan="1">
                &nbsp;
            </td>
            <td class="stronger">Shipping:</td>
            <td class="stronger"><div class="align-right"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($total_shipping_charge, 2); ?></div></td>
        </tr>

        <?php
            $total_product_price = getProductPrice($cart_subtotal, FALSE, FALSE);
            $discount = "0";
            if (isset($this->session->userdata["cart_discount"]))
            {
                $discount_percent = $this->session->userdata["cart_discount"]["discount_percent"];
                $discount = $total_product_price * ($discount_percent / 100);
                $round_discount = round($total_product_price * ($discount_percent / 100), 2);
                ?>
                <tr>
                    <td colspan="2" rowspan="1">&nbsp;</td>
                    <td class="stronger">Discount:</td>
                    <td class="stronger"><div class="align-right"><?php echo getAddedCurrentCurrencySymbolWithPrice($round_discount); ?></div></td>
                </tr>
                <?php
            }

            $total = round($total_product_price - $discount + $total_shipping_charge + $total_vat, 2);
        ?>
        <tr>
            <td colspan="2" rowspan="1">
                &nbsp;
            </td>
            <td class="stronger">VAT:</td>
            <td class="stronger"><div class="align-right"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($total_vat, 2); ?></div></td>
        </tr>

        <tr>
            <td colspan="2" rowspan="2">
                &nbsp;
            </td>
            <td class="stronger">Total:</td>
            <td class="stronger"><div class="size-16 align-right"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($total, 2); ?></div></td>
        </tr>
    </tbody>
</table>

<div>
    <p class="pull-left"><a href="<?php echo goBack(); ?>">Back</a></p>
    <p class="pull-right">
        <a href="<?php echo base_url("checkout/pay"); ?>" class="btn btn-primary higher bold">CONFIRM &amp; PAY</a>
    </p>
</div>

<?php
    $this->load->view("pages/cart/checkout/footer");
    