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
                        <h4>Select the client for this purchase:</h4>
                        <select class='m-wrap span10' id='client_id'>
                            <option value=''>Select Client</option>
                            <?php
                                foreach ($record as $key => $value)
                                {
                                    $client_full_name = $value['client_full_name'];
                                    $client_company_name = $value['client_company_name'];

                                    echo '<option value="' . $value['client_id'] . '">' . $client_full_name . "(" . $client_company_name . ")" . '</option>';
                                }
                            ?>
                        </select>

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
                                $('#client_id').change(function() {
                                    var client_id = $(this).val();
                                    if (client_id !== '')
                                    {
                                        window.location.href = "<?php echo base_url('admin/purchases/addPurchase'); ?>" + "/" + client_id;
                                    }
                                });
</script>