<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">
                    Change Password
                </h3>
            </div>
        </div>
        <div class="portlet box grey">
            <div class="portlet-title">
                <h4><i class="icon-key"></i>Change Password</h4>
                <div class="actions">
                    <a class="btn green mini" href="#" onclick="window.history.back();">
                        <i class="icon-arrow-left"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="portlet-body form">

                <form method="post" action="" id="validate-form" class="vertical-form"  novalidate="novalidate">

                    <div class="control-group m-wrap">
                        <label class="control-label">Old Password : <span class="required">*</span></label>
                        <div class="controls"><input class="span6 m-wrap" required="true" type="password" data-required="1" name="old_password"></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">New Password: <span class="required">*</span></label>
                        <div class="controls"><input class="span6 m-wrap" type="password" data-required="1" name="new_password"></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Confirm Password: <span class="required">*</span></label>
                        <div class="controls"><input class="span6 m-wrap" type="password" data-required="1" name="confirm_password"></div>
                    </div>

                    <div class="form-actions" align="right">
                        <button class="btn blue" type="submit"><i class="icon-ok"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>