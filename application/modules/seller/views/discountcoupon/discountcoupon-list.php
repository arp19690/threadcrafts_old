<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->			
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">	
                <h3 class="page-title"><?php echo $pageTitle; ?></h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-edit"></i><?php echo $pageTitle; ?></h4>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="<?php echo base_url("admin/discountcoupon/addCoupon"); ?>"><button class="btn green">
                                        Add New <i class="icon-plus"></i>
                                    </button></a>
                            </div>

                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Type <i class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url("admin/discountcoupon/"); ?>">All Coupons</a></li>
                                    <li><a href="<?php echo base_url("admin/discountcoupon/index/active"); ?>">Active Coupons</a></li>
                                    <li><a href="<?php echo base_url("admin/discountcoupon/index/deactive"); ?>">Deactive Coupons</a></li>
                                    <li><a href="<?php echo base_url("admin/discountcoupon/index/expired"); ?>">Expired Coupons</a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Title (Code)</th>
                                    <th>Discount %</th>
                                    <th>Available</th>
                                    <th>Start-Time</th>
                                    <th>End-Time</th>
                                    <th>Change Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $dc_id = $a_value["dc_id"];
                                        $dc_title = $a_value["dc_title"];
                                        $dc_code = $a_value["dc_code"];
                                        $dc_available = $a_value["dc_count_available"];
                                        $dc_percent = $a_value["dc_percent"];
                                        $start_time = date("d M Y g:i a", ($a_value["dc_start_time"]));
                                        $end_time = date("d M Y g:i a", ($a_value["dc_end_time"]));
                                        $dc_status = $a_value["dc_status"];

                                        if ($dc_status == "1")
                                        {
                                            $dc_status = "Active";
                                            $change_status_code = 0;
                                        }
                                        else
                                        {
                                            $dc_status = "Deactive";
                                            $change_status_code = 1;
                                        }
                                        ?>
                                        <tr>
                                            <td><a href="<?php echo base_url("admin/discountcoupon/detail/$dc_id"); ?>" title="View Coupon Detail"><?php echo $dc_title . " (" . $dc_code . ")"; ?></a></td>
                                            <td><?php echo $dc_percent; ?>%</td>
                                            <td><?php echo $dc_available; ?></td>
                                            <td><?php echo $start_time; ?></td>
                                            <td><?php echo $end_time; ?></td>
                                            <td class="center">(<?php echo $dc_status; ?>)&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url("admin/discountcoupon/changeStatus/" . $dc_id . "/" . $change_status_code); ?>" onclick="return confirm('Are you sure to change status ?');"><i class="icon-pencil"></i></a></td>
                                            <td class="center"><a href="<?php echo base_url("admin/discountcoupon/editCoupon/" . $dc_id); ?>"><i class="icon-pencil"></i></a></td>
                                            <td class="center"><a href="<?php echo base_url("admin/discountcoupon/deleteCoupon/" . $dc_id); ?>" onclick="return confirm('Are you sure to delete this coupon ?');"><i class="icon-remove"></i></a></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->