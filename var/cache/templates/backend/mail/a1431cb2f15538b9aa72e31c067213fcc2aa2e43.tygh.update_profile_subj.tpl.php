<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:42:51
         compiled from "/var/www/html/design/backend/mail/templates/profiles/update_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195777041455a9f56b6d1567-89377266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1431cb2f15538b9aa72e31c067213fcc2aa2e43' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/update_profile_subj.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195777041455a9f56b6d1567-89377266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f56b6fadd8_70299939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f56b6fadd8_70299939')) {function content_55a9f56b6fadd8_70299939($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('update_profile_notification'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("update_profile_notification");?>
<?php }} ?>
