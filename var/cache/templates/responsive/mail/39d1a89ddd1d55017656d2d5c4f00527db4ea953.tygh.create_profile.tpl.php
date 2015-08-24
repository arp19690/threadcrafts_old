<?php /* Smarty version Smarty-3.1.18, created on 2015-08-22 00:00:19
         compiled from "/var/www/html/design/themes/responsive/mail/templates/addons/hybrid_auth/create_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40105260155d76e3bb77288-28885534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d1a89ddd1d55017656d2d5c4f00527db4ea953' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/addons/hybrid_auth/create_profile.tpl',
      1 => 1439189920,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '40105260155d76e3bb77288-28885534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d76e3bbcb8f1_85596233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d76e3bbcb8f1_85596233')) {function content_55d76e3bbcb8f1_85596233($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('dear','hybrid_auth.password_generated','hybrid_auth.change_password','dear','hybrid_auth.password_generated','hybrid_auth.change_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->__("dear");?>
 <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(mb_strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type']), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>,<br>
<br>
<?php echo $_smarty_tpl->__("hybrid_auth.password_generated");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['password'], ENT_QUOTES, 'UTF-8');?>
<br>
<br />
<?php echo $_smarty_tpl->__("hybrid_auth.change_password");?>
: <url><br> <?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>

<br />
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/create_profile.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/create_profile.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->__("dear");?>
 <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(mb_strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type']), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>,<br>
<br>
<?php echo $_smarty_tpl->__("hybrid_auth.password_generated");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['password'], ENT_QUOTES, 'UTF-8');?>
<br>
<br />
<?php echo $_smarty_tpl->__("hybrid_auth.change_password");?>
: <url><br> <?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>

<br />
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
