<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:11:54
         compiled from "/var/www/html/design/backend/mail/templates/orders/order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178502917355c4dfd27907a2-16766306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1783919131afc75e08bded080e6d9ab7607cf15f' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/orders/order_notification_subj.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178502917355c4dfd27907a2-16766306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4dfd27c8591_08877785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4dfd27c8591_08877785')) {function content_55c4dfd27c8591_08877785($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('order'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
