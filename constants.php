<?php

    if ($_SERVER["HTTP_HOST"] == "www.threadcrafts.in" || $_SERVER["HTTP_HOST"] == "threadcrafts.in")
    {
        define("SITE_BASE_URL", "https://threadcrafts.in/");    // When running on server    

        define("FACEBOOK_APP_ID", "351474381662422");
        define("FACEBOOK_SECRET_ID", "355af5a727e13b8669fb00c6e9e85199");

        // redirect to HTTPS 
        if ($_SERVER['HTTPS'] != "on")
        {
            $redirect = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header("Location:$redirect");
        }
    }
    elseif ($_SERVER["REMOTE_ADDR"] == "127.0.0.1")
    {
        define("SITE_BASE_URL", "http://localhost/work/svn/threadcrafts/");    // When running locally

        define("FACEBOOK_APP_ID", "1399753200274986");
        define("FACEBOOK_SECRET_ID", "f874ac703456d51b060f9c684a29934c");
    }

    define('IS_LIVE', FALSE);

    if (IS_LIVE == TRUE)
    {
        $paypal_form_url = 'https://www.paypal.com/cgi-bin/webscr';
    }
    else
    {
        $paypal_form_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    }

    define('PAYMENT_GATEWAY_MERCHANT_ID', '30098');
    define('PAYMENT_GATEWAY_ACCESS_CODE', 'AVPK02BI61BK03KPKB');
    define('PAYMENT_GATEWAY_ENCRYPTION_KEY', 'A2213928216B31805B54641ECAD11A26');

    $payment_gateway_base_url = "https://secure.ccavenue.com";
    define('PAYMENT_GATEWAY_BASE_URL', $payment_gateway_base_url);
    define("PAYPAL_FORM_URL", $paypal_form_url);
    define("PAYPAL_EMAIL", "threadcraftsin@gmail.com");

    define("TWITTER_DATA_WIDGET_ID", "440245931166822400");
    define("FACEBOOK_CALLBACK_URL", SITE_BASE_URL . "index/loginWithFacebook");

    define("SITE_NAME", "Thread Crafts");
    define("SITE_TAGLINE", "Authentic weaves of culture");
    define("SITE_TITLE", SITE_NAME . " | " . SITE_TAGLINE);
    define("SITE_EMAIL", "support@threadcrafts.in");
    define("SITE_EMAIL_GMAIL", "threadcraftsin@gmail.com");
    define("SITE_CONTACT_NUMBER", "+91-9414412650");
    define("SITE_CONTACT_NUMBER_ARPIT", "+91-8560023664");
    define("SITE_URL", "https://www.threadcrafts.in");
//    define("SITE_BASE_URL", dirname($_SERVER['PHP_SELF']));
    define("SITE_HOST_URL", "https://" . $_SERVER['HTTP_HOST']);
    define("SITE_HTTP_URL", "https://" . $_SERVER['HTTP_HOST'] . SITE_BASE_URL);

    define("SEO_KEYWORDS", "designer, sarees, lehenga, turban, bangles, accessories, ethnic, thread, crafts, bridal, wedding, handicraft, party, authentic, embroidery, leading, dealers");
    define("SEO_DESCRIPTION", "We are the leading dealers, exporters and suppliers of Designer, Bandhej, Bridal, Embroidered, Handwork, Party-wear & Printed Sarees, Ethnic Jodhpur Men's/Women's Wear and Accessories, Turbans, Rajasthani Ethnic Turbans.");

    define("ADMIN_TIMEOUT_TIME", 1800);
    define("SELLER_TIMEOUT_TIME", 1800);
    define("USER_TIMEOUT_TIME", 1800);
    define("USER_IP", $_SERVER["REMOTE_ADDR"]);
    define("USER_AGENT", $_SERVER["HTTP_USER_AGENT"]);

    define("USE_SALT", "mySaltKey");
    define("DEFAULT_CURRENCY", "INR");
    define("DEFAULT_CURRENCY_SYMBOL", "₹");

    define('CSS_PATH', SITE_BASE_URL . 'assets/front/css');
    define('JS_PATH', SITE_BASE_URL . 'assets/front/js');
    define('IMAGES_PATH', SITE_BASE_URL . 'assets/front/images');
    define("ADMIN_ASSETS_PATH", SITE_BASE_URL . "assets/admin/assets");

    define("USER_IMG_WIDTH", 300);
    define("USER_IMG_HEIGHT", 300);
    define("USER_IMG_PATH", SITE_BASE_URL . "/resources/user-images");
    
    define("SELLER_COVER_IMG_WIDTH", 1100);
    define("SELLER_COVER_IMG_HEIGHT", 360);
    define("SELLER_COVER_IMG_PATH", SITE_BASE_URL . "/resources/seller-cover-images");

    define("DISQUS_SHORTNAME", "threadcrafts");
    define("FACEBOOK_SOCIAL_LINK", "https://www.facebook.com/ThreadCraftsIn");
    define("TWITTER_SOCIAL_LINK", "https://twitter.com/ThreadCrafts");
    define("GOOGLE_PLUS_SOCIAL_LINK", "https://www.google.com/+ThreadCraftsJodhpur");
    define("ANDROID_APP_URL", "#");
    define("NO_PRODUCT_IMG_PATH", IMAGES_PATH . "/no-image.png");

    define("PRODUCT_IMG_WIDTH_SMALL", 300);
    define("PRODUCT_IMG_HEIGHT_SMALL", NULL);
    define("PRODUCT_IMG_WIDTH_LARGE", 700);
    define("PRODUCT_IMG_HEIGHT_LARGE", NULL);
    define("PRODUCT_IMG_PATH_LARGE", "resources/product-images");
    define("PRODUCT_IMG_PATH_SMALL", "resources/product-images/small");

    define("PRODUCT_DESC_MIN_LENGTH", 300);

    define("SELLER_LOGO_PATH", "resources/seller-logos");

    define("MIN_PRODUCT_IMAGES", 3);
    define("MAX_PRODUCT_IMAGES", 5);

    define("SHIPPING_PARTNER", "gati");
    define("SHIPPING_CODE", "GATI");

    define("TAX_PROFIT_MARGIN_PERCENT", 20);
    define("TAX_PAYPAL_PERCENT", 5);

    define("SERVICE_TAX_PERCENT", 14);
    define("PAYMENT_PROCESSING_TAX_PERCENT", 3.5);
    define("CONVENIENCE_FEE_PERCENT", 2);
    