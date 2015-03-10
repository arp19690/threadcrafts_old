<?php
    if (!isset($meta_title))
        $meta_title = SITE_TITLE;

    if (!isset($meta_keywords))
        $meta_keywords = SEO_KEYWORDS;

    if (!isset($meta_description))
        $meta_description = SEO_DESCRIPTION;

    if (!isset($meta_logo_image))
        $meta_logo_image = IMAGES_PATH . "/logo.png";

    clearstatcache();
    $this->output->set_header('Expires: Tue, 01 Jan 2000 00:00:00 GMT');
    $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');
//    prd($meta_logo_image);
?> 

<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if IE]><meta http-equiv=”X-UA-Compatible” content=”IE=9″><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title><?php echo $meta_title; ?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta name="description" content="<?php echo $meta_description ?>"/>
        <meta name="author" content="<?php echo SITE_NAME; ?>"/>
        <meta name="robots" content="index,follow"/>
        <meta name="robots" content="robots.txt"/>
        <meta property="og:url" content="<?php echo current_url(); ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $meta_title; ?>"/>
        <meta property="og:description" content="<?php echo $meta_description; ?>"/>
        <meta property="og:image" content="<?php echo $meta_logo_image; ?>"/>
        <meta name="geo.region" content="India" />
        <meta property="og:locale" content="en_US" />
        <!--Google plus essentials START-->
        <link href="https://plus.google.com/+ThreadCraftsJodhpur" rel="publisher" />
        <script type="text/javascript" async defer
                src="https://apis.google.com/js/platform.js?publisherid=101035726513260358778">
        </script>
        <!--Google plus essentials END-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo IMAGES_PATH; ?>/apple-touch/144.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo IMAGES_PATH; ?>/apple-touch/114.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo IMAGES_PATH; ?>/apple-touch/72.png"/>
        <link rel="apple-touch-icon-precomposed" href="<?php echo IMAGES_PATH; ?>/apple-touch/57.png"/>
        <link rel="shortcut icon" href="<?php echo IMAGES_PATH; ?>/favicon.ico"/>        
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/colorbox/colorbox.css"/>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="<?php echo JS_PATH; ?>/jquery-core-n-modernizer.min.js"></script>
        <script type="text/javascript">
            if (window.location.hash && window.location.hash == '#_=_') {
                window.location.hash = '';
            }
        </script>
    </head>
    <body class="">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=<?php echo FACEBOOK_APP_ID; ?>";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="please-wait-currency"><h1>Please wait...</h1><h3>while we do the calculation with currency exchange prices for you</h3></div>       
        <header id="header">
            <div class="master-wrapper">
                <div class="darker-row">
                    <div class="container">
                        <div class="row">
                            <div class="span4">
                                <div class="higher-line">
                                    <?php
                                        if (isset($this->session->userdata["user_id"]))
                                        {
                                            echo 'Welcome! <strong>' . $this->session->userdata["first_name"] . " " . $this->session->userdata["last_name"] . '</strong>';
                                        }
                                        else
                                        {
                                            ?>
                                            <a href="#loginModal" role="button" data-toggle="modal">Login</a> or
                                            <a href="#registerModal" role="button" data-toggle="modal">Register</a> or simply, 
                                            <a href='<?php echo base_url('facebook-login'); ?>'><img src="<?php echo IMAGES_PATH . "/buttons/login-with-facebook.png"; ?>" alt="Login with facebook" width="140"/></a>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="span8">
                                <div class="topmost-line">
                                    <div class="higher-line">
                                        <?php
                                            if (isset($this->session->userdata["user_id"]))
                                            {
                                                $model = new Common_model();
                                                $wishlist_count_array = $model->getTotalCount("wishlist_id", TABLE_WISHLIST, array("user_id" => $this->session->userdata["user_id"]));
                                                $myWishlistCount = $wishlist_count_array[0]["totalcount"];
                                                ?>
                                                <a href="<?php echo base_url("myAccount"); ?>" class="gray-link">My account</a>
                                                &nbsp; | &nbsp; 
                                                <a href="<?php echo base_url("myAccount#wishlist"); ?>" class="gray-link header-wishlist">Wishlist (<?php echo $myWishlistCount; ?>)</a>
                                                &nbsp; | &nbsp;  
                                                <a href="<?php echo base_url("checkout"); ?>" class="gray-link">Cart (<span class="cart_total_items"><?php echo $this->cart->total_items(); ?></span>)</a>
                                                &nbsp; | &nbsp;  
                                                <a href="<?php echo base_url("logout"); ?>" class="gray-link">Sign out</a>
                                                &nbsp;
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="<?php echo base_url("checkout"); ?>" class="gray-link">Cart (<?php echo $this->cart->total_items(); ?>)</a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                if ($this->session->flashdata('error'))
                {
                    echo '<div class="alert alert-danger in fade">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    ' . $this->session->flashdata('error') . '
                                </div>';
                }

                if ($this->session->flashdata('success'))
                {
                    echo '<div class="alert alert-success in fade">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    ' . $this->session->flashdata('success') . '
                                </div>';
                }

                if ($this->session->flashdata('warning'))
                {
                    echo '<div class="alert in fade">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    ' . $this->session->flashdata('warning') . '
                                </div>';
                }
            ?>

            <div class="container">
                <div class="row">
                    <div class="span7">
                        <a class="brand" href="<?php echo base_url(); ?>">
                            <img src="<?php echo IMAGES_PATH; ?>/logo.png" alt="Logo" width="55" height="55" class="logo-img"/> 
                            <span class="pacifico"><?php echo SITE_NAME; ?></span> 
                            <span class="tagline"><?php echo SITE_TAGLINE; ?></span> 
                        </a>
                    </div>
                    <div class="span5">
                        <div class="top-right">
                            <div class="icons">
                                <a href="<?php echo FACEBOOK_SOCIAL_LINK; ?>" target="_blank"><span class="zocial-facebook"></span></a>
                                <a href="<?php echo TWITTER_SOCIAL_LINK; ?>" target="_blank"><span class="zocial-twitter"></span></a>
                                <!--<a href="<?php echo ANDROID_APP_URL; ?>" target="_blank"><span class="zocial-android"></span></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
            $this->load->view('layout/front/navigation');
        ?>