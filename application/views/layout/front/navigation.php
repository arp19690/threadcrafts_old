<?php
    $model = new Common_model();
    $custom_model = new Custom_model();
?>
<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <script>
                        $(document).ready(function () {
                            var url = window.location.href;
                            var page = url.substr(url.lastIndexOf('/') + 1);
                            $('#mainNavigation a[href*="' + page + '"]').parent('li').addClass('active');
                        });
                    </script>

                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation">
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>" class="dropdown-toggle"> Home </a>
                            </li>
                            <li class="dropdown dropdown-megamenu hidden-phone">
                                <a href="#" class="dropdown-toggle"> Megamenu <b class="caret"></b> </a>
                                <ul class="dropdown-menu megamenu container"><!-- .col-2 for min-width:320px, .col-3 for min-width:480px -->
                                    <li class="row">
                                        <div class="span3">
                                            <ul class="nav nav-pills nav-stacked">
                                                <?php
                                                    $fields = "product_id,product_title,gc_name,pc_name,cc_name";
                                                    $product_records = $custom_model->getAllProductsList($fields, array("product_status" => "1"), "product_id", "DESC", "7");
                                                    foreach ($product_records as $prKey => $prValue)
                                                    {
                                                        echo '<li><a href="' . getProductUrl($prValue["product_id"]) . '">' . $prValue["product_title"] . '</a></li>';
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        <?php
                                            $nested_i = "1";
                                            $nested_grand_i = "1";
                                            $nestedCatArray = $custom_model->getNestedGrandAndParentCategory();
                                            foreach ($nestedCatArray as $nKey => $nValue)
                                            {
                                                if ($nested_i == "1")
                                                {
                                                    echo '<div class="span2">';
                                                }

                                                if (!empty($nValue["grand_cat"]) && !empty($nValue["grand_cat"]["parent_cat"]))
                                                {
//                                                    prd($nValue["grand_cat"]);
                                                    echo '<ul class="nav nav-pills nav-stacked">
                                                                            <li><a href="' . base_url("products/view/" . $nValue["grand_cat"]["gc_name"]) . '">' . $nValue["grand_cat"]["gc_name"] . '</a></li>
                                                                        </ul>
                                                                        <ul class="nav unstyled">';

                                                    foreach ($nValue["grand_cat"]["parent_cat"] as $subKey => $subValue)
                                                    {
                                                        echo '<li><a href="' . base_url("products/view/" . $nValue["grand_cat"]["gc_name"] . "/" . $subValue["pc_name"]) . '">' . $subValue["pc_name"] . '</a></li>';
                                                    }

                                                    echo '</ul>';
                                                    $nested_i++;
                                                    if ($nested_i == "3")
                                                    {
                                                        $nested_i = "1";
                                                    }
                                                }

                                                if ($nested_i == "1")
                                                {
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url("products"); ?>">All Products</a></li>
                            <li><a href="<?php echo base_url("blog"); ?>" target="_blank">Blog</a></li>
                            <?php
                                if (!isset($this->session->userdata["user_id"]))
                                {
                                    echo '<li><a href="' . base_url("login") . '">Login</a></li>';
                                }
                            ?>
                        </ul>

                        <form class="navbar-form pull-right" action="<?php echo base_url("products/search"); ?>" method="get">
                            <button type="submit"><span class="icon-search"></span></button>
                            <?php
                                $user_search_query = "";
                                if (isset($this->session->userdata["user_search_query"]))
                                    $user_search_query = $this->session->userdata["user_search_query"];
                            ?>
                            <input type="text" class="span1" name="search" id="navSearchInput" value="<?php echo $user_search_query; ?>" placeholder="Search" autocomplete="off"/>
                        </form>
                    </div><!-- /.nav-collapse -->
                </div>

                <?php
                    if (!isMobileDevice())
                    {
                        $cart_subtotal = 0;
                        $cart_records = array();
                        if (isset($this->session->userdata["user_id"]))
                        {
                            $user_id = $this->session->userdata["user_id"];
                            $cart_records = $custom_model->getCartDetails($user_id);
                            foreach ($cart_records as $key => $value)
                            {
                                $cart_subtotal = $cart_subtotal + ($value["cart_quantity"] * $value["product_price"]);
                            }
                        }
                        ?>
                        <!--  ==========  -->
                        <!--  = Cart =  -->
                        <!--  ==========  -->
                        <div class="span3 hidden-phone">
                            <div class="cart-container" id="cartContainer">
                                <div class="cart">
                                    <p class="items">CART <span class="dark-clr cart_total_items">(<?php echo count($cart_records) ?>)</span></p>
                                    <p class="dark-clr hidden-tablet cart_total_value"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($cart_subtotal, 2); ?></p>
                                    <a href="<?php echo base_url("checkout"); ?>" class="btn btn-danger">
                                        <i class="icon-shopping-cart"></i>
                                    </a>
                                </div>

                                <div class="open-panel">
                                    <?php
                                    if (!empty($cart_records))
                                    {
                                        foreach ($cart_records as $cpKey => $cpValue)
                                        {
                                            $total_price = $cpValue["cart_quantity"] * $cpValue["product_price"];
                                            ?>
                                            <div class="item-in-cart clearfix">
                                                <div class="image">
                                                    <img src="<?php echo getImage($cpValue['pi_image_path']); ?>" width="124" height="124" alt="<?php echo stripslashes($cpValue["product_title"]); ?>" />
                                                </div>
                                                <div class="desc">
                                                    <strong><a href="<?php echo getProductUrl($cpValue["product_id"]); ?>"><?php echo stripslashes($cpValue["product_title"]); ?></a></strong>

                                                    <span class="light-clr qty">
                                                        Size: <?php echo $cpValue["pd_size"]; ?>,
                                                        &nbsp;
                                                    </span>

                                                    <span class="light-clr qty">
                                                        Color: <?php echo $cpValue["pd_color_name"]; ?>,
                                                        &nbsp;
                                                    </span>

                                                    <span class="light-clr qty">
                                                        Quantity: <?php echo $cpValue["cart_quantity"]; ?>
                                                        &nbsp;
                                                        <a href="#removeFromCart" class="icon-remove-sign" data-cart="<?php echo $cpValue["cart_id"]; ?>" title="Remove Product"></a>
                                                    </span>

                                                </div>
                                                <div class="price">
                                                    <strong><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($total_price, 2); ?></strong>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="summary">
                                            <div class="line">
                                                <div class="row-fluid">
                                                    <div class="span6">Cart Subtotal:</div>
                                                    <div class="span6 align-right size-16 cart_total_value"><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($cart_subtotal, 2); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="proceed">
                                            <a href="<?php echo base_url("checkout"); ?>" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
                                            <!--<small>Shipping costs and taxes extra, if any.</small>-->
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        echo '<p class="empty">No products in your cart.</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div> <!-- /cart -->
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div> <!-- /main menu -->

<?php
    if (isset($breadcrumbArray))
    {
        ?>
        <!--  ==========  -->
        <!--  = Breadcrumbs =  -->
        <!--  ==========  -->
        <div class="darker-stripe">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <?php
                            if (!empty($breadcrumbArray))
                            {
                                foreach ($breadcrumbArray as $bKey => $bValue)
                                {
                                    if (!empty($bKey))
                                    {
                                        ?>
                                        <li><span class="icon-chevron-right"></span></li>
                                        <li>
                                            <a href="<?php echo $bValue; ?>"><?php echo $bKey; ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }