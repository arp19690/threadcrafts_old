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
                                <a href="<?php echo base_url("admin/purchases/selectClient"); ?>"><button class="btn green">
                                        Add New <i class="icon-plus"></i>
                                    </button></a>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Product Name</th>
                                    <th>Product Brand</th>
                                    <th>Product Quantity</th>
                                    <th>Price / Piece</th>
                                    <th>Total Price</th>
                                    <th>Arrival Date</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $purchase_id = $a_value["purchase_id"];
                                        $client_full_name = $a_value["client_full_name"];
                                        $product_name = $a_value["product_name"];
                                        $product_brand = $a_value["product_brand"];
                                        $product_quantity = $a_value["product_quantity"];
                                        $price_per_piece = number_format($a_value["price_per_piece"], 2);
                                        $total_price = number_format(($price_per_piece * $product_quantity), 2);
                                        $arrival_date = date('d-M-y', strtotime($a_value["arrival_date"]));
                                        ?>
                                        <tr>
                                            <td><?php echo $client_full_name; ?></td>
                                            <td><?php echo $product_name; ?></td>
                                            <td><?php echo $product_brand; ?></td>
                                            <td><?php echo $product_quantity; ?></td>
                                            <td><?php echo DEFAULT_CURRENCY_SYMBOL . $price_per_piece; ?></td>
                                            <td><?php echo DEFAULT_CURRENCY_SYMBOL . $total_price; ?></td>
                                            <td><?php echo $arrival_date; ?></td>
                                            <td class="center"><a href="#">Details</a></td>
                                            <td class="center">
                                                <a href="<?php echo base_url("admin/purchases/editPurchase/" . $purchase_id); ?>"><i class="icon-pencil"></i></a>&nbsp;&nbsp;
                                                <!--<a href="<?php echo base_url("admin/purchases/deletePurchase/" . $purchase_id); ?>" onclick="return confirm('Are you sure to delete this entry? All the data and docs uploaded will be removed');"><i class="icon-remove"></i></a>-->
                                            </td>
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