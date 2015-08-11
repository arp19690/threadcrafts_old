<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 10:57:04
         compiled from "/var/www/html/design/themes/responsive/templates/addons/hybrid_auth/hooks/profiles/account_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201102691755c987a81c1b52-41022924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7b3c658f5c561e3f6bb3eebb77c9336af33020' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/hybrid_auth/hooks/profiles/account_update.post.tpl',
      1 => 1439189920,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201102691755c987a81c1b52-41022924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'providers_list' => 0,
    'provider_data' => 0,
    'link_providers' => 0,
    'images_dir' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c987a82172a6_90989719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c987a82172a6_90989719')) {function content_55c987a82172a6_90989719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('hybrid_auth.link_provider','text_hybrid_auth.link_provider','hybrid_auth.link_provider','text_hybrid_auth.link_provider'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("hybrid_auth.link_provider")), 0);?>

<p><?php echo $_smarty_tpl->__("text_hybrid_auth.link_provider");?>
</p>

<div id="hybrid_providers">
    <?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
    <a class="<?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['link_providers']->value)) {?>cm-unlink-provider <?php } else { ?>cm-link-provider ty-link-unlink-provider <?php }?>ty-hybrid-auth-icon" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/icons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['hybrid_auth']['icons_pack'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
    </a>
    <?php } ?>
<!--hybrid_providers--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/profiles/account_update.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/profiles/account_update.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("hybrid_auth.link_provider")), 0);?>

<p><?php echo $_smarty_tpl->__("text_hybrid_auth.link_provider");?>
</p>

<div id="hybrid_providers">
    <?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
    <a class="<?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['link_providers']->value)) {?>cm-unlink-provider <?php } else { ?>cm-link-provider ty-link-unlink-provider <?php }?>ty-hybrid-auth-icon" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/icons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['hybrid_auth']['icons_pack'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
    </a>
    <?php } ?>
<!--hybrid_providers--></div><?php }?><?php }} ?>
