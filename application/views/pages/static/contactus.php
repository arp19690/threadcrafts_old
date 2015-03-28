
<div class="container">
    <div class="push-up top-equal blocks-spacer-last">
        <div class="row">

            <!--  ==========  -->
            <!--  = Main Title =  -->
            <!--  ==========  -->

            <div class="span12">
                <div class="title-area">
                    <h1 class="inline"><span class="light">Contact</span> Us</h1>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span8 single single-page">

                <!--  ==========  -->
                <!--  = Post =  -->
                <!--  ==========  -->
                <article class="post">
                    <div class="post-inner">
                        <p>
                            You may write us an email or you can send us a message using the form below anything regarding to threadcrafts.in.<br/>
                            Our customer support will get you real soon. Your feedbacks are most welcome. You can also write us if you feel we can serve you even better and how.
                        </p>
                    </div>
                </article>

                <hr />

                <!--  ==========  -->
                <!--  = Contact Form =  -->
                <!--  ==========  -->
                <section class="contact-form-container">

                    <h3 class="push-down-25"><span class="light">Send</span> us a Message</h3>

                    <form id="commentform" method="post" action="" class="form form-inline form-contact validate-form">
                        <p class="push-down-20">
                            <input type="text" aria-required="true" tabindex="1" size="30" placeholder="Full Name" id="full_name" name="full_name" required="required" class="required"/>
                            <label for="full_name">Full Name<span class="red-clr bold">*</span></label>
                        </p>
                        <p class="push-down-20">
                            <input type="email" aria-required="true" tabindex="2" size="30" placeholder="Email Address" id="user_email" name="user_email" required="required" class="required"/>
                            <label for="user_email">Email<span class="red-clr bold">*</span></label>
                        </p>
                        <p class="push-down-20">
                            <input type="text" aria-required="true" tabindex="3" size="30" placeholder="Contact Number" id="user_contact" name="user_contact" required="required" class="required"/>
                            <label for="user_contact">Contact Number<span class="red-clr bold">*</span></label>
                        </p>
                        <p class="push-down-20">
                            <select name="wc_subject" tabindex="4" class="required" required="required">
                                <?php
                                    $subject_array = array("General", "Technical issue", "Payment issue", "Shipping issue", "Bulk orders", "Others");
                                    foreach ($subject_array as $key => $value)
                                    {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                ?>
                            </select>
                            <label for="wc_subject">Subject<span class="red-clr bold">*</span></label>
                        </p>

                        <p class="push-down-20">
                            <textarea class="input-block-level" tabindex="5" rows="4" cols="30" maxlength="300" id="wc_message" name="wc_message" placeholder="Your Message Goes Here ..." required="required" style="resize: none;" class="required"></textarea>
                        </p>
                        <p>
                            <button class="btn btn-primary bold" type="submit" tabindex="5" id="submit">SEND EMAIL</button>
                        </p>
                    </form>
                </section>

                <hr />


            </section> <!-- /main content -->

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span4">
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

            </aside> <!-- /sidebar -->

        </div>
    </div>
</div> <!-- /container -->

