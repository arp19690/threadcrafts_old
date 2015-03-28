<?php
    if (!isset($meta_title))
        $meta_title = SITE_TITLE;

    if (!isset($meta_keywords))
        $meta_keywords = SEO_KEYWORDS;

    if (!isset($meta_description))
        $meta_description = SEO_DESCRIPTION;

    if (!isset($meta_logo_image))
        $meta_logo_image = IMAGES_PATH . "/logo.png";

//    prd($meta_logo_image);
?> 

<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?php echo $meta_title; ?></title>

        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="<?php echo $meta_keywords ?>">
        <meta name="description" content="<?php echo $meta_description ?>">
        <meta name="author" content="<?php echo SITE_NAME; ?>">

        <!--  = Google Fonts =  -->
        <script type="text/javascript">
            WebFontConfig = {
                google: {
                    families: ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
                }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <!-- Twitter Bootstrap -->
        <link href="<?php echo CSS_PATH; ?>/bootstrap.css" rel="stylesheet">
        <link href="<?php echo CSS_PATH; ?>/responsive.css" rel="stylesheet">
        <!-- Slider Revolution -->
        <link rel="stylesheet" href="<?php echo JS_PATH; ?>/rs-plugin/css/settings.css" type="text/css"/>
        <!-- jQuery UI -->
        <link rel="stylesheet" href="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="<?php echo JS_PATH; ?>/prettyphoto/css/prettyPhoto.css" type="text/css"/>
        <!-- main styles -->

        <link href="<?php echo CSS_PATH; ?>/main.css" rel="stylesheet">
        <link href="<?php echo CSS_PATH; ?>/custom.css" rel="stylesheet">

        <script type="text/javascript" src="<?php echo JS_PATH; ?>/jquery.min.js"></script>
        <!-- Modernizr -->
        <script src="<?php echo JS_PATH; ?>/modernizr.custom.56918.js"></script>    

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo IMAGES_PATH; ?>/apple-touch/144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo IMAGES_PATH; ?>/apple-touch/114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo IMAGES_PATH; ?>/apple-touch/72.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo IMAGES_PATH; ?>/apple-touch/57.png">
        <link rel="shortcut icon" href="<?php echo IMAGES_PATH; ?>/apple-touch/57.png">
    </head>

    <body class=" checkout-page">

        <div class="master-wrapper">

            <div class="container">
                <div class="row">

                    <!--  ==========  -->
                    <!--  = Main content =  -->
                    <!--  ==========  -->
                    <section class="span12">

                        <div class="checkout-container">
                            <div class="row">
                                <div class="span10 offset1">

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

                                    <!--  ==========  -->
                                    <!--  = Header =  -->
                                    <!--  ==========  -->
                                    <header>
                                        <div class="row">
                                            <div class="span2">
                                                <a href="<?php echo base_url(); ?>"><img src="<?php echo IMAGES_PATH; ?>/logo.png" alt="<?php echo SITE_NAME; ?> Logo" width="48" height="48" /></a>
                                            </div>
                                            <div class="span6">
                                                <div class="center-align">
                                                    <h1><span class="light">Review</span> Shopping Cart</h1>
                                                </div>
                                            </div>
                                            <div class="span2">
                                                <div class="right-align">
                                                    <span id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=atw69pYbG1pNJ7mL9O9ic3YNP7hEP9uv8Jl3S2x0MNBmYY37yIHvz"></script></span>
                                                </div>
                                            </div>
                                        </div>
                                    </header>


                                    <!--  ==========  -->
                                    <!--  = Steps =  -->
                                    <!--  ==========  -->
                                    <div class="checkout-steps">
                                        <div class="clearfix">
                                            <div class="step <?php echo $step1_class; ?>">
                                                <div class="step-badge">1</div>
                                                Shopping Cart
                                            </div>
                                            <div class="step <?php echo $step2_class; ?>">
                                                <div class="step-badge">2</div>
                                                Shipping Details
                                            </div>
                                            <div class="step <?php echo $step3_class; ?>">
                                                <div class="step-badge">3</div>
                                                Confirm &amp; Pay
                                            </div>
                                            <div class="step <?php echo $step4_class; ?>">
                                                <div class="step-badge">4</div>
                                                Payment Method
                                            </div>
                                        </div>
                                    </div> <!-- /steps -->
