<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:50:13
         compiled from "/var/www/html/design/backend/templates/views/shippings/components/services/fedex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2691251655aa6eade3f0c5-22716670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b21bb11bfc0003b16c645f9506778c6e5db105' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/shippings/components/services/fedex.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2691251655aa6eade3f0c5-22716670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6eae026c87_82018203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6eae026c87_82018203')) {function content_55aa6eae026c87_82018203($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('authentication_key','authentication_password','account_number','ship_fedex_meter_number','test_mode','package_type','ship_fedex_package_type_your_packaging','ship_fedex_package_type_fedex_box','ship_fedex_package_type_fedex_10kg_box','ship_fedex_package_type_fedex_25kg_box','ship_fedex_package_type_fedex_envelope','ship_fedex_package_type_fedex_pak','ship_fedex_package_type_fedex_tube','ship_fedex_drop_off_type','ship_fedex_drop_off_type_regular_pickup','ship_fedex_drop_off_type_request_courier','ship_fedex_drop_off_type_station','max_box_weight','ship_fedex_height','ship_fedex_width','ship_fedex_length','ship_fedex_smart_post','ship_fedex_indicia','ship_fedex_indicia_presorted_standard','ship_fedex_indicia_parcel_select','ship_fedex_indicia_media_mail','ship_fedex_indicia_presorted_bound_printed_matter','ship_fedex_ancillary_endorsement','none','ship_fedex_ancillary_endorsement_address_correction','ship_fedex_ancillary_endorsement_carrier_leave_if_no_response','ship_fedex_ancillary_endorsement_change_service','ship_fedex_ancillary_endorsement_forwarding_service','ship_fedex_ancillary_endorsement_return_delivery','ship_fedex_special_services','ship_fedex_hub_id','ship_fedex_customer_manifest_id'));
?>
<fieldset>

<div class="control-group">
    <label class="control-label" for="user_key"><?php echo $_smarty_tpl->__("authentication_key");?>
</label>
    <div class="controls">
    <input id="user_key" type="text" name="shipping_data[service_params][user_key]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['user_key'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_key_password"><?php echo $_smarty_tpl->__("authentication_password");?>
</label>
    <div class="controls">
    <input id="user_key_password" type="text" name="shipping_data[service_params][user_key_password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['user_key_password'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="account_number"><?php echo $_smarty_tpl->__("account_number");?>
</label>
    <div class="controls">
    <input id="account_number" type="text" name="shipping_data[service_params][account_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_number'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_meter_number"><?php echo $_smarty_tpl->__("ship_fedex_meter_number");?>
</label>
    <div class="controls">
    <input id="ship_fedex_meter_number" type="text" name="shipping_data[service_params][meter_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['meter_number'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test_mode"><?php echo $_smarty_tpl->__("test_mode");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][test_mode]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][test_mode]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['test_mode']=="Y") {?>checked="checked"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("package_type");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][package_type]">
        <option value="YOUR_PACKAGING" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="YOUR_PACKAGING") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_your_packaging");?>
</option>
        <option value="FEDEX_BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_box");?>
</option>
        <option value="FEDEX_10KG_BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_10KG_BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_10kg_box");?>
</option>
        <option value="FEDEX_25KG_BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_25KG_BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_25kg_box");?>
</option>
        <option value="FEDEX_ENVELOPE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_ENVELOPE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_envelope");?>
</option>
        <option value="FEDEX_PAK" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_PAK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_pak");?>
</option>
        <option value="FEDEX_TUBE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']=="FEDEX_TUBE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_package_type_fedex_tube");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_drop_off_type"><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type");?>
</label>
    <div class="controls">
    <select id="ship_fedex_drop_off_type" name="shipping_data[service_params][drop_off_type]">
        <option value="REGULAR_PICKUP" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['drop_off_type']=="REGULAR_PICKUP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type_regular_pickup");?>
</option>
        <option value="REQUEST_COURIER" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['drop_off_type']=="REQUEST_COURIER") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type_request_courier");?>
</option>
        <option value="STATION" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['drop_off_type']=="STATION") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type_station");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="max_weight"><?php echo $_smarty_tpl->__("max_box_weight");?>
</label>
    <div class="controls">
    <input id="max_weight" type="text" name="shipping_data[service_params][max_weight_of_box]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['max_weight_of_box'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_height"><?php echo $_smarty_tpl->__("ship_fedex_height");?>
</label>
    <div class="controls">
    <input id="ship_fedex_height" type="text" name="shipping_data[service_params][height]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['height'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_width"><?php echo $_smarty_tpl->__("ship_fedex_width");?>
</label>
    <div class="controls">
    <input id="ship_fedex_width" type="text" name="shipping_data[service_params][width]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['width'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_length");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][length]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['length'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['code']->value=='SMART_POST') {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("ship_fedex_smart_post")), 0);?>


<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("ship_fedex_indicia");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][indicia]">
        <option value="PRESORTED_STANDARD" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PRESORTED_STANDARD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_presorted_standard");?>
</option>
        <option value="PARCEL_SELECT" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PARCEL_SELECT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_parcel_select");?>
</option>
        <option value="MEDIA_MAIL" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="MEDIA_MAIL") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_media_mail");?>
</option>
        <option value="PRESORTED_BOUND_PRINTED_MATTER" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PRESORTED_BOUND_PRINTED_MATTER") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_presorted_bound_printed_matter");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][ancillary_endorsement]">
        <option value="" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=='') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
        <option value="ADDRESS_CORRECTION" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="ADDRESS_CORRECTION") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_address_correction");?>
</option>
        <option value="CARRIER_LEAVE_IF_NO_RESPONSE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="CARRIER_LEAVE_IF_NO_RESPONSE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_carrier_leave_if_no_response");?>
</option>
        <option value="CHANGE_SERVICE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="CHANGE_SERVICE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_change_service");?>
</option>
        <option value="FORWARDING_SERVICE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="FORWARDING_SERVICE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_forwarding_service");?>
</option>
        <option value="RETURN_DELIVERY" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="RETURN_DELIVERY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_return_delivery");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test_mode"><?php echo $_smarty_tpl->__("ship_fedex_special_services");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][special_services]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][special_services]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['special_services']=="Y") {?>checked="checked"<?php }?>/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_hub_id");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][hub_id]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['hub_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_customer_manifest_id");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][customer_manifest_id]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['customer_manifest_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>
<?php }?>

</fieldset><?php }} ?>
