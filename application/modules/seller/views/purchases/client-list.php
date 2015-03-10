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
                                <a href="<?php echo base_url("admin/purchases/addClient"); ?>"><button class="btn green">
                                        Add New <i class="icon-plus"></i>
                                    </button></a>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Company Name</th>
                                    <th>Contact Number</th>
                                    <th>Company Location</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $client_id = $a_value["client_id"];
                                        $client_full_name = $a_value["client_full_name"];
                                        $client_company_name = $a_value["client_company_name"];
                                        $client_number = $a_value["client_number"];
                                        $client_company_city = $a_value["client_company_city"];
                                        ?>
                                        <tr>
                                            <td><?php echo $client_full_name; ?></td>
                                            <td><?php echo $client_company_name; ?></td>
                                            <td><?php echo $client_number; ?></td>
                                            <td><?php echo $client_company_city; ?></td>
                                            <td class="center"><a href="#">Details</a></td>
                                            <td class="center">
                                                <a href="<?php echo base_url("admin/purchases/editClient/" . $client_id); ?>"><i class="icon-pencil"></i></a>
                                                <!--<a href="<?php echo base_url("admin/purchases/deleteClient/" . $client_id); ?>" onclick="return confirm('Are you sure to delete <?php echo $client_full_name; ?> ?');"><i class="icon-remove"></i></a>-->
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