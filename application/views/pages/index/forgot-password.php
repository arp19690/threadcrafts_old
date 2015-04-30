
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">
            <div class="span8" role="main">
                <article class="post-210 page type-page status-publish hentry clearfix instock">
                    <div class="underlined push-down-20">
                        <h3><span class="light">Forgot</span> Password</h3>
                    </div>

                    <div class="the-content">
                        <p><span style="line-height: 1.5em;"></span></p>
                        <div class="woocommerce">
                            <form method="post" action="<?php echo base_url("forgot-password"); ?>" class="login form-horizontal validate-form">
                                <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
                                <div class="control-group">
                                    <label for="user_email" class="control-label">Email <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-text required" name="user_email" id="user_email" type="text" required="required" placeholder="Email address"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">		
                                        <input class="btn btn-primary higher bold uppercase" name="reset" value="Reset" type="submit">
                                        &nbsp;
                                        <a class="lost_password" href="<?php echo base_url("login"); ?>">Login?</a>
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