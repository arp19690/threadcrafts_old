<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:59
         compiled from "/var/www/html/design/backend/templates/addons/rma/hooks/orders/details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212483214655efb8d3d22001-02066032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ef07c70013c5f66ad6a5e455878a96ce2956ab' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/rma/hooks/orders/details_tools.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '212483214655efb8d3d22001-02066032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8d3d3a207_19984270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8d3d3a207_19984270')) {function content_55efb8d3d3a207_19984270($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('return_registration','order_returns'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['allow_return']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("return_registration"),'but_href'=>"rma.create_return?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['isset_returns']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("order_returns"),'but_href'=>"rma.returns?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?><?php }} ?>
