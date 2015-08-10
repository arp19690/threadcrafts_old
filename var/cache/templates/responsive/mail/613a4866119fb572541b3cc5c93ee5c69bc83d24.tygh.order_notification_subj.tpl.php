<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 12:45:40
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/orders/order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195855683355b1e61cabc8c6-79745705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613a4866119fb572541b3cc5c93ee5c69bc83d24' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/orders/order_notification_subj.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195855683355b1e61cabc8c6-79745705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1e61cbc9c87_77604040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1e61cbc9c87_77604040')) {function content_55b1e61cbc9c87_77604040($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('order','order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="orders/order_notification_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"orders/order_notification_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }} ?>
