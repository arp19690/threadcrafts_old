<style>
    .profile-classic li:first-child{border-top: 1px solid #f5f5f5;}
    ul.unstyled li > span:first-child{min-width: 130px;display: table-cell;color: #666}
    ul.unstyled li > span{display: table-cell;color: #000}
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
                <p><strong>Status: </strong><?php echo $record['seller_status'] == '1' ? 'Active' : 'Deactivated' ?></p>
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
                                <h3>Logo</h3>
                                <div class="span2">
                                    <p><?php echo $page_title; ?></p>
                                    <img src="<?php echo getImage($record['seller_logo_image']); ?>" alt="<?php echo $page_title; ?>" style="max-width: 100%;max-height: 100px;"/>
                                </div>
                            </div>

                            <div class='span12' style="margin-top: 20px">
                                <div class='span4'>
                                    <h3>Personal Details</h3>
                                    <ul class="unstyled">
                                        <li><span>Owner Name: </span><span><?php echo $record['seller_fullname']; ?></span></li>
                                        <li><span>Email: </span><span><?php echo $record['seller_email']; ?></span></li>
                                        <li><span>Mobile: </span><span><?php echo $record['seller_mobile']; ?></span></li>
                                        <li><span>Joined on: </span><span><?php echo date('d-M-Y h:i A', strtotime($record['seller_joined_date'])); ?></span></li>
                                        <li><span>Last updated on: </span><span><?php echo date('d-M-Y h:i A', strtotime($record['seller_timestamp'])); ?></span></li>
                                        <li><span>Store URL: </span><span><a href='#' target="_blank">Click here</a></span></li>
                                    </ul>
                                </div>
                                <div class='span4'>
                                    <h3>Company Details</h3>
                                    <ul class="unstyled">
                                        <li><span>Company Name: </span><span><?php echo empty($record['seller_company_name']) == TRUE ? 'NA' : stripslashes($record['seller_company_name']); ?></span></li>
                                        <li><span>Company Reg. No.: </span><span><?php echo empty($record['seller_company_regid']) == TRUE ? 'NA' : stripslashes($record['seller_company_regid']); ?></span></li>
                                        <li><span>Address: </span><span><?php echo str_replace('  ', ' ', stripslashes($record['seller_address_line1'] . ' ' . $record['seller_address_line2'] . ' ' . $record['seller_location'] . ' ' . $record['seller_postcode'])); ?></span></li>
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