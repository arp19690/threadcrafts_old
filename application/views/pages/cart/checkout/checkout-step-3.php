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
            <th><div class="align-center">Quantity</div></th>
<th><div class="align-right">Price / Piece</div></th>
</tr>
</thead>
<tbody>

    <?php
        $cart_subtotal = 0;
        foreach ($cart_records as $crKey => $crValue)
        {
            $product_id = $crValue["product_id"];
            $product_title = $crValue["product_title"];
            $product_quantity = $crValue["product_quantity"];
            $profit_percent = $crValue["profit_percent"];
            $product_cost_price = getProductPrice($crValue["product_cost_price"], FALSE, TRUE, TRUE, $profit_percent);
            $product_color = $crValue["product_color"];
            $product_size = $crValue["product_size"];
            $cart_subtotal = $cart_subtotal + ($product_cost_price * $product_quantity);
            $product_images = getProductImages($crValue['product_image_and_color']);
            ?>
            <tr>
                <td class="image"><img src="<?php echo $product_images[0]['url']; ?>" alt="<?php echo $product_title; ?>" width="124" height="124" /></td>
                <td class="desc">
                    <?php echo $product_title; ?>
                    <?php
                    if (!empty($product_size))
                    {
                        ?>
                        <span class="light-clr qty">
                            Size: <?php echo $product_size; ?>,
                            &nbsp;
                        </span>
                        <?php
                    }

                    if (!empty($product_color))
                    {
                        ?>
                        <span class="light-clr qty">
                            Color: <?php echo $product_color; ?>
                            &nbsp;
                        </span>
                        <?php
                    }
                    ?>
                </td>
                <td class="qty">
                    <?php echo $product_quantity; ?>			
                </td>
                <td class="price">
                    <?php echo displayProductPrice($product_cost_price, FALSE); ?>
                </td>
            </tr>
            <?php
        }
    ?>

    <tr>
        <td colspan="2" rowspan="1">
            &nbsp;
        </td>
        <td class="stronger">Shipping:</td>
        <td class="stronger"><div class="align-right"><?php echo getAddedCurrentCurrencySymbolWithPrice($shipping_charges); ?></div></td>
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
                <td colspan="2" rowspan="1">
                    &nbsp;
                </td>
                <td class="stronger">Discount:</td>
                <td class="stronger"><div class="align-right"><?php echo getAddedCurrentCurrencySymbolWithPrice($round_discount); ?></div></td>
            </tr>
            <?php
        }
    ?>

    <tr>
        <td colspan="2" rowspan="2">
            &nbsp;
        </td>
        <td class="stronger">Total:</td>
        <?php
            $total = round($total_product_price - $discount + $shipping_charges, 2);
        ?>
        <td class="stronger"><div class="size-16 align-right"><?php echo getAddedCurrentCurrencySymbolWithPrice($total); ?></div></td>
    </tr>
</tbody>
</table>

<p class="right-align">
    <a href="<?php echo base_url("checkout/pay"); ?>" class="btn btn-primary higher bold">CONFIRM &amp; PAY</a>
</p>

<?php
    $this->load->view("pages/cart/checkout/footer");
?>