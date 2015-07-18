<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:29:16
         compiled from "/var/www/html/design/backend/templates/addons/hybrid_auth/components/callback_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75207269655aa2374375db6-91272127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb4b7e1c55af6c55b66a683784440e2c1a839c8' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/hybrid_auth/components/callback_url.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75207269655aa2374375db6-91272127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'provider' => 0,
    'providers_schema' => 0,
    'provider_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa23743a8076_79531212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa23743a8076_79531212')) {function content_55aa23743a8076_79531212($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['provider_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['provider'], null, 0);?>
<div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->__('hybrid_auth.callback_url');?>
: </label>
	<div class="controls">
		<input type="text" class="span8" readonly="readonly" value="<?php echo htmlspecialchars(fn_url("auth.process?hauth_done=".((string)$_smarty_tpl->tpl_vars['provider_name']->value),"C"), ENT_QUOTES, 'ISO-8859-1');?>
" onclick="this.select()">
	</div>
</div><?php }} ?>
