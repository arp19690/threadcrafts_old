<?php /* Smarty version Smarty-3.1.18, created on 2015-08-17 13:15:30
         compiled from "/var/www/html/design/backend/mail/templates/profiles/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119695702655d1911a8a1e06-06456065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8272fb250f0f4f16724304eb1c8f2c2eac50c95' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/recover_password.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119695702655d1911a8a1e06-06456065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ekey' => 0,
    'zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d1911a8b64a1_19590047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1911a8b64a1_19590047')) {function content_55d1911a8b64a1_19590047($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_confirm_passwd_recovery'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_confirm_passwd_recovery");?>
:<br /><br />

<a href="<?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
</a>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
