<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:21
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/order_management/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128988264955efb8ade33227-59067243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a111e6c8e26f5046a8f6b0c98e88ceae297c28' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/hooks/order_management/notify_checkboxes.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128988264955efb8ade33227-59067243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8ade44aa5_78378614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8ade44aa5_78378614')) {function content_55efb8ade44aa5_78378614($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('notify_supplier'));
?>
<div class="control-group">
    <label for="notify_supplier" class="checkbox"><?php echo $_smarty_tpl->__("notify_supplier");?>

    <input type="checkbox" class="" name="notify_supplier" id="notify_supplier" value="Y" /></label>
</div>
<?php }} ?>
