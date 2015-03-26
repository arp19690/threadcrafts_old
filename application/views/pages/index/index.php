

<!--  ==========  -->
<!--  = Slider Revolution =  -->
<!--  ==========  -->
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <ul>
            <li data-transition="premium-random" data-slotamount="3">
                <img src="<?php echo IMAGES_PATH; ?>/slider/1.jpg" alt="slider img" width="1400" height="377" />

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120" 
                     data-y="120"
                     data-speed="1000" 
                     data-start="500" 
                     data-easing="easeInOutBack">
                    We give you best in-class authentic handiwork
                </div>

                <div class="caption lfl small_theme"
                     data-x="120" 
                     data-y="190"
                     data-speed="1000" 
                     data-start="700" 
                     data-easing="easeInOutBack">
                    Take a tour to our store to discover our wide range of hand-crafted and clothing products
                </div>

                <a href="<?php echo base_url('products'); ?>" class="caption lfl btn btn-primary btn_theme"
                   data-x="120" 
                   data-y="260"
                   data-speed="1000" 
                   data-start="900" 
                   data-easing="easeInOutBack">
                    TAKE TOUR
                </a>
            </li><!-- /slide -->

            <li data-transition="premium-random" data-slotamount="3">
                <img src="<?php echo IMAGES_PATH; ?>/slider/2.jpg" alt="slider img" width="1400" height="377" />

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120" 
                     data-y="120"
                     data-speed="1000" 
                     data-start="500" 
                     data-easing="easeInOutBack">
                    Exclusive Royal Ethnic Collection
                </div>

                <div class="caption lfl small_theme"
                     data-x="120" 
                     data-y="190"
                     data-speed="1000" 
                     data-start="700" 
                     data-easing="easeInOutBack">
                    Accessories, Bangles, Clothing, Turbans
                </div>

                <a href="<?php echo base_url('products'); ?>" class="caption lfl btn btn-primary btn_theme"
                   data-x="120" 
                   data-y="260"
                   data-speed="1000" 
                   data-start="900" 
                   data-easing="easeInOutBack">
                    AND MUCH MORE ...
                </a>
            </li><!-- /slide -->

            <li data-transition="premium-random" data-slotamount="3">
                <img src="<?php echo IMAGES_PATH; ?>/slider/3.jpg" alt="slider img" width="1400" height="377" />

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120" 
                     data-y="120"
                     data-speed="1000" 
                     data-start="500" 
                     data-easing="easeInOutBack">
                    Accessories to look different?
                </div>

                <div class="caption lfl small_theme"
                     data-x="120" 
                     data-y="190"
                     data-speed="1000" 
                     data-start="700" 
                     data-easing="easeInOutBack">
                    Where else to go? On Thread Crafts we give you the best accessories for any occasion or party
                </div>

                <a href="<?php echo base_url('products'); ?>" class="caption lfl btn btn-primary btn_theme"
                   data-x="120" 
                   data-y="260"
                   data-speed="1000" 
                   data-start="900" 
                   data-easing="easeInOutBack">
                    See more...
                </a>
            </li><!-- /slide -->

            <!--            <li data-transition="premium-random" data-slotamount="3">
                            <img src="<?php echo IMAGES_PATH; ?>/slider/4.jpg" alt="slider img" width="1400" height="377" />
            
                             texts 
                            <div class="caption lfl big_theme"
                                 data-x="120" 
                                 data-y="140"
                                 data-speed="1000" 
                                 data-start="500" 
                                 data-easing="easeInOutBack">
                                Over 1000 Satisfied Customers
                            </div>
            
                            <div class="caption lfl small_theme"
                                 data-x="120" 
                                 data-y="210"
                                 data-speed="1000" 
                                 data-start="700" 
                                 data-easing="easeInOutBack">
                                Take a look at our profile page on the <a href="http://themeforest.net/user/ProteusThemes" target="_blank">ThemeForest</a>! 
                            </div>
            
                            <a href="http://proteusthemes.ticksy.com/" class="caption lfl btn btn-primary btn_theme"
                               data-x="120" 
                               data-y="280"
                               data-speed="1000" 
                               data-start="900" 
                               data-easing="easeInOutBack">
                                We provide support on Ticksy
                            </a>
                        </li>-->
            <!-- /slide -->
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
    <!--  ==========  -->
    <!--  = Nav Arrows =  -->
    <!--  ==========  -->
    <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
    <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
</div> <!-- /slider revolution -->

<!--  ==========  -->
<!--  = Main container =  -->
<!--  ==========  -->
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="push-up over-slider blocks-spacer">

                <!--  ==========  -->
                <!--  = Three Banners =  -->
                <!--  ==========  -->
                <div class="row">
                    <div class="span4">
                        <a href="#" class="btn btn-block banner">
                            <span class="title"><span class="light">CLASSIC</span> PRODUCTS</span>
                            <em>wide variety of authentic, classy products</em>
                        </a>
                    </div>
                    <div class="span4">
                        <a href="#" class="btn btn-block colored banner">
                            <span class="title"><span class="light">FREE</span> SHIPPING</span>
                            <em>anywhere within India</em>
                        </a>
                    </div>
                    <div class="span4">
                        <a href="#" class="btn btn-block banner">
                            <span class="title"><span class="light">INTERNATIONAL</span> SHIPPING</span>
                            <em>we will soon start shipping to every continent</em>
                        </a>
                    </div>
                </div> <!-- /three banners -->
            </div>
        </div>
    </div>

    <?php
        if (!empty($featured_array))
        {
            ?>

            <!--  ==========  -->
            <!--  = Featured Items =  -->
            <!--  ==========  -->
            <div class="row featured-items blocks-spacer">
                <div class="span12">

                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">Featured</span> Products</h2>
                        <div class="arrows">
                            <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                            <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                        </div>
                    </div>
                </div>

                <div class="span12">
                    <!--  ==========  -->
                    <!--  = Carousel =  -->
                    <!--  ==========  -->
                    <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                        <?php
                        $featured_i = "1";
                        foreach ($featured_array as $fKey => $fValue)
                        {
                            if ($featured_i == "1")
                            {
                                echo '<div class="slide">
                                            <div class="row">';
                            }
                            $f_product_id = $fValue["product_id"];
                            $f_product_title = $fValue["product_title"];
                            $f_product_description = $fValue["product_description"];
                            $f_product_code = $fValue["product_code"];
                            $f_product_price = $fValue["product_price"];
                            $f_profit_percent = $fValue["profit_percent"];
                            $product_image = getProductImages($fValue["product_image_and_color"]);
                            ?>

                            <!--  ==========  -->
                            <!--  = Product =  -->
                            <!--  ==========  -->   
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img class="lazy" src="<?php echo $product_image[0]['url']; ?>" data-original="<?php echo $product_image[0]['url']; ?>" alt="<?php echo $f_product_title; ?>" width="518" height="358" />
                                            <div class="img-overlay">
                                                <a href="<?php echo getProductUrl($f_product_id); ?>" class="btn more btn-primary">View</a>
                                                <!--<a href="<?php echo base_url("products/addToCartGet/$f_product_id"); ?>" class="btn buy btn-danger">Add to Cart</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title"><?php echo displayProductPrice($f_product_price, $f_profit_percent); ?></h4>
                                        <h5 class="no-margin"><?php echo $f_product_title; ?></h5>
                                    </div>
                                    <!--<p class="desc"><?php echo substr($f_product_description, 0, 125); ?></p>-->
                                    <div class="desc"><?php echo substr($f_product_description, 0, 125); ?></div>
                                </div>
                            </div>
                            <?php
                            $featured_i++;

                            if ($featured_i == "4" || count($featured_array) == $featured_i - 1)
                            {
                                echo '</div>
                                        </div>';
                            }

                            if ($featured_i == "4")
                            {
                                $featured_i = "1";
                            }
                        }
                        ?>
                    </div> <!-- /carousel -->
                </div>

            </div>
            <?php
        }
    ?>


</div> <!-- /container -->

<?php
    if (!empty($new_products_array))
    {
        ?>
        <!--  ==========  -->
        <!--  = New Products =  -->
        <!--  ==========  -->
        <div class="boxed-area blocks-spacer">
            <div class="container">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="row">
                    <div class="span12">
                        <div class="main-titles lined">
                            <h2 class="title"><span class="light">New</span> Products in the Shop</h2>
                        </div>
                    </div>
                </div> <!-- /title -->

                <div class="row popup-products blocks-spacer">

                    <?php
                    $new_products_i = "1";
                    foreach ($new_products_array as $npKey => $npValue)
                    {
                        $np_product_id = $npValue["product_id"];
                        $np_product_title = stripslashes($npValue["product_title"]);
                        $np_product_description = stripslashes($npValue["product_description"]);
                        $np_product_code = $npValue["product_code"];
                        $np_product_price = $npValue["product_price"];
                        $np_product_image = getImage($npValue['pi_image_path']);
                        ?>
                        <!--  ==========  -->
                        <!--  = Product =  -->
                        <!--  ==========  -->   
                        <div class="span3">
                            <div class="product">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <img class="lazy" src="<?php echo $np_product_image; ?>" data-original="<?php echo $np_product_image; ?>" alt="<?php echo stripslashes($npValue['pi_image_title']); ?>" width="540" height="374" />
                                            <div class="img-overlay">
                                                <a href="<?php echo getProductUrl($np_product_id); ?>" class="btn more btn-primary">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($np_product_price, 2); ?></h4>
                                        <h5 class="no-margin"><?php echo $np_product_title; ?></h5>
                                    </div>
                                    <div class="desc"><?php echo substr($np_product_description, 0, 125); ?></div>
                                </div>
                            </div>
                        </div> <!-- /product -->
                        <?php
                        $new_products_i++;
                        if ($new_products_i == "5")
                        {
                            $new_products_i = "1";
                            echo '<div class="clearfix"></div> ';
                        }
                    }
                    ?>
                </div>
            </div>
        </div> <!-- /new products -->
        <?php
    }

    if (!empty($popular_products))
    {
        ?>
        <!--  ==========  -->
        <!--  = Most Popular products =  -->
        <!--  ==========  -->
        <div class="most-popular blocks-spacer">
            <div class="container">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="row">
                    <div class="span12">
                        <div class="main-titles lined">
                            <h2 class="title"><span class="light">Most</span> Popular Products</h2>
                        </div>
                    </div>
                </div> <!-- /title -->

                <div class="row popup-products">

                    <?php
                    foreach ($popular_products as $ppKey => $ppValue)
                    {
                        $pp_product_id = $ppValue["product_id"];
                        $pp_product_title = stripslashes($ppValue["product_title"]);
                        $pp_product_description = stripslashes($ppValue["product_description"]);
                        $pp_product_code = $ppValue["product_code"];
                        $pp_product_price = $ppValue["product_price"];
                        $pp_product_image = getImage($ppValue['pi_image_path']);
                        ?>
                        <!--  ==========  -->
                        <!--  = Product =  -->
                        <!--  ==========  -->
                        <div class="span3">
                            <div class="product">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <img class="lazy" src="<?php echo $pp_product_image; ?>" data-original="<?php echo $pp_product_image; ?>" alt="<?php echo stripslashes($ppValue['pi_image_path']); ?>" width="540" height="412" />
                                            <div class="img-overlay">
                                                <a href="<?php echo getProductUrl($pp_product_id); ?>" class="btn more btn-primary">View</a>
                                                <!--<a href="<?php echo base_url("products/addToCartGet/$pp_product_id"); ?>" class="btn buy btn-danger">Add to Cart</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($pp_product_price, 2); ?></h4>
                                        <h5 class="no-margin"><?php echo $pp_product_title . " (" . $pp_product_code . ")"; ?></h5>
                                    </div>
                                    <div class="desc"><?php echo substr($pp_product_description, 0, 125); ?></div>
                                </div>
                            </div>
                        </div> <!-- /product -->
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div> <!-- /most popular -->
        <?php
    }