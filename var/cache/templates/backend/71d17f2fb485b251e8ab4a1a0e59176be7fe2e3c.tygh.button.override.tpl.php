<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 02:17:15
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143359747555aabb533e7e24-02096375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d17f2fb485b251e8ab4a1a0e59176be7fe2e3c' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143359747555aabb533e7e24-02096375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aabb533f31c5_69821512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aabb533f31c5_69821512')) {function content_55aabb533f31c5_69821512($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G') {?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>
