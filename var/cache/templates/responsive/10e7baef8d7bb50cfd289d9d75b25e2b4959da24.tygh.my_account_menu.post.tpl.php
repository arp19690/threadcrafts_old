<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:04:15
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171666862955efb6c7287b00-60438591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e7baef8d7bb50cfd289d9d75b25e2b4959da24' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/hooks/profiles/my_account_menu.post.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171666862955efb6c7287b00-60438591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb6c72b03e0_75822990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb6c72b03e0_75822990')) {function content_55efb6c72b03e0_75822990($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('return_requests','return_requests'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-account-info__item ty-dropdown-box__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
</li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><li class="ty-account-info__item ty-dropdown-box__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
</li><?php }?><?php }} ?>
