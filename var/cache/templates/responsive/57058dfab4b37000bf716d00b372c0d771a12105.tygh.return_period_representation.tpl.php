<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:20:37
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29102423855efba9d6425f4-65796515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57058dfab4b37000bf716d00b372c0d771a12105' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29102423855efba9d6425f4-65796515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efba9d6806b8_44401059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efba9d6806b8_44401059')) {function content_55efba9d6806b8_44401059($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('return_period','days','return_period','days'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['return_period']&&$_smarty_tpl->tpl_vars['product']->value['is_returnable']=="Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/products/components/return_period_representation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/products/components/return_period_representation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['return_period']&&$_smarty_tpl->tpl_vars['product']->value['is_returnable']=="Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }?><?php }?><?php }} ?>
