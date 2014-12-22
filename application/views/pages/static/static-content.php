
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span8">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="underlined push-down-20">
                    <h3><?php echo $static_page_title; ?></h3>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Description=  -->
                <!--  ==========  -->
                <section class="blocks-spacer">
                    <?php
                        echo $content;
                    ?>
                </section>

                <hr />

            </section> <!-- /main content -->

            <div class='span4'>

                <div id="google-ads">
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

                <!--  ==========  -->
                <!--  = Twitter Widget =  -->
                <!--  ==========  -->
                <div class="sidebar-item widget_twitter">
                    <div class="underlined">
                        <h3><span class="light">Twitter</span> Feed</h3>
                    </div>
                    <a class="twitter-timeline"  href="<?php echo TWITTER_SOCIAL_LINK; ?>"  data-widget-id="<?php echo TWITTER_DATA_WIDGET_ID; ?>">Tweets by @ThreadCrafts</a>
                    <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->
