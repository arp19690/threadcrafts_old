<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:28:44
         compiled from "/var/www/html/design/backend/mail/templates/addons/rma/slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16212516455efbc841ddf18-64545984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b524b4361e8d8de44635f890549c2ac6b7abfdfe' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/rma/slip.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16212516455efbc841ddf18-64545984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'logos' => 0,
    'company_data' => 0,
    'return_info' => 0,
    'action_id' => 0,
    'actions' => 0,
    'settings' => 0,
    'profile_fields' => 0,
    'key' => 0,
    'ri' => 0,
    'reason_id' => 0,
    'reasons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efbc844694a2_92600767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efbc844694a2_92600767')) {function content_55efbc844694a2_92600767($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('packing_slip','phone1_label','phone2_label','fax','web_site','email','rma_return','action','status','date','customer','phone','bill_to','ship_to','sku','product','price','amount','reason','free','text_no_products_found','comments','packing_slip','phone1_label','phone2_label','fax','web_site','email','rma_return','action','status','date','customer','phone','bill_to','ship_to','sku','product','price','amount','reason','free','text_no_products_found','comments'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

<style type="text/css" media="screen,print">
body,p,div {
    color: #000000;
    font: 12px Arial;
}
body {
    background-color: #f4f6f8;
    padding-top: 24px;
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
body, .main-table {
    background-color: #ffffff !important;
}
</style>

<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f4f6f8;">
<tr>
    <td width="100%" align="center">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="background-color: #ffffff; border: 1px solid #e6e6e6; margin: 0px auto; padding: 0px 40px 40px 40px; width: 510px;" align="left">
                <h1 style="text-align: right; font: bold 26px Arial; text-transform: uppercase; border-bottom: 1px solid #868686; padding: 10px 0px 8px 0px; margin-bottom: 0px;">
                    <div style="float: left;"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" /></div>
                    <?php echo $_smarty_tpl->__("packing_slip");?>

                </h1>
            
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top">
                    <td style="width: 50%; padding: 14px 0px 0px 2px;">
                        <h2 style="font: bold 12px Arial; margin: 0px 0px 3px 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_address'], ENT_QUOTES, 'UTF-8');?>
<br />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_city'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_city']&&($_smarty_tpl->tpl_vars['company_data']->value['company_state_descr']||$_smarty_tpl->tpl_vars['company_data']->value['company_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_zipcode'], ENT_QUOTES, 'UTF-8');?>
<br />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_country_descr'], ENT_QUOTES, 'UTF-8');?>

                        <table cellpadding="0" cellspacing="0" border="0">
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_phone']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("phone1_label");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_phone'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>                
                        <?php }?>        
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_phone_2']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("phone2_label");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>                
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_fax']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("fax");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_fax'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_website']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("web_site");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_website'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_orders_department']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("email");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_orders_department'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>        
                        </table>
                    </td>
                    <td style="padding-top: 14px;">
                        <h2 style="font: bold 17px Tahoma; margin: 0px;"><?php echo $_smarty_tpl->__("rma_return");?>
&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <table cellpadding="0" cellspacing="0" border="0">
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("action");?>
:</td>
                            <td width="100%"><?php $_smarty_tpl->tpl_vars["action_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['return_info']->value['action'], null, 0);?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['action_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("status");?>
:</td>
                            <td width="100%"><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['return_info']->value['status'],'display'=>"view",'status_type'=>@constant('STATUSES_RETURN')), 0);?>
</td>
                        </tr>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("date");?>
:</td>
                            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        </table>
                    </td>
                </tr>
                </table>
            
                
                <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields('I'), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding: 32px 0px 24px 0px;">
                <tr valign="top">
                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['C']) {?>
                    <td width="33%">
                        <h3 style="font: bold 17px Tahoma; padding: 0px 0px 3px 1px; margin: 0px;"><?php echo $_smarty_tpl->__("customer");?>
:</h3>
                        <p style="margin: 2px 0px 3px 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p style="margin: 2px 0px 3px 0px;"><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['order_info']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                        <p style="margin: 2px 0px 3px 0px;"><span style="text-transform: uppercase;"><?php echo $_smarty_tpl->__("phone");?>
:</span>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_extra_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C']), 0);?>

                    </td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
                    <td width="34%" style="<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>padding-right: 10px;<?php }?> <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['C']) {?>padding-left: 10px;<?php }?>">
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
                    <td width="33%">
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
                
                
                
                <table cellpadding="0" cellspacing="1" border="0" width="100%" style="background-color: #dddddd;">
                <tr>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("sku");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("product");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("price");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("amount");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("reason");?>
</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]) {?>
                <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
                <tr>
                    <td style="padding: 5px 10px; background-color: #ffffff;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td style="padding: 5px 10px; background-color: #ffffff;"><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>

                        <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>
</div><?php }?></td>
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;"><?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>        
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;">
                        <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                        &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6" align="center" style="padding: 5px 10px; background-color: #ffffff;"><p style="margin: 2px 0px 3px 0px;"><b><?php echo $_smarty_tpl->__("text_no_products_found");?>
</b></p></td>
                    </tr>    
                <?php }?>
                </table>
                
            
                <?php if ($_smarty_tpl->tpl_vars['return_info']->value['comment']) {?>
                    <p style="margin-top: 15px; font-weight: bold;"><?php echo $_smarty_tpl->__("comments");?>
:</p>
                    <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; overflow-y: hidden; clear: both; width: 505px;"><?php echo htmlspecialchars(nl2br($_smarty_tpl->tpl_vars['return_info']->value['comment']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/slip.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/slip.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

<style type="text/css" media="screen,print">
body,p,div {
    color: #000000;
    font: 12px Arial;
}
body {
    background-color: #f4f6f8;
    padding-top: 24px;
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
body, .main-table {
    background-color: #ffffff !important;
}
</style>

<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f4f6f8;">
<tr>
    <td width="100%" align="center">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="background-color: #ffffff; border: 1px solid #e6e6e6; margin: 0px auto; padding: 0px 40px 40px 40px; width: 510px;" align="left">
                <h1 style="text-align: right; font: bold 26px Arial; text-transform: uppercase; border-bottom: 1px solid #868686; padding: 10px 0px 8px 0px; margin-bottom: 0px;">
                    <div style="float: left;"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['mail']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" /></div>
                    <?php echo $_smarty_tpl->__("packing_slip");?>

                </h1>
            
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top">
                    <td style="width: 50%; padding: 14px 0px 0px 2px;">
                        <h2 style="font: bold 12px Arial; margin: 0px 0px 3px 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_address'], ENT_QUOTES, 'UTF-8');?>
<br />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_city'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_city']&&($_smarty_tpl->tpl_vars['company_data']->value['company_state_descr']||$_smarty_tpl->tpl_vars['company_data']->value['company_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_zipcode'], ENT_QUOTES, 'UTF-8');?>
<br />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_country_descr'], ENT_QUOTES, 'UTF-8');?>

                        <table cellpadding="0" cellspacing="0" border="0">
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_phone']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("phone1_label");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_phone'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>                
                        <?php }?>        
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_phone_2']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("phone2_label");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>                
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_fax']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("fax");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_fax'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_website']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("web_site");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_website'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_orders_department']) {?>
                        <tr>
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("email");?>
:</td>
                            <td width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_orders_department'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php }?>        
                        </table>
                    </td>
                    <td style="padding-top: 14px;">
                        <h2 style="font: bold 17px Tahoma; margin: 0px;"><?php echo $_smarty_tpl->__("rma_return");?>
&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <table cellpadding="0" cellspacing="0" border="0">
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("action");?>
:</td>
                            <td width="100%"><?php $_smarty_tpl->tpl_vars["action_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['return_info']->value['action'], null, 0);?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['action_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("status");?>
:</td>
                            <td width="100%"><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['return_info']->value['status'],'display'=>"view",'status_type'=>@constant('STATUSES_RETURN')), 0);?>
</td>
                        </tr>
                        <tr valign="top">
                            <td style="font: 12px verdana, helvetica, arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("date");?>
:</td>
                            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        </table>
                    </td>
                </tr>
                </table>
            
                
                <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields('I'), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding: 32px 0px 24px 0px;">
                <tr valign="top">
                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['C']) {?>
                    <td width="33%">
                        <h3 style="font: bold 17px Tahoma; padding: 0px 0px 3px 1px; margin: 0px;"><?php echo $_smarty_tpl->__("customer");?>
:</h3>
                        <p style="margin: 2px 0px 3px 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p style="margin: 2px 0px 3px 0px;"><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['order_info']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                        <p style="margin: 2px 0px 3px 0px;"><span style="text-transform: uppercase;"><?php echo $_smarty_tpl->__("phone");?>
:</span>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_extra_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C']), 0);?>

                    </td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
                    <td width="34%" style="<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>padding-right: 10px;<?php }?> <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['C']) {?>padding-left: 10px;<?php }?>">
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
                    <td width="33%">
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
                
                
                
                <table cellpadding="0" cellspacing="1" border="0" width="100%" style="background-color: #dddddd;">
                <tr>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("sku");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("product");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("price");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("amount");?>
</th>
                    <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap;"><?php echo $_smarty_tpl->__("reason");?>
</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]) {?>
                <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
                <tr>
                    <td style="padding: 5px 10px; background-color: #ffffff;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td style="padding: 5px 10px; background-color: #ffffff;"><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>

                        <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>
</div><?php }?></td>
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;"><?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>        
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td align="center" style="padding: 5px 10px; background-color: #ffffff;">
                        <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                        &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6" align="center" style="padding: 5px 10px; background-color: #ffffff;"><p style="margin: 2px 0px 3px 0px;"><b><?php echo $_smarty_tpl->__("text_no_products_found");?>
</b></p></td>
                    </tr>    
                <?php }?>
                </table>
                
            
                <?php if ($_smarty_tpl->tpl_vars['return_info']->value['comment']) {?>
                    <p style="margin-top: 15px; font-weight: bold;"><?php echo $_smarty_tpl->__("comments");?>
:</p>
                    <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; overflow-y: hidden; clear: both; width: 505px;"><?php echo htmlspecialchars(nl2br($_smarty_tpl->tpl_vars['return_info']->value['comment']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>
<?php }?><?php }?><?php }} ?>
