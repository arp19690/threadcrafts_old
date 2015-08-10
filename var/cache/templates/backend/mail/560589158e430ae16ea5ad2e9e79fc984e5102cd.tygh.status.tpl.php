<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:11:16
         compiled from "/var/www/html/design/backend/mail/templates/common/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122912066455c4dfac88b760-44918443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560589158e430ae16ea5ad2e9e79fc984e5102cd' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/common/status.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122912066455c4dfac88b760-44918443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status_type' => 0,
    'display' => 0,
    'status' => 0,
    'name' => 0,
    'select_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4dfac8b8a92_48338083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4dfac8b8a92_48338083')) {function content_55c4dfac8b8a92_48338083($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/app/lib/other/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/html/app/lib/other/smarty/plugins/function.html_checkboxes.php';
?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {?><?php $_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?><?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {?><div><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>4),$_smarty_tpl);?>
</div><?php }?>
<?php }} ?>
