<?php
    $result = array();
    if (isset($record))
    {
        foreach ($record as $key => $value)
        {
            $result[$key] = $value;
        }
    }
    else
    {
        $result["client_id"] = $client_id;
        $result["purchase_id"] = "";
        $result["product_name"] = "";
        $result["product_brand"] = "";
        $result["bill_number"] = "";
        $result["transport_number"] = "";
        $result["arrival_date"] = "";
        $result["product_code"] = "";
        $result["product_quantity"] = "";
        $result["price_per_piece"] = "";
        $result["product_additional_comments"] = "";
    }

    if (!isset($form_action))
        $form_action = "";
?>

<!-- BEGIN PAGE -->  
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->   
        <div class="row-fluid">
            <div class="span12">  
                <h3 class="page-title">
                    <?php echo $form_heading; ?>
                </h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-reorder"></i><?php echo $form_heading; ?></h4>
                        <div class="actions">
                            <a class="btn green mini" href="#" onclick="window.history.back();">
                                <i class="icon-arrow-left"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo $form_action; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="purchase_id" value="<?php echo set_value("purchase_id", $result["purchase_id"]); ?>"/>
                            <input type="hidden" name="client_id" value="<?php echo set_value("client_id", $result["client_id"]); ?>"/>

                            <div class="control-group">
                                <label class="control-label">Client's Full Name<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_full_name"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Client's Company Name<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_company_name"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Client's Contact Number<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_number"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Client's Email<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_email"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Client's Company Address<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_company_address"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Client's City/Town<span class="required">*</span></label>
                                <div class="controls">
                                    <p><?php echo $result["client_company_city"]; ?></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Product Name<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="product_name" required="required" value="<?php echo set_value("product_name", $result["product_name"]); ?>" data-required="1" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Brand Name<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="product_brand" required="required" value="<?php echo set_value("product_brand", $result["product_brand"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Bill Number<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="bill_number" required="required" value="<?php echo set_value("bill_number", $result["bill_number"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Transport Number<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="transport_number" required="required" value="<?php echo set_value("transport_number", $result["transport_number"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Arrival Date<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="arrival_date" required="required" value="<?php echo set_value("arrival_date", $result["arrival_date"]); ?>" type="text" class="span6 m-wrap datepicker"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Product Code<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="product_code" required="required" value="<?php echo set_value("product_code", $result["product_code"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Product Quantity<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="product_quantity" required="required" value="<?php echo set_value("product_quantity", $result["product_quantity"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Price per piece (in INR)<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="price_per_piece" required="required" value="<?php echo set_value("price_per_piece", $result["price_per_piece"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Additional Comments (optional)</label>
                                <div class="controls">
                                    <textarea name='product_additional_comments' class='span6 m-wrap'><?php echo set_value("product_additional_comments", $result["product_additional_comments"]); ?></textarea>
                                </div>
                            </div>                   

                            <div class="control-group">
                                <label class="control-label">Bill Images<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="file" name="purchase_docs[]" multiple="multiple"/>
                                </div>
                            </div>

                            <div class="form-actions submit-bttn">
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->         
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE --> 