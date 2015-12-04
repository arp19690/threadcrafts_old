<?php /* Smarty version Smarty-3.1.18, created on 2015-10-02 05:45:06
         compiled from "/var/www/html/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750240445560dcc8a4c9d05-86023491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d5a5720da477cff4f66dd160338f06623c53a7' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl',
      1 => 1439189925,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '750240445560dcc8a4c9d05-86023491',
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
  'unifunc' => 'content_560dcc8a4f5797_82623588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560dcc8a4f5797_82623588')) {function content_560dcc8a4f5797_82623588($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('wishlist','wishlist_note','wishlist','wishlist_note'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/success_registration.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/success_registration.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php }?><?php }} ?>
