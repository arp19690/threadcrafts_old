</div>
</div>
</div>

</section> <!-- /main content -->

</div>
</div> <!-- /container -->

</div> <!-- end of master-wrapper -->



<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = _ =  -->
<script src="<?php echo JS_PATH; ?>/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="<?php echo JS_PATH; ?>/bootstrap.min.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="<?php echo JS_PATH; ?>/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

<!--  = jQuery validate JS =  -->
<script src="<?php echo JS_PATH; ?>/jquery.validate.js" type="text/javascript"></script>

<!--  = Custom JS =  -->
<script>

// to validate forms
    $(".validate-form").validate();

    // for googlel places api
    var num_of_inputs = jQuery(".gMapLocation").length;
    var i;
    var loop = num_of_inputs - 1;
    for (i = "0"; i <= loop; i++)
    {
        var input = jQuery(".gMapLocation")[i];
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
</script>

</body>
</html>