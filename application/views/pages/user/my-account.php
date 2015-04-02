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
                                    <li><a href="#address">Saved Addresses <i class="icon-caret-right pull-right"></i></a></li>
                                    <li><a href="#changepassword">Change Password <i class="icon-caret-right pull-right"></i></a></li>
                                </ul>
                            </div>

                            <?php
                                if (!empty($compare_records))
                                {
                                    ?>
                                    <!--                                    <div class="widget widget__compare my-account-compare-list">
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
                                                                        </div>-->
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
                            <label class="control-label" for="user_contact">Contact Number<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="user_contact" name="user_contact" placeholder="Input your Contact Number" maxlength="20" class="span4 required" required="required" value="<?php echo $user_record["user_contact"]; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_gender">Gender<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <select class=" required" name="user_gender" required="required">
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
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-primary higher bold">UPDATE</button>
                            </div>
                        </div>

                    </form>
                </section>

                <hr />

                <!--Saved Addresses Section-->

                <section id="address">
                    <h3 class="push-down-20"><span class="light">Saved</span> Addresses</h3>
                    <table class="table table-items push-down-50">
                        <thead>
                            <tr>
                                <th>Address Line 1</th>
                                <th>Address Line 2</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (!empty($user_address_records))
                                {
                                    foreach ($user_address_records as $uaKey => $uaValue)
                                    {
                                        ?>
                                        <tr>
                                            <td class="desc"><?php echo stripslashes($uaValue['ua_line1']); ?></td>
                                            <td class="desc"><?php echo empty($uaValue['ua_line2']) == TRUE ? 'NA' : stripslashes($uaValue['ua_line2']); ?></td>
                                            <td class="desc"><?php echo (stripslashes($uaValue['ua_location'])) . (!empty($uaValue['ua_postcode']) == TRUE ? (' - ' . $uaValue['ua_postcode']) : ''); ?></td>
                                            <td class="desc">
                                                <a href="#" title="Edit address"><span class="icon icon-pencil"></span></a>
                                                <a href="#" title="Remove address" style="margin-left: 15px;"><span class="icon icon-trash"></span></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                <td>No addresses found</td>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </section>

                <hr/>

                <!--Change Password Section-->

                <section id="changepassword">
                    <h3 class="push-down-20"><span class="light">Change</span> Password</h3>
                    <form action="<?php echo base_url("updatePassword"); ?>" method="post" class="tab-content validate-form" >
                        <div class="control-group">
                            <label class="control-label" for="new_password">New Password<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="password" id="new_password" name="new_password" placeholder="Input New Password" class="span4 required" required="required" />
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