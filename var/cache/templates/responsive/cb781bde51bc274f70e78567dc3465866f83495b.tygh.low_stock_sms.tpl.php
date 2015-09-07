<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 14:58:46
         compiled from "/var/www/html/design/themes/responsive/templates/addons/sms_notifications/views/sms/components/low_stock_sms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158298099855e6c14e38fe47-75067222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb781bde51bc274f70e78567dc3465866f83495b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/sms_notifications/views/sms/components/low_stock_sms.tpl',
      1 => 1439439701,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158298099855e6c14e38fe47-75067222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e6c14e3bded4_41359645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6c14e3bded4_41359645')) {function content_55e6c14e3bded4_41359645($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('low_stock_subj','low_stock_subj'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
: <?php echo $_smarty_tpl->__("low_stock_subj",array("[product]"=>((string)$_smarty_tpl->tpl_vars['product']->value)." #".((string)$_smarty_tpl->tpl_vars['product_id']->value)));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sms_notifications/views/sms/components/low_stock_sms.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sms_notifications/views/sms/components/low_stock_sms.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
: <?php echo $_smarty_tpl->__("low_stock_subj",array("[product]"=>((string)$_smarty_tpl->tpl_vars['product']->value)." #".((string)$_smarty_tpl->tpl_vars['product_id']->value)));?>
<?php }?><?php }} ?>
