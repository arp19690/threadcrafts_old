<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:53:15
         compiled from "/var/www/html/design/backend/mail/templates/addons/suppliers/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124521995255efb433b53af8-61807906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5590b395657a5f9169ef2f0b9ac65d454a576242' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/suppliers/hooks/orders/product_info.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124521995255efb433b53af8-61807906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'oi' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb433b832f7_26977669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb433b832f7_26977669')) {function content_55efb433b832f7_26977669($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('supplier','supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']) {?>
    <p style="margin: 2px 0px 3px 0px;"><?php echo $_smarty_tpl->__("supplier");?>
: <?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/suppliers/hooks/orders/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/suppliers/hooks/orders/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']) {?>
    <p style="margin: 2px 0px 3px 0px;"><?php echo $_smarty_tpl->__("supplier");?>
: <?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php }?><?php }} ?>
