
<div class="container">
    <div class="push-up top-equal blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Main Title =  -->
            <!--  ==========  -->

            <div class="span12">
                <div class="title-area">
                    <h1 class="inline"><span class="light"><?php echo SITE_NAME; ?></span> Blogs</h1>
                    <h2 class="inline tagline">- Where fashionable people write stylish things</h2>

                    <a href='<?php echo base_url('blog/write'); ?>' class='btn btn-primary pull-right'><i class="icon-pencil"></i>&nbsp;&nbsp;Write a Blog</a>
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12 blog">

                <?php
                    foreach ($record as $key => $value)
                    {
                        $title = str_replace(' & ', ' &amp; ', $value['title']);
                        $link = $value['link'];
                        $description = $value['desc'];
                        $date = date("M d, Y", strtotime($value['date']));
                        $author = ucwords($value['author']);

                        $blog_id = @$value["blog_id"];
                        ?>
                        <!--  ==========  -->
                        <!--  = Sticky Post =  -->
                        <!--  ==========  -->
                        <article class="post format-standard sticky">
                            <div class="post-inner">
                                <?php
                                $img_file_name = BLOG_IMG_PATH . "/" . getEncryptedString($blog_id) . ".jpg";
                                if (is_file($img_file_name))
                                {
                                    echo '<a href="' . $link . '"><img src="' . base_url($img_file_name) . '" alt="' . $title . '"/></a>';
                                }
                                ?>
                                <div class="post-title">
                                    <h2><a href="<?php echo $link; ?>"><span class="light"></span> <?php echo $title; ?></a></h2>
                                    <div class="metadata">
                                        <?php echo $date; ?>,&nbsp;
                                        Posted by: <?php echo $author; ?>
                                    </div>
                                </div>

                                <p class="push-down-25">
                                    <?php echo $description; ?>
                                </p>

                                <a href="<?php echo $link; ?>" class="btn btn-primary bold higher">CONTINUE READING</a>
                            </div>
                        </article>
                        <?php
                    }
                ?>

                <hr />

                <!--  ==========  -->
                <!--  = Pagination =  -->
                <!--  ==========  -->
                <!--                <div class="pagination">
                                    <ul>
                                        <li><a href="#" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
                                    </ul>
                                </div> -->
                <!-- /pagination -->

            </section> <!-- /main content -->

        </div>
    </div>
</div> <!-- /container -->
