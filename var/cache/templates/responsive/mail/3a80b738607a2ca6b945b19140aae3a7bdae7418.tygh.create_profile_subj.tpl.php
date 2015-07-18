<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:48:13
         compiled from "/var/www/html/design/themes/responsive/mail/templates/addons/hybrid_auth/create_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29684746755aa6e35bf0210-78889299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a80b738607a2ca6b945b19140aae3a7bdae7418' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/addons/hybrid_auth/create_profile_subj.tpl',
      1 => 1437201220,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29684746755aa6e35bf0210-78889299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'company_data' => 0,
    'u_type' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6e35c54a56_15311780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6e35c54a56_15311780')) {function content_55aa6e35c54a56_15311780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('new_profile_notification','new_profile_notification'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars['u_type'] = new Smarty_variable(strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type'])), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("new_profile_notification",array("[user_type]"=>$_smarty_tpl->tpl_vars['u_type']->value));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/create_profile_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/create_profile_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['u_type'] = new Smarty_variable(strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type'])), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("new_profile_notification",array("[user_type]"=>$_smarty_tpl->tpl_vars['u_type']->value));?>

<?php }?><?php }} ?>
