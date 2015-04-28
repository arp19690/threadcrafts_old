<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta name="robots" content="nofollow"/>
        <title>#<?php echo $order_id ?> Invoice | <?php echo SITE_NAME; ?></title>
        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
        <link rel="shortcut icon" href="<?php echo IMAGES_PATH; ?>/favicon.ico"/>        
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo IMAGES_PATH; ?>/apple-touch/144.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo IMAGES_PATH; ?>/apple-touch/114.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo IMAGES_PATH; ?>/apple-touch/72.png"/>
        <link rel="apple-touch-icon-precomposed" href="<?php echo IMAGES_PATH; ?>/apple-touch/57.png"/>
        <link rel="shortcut icon" href="<?php echo IMAGES_PATH; ?>/favicon.ico"/> 
        <style>
            @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
            body, h1, h2, h3, h4, h5, h6{
                font-family: 'Bree Serif', serif;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h1>
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo IMAGES_PATH; ?>/logo.png" alt="<?php echo SITE_NAME; ?>" style="max-width: 100px">
                        </a>
                    </h1>
                </div>
                <div class="col-xs-6 text-right">
                    <h1 class="hidden-xs">INVOICE</h1>
                    <h1><small>Order #<?php echo $order_id; ?></small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 text-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>To : <?php echo ucwords(stripslashes($records[0]['sd_shipping_fullname'])); ?></h4>
                        </div>
                        <div class="panel-body">
                            <p><?php echo stripslashes($records[0]['sd_shipping_address'] . ' ' . $records[0]['sd_shipping_location'] . ' ' . $records[0]['sd_shipping_postcode']); ?></p>
                            <p><?php echo $records[0]['sd_shipping_email']; ?></p>
                            <p><?php echo $records[0]['sd_shipping_contact']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12 text-right pull-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Note:</h4>
                        </div>
                        <div class="panel-body">
                            <p>Leaves warehouse in 4-5 working days</p>
                            <p>We will keep you updated about the delivery status of the product</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / end client details section -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><h4>Product</h4></th>
                <th class="text-right"><h4>Quantity</h4></th>
                <th class="text-right"><h4>Sub Total</h4></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $subtotal = 0;
                        $shipping_charge = 0;
                        $vat_collected = 0;
                        foreach ($records as $key => $value)
                        {
                            $product_price_quantity = $value['sd_product_price'] * $value['sd_quantity'];
                            ?>
                            <tr>
                                <td><?php echo stripslashes($value['product_title']); ?></td>
                                <td class="text-right"><?php echo $value['sd_quantity']; ?></td>
                                <td class="text-right"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($product_price_quantity, 2); ?></td>
                            </tr>
                            <?php
                            $subtotal = $subtotal + $product_price_quantity;
                            $shipping_charge = $shipping_charge + $value['sd_shipping_charge'];
                            $vat_collected = $vat_collected + $value['sd_vat_collected'];
                        }
                    ?>
                </tbody>
            </table>
            <div class="row text-right">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-8">
                    <p>Subtotal : </p>
                </div>
                <div class="col-xs-4 col-md-2">
                    <p><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($subtotal, 2); ?></p>
                </div>

                <?php
                    if (!empty($records[0]['sd_discount_percent']))
                    {
                        ?>
                        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-8">
                            <p>Discount : </p>
                        </div>
                        <div class="col-xs-4 col-md-2">
                            <p><?php echo number_format($records[0]['sd_discount_percent'], 2); ?>%</p>
                        </div>
                        <?php
                    }

                    if ($shipping_charge != 0)
                    {
                        ?>
                        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-8">
                            <p>Shipping Charge : </p>
                        </div>
                        <div class="col-xs-4 col-md-2">
                            <p><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($shipping_charge, 2); ?></p>
                        </div>
                        <?php
                    }
                ?>

                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-8">
                    <p>VAT : </p>
                </div>
                <div class="col-xs-4 col-md-2">
                    <p><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($vat_collected, 2); ?></p>
                </div>

                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-8">
                    <p>Total : </p>
                </div>
                <div class="col-xs-4 col-md-2">
                    <p><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($records[0]['payment_amount'], 2); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>
