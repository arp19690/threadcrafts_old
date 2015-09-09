<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:59
         compiled from "/var/www/html/design/backend/templates/addons/rma/hooks/orders/totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102501191355efb8d3a41ef6-25462556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6badf1b7a5f1197c70263ca716d4206caeef10e7' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/rma/hooks/orders/totals_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102501191355efb8d3a41ef6-25462556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8d3a4e025_01295257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8d3a4e025_01295257')) {function content_55efb8d3a4e025_01295257($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('rma_return'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['return']) {?>
    <li>
        <em><?php echo $_smarty_tpl->__("rma_return");?>
:&nbsp;</em>
        <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['return']), 0);?>
</span>
    </li>
<?php }?><?php }} ?>
