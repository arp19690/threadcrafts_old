<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3">
                <div class="" id="google-ads">
                    <?php
                        if (USER_IP != '127.0.0.1' && isMobileDevice() == FALSE)
                        {
                            echo getGoogleAdCode();
                        }
                    ?>
                </div>   
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">
                <section id="orders">
                    <h3 class="push-down-20"><span class="light">My</span> Wishlist</h3>
                    <table class="table table-items push-down-50">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (!empty($records))
                                {
                                    foreach ($records as $key => $value)
                                    {
                                        ?>
                                        <tr>
                                            <td class=""><img src="<?php echo getImage($value['pi_image_path']); ?>" alt="<?php echo stripslashes($value['product_title']); ?>" style="max-width: 100px;max-height: 100px"/></td>
                                            <td class="desc"><?php echo stripslashes($value['product_title']); ?></td>
                                            <td class=""><?php echo DEFAULT_CURRENCY_SYMBOL . number_format($value['product_price'], 2); ?></td>
                                            <td class="" style="width: 100px;">
                                                <div class="pull-right text-center">
                                                    <a href="<?php echo getProductUrl($value['product_id']); ?>" title="View" class="btn btn-success push-down-10" target="_blank"><span class="icon icon-search"></span>&nbsp;View</a>
                                                    <a href="<?php echo base_url('user/removeFromWishlist?id=' . getEncryptedString($value['wishlist_id'])); ?>" title="Remove" class="" onclick="return confirm('Sure to remove from your wishlist?')">Remove</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                <td>No records found</td>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </section>
            </section> <!-- /main content -->
        </div>
    </div>
</div>