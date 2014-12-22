
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3 left-sidebar" id="tourStep1">
                <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                    <!--  ==========  -->
                    <!--  = Sidebar Title =  -->
                    <!--  ==========  -->
                    <div class="underlined">
                        <h3><span class="light">Shop</span> by filters</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Categories =  -->
                    <!--  ==========  -->
                    <div class="accordion-group" id="tourStep2">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categories <b class="caret"></b></a>
                        </div>
                        <div id="filterOne" class="accordion-body collapse in">
                            <div class="accordion-inner">

                                <?php
                                    foreach ($category_name_records as $cKey => $cValue)
                                    {
                                        echo '<a href="#" data-target=".filter--' . $cValue["cc_name"] . '" class="selectable"><i class="box"></i> ' . $cValue["cc_name"] . '</a>';
                                    }
                                ?>

                            </div>
                        </div>
                    </div> <!-- /categories -->

                    <!--  ==========  -->
                    <!--  = Prices slider =  -->
                    <!--  ==========  -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                        </div>
                        <div id="filterPrices" class="accordion-body in collapse" data-currency="<?php echo DEFAULT_CURRENCY_SYMBOL; ?>">
                            <div class="accordion-inner with-slider">
                                <div class="jqueryui-slider-container">
                                    <div id="pricesRange"></div>
                                </div>
                                <?php
                                    $model = new Common_model();
                                    $sub_sql = 'SELECT product_cost_price + ((product_cost_price*profit_percent)/100) as max_price FROM ' . TABLE_PRODUCTS . ' ORDER BY max_price DESC LIMIT 0,1';
                                    $sql = 'SELECT product_cost_price + ((product_cost_price*profit_percent)/100) as min_price, (' . $sub_sql . ') as max_price FROM ' . TABLE_PRODUCTS . ' ORDER BY min_price LIMIT 0,1';
                                    $record = $this->db->query($sql)->result_array();
                                ?>
                                <input type="text" data-initial="<?php echo $record[0]['max_price']; ?>" class="max-val pull-right" disabled />
                                <input type="text" data-initial="<?php echo $record[0]['min_price']; ?>" class="min-val" disabled />
                            </div>
                        </div>
                    </div> <!-- /prices slider -->

                    <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Remove All Filters</a>

                </div>
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="underlined push-down-20">
                    <div class="row">
                        <div class="span4">
                            <h3><?php echo $product_page_heading; ?></h3>
                        </div>
                        <div class="span5 align-right sm-align-left">
                            <div class="form-inline sorting-by" id="tourStep4">
                                <label for="isotopeSorting" class="black-clr">Sort:</label>
                                <select id="isotopeSorting" class="span3">
                                    <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
                <div class="row popup-products">
                    <div id="isotopeContainer" class="isotope-container">

                        <?php
                            $no_results_found = TRUE;
                            if (!empty($records))
                            {
                                $no_results_found = FALSE;
                                foreach ($records as $key => $value)
                                {
//                                    prd($value);
                                    $product_id = $value["product_id"];
                                    $product_title = $value["product_title"];
//                                    $product_size = implode('|', $value['product_size_array']);
//                                    $product_color = implode('|', $value['product_color_array']);
                                    $product_price = getProductPrice($value["product_cost_price"], FALSE, TRUE, TRUE, $value["profit_percent"]);
                                    $category_name = $value["cc_name"];
                                    $product_brand = "Thread Crafts";
                                    $product_images = getProductImages($value['product_image_and_color']);
                                    $product_size = '';
                                    $product_color = '';
                                    ?>

                                    <!--  ==========  -->
                                    <!--  = Single Product =  -->
                                    <!--  ==========  -->
                                    <div class="span3 isotope--target filter--<?php echo $category_name ?>" data-price="<?php echo $product_price; ?>" data-popularity="2" data-size="<?php echo $product_size; ?>" data-color="<?php echo $product_color; ?>" data-brand="<?php echo $product_brand; ?>">
                                        <div class="product">
                                            <div class="product-inner">
                                                <div class="product-img">
                                                    <div class="picture">
                                                        <img class="lazy" width="540" height="374" alt="<?php echo $product_title; ?>" src="<?php echo $product_images[0]['url']; ?>" data-original="<?php echo $product_images[0]['url']; ?>" />
                                                        <div class="img-overlay">
                                                            <a class="btn more btn-primary" href="<?php echo getProductUrl($product_id); ?>">View</a>
                                                            <!--<a class="btn buy btn-danger" href="<?php echo base_url("products/addToCartGet/$product_id"); ?>">Add to Cart</a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-titles no-margin">
                                                    <h4 class="title"><?php echo displayProductPrice($product_price, FALSE); ?></h4>
                                                    <h5 class="no-margin isotope--title"><?php echo $product_title; ?></h5>
                                                </div>
                                                <!--                                                <div class="row-fluid hidden-line">
                                                                                                    <div class="span6">
                                                                                                        <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                                                                                        <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                                                                                    </div>
                                                                                                    <div class="span6 align-right">
                                                                                                        <span class="icon-star stars-clr"></span>
                                                                                                        <span class="icon-star stars-clr"></span>
                                                                                                        <span class="icon-star"></span>
                                                                                                        <span class="icon-star"></span>
                                                                                                        <span class="icon-star"></span>
                                                                                                    </div>
                                                                                                </div>-->
                                            </div>
                                        </div>
                                    </div> <!-- /single product -->

                                    <?php
                                }
                            }
                        ?>

                    </div>
                    <?php
                        if ($no_results_found)
                            echo '<div class="span5"><p>Sorry, no matching results found.</p></div>';
                    ?>
                </div>
                <hr />
            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->