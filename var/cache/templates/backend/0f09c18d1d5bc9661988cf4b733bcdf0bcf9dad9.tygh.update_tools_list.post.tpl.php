<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:42:02
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6476091455a9f53ac32f50-28094116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f09c18d1d5bc9661988cf4b733bcdf0bcf9dad9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6476091455a9f53ac32f50-28094116',
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
  'unifunc' => 'content_55a9f53ac40c52_23214149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f53ac40c52_23214149')) {function content_55a9f53ac40c52_23214149($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
