<?php /* Smarty version Smarty-3.1.18, created on 2015-08-17 13:15:30
         compiled from "/var/www/html/design/backend/mail/templates/profiles/recover_password_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64518622655d1911a85eeb5-46287491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '895f46bf9b085a4375f02ae41f6e1a246c5c50b2' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/recover_password_subj.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64518622655d1911a85eeb5-46287491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d1911a8881f4_73996595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1911a8881f4_73996595')) {function content_55d1911a8881f4_73996595($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('recover_password_subj'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("recover_password_subj");?>
<?php }} ?>
