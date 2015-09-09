<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:58:34
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/orders/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95616430055efb57259b0b6-09678731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4194f06a64433211e01c75ec5ec0697add12572c' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/hooks/orders/notify_checkboxes.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95616430055efb57259b0b6-09678731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'item' => 0,
    'have_supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb5725b1fa0_10073839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb5725b1fa0_10073839')) {function content_55efb5725b1fa0_10073839($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('notify_supplier'));
?>
<?php $_smarty_tpl->tpl_vars['have_supplier'] = new Smarty_variable(false, null, 0);?>
<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['extra']['supplier_id']) {?>
		<?php $_smarty_tpl->tpl_vars['have_supplier'] = new Smarty_variable(true, null, 0);?>
	<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['have_supplier']->value) {?>
    <label for="notify_supplier" class="checkbox">
        <input type="checkbox" name="notify_supplier" id="notify_supplier" value="Y" />
        <?php echo $_smarty_tpl->__("notify_supplier");?>

    </label>
<?php }?><?php }} ?>
