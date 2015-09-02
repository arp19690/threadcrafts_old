<?php /* Smarty version Smarty-3.1.18, created on 2015-08-31 14:47:15
         compiled from "/var/www/html/design/themes/responsive/mail/templates/profiles/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115137666955e41b9b998031-27835318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c60f2e3fe627ab480a3b84156d02b67136671c8' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/profiles/recover_password.tpl',
      1 => 1439189913,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115137666955e41b9b998031-27835318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ekey' => 0,
    'zone' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e41b9b9d6836_75331710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e41b9b9d6836_75331710')) {function content_55e41b9b9d6836_75331710($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_confirm_passwd_recovery','text_confirm_passwd_recovery'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_confirm_passwd_recovery");?>
:<br /><br />

<a href="<?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
</a>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="profiles/recover_password.tpl" id="<?php echo smarty_function_set_id(array('name'=>"profiles/recover_password.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_confirm_passwd_recovery");?>
:<br /><br />

<a href="<?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
</a>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
