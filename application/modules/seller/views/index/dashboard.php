<?php
//    $this->load->view("layout/header");
?>

<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                <h3 class="page-title">
                    Dashboard			
                </h3>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div id="dashboard">
            <!-- BEGIN DASHBOARD STATS -->
            <div class="row-fluid">
                <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="icon-user"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <?php echo number_format($totalusers); ?>
                            </div>
                            <div class="desc">									
                                Users
                            </div>
                        </div>
                        <a class="more" href="<?php echo base_url("admin/users"); ?>">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>						
                    </div>
                </div>
                <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="icon-th-large"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <?php echo number_format($totalproducts); ?>
                            </div>
                            <div class="desc">Products</div>
                        </div>
                        <a class="more" href="<?php echo base_url("admin/products"); ?>">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>						
                    </div>
                </div>
                <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="icon-money"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <?php echo DEFAULT_CURRENCY_SYMBOL . number_format($totalinrearnings, 2); ?>
                            </div>
                            <div class="desc">Earnings in INR</div>
                        </div>
                        <a class="more" href="<?php echo base_url("#"); ?>">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>						
                    </div>
                </div>
                <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                    <div class="dashboard-stat yellow">
                        <div class="visual">
                            <i class="icon-money"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <?php echo '$' . number_format($totalusdearnings, 2); ?>
                            </div>
                            <div class="desc">Earnings in USD</div>
                        </div>
                        <a class="more" href="<?php echo base_url("#"); ?>">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>						
                    </div>
                </div>

            </div>
            <!-- END DASHBOARD STATS -->
            <!--BEGIN TABS-->
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1_1" data-toggle="tab">New Orders</a></li>
                    <li><a href="#tab_1_2" data-toggle="tab">Dispatched Orders</a></li>
                    <li><a href="#tab_1_3" data-toggle="tab">Recent users</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                            <ul class="feeds">
                                <?php
                                    if (!empty($pending_orders_records))
                                    {
                                        foreach ($pending_orders_records as $poKey => $poValue)
                                        {
                                            $product_id = $poValue["product_id"];
                                            $product_title = $poValue["product_title"];
                                            $product_code = $poValue["product_code"];
                                            $product_quantity = $poValue["product_quantity"];
                                            $package_status = $poValue["package_status"];
                                            $payment_time = strtotime($poValue["payment_time"]);
                                            ?>
                                            <li>
                                                <a href="#">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-important">								
                                                                    <i class="icon-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order for <?php echo $product_title . " (" . $product_code . ")" ?>, Quantity - <?php echo $product_quantity; ?>
                                                                    <span class="label label-important label-mini">
                                                                        <?php echo ucwords($package_status); ?>
                                                                        <i class="icon-share-alt"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="col2" style="margin-left: -105px;">
                                                    <div class="date" style="width: 90px;">
                                                        <?php echo getTimeAgo($payment_time); ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<li>No data found</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_2">
                        <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                            <ul class="feeds">
                                <?php
                                    if (!empty($dispatched_orders_records))
                                    {
                                        foreach ($dispatched_orders_records as $doKey => $doValue)
                                        {
                                            $product_id = $doValue["product_id"];
                                            $product_title = $doValue["product_title"];
                                            $product_code = $doValue["product_code"];
                                            $product_quantity = $doValue["product_quantity"];
                                            $package_status = $doValue["package_status"];
                                            $payment_time = strtotime($doValue["payment_time"]);
                                            ?>
                                            <li>
                                                <a href="#">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-important">								
                                                                    <i class="icon-plane"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order for <?php echo $product_title . " (" . $product_code . ")" ?>, Quantity - <?php echo $product_quantity; ?>
                                                                    <span class="label label-warning label-mini">
                                                                        <?php echo ucwords($package_status); ?>
                                                                        <i class="icon-share-alt"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="col2" style="margin-left: -105px;">
                                                    <div class="date" style="width: 90px;">
                                                        <?php echo getTimeAgo($payment_time); ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<li>No data found</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_3">
                        <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                            <ul class="feeds">
                                <?php
                                    if (!empty($new_user_records))
                                    {
                                        foreach ($new_user_records as $nuKey => $nuValue)
                                        {
                                            $user_id = $nuValue["user_id"];
                                            $user_full_name = $nuValue["first_name"] . " " . $nuValue["last_name"];
                                            $register_time = strtotime($nuValue["creation_timestamp"]);
                                            $user_status = $nuValue["user_status"];

                                            if ($user_status == "1")
                                            {
                                                $label_class = "label-success";
                                                $user_status = "Verified";
                                            }
                                            else
                                            {
                                                $label_class = "label-warning";
                                                $user_status = "Unverified";
                                            }
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url('admin/users/userDetail/' . $user_id); ?>">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label <?php echo $label_class; ?>">								
                                                                    <i class="icon-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered - <?php echo $user_full_name . " (" . $user_status . ")"; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2" style="margin-left: -105px;">
                                                        <div class="date" style="width: 90px;">
                                                            <?php echo getTimeAgo($register_time); ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<li>No data found</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--END TABS-->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->		
</div>
<!-- END PAGE -->
<?php
//    $this->load->view("layout/footer");
?>