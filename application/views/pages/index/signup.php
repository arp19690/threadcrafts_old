
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
                            <h2>Signup</h2>
                            <form method="post" action="<?php echo base_url("signup"); ?>" class="login form-horizontal validate-form">
                                <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
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
                                    <label for="user_location" class="control-label">Location <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required gMapLocation" name="user_location" placeholder="Input your Location" id="user_location" type="text" required="required"/>
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
                                        <p class="push-down-0">
                                            By using <?php echo SITE_NAME; ?>, I agree to the<br/>
                                            <a href="<?php echo base_url('static/terms'); ?>" target="_blank">Terms &amp; Conditions</a>
                                        </p>
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
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- ThreadCrafts Login Page Side Ad -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-4948458398051754"
                     data-ad-slot="4205222425"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div><!-- /row -->
    </div>
</div><!-- /container -->