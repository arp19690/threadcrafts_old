<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 23:19:22
         compiled from "/var/www/html/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43143799355aa91a2d22666-58868741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693a949948b43f0fe27854497e33ea54b199c86f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43143799355aa91a2d22666-58868741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa91a2d28b39_97854396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa91a2d28b39_97854396')) {function content_55aa91a2d28b39_97854396($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>
