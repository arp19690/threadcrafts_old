<?php /* Smarty version Smarty-3.1.18, created on 2015-08-17 13:03:29
         compiled from "/var/www/html/design/backend/templates/views/auth/password_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194520593355d18e49bf7401-53130890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72cfed3cc02cf0ba1e4c6bd2ce1f37a0e8e8dd6a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/auth/password_change.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '194520593355d18e49bf7401-53130890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d18e49c66a75_02819441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d18e49c66a75_02819441')) {function content_55d18e49c66a75_02819441($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('administration_panel','error_password_expired','email','username','password','confirm_password','save','sign_out'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class=" cm-skip-check-items">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
">

        <div class="modal-header">
            <h4><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'],40,'...',true), ENT_QUOTES, 'UTF-8');?>
</a></h4>
            <span><?php echo $_smarty_tpl->__("administration_panel");?>
</span>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->__("error_password_expired");?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y") {?>
                <label><?php echo $_smarty_tpl->__("email");?>
:</label>
                <div id="email" class="input-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php } else { ?>
                <label><?php echo $_smarty_tpl->__("username");?>
:</label>
                <div id="user_login_profile" class="input-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_login'], ENT_QUOTES, 'UTF-8');?>
</div>
                <input type="hidden" id="email" name="user_data[email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <label for="password1" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
            <input type="password" id="password1" name="user_data[password1]" class="input-text cm-autocomplete-off" size="20" maxlength="32" value="            ">

            <label for="password2" class="cm-required"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
            <input type="password" id="password2" name="user_data[password2]" class="input-text cm-autocomplete-off" size="20" maxlength="32" value="            ">
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_name'=>"dispatch[auth.password_change]",'but_role'=>"button_main"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        </div>
    </form>
</div><?php }} ?>
