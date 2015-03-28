<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3">
                <div class="sidebar-item">

                    <!--  ==========  -->
                    <!--  = Sidebar Title =  -->
                    <!--  ==========  -->
                    <div  class="underlined">
                        <h3><span class="light">My</span> Account</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu (affix) =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span3" id="spyMenu">
                            <div class="widget">
                                <ul class="nav nav-pills nav-stacked my-account-sidebar">
                                    <li class="active"><a href="#dashboard">Personal Details <i class="icon-caret-right pull-right"></i></a></li>
                                    <li><a href="#wishlist">My Wishlist <i class="icon-caret-right pull-right"></i></a></li>
                                    <li><a href="#changepassword">Change Password <i class="icon-caret-right pull-right"></i></a></li>
                                </ul>
                            </div>

                            <?php
                                if (!empty($compare_records))
                                {
                                    ?>
                                    <div class="widget widget__compare my-account-compare-list">
                                        <h3><span class="light">Compare</span> Products</h3>
                                        <?php
                                        foreach ($compare_records as $crKey => $crValue)
                                        {
                                            echo '<div class="alert alert-info white-bg in fade">
                                                            <button type="button" id="' . $crValue["compare_id"] . '" class="close" data-dismiss="alert">&times;</button>
                                                           ' . $crValue["product_title"] . '
                                                        </div>';
                                        }
                                        ?>
                                        <div class="push-down-25"></div>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <a href="#" class="margin-top-10 block remove-all-compare">Clear All</a>
                                            </div>
                                            <div class="span6">
                                                <a href="<?php echo $crValue["compare_id"]; ?>" class="btn btn-primary btn-block bold higher remove-from-compare">COMPARE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>

                        </div>
                    </div>

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
                    <h3><span class="light">My</span> Account</h3>
                </div> <!-- /title -->


                <section id="dashboard">
                    <h3 class="push-down-20"><span class="light">Personal</span> Details</h3>
                    <form action="<?php echo base_url("updateAccountInfo"); ?>" method="post" class="tab-content validate-form" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label" for="user_fullname">Full Name<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="user_fullname" name="user_fullname" placeholder="Input your First Name" class="span4 required" required="required" value="<?php echo $user_record["user_fullname"]; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_gender">Gender<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <select class="span4 required" name="user_gender" required="required">
                                    <?php
                                        if ($user_record["user_gender"] == 'male')
                                        {
                                            $male_select = TRUE;
                                            $female_select = FALSE;
                                        }
                                        else
                                        {
                                            $male_select = FALSE;
                                            $female_select = TRUE;
                                        }
                                    ?>
                                    <option value="male" <?php echo set_select('user_gender', $user_record["user_gender"], $male_select); ?>>Male</option>
                                    <option value="female" <?php echo set_select('user_gender', $user_record["user_gender"], $female_select); ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <!--                        <div class="control-group">
                                                    <label class="control-label" for="user_dob">Date of Birth<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text" id="user_dob" name="user_dob" placeholder="Input your Date of Birth" class="span4 datepicker" required="required" value="<?php echo $user_record["user_dob"]; ?>"/>
                                                    </div>
                                                </div>-->
                        <div class="control-group">
                            <label class="control-label" for="user_contact">Contact Number<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="user_contact" name="user_contact" placeholder="Input your Contact Number" maxlength="20" class="span4 required" required="required" value="<?php echo $user_record["user_contact"]; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_address">Address<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <textarea id="user_address" name="user_address" rows="3" placeholder="Input your Address" class="span4 required" required="required" style="resize: none;"><?php echo $user_record["user_address"]; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_location">Location<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="user_location" name="user_location" placeholder="Input your Location" class="span4 required gMapLocation" required="required" value="<?php echo $user_record["user_location"]; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_postcode">Postcode<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="user_postcode" name="user_postcode" placeholder="Input your Postcode" maxlength="10" class="span4 required" required="required" value="<?php echo $user_record["user_postcode"]; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-primary higher bold">UPDATE</button>
                            </div>
                        </div>

                    </form>
                </section>

                <hr />

                <!--  ==========  -->
                <!--  = Wishlist =  -->
                <!--  ==========  -->
                <section id="wishlist">
                    <h3 class="push-down-20"><span class="light">My</span> Wishlist</h3>
                    <?php
                        if (!empty($wishlist_records))
                        {
                            ?>
                            <table class="table table-items push-down-50">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th><div class="align-center">Quantity</div></th>
                                <th><div class="align-right">Price</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($wishlist_records as $wrKey => $wrValue)
                                    {
                                        $productImages = getProductImages($wrValue["product_image_and_color"]);
                                        ?>
                                    <form action="<?php echo base_url('user/saveWishlist'); ?>" method="post" class="form">
                                        <input type="hidden" name="product_id" value="<?php echo$wrValue["product_id"]; ?>"/>
                                        <tr>
                                            <td class="image"><img src="<?php echo $productImages[0]['url']; ?>" alt="<?php echo $wrValue["product_title"]; ?>" width="124" height="124" /></td>
                                            <td class="desc">
                                                <?php echo$wrValue["product_title"]; ?> &nbsp; 
                                                <a title="Remove Item" class="icon-remove-sign my-account-remove-from-wishlist" data-delete-next="true" href="<?php echo $wrValue["product_id"]; ?>"></a>
                                            </td>
                                            <td class="qty">
                                                <input type="text" name="product_quantity" class="tiny-size" value="<?php echo $wrValue["product_quantity"]; ?>" />
                                            </td>
                                            <td class="price">
                                                <?php echo DEFAULT_CURRENCY_SYMBOL . number_format($wrValue["product_price"], 2); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="no-border" colspan="4">
                                                <div class="three-quarters">
                                                    <input type="text" name="user_comments" class="input-block-level" placeholder="You can enter your comment here" maxlength="150" value="<?php echo $wrValue["user_comments"]; ?>"/>
                                                </div>  
                                                <div class="one-quarter span1 alignright">
                                                    <!--<button class="btn btn-primary btn-block higher bold">SAVE</button>-->
                                                    <input type="submit" class="btn btn-primary btn-block higher bold" value="SAVE"/>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        }
                        else
                        {
                            echo '<p>No products in your wishlist</p>';
                        }
                    ?>
                </section>

                <hr />

                <!--Change Password Section-->

                <section id="changepassword">
                    <h3 class="push-down-20"><span class="light">Change</span> Password</h3>
                    <form action="<?php echo base_url("updatePassword"); ?>" method="post" class="tab-content validate-form" >
                        <div class="control-group">
                            <label class="control-label" for="new_password">New Password<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="password" id="new_password" name="new_password" placeholder="Input your New Password" class="span4 required" required="required" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="confirm_password">Confirm Password<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm New Password" class="span4 required" required="required" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-primary higher bold">UPDATE</button>
                            </div>
                        </div>

                    </form>
                </section>

            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->

<script>
    $(document).ready(function () {
        $(".my-account-remove-from-wishlist").click(function () {
            var product_id = $(this).attr("href");
            $.ajax({
                url: "<?php echo base_url("user/removeFromWishlist"); ?>" + "/" + product_id,
                success: function (response) {
                    $(".header-wishlist").html('Wishlist (' + response + ')');
                }
            });
        });

        $(".my-account-compare-list button.close").click(function () {
            var compare_id = $(this).attr("id");
            $.ajax({
                url: "<?php echo base_url("user/removeFromCompare"); ?>" + "/" + compare_id,
                success: function (response) {
                    if (response == "0")
                    {
                        $(".my-account-compare-list").remove();
                    }
                }
            });
        });

        $(".remove-all-compare").click(function () {
            $.ajax({
                url: "<?php echo base_url("user/removeFromCompare/all"); ?>"
            });
            $(".my-account-compare-list").remove();
        });
    });
</script>