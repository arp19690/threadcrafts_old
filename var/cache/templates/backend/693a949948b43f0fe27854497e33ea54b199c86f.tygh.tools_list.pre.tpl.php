<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 13:51:35
         compiled from "/var/www/html/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153740120055c85f0f95b399-47783665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693a949948b43f0fe27854497e33ea54b199c86f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153740120055c85f0f95b399-47783665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c85f0f961256_11252300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c85f0f961256_11252300')) {function content_55c85f0f961256_11252300($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>
