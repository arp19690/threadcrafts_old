<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->			
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">	
                <h3 class="page-title">Products</h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-edit"></i>Products</h4>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="<?php echo base_url_seller("products/addProduct"); ?>"><button class="btn green">
                                        Add New <i class="icon-plus"></i>
                                    </button></a>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Category</th>
                                    <th>Cost Price</th>
                                    <th>Order Type</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $product_id = $a_value["product_id"];
                                        $product_title = $a_value["product_title"];
                                        $product_code = $a_value["product_code"];
                                        $product_cost_price = $a_value["product_cost_price"];
                                        $product_order_type = $a_value["product_order_type"];
                                        $product_status = $a_value["product_status"];

                                        if ($product_status == "1")
                                            $product_status = "Active";
                                        else
                                            $product_status = "Deactive";

                                        $category = $a_value["gc_name"] . " / " . $a_value["pc_name"] . " / " . $a_value["cc_name"];
                                        ?>
                                        <tr>
                                            <td><a href="<?php echo base_url_seller("products/productDetail/$product_id"); ?>" title="View Detail"><?php echo $product_title; ?></a></td>
                                            <td><?php echo $product_code; ?></td>
                                            <td><?php echo $category; ?></td>
                                            <td><?php echo DEFAULT_CURRENCY_SYMBOL . $product_cost_price; ?></td>
                                            <td><?php echo ucwords(str_replace("-", " ", $product_order_type)); ?></td>
                                            <td class="center"><?php echo $product_status; ?></td>
                                            <td class="center"><a href="<?php echo base_url_seller("products/editProduct/" . $product_id); ?>"><i class="icon-pencil"></i></a></td>
                                            <td class="center"><a href="<?php echo base_url_seller("products/deleteProduct/" . $product_id); ?>" onclick="return confirm('Are you sure to delete <?php echo $product_title; ?> ?');"><i class="icon-remove"></i></a></td>
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