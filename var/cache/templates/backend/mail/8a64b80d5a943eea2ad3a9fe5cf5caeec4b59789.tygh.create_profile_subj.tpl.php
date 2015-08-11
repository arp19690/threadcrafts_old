<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 09:49:23
         compiled from "/var/www/html/design/backend/mail/templates/profiles/create_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128058590255c977cb43ce82-80247503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a64b80d5a943eea2ad3a9fe5cf5caeec4b59789' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/create_profile_subj.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128058590255c977cb43ce82-80247503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'company_data' => 0,
    'u_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c977cb46d253_23505897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c977cb46d253_23505897')) {function content_55c977cb46d253_23505897($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_profile_notification'));
?>
<?php $_smarty_tpl->tpl_vars['u_type'] = new Smarty_variable(mb_strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type']), 'UTF-8'), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("new_profile_notification",array("[user_type]"=>$_smarty_tpl->tpl_vars['u_type']->value));?>
<?php }} ?>
