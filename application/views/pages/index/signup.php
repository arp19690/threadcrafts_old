
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">
            <div class="span8" role="main">
                <article class="post-210 page type-page status-publish hentry clearfix instock">
                    <div class="underlined push-down-20">
                        <h3><span class="light">Create</span> Account</h3>
                    </div>

                    <div class="the-content">
                        <p><span style="line-height: 1.5em;"></span></p>
                        <div class="woocommerce">
                            <form method="post" action="<?php echo base_url("signup"); ?>" class="login form-horizontal validate-form">
                                <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
                                <div class="control-group m0">
                                    <label for="" class="control-label"></label>
                                    <div class="control-group">
                                        <div class="controls">
                                            <a href="<?php echo base_url('facebook-login'); ?>" class="login-fb-btn"><img src="<?php echo IMAGES_PATH; ?>/login-with-facebook.png" alt="Login with Facebook" title="Login with Facebook" width="230" height="40"/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group m0">
                                    <label for="" class="control-label"></label>
                                    <div class="control-group">
                                        <div class="controls">
                                            <p class="m0">or,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="first_name" class="control-label">First Name <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="first_name" id="first_name" placeholder="Input your First Name" type="text" required="required"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="last_name" class="control-label">Last Name <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="last_name" id="last_name" placeholder="Input your Last Name" type="text" required="required"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="user_email" class="control-label">Email <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="user_email" id="user_email" placeholder="Input your Email Address" type="text" required="required"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="user_password" class="control-label">Password <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="user_password" id="user_password"placeholder="Input your Password" type="password" required="required"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">		
                                        <p class="push-down-0">By clicking on signup button, I agree to the<br/><a href="<?php echo base_url('static/terms'); ?>" target="_blank">Terms &amp; Conditions</a> of <?php echo SITE_NAME;?></p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">		
                                        <input class="btn btn-primary higher bold uppercase" name="signup" value="Signup" type="submit">
                                        &nbsp;
                                        <a class="lost_password" href="<?php echo base_url("login"); ?>">Already have an account?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div><!-- /page -->

            <div class="span4" id="google-ads">
                <?php
                    if (USER_IP != '127.0.0.1')
                    {
                        echo getGoogleAdCode();
                    }
                ?>
            </div>
        </div><!-- /row -->
    </div>
</div><!-- /container -->