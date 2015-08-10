<?php /* Smarty version Smarty-3.1.18, created on 2015-08-09 10:24:27
         compiled from "/var/www/html/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180975755055c6dd039bfc14-70767370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61978e5bce0a96f31fb797771f42d77fa904e3f2' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl',
      1 => 1437201219,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180975755055c6dd039bfc14-70767370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'class' => 0,
    'width' => 0,
    'height' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c6dd03a230b6_00927655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c6dd03a230b6_00927655')) {function content_55c6dd03a230b6_00927655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><span class="ty-gift-image<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;">
    <i class="ty-gift-image__icon ty-icon-gift" title="<?php echo $_smarty_tpl->__("gift_certificate");?>
"></i>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><span class="ty-gift-image<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;">
    <i class="ty-gift-image__icon ty-icon-gift" title="<?php echo $_smarty_tpl->__("gift_certificate");?>
"></i>
</span><?php }?><?php }} ?>
