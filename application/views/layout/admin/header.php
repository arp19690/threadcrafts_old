<?php
    $model = new Common_model();
    $custom_model = new Custom_model();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Admin Panel | <?php echo SITE_NAME; ?></title>
        <meta name="robots" content="nofollow, noindex"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/css/metro.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/css/style.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/css/style_responsive.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/css/style_default.css" rel="stylesheet" id="style_color" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_ASSETS_PATH; ?>/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>/uniform/css/uniform.default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>/chosen-bootstrap/chosen/chosen.css" />
        <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/data-tables/DT_bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>/uniform/css/uniform.default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/custom.css" />
        <link rel="shortcut icon" href="<?php echo IMAGES_PATH; ?>/favicon.ico" />

        <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery-1.8.3.min.js"></script>	
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="<?php echo base_url("admin"); ?>">
                        <p style="padding-top:10px"><?php echo SITE_NAME; ?></p>
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <img src="<?php echo ADMIN_ASSETS_PATH; ?>/images/menu-toggler.png" alt="" />
                    </a>          
                    <!-- END RESPONSIVE MENU TOGGLER -->	

                    <?php
                        $pending_orders_records = array();

                        $pending_orders_records = $custom_model->getMyOrdersList(NULL, "DESC", "6", "processing");
                        $unprocessed_notification_count = count($pending_orders_records);
                    ?>
                    <!-- BEGIN TOP NAVIGATION MENU -->					
                    <ul class="nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->   
                        <li class="dropdown" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-warning-sign"></i>
                                <?php
                                    if ($unprocessed_notification_count != 0)
                                    {
                                        echo '<span class="badge">' . $unprocessed_notification_count . '</span>';
                                    }
                                ?>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <?php
                                    if ($unprocessed_notification_count != 0)
                                    {
                                        ?>
                                        <li>
                                            <p>You have <?php echo $unprocessed_notification_count; ?> new notifications</p>
                                        </li>
                                        <?php
                                    }

                                    if (!empty($pending_orders_records))
                                    {
                                        foreach ($pending_orders_records as $poKey => $poValue)
                                        {
                                            $payment_id = $poValue["payment_id"];
                                            $product_id = $poValue["product_id"];
                                            $product_title = $poValue["product_title"];
                                            $product_code = $poValue["product_code"];
                                            $payment_time = strtotime($poValue["payment_time"]);
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url('admin/orders/orderDetail/' . $payment_id); ?>">
                                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                                    New order for <?php echo $product_title . " (" . $product_code . ")" ?>
                                                    <span class="time"> - <?php echo getTimeAgo($payment_time); ?></span>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<li><a href="#"><span class="message">You have no pending orders.</span></a></li>';
                                    }
                                ?>
                                <li class="external">
                                    <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->

                        <?php
                            $inbox_records = array();

                            $inbox_records = $model->fetchSelectedData("wc_id,wc_message,full_name,creation_timestamp", TABLE_WEBSITE_CONTACT, array("wc_processed" => "0"), "wc_id", "DESC", "6");
                            $unprocessed_count = count($inbox_records);
                        ?>
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <?php
                                    if ($unprocessed_count != 0)
                                    {
                                        echo '<span class="badge">' . $unprocessed_count . '</span>';
                                    }
                                ?>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <?php
                                    if ($unprocessed_count != 0)
                                    {
                                        echo '<li>
                                                    <p>You have ' . $unprocessed_count . ' new messages</p>
                                                </li>';
                                    }

                                    if (!empty($inbox_records))
                                    {
                                        foreach ($inbox_records as $inKey => $invalue)
                                        {
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url("admin/websiteContact/" . $invalue["wc_id"]); ?>">
                                                    <span class="subject">
                                                        <span class="from"><?php echo $invalue["full_name"] ?></span>
                                                        <span class="time"><?php echo getTimeAgo(strtotime($invalue["creation_timestamp"])); ?></span>
                                                    </span>
                                                    <span class="message">
                                                        <?php echo substr($invalue["wc_message"], 0, 100) . "..."; ?>
                                                    </span>  
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<li><a href="#"><span class="message">You have no unprocessed messages.</span></a></li>';
                                    }
                                ?>

                                <li class="external">
                                    <a href="<?php echo base_url("admin/websiteContact"); ?>">See all messages <i class="m-icon-swapright"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- BEGIN USER LOGIN DROPDOWN -->

                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img alt="<?php echo ucwords($this->session->userdata["admin_username"]); ?>" src="<?php echo ADMIN_ASSETS_PATH; ?>/images/avatar.png" />
                                <span class="username"><?php echo ucwords($this->session->userdata["admin_username"]); ?></span>
                                <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("admin/changepassword"); ?>"><i class="icon-cogs" style="margin-right: 5px;"></i>Change Password</a></li>
                                <li><a href="<?php echo base_url("admin/logout"); ?>"><i class="icon-off" style="margin-right: 5px;"></i>Log Out</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->	
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container row-fluid sidebar-closed">
            <?php
                if ($this->session->flashdata('error'))
                {
                    echo '<div class="login-error">' . $this->session->flashdata('error') . '</div>';
                }

                if ($this->session->flashdata('success'))
                {
                    echo '<div class="login-success">' . $this->session->flashdata('success') . '</div>';
                }
            ?>