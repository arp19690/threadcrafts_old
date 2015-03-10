<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->			
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">	
                <h3 class="page-title"><?php echo $page_title; ?></h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-edit"></i><?php echo $page_title; ?></h4>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">                            
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Orders <i class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url_seller("orders/"); ?>">All Orders</a></li>
                                    <li><a href="<?php echo base_url_seller("orders/index/processing"); ?>">Processing Orders</a></li>
                                    <li><a href="<?php echo base_url_seller("orders/index/dispatched"); ?>">Dispatched Orders</a></li>
                                    <li><a href="<?php echo base_url_seller("orders/index/delivered"); ?>">Delivered Orders</a></li>
                                    <li><a href="<?php echo base_url_seller("orders/index/cancelled"); ?>">Cancelled Orders</a></li>
                                    <li><a href="<?php echo base_url_seller("orders/index/returned"); ?>">Returned Orders</a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Location</th>
                                    <th>Date-Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $payment_id = $a_value["payment_id"];
                                        $product_id = $a_value["product_id"];
                                        $product_title = $a_value["product_title"];
                                        $product_code = $a_value["product_code"];
                                        $product_quantity = $a_value["product_quantity"];
                                        $payment_time = date("d M,y g:i a", strtotime($a_value["payment_timestamp"]));
                                        $package_status = ucwords($a_value["package_status"]);
                                        $shipping_address = $a_value["shipping_address"];
                                        $shipping_location = $a_value["shipping_city"] . ", " . $a_value["shipping_country"] . "-" . $a_value["shipping_postcode"];
                                        ?>
                                        <tr>
                                            <td><a href="<?php echo base_url_seller("orders/orderDetail/$payment_id"); ?>" title="View Detail"><?php echo $product_title; ?></a></td>
                                            <td><?php echo $product_code; ?></td>
                                            <td><?php echo $product_quantity; ?></td>
                                            <td><?php echo $shipping_address; ?></td>
                                            <td><?php echo $shipping_location; ?></td>
                                            <td><?php echo ucwords(str_replace("-", " ", $payment_time)); ?></td>
                                            <td class="center"><?php echo $package_status; ?></td>
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