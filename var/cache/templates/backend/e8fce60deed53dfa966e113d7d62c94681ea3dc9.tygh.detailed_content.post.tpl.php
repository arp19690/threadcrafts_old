<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:43:07
         compiled from "/var/www/html/design/backend/templates/addons/hybrid_auth/hooks/profiles/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16514414955c84f03f3fde4-23064948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8fce60deed53dfa966e113d7d62c94681ea3dc9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/hybrid_auth/hooks/profiles/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16514414955c84f03f3fde4-23064948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'providers_list' => 0,
    'provider_id' => 0,
    'link_providers' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84f0401a819_10734313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84f0401a819_10734313')) {function content_55c84f0401a819_10734313($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('hybrid_auth.link_provider'));
?>
<?php if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("hybrid_auth.link_provider")), 0);?>


<div id="hybrid_providers">
<?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["provider_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["provider_id"]->value = $_smarty_tpl->tpl_vars["provider_data"]->key;
?>

    <span class="hybrid-auth-icon<?php if (!in_array($_smarty_tpl->tpl_vars['provider_id']->value,$_smarty_tpl->tpl_vars['link_providers']->value)) {?> link-unlink-provider<?php }?>">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/icons/flat_32x32/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    </span>

<?php } ?>
<!--hybrid_providers--></div>
<?php }?><?php }} ?>
