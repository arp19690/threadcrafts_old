<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:50:13
         compiled from "/var/www/html/design/backend/templates/views/shippings/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193520508155aa6eade01c46-60754192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9954aeb2bf3e581375cc1565ecb7eabccd96463' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/shippings/configure.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193520508155aa6eade01c46-60754192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service_template' => 0,
    'addons_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6eade3c8b8_56110281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6eade3c8b8_56110281')) {function content_55aa6eade3c8b8_56110281($_smarty_tpl) {?><div id="content_configure">
<?php if ($_smarty_tpl->tpl_vars['service_template']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value]) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value])."/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/services/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<!--content_configure--></div><?php }} ?>
