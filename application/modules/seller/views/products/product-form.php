<?php
    $result = array();
    if (isset($record))
    {
        foreach ($record as $key => $value)
        {
            $result[$key] = $value;
        }
    }
    else
    {
        $result["product_id"] = "";
        $result["product_title"] = "";
        $result["product_code"] = "";
        $result["product_description"] = "";
        $result["product_striked_price"] = "";
        $result["profit_percent"] = TAX_PROFIT_MARGIN_PERCENT;
        $result["product_weight"] = "";
        $result["product_cost_price"] = "";
        $result["product_stock_count"] = "";
        $result["product_order_type"] = "";
        $result["product_status"] = "";
    }

    if (!isset($form_action))
        $form_action = "";
?>

<!-- BEGIN PAGE -->  
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->   
        <div class="row-fluid">
            <div class="span12">  
                <h3 class="page-title">
                    <?php echo $form_heading; ?>
                </h3>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <h4><i class="icon-reorder"></i><?php echo $form_heading; ?></h4>
                        <div class="actions">
                            <a class="btn green mini" href="#" onclick="window.history.back();">
                                <i class="icon-arrow-left"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo $form_action; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="product_id" value="<?php echo set_value("product_id", $result["product_id"]); ?>"/>
                            <div class="control-group">
                                <label class="control-label">Product Title<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="product_title" required="required" value="<?php echo set_value("product_title", $result["product_title"]); ?>" data-required="1" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Code<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="product_code" required="required" value="<?php echo set_value("product_code", $result["product_code"]); ?>" type="text" class="span6 m-wrap"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Description<span class="required">*</span></label>
                                <div class="controls">
                                    <textarea name="product_description" rows="3" class="span6 m-wrap ckeditor"><?php echo set_value("product_description", $result["product_description"]); ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Grand Category<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="product_grand_category" class="span6 m-wrap" id="gc_id">
                                        <?php
                                            if (!empty($grand_cat_array))
                                            {
                                                echo '<option>select</option>';
                                                foreach ($grand_cat_array as $gcKey => $gcValue)
                                                {
                                                    $gc_id = $gcValue["gc_id"];
                                                    $gc_name = $gcValue["gc_name"];

                                                    $selected = "";
                                                    if ($result["product_grand_category"] == $gc_id)
                                                        $selected = "selected='selected'";

                                                    echo '<option value="' . $gc_id . '" ' . $selected . '>' . $gc_name . '</option>';
                                                }
                                            }
                                            else
                                            {
                                                echo '<option>No data</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <span id="pc_select_box">
                                <?php
                                    if (!empty($result["product_parent_category"]))
                                    {
                                        echo '<div class="control-group">
                                                    <label class="control-label">Parent Category<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <select name="product_parent_category" class="span6 m-wrap" id="pc_id">';

                                        if (!empty($parent_cat_array))
                                        {
                                            echo '<option>select</option>';
                                            foreach ($parent_cat_array as $pcKey => $pcValue)
                                            {
                                                $pc_id = $pcValue["pc_id"];
                                                $pc_name = $pcValue["pc_name"];

                                                $selected = "";
                                                if ($result["product_parent_category"] == $pc_id)
                                                    $selected = "selected='selected'";

                                                echo '<option value="' . $pc_id . '" ' . $selected . '>' . $pc_name . '</option>';
                                            }
                                        }
                                        else
                                        {
                                            echo '<option>No data</option>';
                                        }

                                        echo '</select>
                                                </div>
                                            </div>';
                                    }
                                ?>
                            </span>                            

                            <span id="cc_select_box">
                                <?php
                                    if (!empty($result["product_child_category"]))
                                    {
                                        echo '<div class="control-group">
                                                    <label class="control-label">Child Category<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <select name="product_child_category" class="span6 m-wrap" id="pc_id">';

                                        if (!empty($child_cat_array))
                                        {
                                            echo '<option>select</option>';
                                            foreach ($child_cat_array as $ccKey => $ccValue)
                                            {
                                                $cc_id = $ccValue["cc_id"];
                                                $cc_name = $ccValue["cc_name"];

                                                $selected = "";
                                                if ($result["product_child_category"] == $cc_id)
                                                    $selected = "selected='selected'";

                                                echo '<option value="' . $cc_id . '" ' . $selected . '>' . $cc_name . '</option>';
                                            }
                                        }
                                        else
                                        {
                                            echo '<option>No data</option>';
                                        }

                                        echo '</select>
                                                </div>
                                            </div>';
                                    }
                                ?>
                            </span>                            
                            <div class="control-group">
                                <label class="control-label">Striked Price</label>
                                <div class="controls">
                                    <input name="product_striked_price" maxlength="15" value="<?php echo set_value("product_striked_price", $result["product_striked_price"]); ?>" type="text" class="span6 m-wrap"/>
                                    <div class="help-block">(This price will be displayed striked for user purpose, to show discount, leave empty if not required)</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Cost Price to us<span class="required">*</span></label>
                                <div class="controls">
                                    <input onkeyup="calculateTax($(this).val(), $('#profit_percent').val(), '2');" name="product_cost_price" id="product_cost_price" required="required" maxlength="15" value="<?php echo set_value("product_cost_price", $result["product_cost_price"]); ?>" type="text" class="span6 m-wrap"/>
                                    <div class="help-block">(in Rupees)</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Profit Percent</label>
                                <div class="controls">
                                    <input onkeyup="calculateTax($('#product_cost_price').val(), $(this).val(), '2');" name="profit_percent" id="profit_percent" maxlength="4" value="<?php echo set_value("profit_percent", $result["profit_percent"]); ?>" type="text" class="span6 m-wrap"/>
                                    <div class="help-block">(%)</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">To be paid by customer<span class="required">*</span></label>
                                <div class="controls">
                                    <div class="help-block" id="to-paid-by-user"><?php echo DEFAULT_CURRENCY_SYMBOL ?>0</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Weight</label>
                                <div class="controls">
                                    <input name="product_weight" maxlength="15" value="<?php echo set_value("product_weight", $result["product_weight"]); ?>" type="text" class="span6 m-wrap"/>
                                    <div class="help-block">(in grams.)</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Details<span class="required">*</span>
                                    <!--<p><a href="#" id="add-new-details">+ Add more sizes</a></p>-->
                                </label>

                                <span id="product-detail-span">
                                    <?php
                                        for ($i = 1; $i <= 7; $i++)
                                        {
                                            ?>
                                            <div class="controls" style="margin-top: 30px; display: block;">
                                                <div>
                                                    <input name="product_detail[<?php echo $i; ?>][size]" placeholder="Size" type="text" class="span3 m-wrap"/>
                                                    <a href="#" class="add-more-to-size">+ Add more details to this size</a>
                                                </div>

                                                <div class="details-form-size-div">
                                                    <div class="offset3">
                                                        <input name="product_detail[<?php echo $i; ?>][color][]" placeholder="Color" type="text" class="span3 m-wrap"/>
                                                        <input name="product_detail[<?php echo $i; ?>][stock][]" placeholder="Stock" type="text" class="span3 m-wrap"/>
                                                    </div>
                                                </div>
                                                <span class="new-details-for-particular-size-here">
                                                </span>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </span>

                                <div id="new-product-details-here">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Order Type<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="product_order_type" class="span6 m-wrap" required="required">
                                        <option value="in-stock" <?php echo set_select("product_order_type", "1", $result["product_order_type"] == "in-stock") ?>>In Stock</option>
                                        <option value="pre-order" <?php echo set_select("product_order_type", "0", $result["product_order_type"] == "pre-order") ?>>Pre Order</option>
                                        <option value="out-of-stock" <?php echo set_select("product_order_type", "0", $result["product_order_type"] == "out-of-stock") ?>>Out of stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Status<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="product_status" class="span6 m-wrap" required="required">
                                        <option value="1" <?php echo set_select("product_status", "1", $result["product_status"] == "1") ?>>Activate</option>
                                        <option value="0" <?php echo set_select("product_status", "0", $result["product_status"] == "0") ?>>De-activate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Images<span class="required">*</span>
                                    <p><a href="#" id="add-new-images">+ Add more images</a></p>
                                </label>
                                <span id="product-images-span">
                                    <div class="controls">
                                        <input type="name" placeholder="Image Color Name" class="span4 m-wrap" required="required" name="product_img_color[]"/>
                                        <input type="file" class="offset1" name="product_img[]"/>
                                    </div>
                                </span>

                                <div id="new-product-images-here">
                                </div>
                            </div>
                            <div class="form-actions submit-bttn">
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->         
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE --> 

<script>

    function calculateTax(amount, tax, decimals)
    {
        var output;
        if (amount != '' && tax != '')
        {
            output = parseFloat(amount) + (parseFloat(amount) * (parseFloat(tax) / 100));
        }
        else
        {
            output = '0';
        }
        $("#to-paid-by-user").html("<?php echo DEFAULT_CURRENCY_SYMBOL ?>" + output.toFixed(decimals));
    }

    var newDetailsPreLoaded = $('span#product-detail-span').html();
    var newImageBlockPreLoaded = $('span#product-images-span').html();

    $(document).ready(function() {
        $("#gc_id").change(function() {
            $("#pc_select_box").html("Loading...");
            var gc_id = $(this).val();
            if (gc_id !== "")
            {
                $.ajax({
                    url: "<?php echo base_url_seller("categories/getParentCategoriesAjax"); ?>" + "/" + gc_id,
                    success: function(response) {
                        $("#pc_select_box").html(response);
                    }
                });
            }
            else
            {
                $("#pc_select_box").html("");
            }
        });

        $("#pc_id").live("change", function() {
            $("#cc_select_box").html("Loading...");
            var pc_id = $(this).val();
            if (pc_id !== "")
            {
                $.ajax({
                    url: "<?php echo base_url_seller("categories/getChildCategoriesAjax"); ?>" + "/" + pc_id,
                    success: function(response) {
                        $("#cc_select_box").html(response);
                    }
                });
            }
            else
            {
                $("#cc_select_box").html("");
            }
        });

        $("#pc_id").live("change", function() {
            var pc_id = $(this).val();
            if (pc_id != "")
            {
                $("#cc_name_box").show();
                $(".submit-bttn").show();
            }
            else
            {
                $("#cc_name_box").hide();
                $(".submit-bttn").hide();
            }
        });

        $('#add-new-details').click(function(event) {
            event.preventDefault();
            $('div#new-product-details-here').append(newDetailsPreLoaded);
        })

        $('#add-new-images').click(function(event) {
            event.preventDefault();
            $('div#new-product-images-here').append(newImageBlockPreLoaded);
        });

        $('.add-more-to-size').live('click', function(event) {
            event.preventDefault();
            var test = $(this).parent().parent().find('div.details-form-size-div').html();
            $(this).parent().parent().find('span.new-details-for-particular-size-here').append(test);
        });
    });
</script>