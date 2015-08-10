<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:43:08
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4204670355c84f040c85c3-56567713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f09c18d1d5bc9661988cf4b733bcdf0bcf9dad9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4204670355c84f040c85c3-56567713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84f040d60b7_17830514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84f040d60b7_17830514')) {function content_55c84f040d60b7_17830514($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
