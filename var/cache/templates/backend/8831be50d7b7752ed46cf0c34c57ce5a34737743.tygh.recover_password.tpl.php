<?php /* Smarty version Smarty-3.1.18, created on 2015-09-20 12:07:11
         compiled from "/var/www/html/design/backend/templates/views/auth/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70405035355fe5417bf2b69-46236992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8831be50d7b7752ed46cf0c34c57ce5a34737743' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/auth/recover_password.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70405035355fe5417bf2b69-46236992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fe5417c33768_89937921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe5417c33768_89937921')) {function content_55fe5417c33768_89937921($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('recover_password','text_recover_password_notice','email','reset_password'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="recover_form" class=" cm-skip-check-items cm-check-changes">
        <div class="modal-header">
            <h4><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'],40,'...',true), ENT_QUOTES, 'UTF-8');?>
</a></h4>
            <span><?php echo $_smarty_tpl->__("recover_password");?>
</span>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->__("text_recover_password_notice");?>
</p>
            <label for="user_login"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <input type="text" name="user_email" id="user_login" size="20" value="">
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("reset_password"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0);?>

        </div>
    </form>
</div><?php }} ?>
