<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:52:35
         compiled from "/var/www/html/design/backend/mail/templates/addons/vendor_data_premoderation/notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29190164455d4750bc6d079-70643582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897c0f355b6b1835280ca6ed1a940b73b726916c' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/vendor_data_premoderation/notification_subj.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29190164455d4750bc6d079-70643582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'company_data' => 0,
    'text_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4750bca80c8_57458694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4750bca80c8_57458694')) {function content_55d4750bca80c8_57458694($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('approved','disapproved','products_approval_status_changed'));
?>
<?php if ($_smarty_tpl->tpl_vars['status']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["text_status"] = new Smarty_variable($_smarty_tpl->__("approved"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["text_status"] = new Smarty_variable($_smarty_tpl->__("disapproved"), null, 0);?>
<?php }?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
: <?php echo $_smarty_tpl->__("products_approval_status_changed",array("[status]"=>$_smarty_tpl->tpl_vars['text_status']->value));?>
<?php }} ?>
