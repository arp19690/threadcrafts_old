<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3">
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">
                <section id="orders">
                    <h3 class="push-down-20"><span class="light">My</span> Orders</h3>
                    <table class="table table-items push-down-50">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Shipping Details</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th style="text-align: center">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (!empty($records))
                                {
                                    foreach ($records as $key => $value)
                                    {
                                        ?>
                                        <tr>
                                            <td class="desc">#<?php echo stripslashes($value['sd_order_id']); ?></td>
                                            <td class=""><?php echo stripslashes(trim($value['sd_shipping_address'] . ' ' . $value['sd_shipping_location'] . ' ' . $value['sd_shipping_postcode'])); ?></td>
                                            <td class=""><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($value['payment_amount'], 2); ?></td>
                                            <td class=""><?php echo getOrderStatusText($value['sod_order_status']); ?></td>
                                            <td class="" style="text-align: center">
                                                <a href="#" title="View order details" class="btn btn-success"><span class="icon icon-search"></span>&nbsp;Details</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                <td>You have not placed any order</td>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </section>
            </section> <!-- /main content -->
        </div>
    </div>
</div>