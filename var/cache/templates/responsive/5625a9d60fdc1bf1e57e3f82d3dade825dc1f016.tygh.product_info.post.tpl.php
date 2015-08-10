<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 02:08:15
         compiled from "/var/www/html/design/themes/responsive/templates/addons/reward_points/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150328396355aab93704dbe1-20863666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5625a9d60fdc1bf1e57e3f82d3dade825dc1f016' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1437201221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150328396355aab93704dbe1-20863666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aab93707ccb5_13657576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aab93707ccb5_13657576')) {function content_55aab93707ccb5_13657576($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('price_in_points','price_in_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['product']->value) {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/orders/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/orders/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['product']->value) {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }?><?php }?><?php }} ?>
