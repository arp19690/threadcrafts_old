
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">
            <div class="span8" role="main">
                <article class="post-210 page type-page status-publish hentry clearfix instock">
                    <div class="underlined push-down-20">
                        <h3><span class="light">Login</span> to your Account</h3>
                    </div>

                    <div class="the-content">
                        <p><span style="line-height: 1.5em;"></span></p>
                        <div class="woocommerce">
                            <form method="post" action="<?php echo base_url("login"); ?>" class="login form-horizontal validate-form">
                                <?php
                                    $url = current_url();
                                    if ($this->input->get('next'))
                                    {
                                        $url = $this->input->get('next');
                                    }
                                ?>
                                <input type="hidden" name="url" value="<?php echo $url; ?>"/>
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
                                    <label for="user_email" class="control-label">Email <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="user_email" id="user_email" type="text" required="required" placeholder="Email address"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="user_password" class="control-label">Password <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="user_password" id="user_password" type="password" required="required" placeholder="Password"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">		
                                        <input class="btn btn-primary higher bold uppercase" name="login" value="Login" type="submit">
                                        &nbsp;
                                        <a class="lost_password" href="<?php echo base_url("forgot-password"); ?>">Forgot Password?</a>
                                        &nbsp;|&nbsp;
                                        <a class="lost_password" href="<?php echo base_url("signup"); ?>">Create account?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div><!-- /page -->

            <div class="span4" id="google-ads">

            </div>
        </div><!-- /row -->
    </div>
</div><!-- /container -->