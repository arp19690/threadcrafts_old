<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 02:08:14
         compiled from "/var/www/html/design/themes/responsive/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94465524855aab9370056f6-80149857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c0c90a03a4ab5e359275dc4b3fb65f721f7a4f' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl',
      1 => 1437201219,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94465524855aab9370056f6-80149857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'c_key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aab937045cb5_11922081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aab937045cb5_11922081')) {function content_55aab937045cb5_11922081($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["c_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["c"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_key"]->value = $_smarty_tpl->tpl_vars["c"]->key;
 $_smarty_tpl->tpl_vars["c"]->iteration++;
 $_smarty_tpl->tpl_vars["c"]->last = $_smarty_tpl->tpl_vars["c"]->iteration === $_smarty_tpl->tpl_vars["c"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_fciu"]['last'] = $_smarty_tpl->tpl_vars["c"]->last;
?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_fciu']['last']) {?>,<?php }?><?php } ?>)</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/orders/components/order_details_body.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/orders/components/order_details_body.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["c_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["c"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_key"]->value = $_smarty_tpl->tpl_vars["c"]->key;
 $_smarty_tpl->tpl_vars["c"]->iteration++;
 $_smarty_tpl->tpl_vars["c"]->last = $_smarty_tpl->tpl_vars["c"]->iteration === $_smarty_tpl->tpl_vars["c"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_fciu"]['last'] = $_smarty_tpl->tpl_vars["c"]->last;
?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_fciu']['last']) {?>,<?php }?><?php } ?>)</div>
<?php }?><?php }?><?php }} ?>