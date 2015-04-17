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
                        <h3><span class="light">My</span> Orders</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu (affix) =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span3" id="spyMenu">
                            <div class="widget">
                                <ul class="nav nav-pills nav-stacked my-account-sidebar">
                                    <li class="active"><a href="#orders">Orders <i class="icon-caret-right pull-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">
                <section id="orders">
                    <h3 class="push-down-20"><span class="light">My</span> Orders</h3>
                    <table class="table table-items push-down-50">
                        <thead>
                            <tr>
                                <th>Address Line 1</th>
                                <th>Address Line 2</th>
                                <th>Location</th>
                                <th style="text-align: center">Action</th>
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
                                            <td class="desc" style="text-align: center">
                                                <a href="<?php echo base_url('edit-address?id='.  getEncryptedString($uaValue['ua_id']));?>" title="Edit address"><span class="icon icon-pencil"></span></a>
                                                <a href="<?php echo base_url('remove-address?id='.  getEncryptedString($uaValue['ua_id']));?>" title="Remove address" onclick="return confirm('Sure you want to remove this address?');" style="margin-left: 15px;"><span class="icon icon-trash"></span></a>
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
            </section> <!-- /main content -->
        </div>
    </div>
</div>