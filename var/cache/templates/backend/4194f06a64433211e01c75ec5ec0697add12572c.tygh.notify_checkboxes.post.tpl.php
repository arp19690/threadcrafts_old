<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 20:14:07
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/orders/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116656104255e70b37bd8f67-41937316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '116656104255e70b37bd8f67-41937316',
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
  'unifunc' => 'content_55e70b37bf1c58_45909267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e70b37bf1c58_45909267')) {function content_55e70b37bf1c58_45909267($_smarty_tpl) {?><?php
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
