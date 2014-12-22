<?php
    $blog_id="";
    $blog_title="";
    $blog_content="";
    
    if(isset($record))
    {
        extract($record);
    }
    ?>

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
            <section class="span12 blog">

                <form class="form-horizontal validate-form" method='post' action='<?php echo $form_action;?>' enctype="multipart/form-data">
                    <input type="hidden" name="blog_id" value="<?php echo $blog_id;?>"/>
                    <div class="control-group">
                        <label for="blog_title" class="control-label">Title <span class="required">*</span></label>
                        <div class="controls">
                            <input class="input-text span8 required" name="blog_title" id="blog_title" type="text" required="required" value='<?php echo $blog_title;?>'/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="blog_content" class="control-label">Content <span class="required">*</span></label>
                        <div class="controls">
                            <textarea class="input-text span8 ckeditor required" name="blog_content" id="blog_content" type="text" required="required"><?php echo $blog_content;?></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="blog_img" class="control-label">Header Image:</label>
                        <div class="controls">
                            <input class="" name="blog_img" id="blog_title" type="file"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">		
                            <input class="btn btn-primary higher bold uppercase" name="btn_submit" value="Submit" type="submit">
                        </div>
                    </div>
                </form>

            </section> <!-- /main content -->

        </div>
    </div>
</div> <!-- /container -->

<script type='text/javascript' src='<?php echo JS_PATH; ?>/../assets/ckeditor/ckeditor.js'></script>