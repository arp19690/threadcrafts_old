<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:11:29
         compiled from "/var/www/html/design/backend/mail/templates/addons/gift_certificates/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98410850855c4dfb9918310-00749885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219af64731042c1793246c59f15e48ae84770915' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/gift_certificates/hooks/orders/product_info.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98410850855c4dfb9918310-00749885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'c_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4dfb992f751_63390827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4dfb992f751_63390827')) {function content_55c4dfb992f751_63390827($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_certificates'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']) {?>
    <div>(<?php echo $_smarty_tpl->__("gift_certificates");?>
:&nbsp;<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
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
?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_fciu']['last']) {?>,<?php }?><?php } ?>)</div>
<?php }?><?php }} ?>
