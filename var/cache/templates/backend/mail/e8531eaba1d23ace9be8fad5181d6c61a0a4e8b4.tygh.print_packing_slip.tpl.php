<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:11:16
         compiled from "/var/www/html/design/backend/mail/templates/orders/print_packing_slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60111594155c4dfac6279d0-22154421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8531eaba1d23ace9be8fad5181d6c61a0a4e8b4' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/orders/print_packing_slip.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '60111594155c4dfac6279d0-22154421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'company_placement_info' => 0,
    'profile_fields' => 0,
    'images_dir' => 0,
    'settings' => 0,
    'shipment' => 0,
    'shipping' => 0,
    'tracking_number_exists' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4dfac804d92_56698692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4dfac804d92_56698692')) {function content_55c4dfac804d92_56698692($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_mb_wordwrap')) include '/var/www/html/app/lib/other/smarty/plugins/shared.mb_wordwrap.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('ship_to','phone1_label','phone2_label','fax','web_site','email','packing_slip_for_order','order_date','shipment_date','date','bill_to','ship_to','status','payment_method','shipping_method','tracking_number','tracking_number','product','sku','quantity','deleted_product','notes','comments'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>

<body>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

<style type="text/css" media="screen,print">
body,p,div {
    color: #000000;
    font: 12px Arial;
}
body {
    padding: 0;
    margin: 0;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}
</style>
<style media="print">
body {
    background-color: #ffffff;
}
.scissors {
    display: none;
}
</style>

<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['company_placement_info']->value) {?>
<?php $_smarty_tpl->tpl_vars["company_placement_info"] = new Smarty_variable(fn_get_company_placement_info($_smarty_tpl->tpl_vars['order_info']->value['company_id'],@constant('CART_LANGUAGE')), null, 0);?>
<?php }?>
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f4f6f8; height: 100%;">
<tr>
    <td align="center" style="width: 100%; height: 100%; padding: 24px 0;">
    <div style="background-color: #ffffff; border: 1px solid #e6e6e6; margin: 0px auto; padding: 0px 44px 0px 46px; width: 510px; text-align: left;">
        <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields('I'), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding-top: 32px;">
        <tr valign="top">
            <td width="100%" align="center" style="border-bottom: 1px dashed #000000; padding-bottom: 20px;">
                <h3 style="font: bold 17px Tahoma; padding: 0px 0px 3px 1px; margin: 0px;"><?php echo $_smarty_tpl->__("ship_to");?>
:</h3>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_firstname']||$_smarty_tpl->tpl_vars['order_info']->value['s_lastname']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_address']||$_smarty_tpl->tpl_vars['order_info']->value['s_address_2']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_city']||$_smarty_tpl->tpl_vars['order_info']->value['s_state_descr']||$_smarty_tpl->tpl_vars['order_info']->value['s_zipcode']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_country_descr']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_extra_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S']), 0);?>

            </td>
        </tr>
        <tr valign="top" class="scissors">
            <td width="100%" style="padding-left: 20px;">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/scissors.gif" border="0" />
            </td>
        </tr>
        </table>
        
        <?php }?>
        
        
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td style="width: 50%; padding: 14px 0px 0px 2px;">
                <h2 style="font: bold 12px Arial; margin: 0px 0px 3px 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_address'], ENT_QUOTES, 'UTF-8');?>
<br />
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_city'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_city']&&($_smarty_tpl->tpl_vars['company_placement_info']->value['company_state_descr']||$_smarty_tpl->tpl_vars['company_placement_info']->value['company_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_zipcode'], ENT_QUOTES, 'UTF-8');?>
<br />
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_country_descr'], ENT_QUOTES, 'UTF-8');?>

                <table cellpadding="0" cellspacing="0" border="0">
                <?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_phone']) {?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px;    white-space: nowrap;"><?php echo $_smarty_tpl->__("phone1_label");?>
:</td>
                    <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_phone'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_phone_2']) {?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("phone2_label");?>
:</td>
                    <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_fax']) {?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("fax");?>
:</td>
                    <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_fax'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_website']) {?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("web_site");?>
:</td>
                    <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_website'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_placement_info']->value['company_orders_department']) {?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("email");?>
:</td>
                    <td width="100%"><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_placement_info']->value['company_orders_department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['company_placement_info']->value['company_orders_department'],",","<br>")," ",''), ENT_QUOTES, 'UTF-8');?>
</a></td>
                </tr>
                <?php }?>
                </table>
            </td>
            
            <td style="padding-top: 14px;" valign="top">
                <h2 style="font: bold 17px Tahoma; margin: 0px;"><?php echo $_smarty_tpl->__("packing_slip_for_order");?>
&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</h2>
                <table cellpadding="0" cellspacing="0" border="0">
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_shipments']=="Y"&&$_smarty_tpl->tpl_vars['shipment']->value) {?>
                    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("order_date");?>
:</td>
                            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("shipment_date");?>
:</td>
                            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                    <?php }?>
                <?php } else { ?>
                <tr valign="top">
                    <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("date");?>
:</td>
                    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php }?>
                </table>
            </td>
        </tr>
        </table>
        
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding: 20px 0px 24px 0px;">
        <tr valign="top">
            <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <td width="54%">
                <h3 style="font: bold 17px Tahoma; padding: 0px 0px 3px 1px; margin: 0px;"><?php echo $_smarty_tpl->__("bill_to");?>
:</h3>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['b_firstname']||$_smarty_tpl->tpl_vars['order_info']->value['b_lastname']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_lastname'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['b_address']||$_smarty_tpl->tpl_vars['order_info']->value['b_address_2']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_address'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_address_2'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['b_city']||$_smarty_tpl->tpl_vars['order_info']->value['b_state_descr']||$_smarty_tpl->tpl_vars['order_info']->value['b_zipcode']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_city'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['b_city']&&($_smarty_tpl->tpl_vars['order_info']->value['b_state_descr']||$_smarty_tpl->tpl_vars['order_info']->value['b_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_zipcode'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['b_country_descr']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['b_country_descr'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_extra_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B']), 0);?>

            </td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <td width="54%">
                <h3 style="font: bold 17px Tahoma; padding: 0px 0px 3px 1px; margin: 0px;"><?php echo $_smarty_tpl->__("ship_to");?>
:</h3>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_firstname']||$_smarty_tpl->tpl_vars['order_info']->value['s_lastname']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_address']||$_smarty_tpl->tpl_vars['order_info']->value['s_address_2']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_city']||$_smarty_tpl->tpl_vars['order_info']->value['s_state_descr']||$_smarty_tpl->tpl_vars['order_info']->value['s_zipcode']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_city']&&($_smarty_tpl->tpl_vars['order_info']->value['s_state_descr']||$_smarty_tpl->tpl_vars['order_info']->value['s_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['s_country_descr']) {?>
                <p style="margin: 2px 0px 3px 0px;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_extra_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S']), 0);?>

            </td>
            <?php }?>
        </tr>
        </table>
        <?php }?>
        
        
        <table cellpadding="0" cellspacing="0" border="0">
        <tr valign="top">
            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("status");?>
:</td>
            <td width="100%"><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view"), 0);?>
</td>
        </tr>
        <tr valign="top">
            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("payment_method");?>
:</td>
            <td valign="bottom"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'])===null||$tmp==='' ? " - " : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']||$_smarty_tpl->tpl_vars['shipment']->value) {?>
        <tr valign="top">
            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("shipping_method");?>
:</td>
            <td valign="bottom">
                <?php if (!$_smarty_tpl->tpl_vars['shipment']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["shipping"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->iteration++;
 $_smarty_tpl->tpl_vars["shipping"]->last = $_smarty_tpl->tpl_vars["shipping"]->iteration === $_smarty_tpl->tpl_vars["shipping"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_shipp"]['last'] = $_smarty_tpl->tpl_vars["shipping"]->last;
?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_shipp']['last']) {?>, <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['tracking_number']) {?><?php $_smarty_tpl->tpl_vars["tracking_number_exists"] = new Smarty_variable("Y", null, 0);?><?php }?>
                    <?php } ?>
                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?>
                    &nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>
)
                    <?php }?>
                <?php }?>
            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['tracking_number_exists']->value) {?>
            <tr valign="top">
                <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("tracking_number");?>
:</td>
                <td valign="bottom">
                    <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["shipping"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->iteration++;
 $_smarty_tpl->tpl_vars["shipping"]->last = $_smarty_tpl->tpl_vars["shipping"]->iteration === $_smarty_tpl->tpl_vars["shipping"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_shipp"]['last'] = $_smarty_tpl->tpl_vars["shipping"]->last;
?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['tracking_number']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>

                            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_shipp']['last']) {?>,<?php }?>
                        <?php }?>
                    <?php } ?></td>
            </tr>
        <?php }?>
        <?php }?>
        </table>
        
        
    
        <table width="100%" cellpadding="0" cellspacing="1" style="background-color: #dddddd; margin-top: 20px;">
        <tr>
            <th width="70%" style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("sku");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['oi']->value['amount']>0) {?>
            <tr>
                <td style="padding: 5px 10px; background-color: #ffffff;">
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product'])===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp);?>

                    <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><br/><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options'],'skip_modifiers'=>true), 0);?>
<?php }?>
                </td>
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: left;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: center;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php }?>
        <?php } ?>
        </table>
        
        
        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_shipments']!="Y"&&$_smarty_tpl->tpl_vars['shipment']->value) {?>
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['notes']) {?>
                    <div style="float: left; padding-top: 20px;"><strong><?php echo $_smarty_tpl->__("notes");?>
:</strong></div>
                    <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden;"><?php echo htmlspecialchars(nl2br(smarty_mb_wordwrap($_smarty_tpl->tpl_vars['order_info']->value['notes'],90,"\n",true)), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
            <div style="float: left; padding-top: 20px;"><strong><?php echo $_smarty_tpl->__("comments");?>
:</strong></div>
            <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden;"><?php echo htmlspecialchars(nl2br(smarty_mb_wordwrap($_smarty_tpl->tpl_vars['shipment']->value['comments'],90,"\n",true)), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:invoice")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:invoice"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:invoice"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    </td>
</tr>
</table>
<?php }?>

</body>
</html><?php }} ?>
