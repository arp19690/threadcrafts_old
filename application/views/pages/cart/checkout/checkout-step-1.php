<?php
    $this->load->view("pages/cart/checkout/header");

    $round_discount_price = 0;

    if (!empty($cart_records))
    {
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
//            prd($cart_records);
            $cart_subtotal = 0;
            foreach ($cart_records as $crKey => $crValue)
            {
                $cart_id = $crValue["cart_id"];
                $product_id = $crValue["product_id"];
                $product_title = stripslashes($crValue["product_title"]);
                $cart_quantity = $crValue["cart_quantity"];
                $product_price = $crValue["product_price"];
                $pd_color_name = $crValue["pd_color_name"];
                $pd_size = $crValue["pd_size"];
                $cart_subtotal = $cart_subtotal + ($product_price * $cart_quantity);
                $product_image = getImage($crValue['pi_image_path']);
//                prd($product_images);
                ?>
                <tr class="item-in-cart">
                    <td class="image">
                        <img src="<?php echo $product_image ?>" alt="<?php echo $product_title; ?>" width="124" height="124" />
                    </td>
                    <td class="desc">
                        <?php echo $product_title; ?> - &nbsp; 

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

                        <a href="#removeFromCart" title="Remove Item" class="icon-remove-sign" data-cart="<?php echo $cart_id; ?>"></a>

                    </td>
                    <td class="qty"> <?php echo $cart_quantity; ?></td>
                    <td class="price">
                        <?php echo DEFAULT_CURRENCY_SYMBOL . number_format($product_price, 2); ?>
                    </td>
                </tr>
                <?php
            }
            $grand_total = $cart_subtotal;
            ?>

            <tr>
                <td class="stronger">
                    <div style="display: inline-block;">
                        <?php
                        if (!isset($this->session->userdata["cart_discount"]))
                        {
                            $discount_price = "0";
                            ?>
                            <p style="width: 140px;">Have a <a href="#" class="promo-code-click">promo code?</a></p>
                            <div class="coupon-form-div hide">
                                <form method="get" action="" autocomplete="off">
                                    <input type="text" name="coupon_code" placeholder="Apply Coupon" style="width: 125px;"/>
                                    <input type="submit" value="Apply" class="btn btn-info"/>
                                </form>
                            </div>
                            <?php
                        }
                        else
                        {
                            $discount_percent = $this->session->userdata["cart_discount"]["discount_percent"];
                            $discount_price = $grand_total * ($discount_percent / 100);
                            $round_discount_price = round($grand_total * ($discount_percent / 100), 2);
                            ?>
                            <div><?php echo $this->session->userdata["cart_discount"]["discount_percent"] . "% Discount" ?></div>
                            <a href="<?php echo base_url("cart/removeCouponCode"); ?>" class="btn btn-warning">Remove</a>
                            <?php
                        }
                        ?>
                    </div>
                </td>
                <td class="stronger">
                    <?php
                    if ($round_discount_price != "0")
                    {
                        ?>
                        <div  class="align-right">Discount: <?php echo getCurrencySymbol(getCurrentCurrency()) . $round_discount_price; ?></div>
                        <?php
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td class="stronger">Subtotal:</td>
                <td class="stronger"><div class="size-16 align-right"><?php echo getCurrencySymbol(getCurrentCurrency()) . round(($grand_total - $discount_price), 2); ?></div></td>
            </tr>

        </tbody>
        </table>

        <hr />

        <p class="right-align">
            In the next step you will choose your shipping and billing address &nbsp; &nbsp;
            <a href="<?php echo base_url("checkout/stepTwo"); ?>" class="btn btn-primary higher bold">CONTINUE</a>
        </p>

        <script>
            $(document).ready(function () {
                $(".promo-code-click").click(function (event) {
                    event.preventDefault();
                    $(".coupon-form-div").removeClass('hide');
                    $(this).parent().remove();
                });
            });
        </script>

        <?php
    }
    else
    {
        echo '<h2>No products in your cart.</h2><p><a href="' . goBack() . '">Go Back</a></p>';
    }

    $this->load->view("pages/cart/checkout/footer");
    