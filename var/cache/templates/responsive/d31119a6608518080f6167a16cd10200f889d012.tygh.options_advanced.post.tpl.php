<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:21:28
         compiled from "/var/www/html/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73692654955e68e608873d7-07857467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31119a6608518080f6167a16cd10200f889d012' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl',
      1 => 1441172124,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73692654955e68e608873d7-07857467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'capture_options_vs_qty' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68e608f4b21_41228812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68e608f4b21_41228812')) {function content_55e68e608f4b21_41228812($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('supplier','supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</a></span>
    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/suppliers/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/suppliers/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</a></span>
    </div>
<?php }?><?php }?><?php }} ?>
