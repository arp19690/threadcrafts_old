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
        $result["wc_id"] = "";
        $result["full_name"] = "";
        $result["user_email"] = "";
        $result["user_contact"] = "";
        $result["wc_subject"] = "";
        $result["wc_message"] = "";
        $result["wc_request_id"] = "";
        $result["wc_processed"] = "";
        $result["user_ipaddress"] = "";
        $result["user_agent"] = "";
        $result["creation_timestamp"] = "";
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
                            <input type="hidden" name="wc_id" value="<?php echo set_value("wc_id", $result["wc_id"]); ?>"/>
                            <div class="control-group">
                                <label class="control-label">Full Name<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["full_name"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["user_email"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Contact Number<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["user_contact"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Subject<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["wc_subject"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Message<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["wc_message"]; ?>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Request ID<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["wc_request_id"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">IP Address<span class="required">*</span></label>
                                <div class="controls">
                                    <?php echo $result["user_ipaddress"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">User Agent</label>
                                <div class="controls">
                                    <?php echo $result["user_agent"]; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Date-Time</label>
                                <div class="controls">
                                    <?php echo date("d-M-Y g:i a", strtotime($result["creation_timestamp"])); ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status<span class="required">*</span></label>
                                <div class="controls">
                                    <select class="span6 m-wrap required" name="wc_processed" required="required">
                                        <?php
                                            if ($record["wc_processed"] == "1")
                                            {
                                                $processed = TRUE;
                                                $unprocessed = FALSE;
                                            }
                                            else
                                            {
                                                $processed = FALSE;
                                                $unprocessed = TRUE;
                                            }
                                        ?>
                                        <option value="0" <?php echo set_select('wc_processed', $record["wc_processed"], $unprocessed) ?>>Unprocessed</option>
                                        <option value="1" <?php echo set_select('wc_processed', $record["wc_processed"], $processed) ?>>Processed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Reply</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap ckeditor" name="reply_message"></textarea>
                                    <div class="help-block">(A mail will be sent to the request creator. Leave empty if don't want to)</div>
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

<script>
                                $(document).ready(function() {
                                    $("#gc_id").change(function() {
                                        $("#pc_select_box").html("Loading...");
                                        var gc_id = $(this).val();
                                        if (gc_id !== "")
                                        {
                                            $.ajax({
                                                url: "<?php echo base_url("admin/categories/getParentCategoriesAjax"); ?>" + "/" + gc_id,
                                                success: function(response) {
                                                    $("#pc_select_box").html(response);
                                                }
                                            });
                                        }
                                        else
                                        {
                                            $("#pc_select_box").html("");
                                        }
                                    });

                                    $("#pc_id").live("change", function() {
                                        $("#cc_select_box").html("Loading...");
                                        var pc_id = $(this).val();
                                        if (pc_id !== "")
                                        {
                                            $.ajax({
                                                url: "<?php echo base_url("admin/categories/getChildCategoriesAjax"); ?>" + "/" + pc_id,
                                                success: function(response) {
                                                    $("#cc_select_box").html(response);
                                                }
                                            });
                                        }
                                        else
                                        {
                                            $("#cc_select_box").html("");
                                        }
                                    });

                                    $("#pc_id").live("change", function() {
                                        var pc_id = $(this).val();
                                        if (pc_id != "")
                                        {
                                            $("#cc_name_box").show();
                                            $(".submit-bttn").show();
                                        }
                                        else
                                        {
                                            $("#cc_name_box").hide();
                                            $(".submit-bttn").hide();
                                        }
                                    });
                                });
</script>