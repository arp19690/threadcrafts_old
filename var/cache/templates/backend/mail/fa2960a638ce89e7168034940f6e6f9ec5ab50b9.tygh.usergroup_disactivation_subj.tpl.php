<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:35:53
         compiled from "/var/www/html/design/backend/mail/templates/profiles/usergroup_disactivation_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52926828455aa6b51bc5820-56158796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa2960a638ce89e7168034940f6e6f9ec5ab50b9' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/usergroup_disactivation_subj.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52926828455aa6b51bc5820-56158796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6b51beec34_41047855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6b51beec34_41047855')) {function content_55aa6b51beec34_41047855($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('usergroup_disactivated'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("usergroup_disactivated");?>
<?php }} ?>
