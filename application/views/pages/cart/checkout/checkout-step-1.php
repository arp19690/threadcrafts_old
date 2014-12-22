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
                $product_id = $crValue["product_id"];
                $product_title = $crValue["product_title"];
                $product_quantity = $crValue["product_quantity"];
                $profit_percent = $crValue["profit_percent"];
                $product_cost_price = getProductPrice($crValue["product_cost_price"], FALSE, TRUE, TRUE, $profit_percent);
                $product_color = $crValue["product_color"];
                $product_size = $crValue["product_size"];
                $cart_subtotal = $cart_subtotal + ($product_cost_price * $product_quantity);
                $product_images = getProductImages($crValue['product_image_and_color']);
//                prd($product_images);
                ?>
                <tr>
                    <td class="image">
                        <img src="<?php echo $product_images[0]['url']; ?>" alt="<?php echo $product_title; ?>" width="124" height="124" />
                    </td>
                    <td class="desc">
                        <?php echo $product_title; ?> - &nbsp; 

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

                        <a title = "Remove Item" class = "icon-remove-sign" href = "<?php echo $product_id; ?>"></a>

                    </td>
                    <td class = "qty">
                        <?php echo $product_quantity;
                        ?>
                    </td>
                    <td class="price">
                        <?php echo displayProductPrice($product_cost_price, FALSE); ?>
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
                            <a href="<?php echo base_url("cart/removeCouponCode/" . $this->session->userdata["cart_discount"]["coupon_code"]); ?>" class="btn btn-warning">Remove</a>
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
            $(document).ready(function() {
                $(".promo-code-click").click(function(event) {
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
        echo '<h2>No products in your cart.</h2><p><a href="#" onclick="window.history.back();">Go Back</a></p>';
    }

    $this->load->view("pages/cart/checkout/footer");
?>