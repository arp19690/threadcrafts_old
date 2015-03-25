<style>
    .profile-classic li:first-child{border-top: 1px solid #f5f5f5;}
    ul.unstyled li > span:first-child{min-width: 130px;display: table-cell;color: #666}
    ul.unstyled li > span{display: table-cell;color: #000}
    .seller-cover-div{min-height: <?php echo SELLER_COVER_IMG_HEIGHT; ?>px;background-image: url(<?php echo NO_PRODUCT_IMG_PATH; ?>);width: 100%;background-repeat: no-repeat;background-size: cover;background-position: center;margin-bottom: 40px;border: 1px solid #777}
</style>

<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                <h3 class="page-title"><?php echo $page_title; ?></h3>
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
                            <div class="seller-cover-div clear"></div>

                            <div class="clear">
                                <div class="span2"><img src="<?php echo getImage($record['seller_logo_image']); ?>" alt="" style="max-width: 100%;"/></div>
                                <div class="span4">
                                    <h3>Seller details</h3>
                                    <ul class="unstyled">
                                        <li><span>Status: </span><span><?php echo getSellerStatusText($record['seller_status']); ?></span></li>
                                        <li><span>Full name: </span><span><?php echo ucwords($record['seller_fullname']); ?></span></li>
                                        <li><span>Email: </span><span><a href="mailto:<?php echo ($record['seller_email']); ?>"><?php echo ($record['seller_email']); ?></a></span></li>
                                        <li><span>Mobile: </span><span><?php echo ($record['seller_mobile']); ?></span></li>
                                        <li><span>Last modified: </span><span><?php echo date('d-M-Y h:i A', strtotime($record['seller_timestamp'])); ?></span></li>
                                        <li><span>Joined on: </span><span><?php echo date('d-M-Y h:i A', strtotime($record['seller_joined_date'])); ?></span></li>
                                    </ul>
                                </div>

                                <div class="span3">
                                    <h3>Bank details</h3>
                                    <ul class="unstyled">
                                        <li><span>Bank Name: </span><span><?php echo stripslashes($bank_record['sb_bank_name']); ?></span></li>
                                        <li><span>Account Name: </span><span><?php echo stripslashes($bank_record['sb_account_holder']); ?></span></li>
                                        <li><span>Account Number: </span><span><?php echo ($bank_record['sb_account_number']); ?></span></li>
                                        <li><span>IFS Code: </span><span><?php echo ($bank_record['sb_ifsc_code']); ?></span></li>
                                        <li><span>Added on: </span><span><?php echo empty($bank_record['sb_timestamp']) == TRUE ? '' : date('d-M-Y h:i A', strtotime($bank_record['sb_timestamp'])); ?></span></li>
                                    </ul>
                                </div>

                                <div class="span3">
                                    <h3>Seller documents</h3>
                                    <ul class="unstyled">
                                        <?php
                                            if (!empty($document_record))
                                            {
                                                foreach ($document_record as $dKey => $dValue)
                                                {
                                                    ?>
                                                    <li><span><?php echo $dValue['sdc_document_type'] . ' (' . getSellerStatusText($dValue['sdc_status']) . ')'; ?></span><span><a href="<?php echo base_url($dValue['sdc_document_path']); ?>" target="_blank">View</a></span></li>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                echo '<li><p>No documents found</p></li>';
                                            }
                                        ?>
                                    </ul>
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