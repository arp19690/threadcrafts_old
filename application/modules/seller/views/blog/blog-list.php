<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->			
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">	
                <h3 class="page-title"><?php echo $pageTitle;?></h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-edit"></i><?php echo $pageTitle;?></h4>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                            <!--                            <div class="btn-group">
                                                            <a href="<?php echo base_url("admin/blog/addBlog"); ?>"><button class="btn green">
                                                                    Add New <i class="icon-plus"></i>
                                                                </button></a>
                                                        </div>-->
                            
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Type <i class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url("admin/blog/"); ?>">All Blogs</a></li>
                                    <li><a href="<?php echo base_url("admin/blog/index/active"); ?>">Active Blogs</a></li>
                                    <li><a href="<?php echo base_url("admin/blog/index/deactive"); ?>">Deactive Blogs</a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Date-Time</th>
                                    <th>Change Status</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                    prd($alldata);
                                    foreach ($alldata as $a_key => $a_value)
                                    {
                                        $blog_id = $a_value["blog_id"];
                                        $full_name = ucwords($a_value["first_name"] . " " . $a_value["last_name"]);
                                        $blog_title = $a_value["blog_title"];
                                        $date = date("d M Y g:i a", strtotime($a_value["creation_timestamp"]));
                                        $blog_status = $a_value["blog_status"];

                                        if ($blog_status == "1")
                                        {
                                            $blog_status = "Active";
                                            $change_status_code = 0;
                                        }
                                        else
                                        {
                                            $blog_status = "Deactive";
                                            $change_status_code = 1;
                                        }
                                        ?>
                                        <tr>
                                            <td><a href="<?php echo base_url("admin/blog/detail/$blog_id"); ?>" title="View Blog Detail"><?php echo $blog_title; ?></a></td>
                                            <td><a href="<?php echo base_url("admin/users/userDetail/$blog_id"); ?>" title="View Author Detail"><?php echo $full_name; ?></a></td>
                                            <td><?php echo $blog_status; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td class="center"><?php echo $blog_status;?>&nbsp;<a href="<?php echo base_url("admin/blog/changeStatus/" . $blog_id . "/" . $change_status_code); ?>" onclick="return confirm('Are you sure to change status ?');"><i class="icon-pencil"></i></a></td>
                                            <td class="center"><a href="<?php echo base_url("admin/blog/deleteBlog/" . $blog_id); ?>" onclick="return confirm('Are you sure to delete this blog ?');"><i class="icon-remove"></i></a></td>
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