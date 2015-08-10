<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:14
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103686651855aca1a6da8d35-45191089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad114e9c4808bc3fb88b05832128e850755443d6' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103686651855aca1a6da8d35-45191089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'c_key' => 0,
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a6dc57c7_49600176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a6dc57c7_49600176')) {function content_55aca1a6dc57c7_49600176($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["c_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["c"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_key"]->value = $_smarty_tpl->tpl_vars["c"]->key;
 $_smarty_tpl->tpl_vars["c"]->iteration++;
 $_smarty_tpl->tpl_vars["c"]->last = $_smarty_tpl->tpl_vars["c"]->iteration === $_smarty_tpl->tpl_vars["c"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_fciu"]['last'] = $_smarty_tpl->tpl_vars["c"]->last;
?>&nbsp;<a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'][$_smarty_tpl->tpl_vars['c_key']->value]['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_fciu']['last']) {?>,<?php }?><?php } ?>)</div>
<?php }?><?php }} ?>
