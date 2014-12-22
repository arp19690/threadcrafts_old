
<div class="container">
    <div class="push-up top-equal blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Main Title =  -->
            <!--  ==========  -->

            <div class="span12">
                <div class="title-area">
                    <h1 class="inline"><span class="light"><?php echo SITE_NAME; ?></span> Blog</h1>
                    <h2 class="inline tagline">- Where fashionable people write stylish things</h2>

                    <a href='<?php echo base_url('blog'); ?>' class='btn btn-primary pull-right'><i class='icon-arrow-left'></i>&nbsp;View Blogs</a>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span8 single single-post">

                <!--  ==========  -->
                <!--  = Post =  -->
                <!--  ==========  -->
                <article class="post format-video">
                    <div class="post-inner">
                        <div class="post-title">
                            <h2><?php echo ucwords($record["blog_title"]); ?></h2>
                            <div class="metadata">
                                <?php echo date("M d, Y", strtotime($record['creation_timestamp'])); ?>,&nbsp;
                                Posted by: <?php echo ucwords($record["first_name"] . " " . $record["last_name"]); ?>
                            </div>
                        </div>                        

                        <?php
                            $img_file_name = BLOG_IMG_PATH . "/" . getEncryptedString($record["blog_id"]) . ".jpg";
                            if (is_file($img_file_name))
                            {
                                echo '<div class="row-fluid">';
                                echo '<div class="span7 offset2">';
                                echo '<img src="' . base_url($img_file_name) . '" alt="' . $record["blog_title"] . '" class="width-100"/>';
                                echo '</div>';
                                echo '</div>';
                                echo '<br/>';
                            }
                        ?>

                        <p>
                            <?php echo $record["blog_content"]; ?>
                        </p>
                    </div>
                </article>

                <hr />

                <!--  ==========  -->
                <!--  = Comments =  -->
                <!--  ==========  -->

                <section id="comments" class="comments-container">
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = '<?php echo DISQUS_SHORTNAME; ?>'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script');
                            dsq.type = 'text/javascript';
                            dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

                </section>

            </section> <!-- /main content -->

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span4 right-sidebar">

                <div class="sidebar-item widget_archive">
                    <div class="underlined">
                        <h3><span class="light">Share</span> with friends</h3>
                    </div>
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_google_plusone_share"></a>
                        <a class="addthis_button_pinterest_share"></a>
                        <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52dc2b230b860ab0"></script>
                    <!-- AddThis Button END -->
                </div>

                <div class="sidebar-item widget_archive">
                    <div class="underlined">
                        <h3><span class="light">Like us on</span> Facebook</h3>
                    </div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/ThreadCraftsIn" data-width="340" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
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


                <?php
                    if (!empty($recent_blogs))
                    {
                        ?>
                        <!--  ==========  -->
                        <!--  = Archive =  -->
                        <!--  ==========  -->
                        <div class="sidebar-item widget_archive">
                            <div class="underlined">
                                <h3><span class="light">More</span> Recent Blogs</h3>
                            </div>

                            <ul>
                                <?php
                                foreach ($recent_blogs as $rKey => $rValue)
                                {
                                    echo '<li><a title="' . $rValue["blog_title"] . '" href="' . base_url('blog/read/') . $rValue["blog_id"] . '">' . $rValue["blog_title"] . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                    }
                ?>
            </aside> <!-- /sidebar --> 

        </div>              
    </div>              
</div>              