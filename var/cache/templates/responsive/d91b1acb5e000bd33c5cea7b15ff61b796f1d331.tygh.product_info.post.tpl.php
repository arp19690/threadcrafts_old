<?php /* Smarty version Smarty-3.1.18, created on 2015-08-09 09:59:29
         compiled from "/var/www/html/design/themes/responsive/templates/addons/reward_points/hooks/checkout/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14048542355c6d729474746-93117254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91b1acb5e000bd33c5cea7b15ff61b796f1d331' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/reward_points/hooks/checkout/product_info.post.tpl',
      1 => 1437201221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14048542355c6d729474746-93117254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'key' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c6d7294dd107_14956876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c6d7294dd107_14956876')) {function content_55c6d7294dd107_14956876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('price_in_points','points_lower','reward_points','points_lower','price_in_points','points_lower','reward_points','points_lower'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['configuration']) {?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['price']) {?>
    <div class="ty-reward-points__product-info">
        <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['display_price'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</span>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']) {?>
    <div class="ty-reward-points__product-info">
        <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
        <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</span>
    </div>
    <?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['configuration']) {?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['price']) {?>
    <div class="ty-reward-points__product-info">
        <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['display_price'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</span>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward']) {?>
    <div class="ty-reward-points__product-info">
        <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
        <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</span>
    </div>
    <?php }?>
<?php }?><?php }?><?php }} ?>
