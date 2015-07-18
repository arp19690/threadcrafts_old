<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:40:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19063846115571b4e4018cd8-40272124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0386ede80a01b9d12d66c27eed562050b1442ee' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19063846115571b4e4018cd8-40272124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b4e4029402_90872309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b4e4029402_90872309')) {function content_5571b4e4029402_90872309($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G') {?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>
