
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
                            <h2>Login</h2>
                            <form method="post" action="<?php echo base_url("login"); ?>" class="login form-horizontal validate-form">
                                <?php
                                    $url = current_url();
                                    if ($this->input->get('next'))
                                    {
                                        $url = $this->input->get('next');
                                    }
                                ?>
                                <input type="hidden" name="url" value="<?php echo $url; ?>"/>
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
                                        <a class="lost_password" href="<?php echo base_url("forgot-password"); ?>">Lost Password?</a>
                                        &nbsp;|&nbsp;
                                        <a class="lost_password" href="<?php echo base_url("register"); ?>">Create account?</a>
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