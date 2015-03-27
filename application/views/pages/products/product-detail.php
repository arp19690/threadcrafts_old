<script type="text/javascript" src="<?php echo JS_PATH; ?>/jquery.colorbox-min.js"></script>
<script>
    $(document).ready(function () {
        $('.zoom-picture').click(function (event) {
            event.preventDefault();
            $.colorbox({
                href: $(this).find('img').attr('src'),
                maxWidth: '95%',
                maxHeight: '95%'
            });
        });
    });
</script>

<!--  ==========  -->
<!--  = Main container =  -->
<!--  ==========  -->
<div class="container">
    <div class="push-up top-equal blocks-spacer">

        <!--  ==========  -->
        <!--  = Product =  -->
        <!--  ==========  -->
        <div class="row blocks-spacer">
            <!--  ==========  -->
            <!--  = Preview Images =  -->
            <!--  ==========  -->
            <div class="span5">
                <div class="product-preview">
                    <div class="picture">
                        <a href="#" class="zoom-picture" title="Click to preview">
                            <img src="<?php echo getImage($record['images_arr'][0]['pi_image_path']); ?>" alt="<?php echo $record['images_arr'][0]['pi_image_title']; ?>" width="940" height="940" id="mainPreviewImg" />
                        </a>
                    </div>
                    <div class="thumbs clearfix">
                        <?php
                            foreach ($record['images_arr'] as $pImageKey => $pImageValue)
                            {
                                $thumb_active_class = '';
                                if ($pImageKey == 0)
                                {
                                    $thumb_active_class = ' active';
                                }

                                echo '<div class="thumb ' . $thumb_active_class . '">
                                                    <a href="#mainPreviewImg"><img class="lazy" src="' . getImage($pImageValue['pi_image_path']) . '" data-original="' . getImage($pImageValue['pi_image_path']) . '" alt="' . $pImageValue['pi_image_title'] . '" width="940" height="940" /></a>
                                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Title and short desc =  -->
            <!--  ==========  -->
            <div class="span7">
                <div class="product-title">
                    <h1 class="name"><?php echo stripslashes($record["product_title"]); ?></h1>
                    <div class="meta">                    
                        <span class="tag"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($record["product_price"], 2); ?></span>
                        <span class="stock">
                            <?php
                                $orderType = 'in-stock';
                                $orderType_className = "btn-success";
                            ?>
                            <span class="btn <?php echo $orderType_className; ?>"><?php echo $orderType; ?></span> 
                        </span>
                    </div>
                </div>
                <div class="product-description">
                    <p>Product Code: <strong>#<?php echo $record["product_code"]; ?></strong></p>
                    <p><?php echo stripslashes($record["product_description"]); ?></p>
                    <hr />

                    <!--  ==========  -->
                    <!--  = Add to cart form =  -->
                    <!--  ==========  -->
                    <form action="<?php echo base_url("products/addToCart"); ?>" class="form form-inline clearfix validate-form" method='post'>
                        <input type='hidden' name='product_id' value='<?php echo $record["product_id"]; ?>'/>
                        <div class="numbered">
                            <input type="text" name="product_quantity" value="1" class="tiny-size" id="product_quantity"/>
                            <span class="clickable add-one icon-plus-sign-alt"></span>
                            <span class="clickable remove-one icon-minus-sign-alt"></span>
                        </div>
                        <?php
//                            prd($record['product_detail_array']);

                            echo '&nbsp;';
                            echo '<select name="product_size" id="product_size" class="span1 required" required="required">';
                            echo '<option value="">Size</option>';
                            foreach (json_decode($record['product_detail_array']) as $pdKey => $pdValue)
                            {
                                if (isset($pdValue->size) && !empty($pdValue->size))
                                    echo '<option value="' . $pdValue->size . '">' . $pdValue->size . '</option>';
                            }
                            echo '</select>';

                            echo '<span id="product-color-here"></span>';
                            echo '<span id="availability-here" class="inline-block"></span>';
                        ?>
                        <button class="add-to-cart-btn btn btn-success pull-right"><i class="icon-shopping-cart"></i> &nbsp; Add to cart</button>
                    </form>

                    <hr />

                    <p><strong>Leaves warehouse in 4-5 working days.</strong></p>

                    <hr/>

                    <!--  ==========  -->
                    <!--  = Share buttons =  -->
                    <!--  ==========  -->
                    <div class="share-item push-down-20">
                        <div class="row-fluid">
                            <div class="span4">
                                Share this product with your friends:
                            </div>
                            <div class="span8">
                                <div class="social-networks">                                  
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_share" fb:share:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52dc2b230b860ab0"></script>
                                    <!-- AddThis Button END -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More Buttons -->
                    <div class="store-buttons">
                        <?php
                            if ($is_in_wishlist == TRUE)
                            {
                                $heart_class_name = "icon-heart";
                                $wishlist_text = "In my wishlist";
                            }
                            else
                            {
                                $heart_class_name = "icon-heart-empty";
                                $wishlist_text = "Add to wishlist";
                            }
                        ?>

                        <?php
                            if (isset($this->session->userdata["user_id"]))
                            {
                                ?>
                                <i class="<?php echo $heart_class_name; ?> wishlist-heart"></i> <a href="<?php echo $record["product_id"]; ?>" id="add-to-wishlist" ><?php echo $wishlist_text; ?></a>
                                <?php
                            }
                            else
                            {
                                ?>
                                <i class="<?php echo $heart_class_name; ?> wishlist-heart"></i> <a href="<?php echo $record["product_id"]; ?>" id="" class="please_login" ><?php echo $wishlist_text; ?></a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Tabs with more info =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-1" data-toggle="tab">Description</a>
                    </li>
                    <li>
                        <a href="#tab-2" data-toggle="tab">Shipping Details</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="fade in tab-pane active" id="tab-1">
                        <h3>Product Description</h3>
                        <p><?php echo $record["product_description"]; ?></p>
                    </div>
                    <div class="fade tab-pane" id="tab-2">
                        <p>
                            <?php
                                $model = new Common_model();
                                $shipping_record = $model->fetchSelectedData("static_page_content", TABLE_STATIC_PAGES, array("static_page_key" => "shipping-details"));
                                echo stripslashes($shipping_record[0]["static_page_content"]);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!--  ==========  -->
        <!--  = Comments using disqus =  -->
        <!--  ==========  -->
        <br/>
        <div class="row">
            <div class="span12">
                <h3>Comments</h3>
                <div id="disqus_thread"></div>
                <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '<?php echo DISQUS_SHORTNAME; ?>'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var dsq = document.createElement('script');
        dsq.type = 'text/javascript';
        dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<?php
    if (!empty($similar_records))
    {
//        prd($similar_records);
        ?>
        <!--  ==========  -->
        <!--  = Similar Products =  -->
        <!--  ==========  -->
        <div class="boxed-area no-bottom">
            <div class="container">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="row">
                    <div class="span12">
                        <div class="main-titles lined">
                            <h2 class="title"><span class="light">Similar</span> Products</h2>
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Related products =  -->
                <!--  ==========  -->
                <div class="row popup-products">

                    <?php
                    foreach ($similar_records as $srKey => $srValue)
                    {
                        $product_images = getProductImages($srValue['product_image_and_color']);
                        ?>
                        <!--  ==========  -->
                        <!--  = Products =  -->
                        <!--  ==========  -->
                        <div class="span3">
                            <div class="product">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <img class="lazy" src="<?php echo $product_images[0]['url']; ?>" data-original="<?php echo $product_images[0]['url']; ?>" alt="<?php echo $srValue["product_title"]; ?>" width="540" height="374" />
                                            <div class="img-overlay">
                                                <a href="<?php echo getProductUrl($srValue["product_id"]); ?>" class="btn more btn-primary">More</a>
                                                <a href="<?php echo base_url("products/addToCartGet/" . $srValue["product_id"]); ?>" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">
                                            <?php
                                            if (!empty($srValue["product_striked_price"]))
                                            {
//                                                echo '<span class="striked">' . displayProductPrice($srValue["product_striked_price"], $srValue["profit_percent"]) . '</span>';
                                                echo '<span class="striked">' . number_format($srValue["product_striked_price"]) . '</span>';
                                            }
                                            ?>
                                            <span class="red-clr"><?php echo displayProductPrice($srValue["product_price"], $srValue["profit_percent"]); ?></span>
                                        </h4>
                                        <h5 class="no-margin"><?php echo $srValue["product_title"]; ?></h5>
                                    </div>
                                    <p class="desc"><?php echo substr($srValue["product_description"], 0, 100); ?></p>
            <!--                                    <p class="center-align stars">
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star"></span>
                                    </p>-->
                                </div>
                            </div>
                        </div> <!-- /product -->
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <?php
    }
?>

<script>
    $(document).ready(function () {
        $("#add-to-wishlist").click(function (event) {
            event.preventDefault();
            var product_id = $(this).attr("href");
            var product_quantity = $("#product_quantity").val();
            $.ajax({
                url: "<?php echo base_url("ajax/addToWishlist"); ?>" + "/" + product_id + "/" + product_quantity,
                success: function (response) {
                    if (response == "added")
                    {
                        $("#add-to-wishlist").html("In my wishlist");
                        $(".wishlist-heart").addClass("icon-heart")
                        $(".wishlist-heart").removeClass("icon-heart-empty")
                    }
                    else if (response == "removed")
                    {
                        $("#add-to-wishlist").html("Add to wishlist");
                        $(".wishlist-heart").removeClass("icon-heart")
                        $(".wishlist-heart").addClass("icon-heart-empty")
                    }
                }
            });
        });

        $('#product_size').change(function () {
            var product_size = $(this).val();
            if (product_size != '')
            {
                $('#product-color-here').html('Please wait...');
                $.ajax({
                    url: '<?php echo base_url('ajax/getProductColorsOnSize/' . $record['product_id']); ?>/' + product_size,
                    success: function (response) {
                        $('#product-color-here').html(response);
                    }
                });
            }
            else
            {
                $('#product-color-here').html('');
            }
        });

        $(document).on('click', '#product_color option', function () {
            var stock = $(this).attr('data-stock');
            if (stock == '0' || stock == '')
            {
                $('span#availability-here').html('<p>Out of stock</p>');
                $('div.meta span.stock span').html('Out of stock');
                $('div.meta span.stock span').removeClass();
                $('div.meta span.stock span').addClass('btn btn-warning');
                $('button.add-to-cart-btn').hide();
            }
            else
            {
                $('span#availability-here').html('');
                $('div.meta span.stock span').html('In stock');
                $('div.meta span.stock span').removeClass();
                $('div.meta span.stock span').addClass('btn btn-success');
                $('button.add-to-cart-btn').show();
            }
        });
    });
</script>