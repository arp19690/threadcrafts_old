<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:21
         compiled from "/var/www/html/design/backend/templates/views/order_management/components/discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26462197355efb8adbe07f5-70946879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e302e71b94e1bd3a93b04b78772c73dd0d4ba6c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/order_management/components/discounts.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26462197355efb8adbe07f5-70946879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8adbf42b8_98989149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8adbf42b8_98989149')) {function content_55efb8adbf42b8_98989149($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <label for="coupon_code"><?php echo $_smarty_tpl->__("discount_coupon_code");?>
:</label>
	    <input type="text" name="coupon_code" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
