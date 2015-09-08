<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:08:47
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164616075755eed6d73434c8-41479120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d19d9a39a464d37aef56394482667ea5a9debd9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '164616075755eed6d73434c8-41479120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'prefix' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eed6d73532e5_97017534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed6d73532e5_97017534')) {function content_55eed6d73532e5_97017534($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('notify_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['have_suppliers']) {?>
	<li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier">
        <input type="checkbox" name="__notify_supplier" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier" value="Y" checked="checked" onclick="Tygh.$('input[name=__notify_supplier]').prop('checked', this.checked);" />
        <?php echo $_smarty_tpl->__("notify_supplier");?>
</label></a>
    </li>
<?php }?><?php }} ?>
