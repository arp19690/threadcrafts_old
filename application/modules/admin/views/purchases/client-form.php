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
        $result["client_id"] = "";
        $result["client_full_name"] = "";
        $result["client_company_name"] = "";
        $result["client_number"] = "";
        $result["client_email"] = "";
        $result["client_company_address"] = "";
        $result["client_company_city"] = "";
        $result["client_additional_comments"] = "";
        $result["product_quantity"] = "";
        $result["price_per_piece"] = "";
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
                            <input type="hidden" name="client_id" value="<?php echo set_value("client_id", $result["client_id"]); ?>"/>

                            <div class="control-group">
                                <label class="control-label">Client's Full Name<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="client_full_name" required="required" value="<?php echo set_value("client_full_name", $result["client_full_name"]); ?>" data-required="1" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Client's Company Name<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="client_company_name" required="required" value="<?php echo set_value("client_company_name", $result["client_company_name"]); ?>" data-required="1" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Client' Contact Number<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="client_number" required="required" value="<?php echo set_value("client_number", $result["client_number"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Client's Email Address<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="client_email" required="required" value="<?php echo set_value("client_email", $result["client_email"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Client's Company Address<span class="required">*</span></label>
                                <div class="controls">
                                    <textarea name='client_company_address' class='span6 m-wrap' required="required"><?php echo set_value("client_company_address", $result["client_company_address"]); ?></textarea>
                                </div>
                            </div>                   
                            <div class="control-group">
                                <label class="control-label">Client's City/Town<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="client_company_city" required="required" value="<?php echo set_value("client_company_city", $result["client_company_city"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>                               
                            <div class="control-group">
                                <label class="control-label">Additional Comments (optional)</label>
                                <div class="controls">
                                    <textarea name='client_additional_comments' class='span6 m-wrap'><?php echo set_value("client_additional_comments", $result["client_additional_comments"]); ?></textarea>
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