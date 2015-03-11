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
                        <h4><i class="icon-list"></i>Products</h4>
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
                                    <th class="hidden-phone">Category</th>
                                    <th>Your Price</th>
                                    <th>Selling Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
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
                                        $product_status = $a_value["product_status"];
                                        $product_your_price = number_format($a_value["product_seller_price"] + $a_value['product_shipping_charge'], 2);
                                        $product_selling_price = number_format($a_value["product_price"] + $a_value['product_shipping_charge'], 2);

                                        if ($product_status == "1")
                                            $product_status = "Active";
                                        else
                                            $product_status = "Deactive";

                                        $category = $a_value["gc_name"] . " -> " . $a_value["pc_name"] . " -> " . $a_value["cc_name"];
                                        ?>
                                        <tr>
                                            <td>
                                                <p><?php echo $product_title; ?></p>
                                                <p><strong>Shipping charge: </strong><?php echo $a_value['product_shipping_charge'] == '0' ? 'Free' : DEFAULT_CURRENCY_SYMBOL . number_format($a_value['product_shipping_charge'], 2); ?></p>
                                            </td>
                                            <td><?php echo $product_code; ?></td>
                                            <td class="hidden-phone"><?php echo $category; ?></td>
                                            <td><?php echo DEFAULT_CURRENCY_SYMBOL . $product_your_price; ?></td>
                                            <td><?php echo DEFAULT_CURRENCY_SYMBOL . $product_selling_price; ?></td>
                                            <td class="center"><?php echo $product_status; ?></td>
                                            <td class="center">
                                                <p><a href="<?php echo base_url_seller("products/productDetail/" . $product_id); ?>"><i class="icon-search"></i>&nbsp;Details</a></p>
                                                <p><a href="<?php echo base_url_seller("products/editProduct/" . $product_id); ?>"><i class="icon-pencil"></i>&nbsp;Edit</a></p>
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