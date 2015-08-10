<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 10:40:49
         compiled from "/var/www/html/design/backend/mail/templates/companies/status_n_a_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93895974355c83259ec0a15-59934728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e205f8f2ff63013249fbf1892509f77c7047147e' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/companies/status_n_a_notification.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93895974355c83259ec0a15-59934728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'reason' => 0,
    'e_account' => 0,
    'vendor_area' => 0,
    'e_username' => 0,
    'e_password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c83259ef7828_98250058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c83259ef7828_98250058')) {function content_55c83259ef7828_98250058($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('hello','text_company_status_new_to_active','reason','text_company_status_new_to_active_administrator_updated','text_company_status_new_to_active_administrator_created'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("hello");?>
,<br /><br />

<?php echo $_smarty_tpl->__("text_company_status_new_to_active",array("[company]"=>$_smarty_tpl->tpl_vars['company_data']->value['company_name']));?>


<br /><br />

<?php if ($_smarty_tpl->tpl_vars['reason']->value) {?>
<?php echo $_smarty_tpl->__("reason");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value, ENT_QUOTES, 'UTF-8');?>

<br /><br />
<?php }?>

<?php $_smarty_tpl->tpl_vars["vendor_area"] = new Smarty_variable(fn_url('',"V","http"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['e_account']->value=='updated') {?>
<?php echo $_smarty_tpl->__("text_company_status_new_to_active_administrator_updated",array("[link]"=>$_smarty_tpl->tpl_vars['vendor_area']->value,"[login]"=>$_smarty_tpl->tpl_vars['e_username']->value));?>

<?php } elseif ($_smarty_tpl->tpl_vars['e_account']->value=='new') {?>
<?php echo $_smarty_tpl->__("text_company_status_new_to_active_administrator_created",array("[link]"=>$_smarty_tpl->tpl_vars['vendor_area']->value,"[login]"=>$_smarty_tpl->tpl_vars['e_username']->value,"[password]"=>$_smarty_tpl->tpl_vars['e_password']->value));?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
