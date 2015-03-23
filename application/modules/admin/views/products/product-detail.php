<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                <h3 class="page-title">
                    Product Detail
                </h3>
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
                            <?php
                                $product_images_array = getProductImages($record['product_image_and_color']);
                                foreach ($product_images_array as $imageKey => $imageValue)
                                {
                                    $color = $imageValue['color'];
                                    $url = $imageValue['url'];
                                    ?>
                                    <div class="span2">
                                        <img src="<?php echo $url; ?>" alt="<?php echo $color ?>" />
                                        <p><?php echo $color ?></p>
                                    </div>
                                    <?php
                                }
                            ?>
                            <ul class="unstyled span10">
                                <?php
                                    foreach ($record as $key => $value)
                                    {
                                        echo '<li><span>' . ucwords(str_replace("_", " ", $key)) . ':</span> ' . $value . '</li>';
                                    }
                                ?>
                            </ul>

                            <ul class="unstyled span10 offset2">
                                <li class="span4"><h3>Details:</h3></li>
                            </ul>

                            <ul class="unstyled span10 offset2">
                                <li class="span4"><strong>Size</strong></li>
                                <li class="span4"><strong>Color</strong></li>
                                <li class="span4"><strong>Stock remaining</strong></li>
                            </ul>

                            <?php
                                foreach ($product_detail_record as $pkey => $pvalue)
                                {
                                    ?>
                                    <ul class="unstyled span10 offset2">
                                        <li class="span4"><?php echo $pvalue['product_size']; ?></li>
                                        <li class="span4"><?php echo $pvalue['product_color']; ?></li>
                                        <li class="span4"><?php echo $pvalue['product_stock']; ?></li>
                                    </ul>
                                    <?php
                                }
                            ?>
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