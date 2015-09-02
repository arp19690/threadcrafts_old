<?php /* Smarty version Smarty-3.1.18, created on 2015-08-31 14:47:15
         compiled from "/var/www/html/design/themes/responsive/mail/templates/profiles/recover_password_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41495536555e41b9b932cd8-54990997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ffa4c75b20b38cb695ef75c2dc86e0b62de405' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/profiles/recover_password_subj.tpl',
      1 => 1439189913,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41495536555e41b9b932cd8-54990997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e41b9b97ef82_48656463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e41b9b97ef82_48656463')) {function content_55e41b9b97ef82_48656463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('recover_password_subj','recover_password_subj'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("recover_password_subj");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="profiles/recover_password_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"profiles/recover_password_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("recover_password_subj");?>
<?php }?><?php }} ?>
