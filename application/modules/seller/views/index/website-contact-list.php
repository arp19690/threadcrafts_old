<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->			
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">	
                <h3 class="page-title">Website Contact</h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-edit"></i>Website Contact</h4>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Subject</th>
                                    <th>Request ID</th>
                                    <th>Status</th>
                                    <th>Reply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $wc_id = $a_value["wc_id"];
                                        $full_name = $a_value["full_name"];
                                        $user_email = $a_value["user_email"];
                                        $user_contact = $a_value["user_contact"];
                                        $wc_subject = $a_value["wc_subject"];
                                        $wc_request_id = $a_value["wc_request_id"];
                                        $wc_processed = $a_value["wc_processed"];

                                        if ($wc_processed == "1")
                                            $wc_processed = "Processed";
                                        else
                                            $wc_processed = "Unprocessed";
                                        ?>
                                        <tr>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $user_email; ?></td>
                                            <td><?php echo $user_contact; ?></td>
                                            <td><?php echo $wc_subject; ?></td>
                                            <td><?php echo $wc_request_id; ?></td>
                                            <td class="center"><?php echo $wc_processed; ?></td>
                                            <td class="center"><a href="<?php echo base_url("admin/websiteContact/" . $wc_id); ?>"><i class="icon-pencil"></i></a></td>
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