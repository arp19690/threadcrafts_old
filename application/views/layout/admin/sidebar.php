
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        	
    <ul class="navigation">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li class="start ">
            <a href="<?php echo base_url("admin/dashboard"); ?>">
                <i class="icon-home"></i> 
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="has-sub ">
            <a href="javascript:;">
                <i class="icon-user"></i> 
                <span class="title">Users</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="<?php echo base_url("admin/users"); ?>">Users</a></li>
                <li ><a href="<?php echo base_url("admin/users/userLog"); ?>">User Log</a></li>
            </ul>
        </li>
        <li class="has-sub ">
            <a href="javascript:;">
                <i class="icon-th-list"></i> 
                <span class="title">Categories</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="<?php echo base_url("admin/categories/grandCategories"); ?>">Grand Category</a></li>
                <li ><a href="<?php echo base_url("admin/categories/parentCategories"); ?>">Parent Category</a></li>
                <li ><a href="<?php echo base_url("admin/categories/childCategories"); ?>">Child Category</a></li>
            </ul>
        </li>
        <li class="has-sub ">
            <a href="javascript:;">
                <i class="icon-file"></i> 
                <span class="title">Products</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="<?php echo base_url("admin/products"); ?>">Products</a></li>
                <li ><a href="<?php echo base_url("admin/products/updateStock"); ?>">Update Product Stock</a></li>
                <li ><a href="<?php echo base_url("admin/products/featuredList"); ?>">Featured Products</a></li>
            </ul>
        </li>        
        <li class="has-sub ">
            <a href="javascript:;">
                <i class="icon-cogs"></i> 
                <span class="title">Website Configs</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li><a href="<?php echo base_url("admin/blog"); ?>">Blogs</a></li>
                <li><a href="<?php echo base_url("admin/staticcontent"); ?>">Static Content</a></li>
                <li><a href="<?php echo base_url("admin/websiteContact"); ?>">Website Contact</a></li>
            </ul>
        </li>
        <li class="has-sub ">
            <a href="javascript:;">
                <i class="icon-flag"></i> 
                <span class="title">Purchase Records</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li><a href="<?php echo base_url("admin/purchases/clientList"); ?>">Clients List</a></li>
                <li><a href="<?php echo base_url("admin/purchases"); ?>">Purchase List</a></li>
            </ul>
        </li>
        <li class="">
            <a href="<?php echo base_url("admin/discountcoupon"); ?>">
                <i class="icon-gift"></i> 
                <span class="title">Discount Coupons</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo base_url("admin/orders"); ?>">
                <i class="icon-check-sign"></i> 
                <span class="title">Orders</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->