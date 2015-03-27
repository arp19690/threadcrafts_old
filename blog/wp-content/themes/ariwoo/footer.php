<!--++++++++++++++ Footer Section Start +++++++++++++++++++++++++-->

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">
           
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">
                     <?php  $options = get_option( 'arinio_theme_options' );  if($options['footertext'] != '') { echo $options['footertext']; }else{?> <?php _e( ' Copyright &#169; 2015 Your Company. All Rights Reserved.', 'ariwoo' ); ?> <?php } ?>  
                    </p>
                </div>
            </div>

        </div>

    </div>
    
</div>

<!--end / footer-->
<?php wp_footer(); ?>







<!--++++++++++++++ Footer Section End +++++++++++++++++++++++++-->
 


</body></html>