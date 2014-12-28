<?php
    $controller = $this->router->fetch_class();
    $method = $this->router->fetch_method();
    $path = $controller . "/" . $method;

    $model = new Common_model();
    $custom_model = new Custom_model();
    $about_us_short_record = $model->fetchSelectedData("static_page_content", TABLE_STATIC_PAGES, array("static_page_key" => "about-us-short"));
    $about_us_short_content = $about_us_short_record[0]["static_page_content"];
    $static_records = $model->fetchSelectedData("static_page_key,static_page_title", TABLE_STATIC_PAGES, NULL, "static_page_title");
    $gc_records = $model->fetchSelectedData("gc_name", TABLE_GRAND_CATEGORY, NULL, "gc_name");
    $latest_records = $model->fetchSelectedData("product_id ,product_title", TABLE_PRODUCTS, array("product_status" => "1"), "product_id", "DESC", "7");
    $popular_records = $custom_model->getPopularProducts("p.product_id,p.product_title", array("product_status" => "1"), NULL, NULL, "7");
?>
<footer>
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h2 class="pacifico"><?php echo SITE_NAME; ?> &nbsp;</h2>
                    <div><?php echo $about_us_short_content; ?></div>
                </div>
                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title">Facebook</h3>
                    </div>
                    <div class="bordered">
                        <div class="fill-iframe">
                            <div class="fb-like-box" data-href="<?php echo FACEBOOK_SOCIAL_LINK; ?>" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Newsletters</span> Signup</h3>
                    </div>
                    <p>Signup for our newsletters and we will keep you posted about the promotional offers and schemes. We do not spam.</p>

                    <div id="mc_embed_signup">
                        <form action="<?php echo base_url("index/newsletterSignup"); ?>" method="post"  name="mc-embedded-subscribe-form" class="validate form form-inline validate-form">
                            <div class="mc-field-group">
                                <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
                                <input type="email" value="" placeholder="Enter your e-mail address" name="user_email" class="required email" id="mce-EMAIL">
                                <input type="submit" value="Subscribe" name="subscribe"  class="btn btn-primary">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div> 
    <div class="foot-dark">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Main</span> Navigation</h3>
                    </div>
                    <ul class="nav bold">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url("blog"); ?>">Blog</a></li>
                        <li><a href="<?php echo base_url("products"); ?>">Products</a></li>
                        <li><a href="<?php echo base_url("contact-us"); ?>">Contact Us</a></li>
                        <?php
                            foreach ($static_records as $srKey => $srValue)
                            {
                                if ($srValue["static_page_key"] != "about-us-short")
                                {
                                    echo '<li><a href="' . base_url($srValue["static_page_key"]) . '">' . $srValue["static_page_title"] . '</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </div>

                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Category</span> Navigation</h3>
                    </div>
                    <ul class="nav">
                        <?php
                            foreach ($gc_records as $gKey => $gValue)
                            {
                                echo '<li><a href="' . base_url("products/view/" . urlencode($gValue["gc_name"])) . '">' . $gValue["gc_name"] . '</a></li>';
                            }
                        ?>
                    </ul>
                </div>

                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Latest Products</span> Navigation</h3>
                    </div>
                    <ul class="nav">
                        <?php
                            foreach ($latest_records as $lKey => $lValue)
                            {
                                echo '<li><a href="' . getProductUrl($lValue["product_id"]) . '">' . $lValue["product_title"] . '</a></li>';
                            }
                        ?>
                    </ul>
                </div>

                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Popular Products</span> Navigation</h3>
                    </div>
                    <ul class="nav">
                        <?php
                            foreach ($popular_records as $pKey => $pValue)
                            {
                                echo '<li><a href="' . getProductUrl($pValue["product_id"]) . '">' . $pValue["product_title"] . '</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div> 

    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyright <?php echo date("Y") . ". All Rights Reserved."; ?> <a target="_blank" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>.
                </div>
            </div>
        </div>
    </div> <!-- /bottom footer -->
</footer> <!-- /footer -->

<?php
    if (!isset($this->ci->session->userdata["user_id"]))
    {
        ?>

        <!--  ==========  -->
        <!--  = Modal Windows =  -->
        <!--  ==========  -->

        <!--  = Login =  -->
        <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="loginModalLabel"><span class="light">Login</span> To <?php echo SITE_NAME; ?></h3>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url("login"); ?>">
                    <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="user_email">Email</label>
                        <div class="controls">
                            <input type="text" class="input-block-level" id="user_email" placeholder="Email" name="user_email" required="required"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="user_password">Password</label>
                        <div class="controls">
                            <input type="password" class="input-block-level" id="user_password" placeholder="Password" name="user_password" required="required"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary input-block-level bold higher">
                        LOG IN
                    </button>
                </form>
                <p class="center-align push-down-0">
                    <a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Forgot your password?</a>
                </p>
            </div>
        </div>

        <!--  = Register =  -->
        <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="registerModalLabel"><span class="light">Register</span> To <?php echo SITE_NAME; ?></h3>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url("register"); ?>">
                    <input type='hidden' name='url' value='<?php echo current_url(); ?>'/>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="first_name">First Name</label>
                        <div class="controls">
                            <input type="text" class="input-block-level" id="first_name" placeholder="First Name" name="first_name" required="required">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="last_name">Last Name</label>
                        <div class="controls">
                            <input type="text" class="input-block-level" id="last_name" placeholder="Last Name" name="last_name" required="required">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="user_email">Email</label>
                        <div class="controls">
                            <input type="text" class="input-block-level" id="user_email" placeholder="Email" name="user_email" required="required">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="user_password">Password</label>
                        <div class="controls">
                            <input type="password" class="input-block-level" id="user_password" placeholder="Password" name="user_password" required>
                        </div>
                    </div>

                    <p class="center-align push-down-0">
                        By using <?php echo SITE_NAME; ?>, I agree to the<br/>
                        <a href="<?php echo base_url('static/terms'); ?>">Terms &amp; Conditions</a>
                    </p><br/>

                    <button type="submit" class="btn btn-danger input-block-level bold higher">
                        REGISTER
                    </button>
                </form>
                <p class="center-align push-down-0">
                    <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
                </p>
            </div>
        </div>

        <!--  = Forgot your password =  -->
        <div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url("forgot-password"); ?>">
                    <div class="control-group">
                        <label class="control-label hidden shown-ie8" for="user_email">Email</label>
                        <div class="controls">
                            <input type="email" class="input-block-level" id="user_email" placeholder="Email" name="user_email" required="required">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary input-block-level bold higher">
                        SEND
                    </button>
                </form>
            </div>
        </div>

        <?php
    }
?>
</div>

<script src="<?php echo JS_PATH; ?>/underscore/underscore-min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/bootstrap.min.js" type="text/javascript"></script>
<?php
    if ($path == 'index/index')
    {
        ?>
        <!--  = Slider Revolution =  -->
        <script src="<?php echo JS_PATH; ?>/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = '<?php echo DISQUS_SHORTNAME; ?>'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
                var s = document.createElement('script');
                s.async = true;
                s.type = 'text/javascript';
                s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
            }());
        </script>
        <?php
    }
?>
<script src="<?php echo JS_PATH; ?>/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<?php
    $include_array = array(
        'index/register',
        'user/myAccount',
        'cart/checkoutStepTwo',
    );

    $includeGoogleJS = FALSE;
    if (in_array($path, $include_array))
    {
        $includeGoogleJS = TRUE;
    }

    if ($includeGoogleJS == TRUE)
    {
        ?>
        <!--  = Google Maps API =  -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>
        <?php
    }
?>
<script src="<?php echo JS_PATH; ?>/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/custom.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $(".item-in-cart .icon-remove-sign").click(function () {
            var rowid = $(this).attr("href");
            $.ajax({
                dataType: "json",
                url: "<?php echo base_url("ajax/removeProductFromCartAjax"); ?>" + "/" + rowid,
                success: function (response) {
                    if (response.total_items == "0")
                    {
                        $("#cartContainer .open-panel").remove();
                        $("#cartContainer .cart .items span.dark-clr").html("(0)");
                        $("#cartContainer .cart .dark-clr").html("0");
                        location.reload();
                    }
                    else
                    {
                        $(".cart_total_value").html(response.cart_price);
                        $(".cart_total_items").html("(" + response.total_items + ")");
                        $(".higher-line .gray-link .cart_total_items").html(response.total_items);
                    }
                }
            });
        });
    });
</script>

<?php
    if (USER_IP != '127.0.0.1')
    {
        ?>
        <!--Google Analytics START-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-48585716-1', 'threadcrafts.in');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');

        </script>
        <!--Google Analytics END-->
        <?php
    }
?>
</body>
</html>