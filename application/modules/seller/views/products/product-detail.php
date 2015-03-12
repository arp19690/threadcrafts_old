<style>
    .profile-classic li:first-child{border-top: 1px solid #f5f5f5;}
    ul.unstyled li > span{min-width: 130px;display: inline-block;}
</style>

<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                <h3 class="page-title"><?php echo stripslashes($record['product_title']); ?></h3>
                <p><strong>Status: </strong><?php echo getProductStatusText($record['product_status']); ?></p>
                <div class="actions pull-right">
                    <a class="btn green mini" href="<?php echo goBack(); ?>">
                        <i class="icon-arrow-left"></i>
                        Back
                    </a>
                </div>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid profile">
            <div class="span12">
                <!--BEGIN TABS-->
                <div class="tabbable tabbable-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane profile-classic row-fluid active" id="tab_1_1">
                            <div class='span12'>
                                <h3>Images</h3>
                                <?php
                                    if (!empty($product_image_record))
                                    {
                                        foreach ($product_image_record as $imageKey => $imageValue)
                                        {
                                            $title = stripslashes($imageValue['pi_image_title']);
                                            $url = getImage($imageValue['pi_image_path']);
                                            ?>
                                            <div class="span2">
                                                <p><?php echo $title; ?></p>
                                                <img src="<?php echo $url; ?>" alt="<?php echo $title; ?>" style="max-width: 100%;max-height: 280px;"/>
                                            </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <a href='<?php echo base_url_seller('products/addProductStepThree/' . $record['product_id']); ?>'><i class="icon-plus"></i> Add images</a>
                                        <?php
                                    }
                                ?>
                            </div>

                            <div class='span12' style="margin-top: 20px">
                                <div class='span4'>
                                    <h3>General</h3>
                                    <ul class="unstyled">
                                        <li><span>Product Code: </span><?php echo $record['product_code']; ?></li>
                                        <li><span>Product Title: </span><?php echo stripslashes($record['product_title']); ?></li>
                                        <li><span>Product Description: </span><?php echo stripslashes($record['product_description']); ?></li>
                                        <li><span>Category: </span><?php echo stripslashes($record['gc_name']) . ' -> ' . stripslashes($record['pc_name']) . ' -> ' . stripslashes($record['cc_name']); ?></li>
                                        <li><span>Your Price: </span><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($record['product_seller_price'], 2); ?></li>
                                        <li><span>Shipping charge: </span><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($record['product_shipping_charge'], 2); ?></li>
                                        <li><span>Gift-wrap charge: </span><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($record['product_gift_charge'], 2); ?></li>
                                        <li><span>Price to Customer: </span><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($record['product_price'], 2); ?></li>
                                        <li><span>Last Modified: </span><?php echo date('d-M-Y h:i A', strtotime($record['product_timestamp'])); ?></li>
                                        <li><span>View Product: </span><a href='<?php echo getProductUrl($record['product_id']); ?>' target="_blank">Click here</a></li>
                                    </ul>
                                </div>

                                <div class='span4 offset1'>
                                    <h3>Details</h3>
                                    <ul class="unstyled span12" style="margin-bottom: 0">
                                        <li class="span4"><strong>Color</strong></li>
                                        <li class="span4"><strong>Size</strong></li>
                                        <li class="span4"><strong>Stock remaining</strong></li>
                                    </ul>
                                    <?php
                                        foreach ($product_detail_record as $pkey => $pvalue)
                                        {
                                            ?>
                                            <ul class="unstyled span12">
                                                <li class="span4"><?php echo $pvalue['pd_color_name']; ?></li>
                                                <li class="span4"><?php echo $pvalue['pd_size']; ?></li>
                                                <li class="span4"><?php echo number_format($pvalue['pd_quantity']); ?> <a href='#' class="pull-right btn mini yellow">Update</a></li>
                                            </ul>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->	
</div>
<!-- END PAGE -->