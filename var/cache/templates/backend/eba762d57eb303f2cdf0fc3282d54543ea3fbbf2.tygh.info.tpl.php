<?php /* Smarty version Smarty-3.1.18, created on 2015-08-13 09:48:54
         compiled from "/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13403869255cc1aae5dfd73-24369235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba762d57eb303f2cdf0fc3282d54543ea3fbbf2' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13403869255cc1aae5dfd73-24369235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55cc1aae6135f0_69553368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc1aae6135f0_69553368')) {function content_55cc1aae6135f0_69553368($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</p>
    </div>

</div><?php }} ?>
