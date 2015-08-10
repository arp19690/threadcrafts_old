<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:11:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/social_buttons/meta_templates/facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116467425355b1c21193a8a7-68842904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f49fa39255e5e89c54a19120065e715e117af7e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/social_buttons/meta_templates/facebook.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116467425355b1c21193a8a7-68842904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'provider_meta_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1c211a901c1_35346084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1c211a901c1_35346084')) {function content_55b1c211a901c1_35346084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']) {?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['type'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['url'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['image'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['site_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/meta_templates/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/meta_templates/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']) {?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['type'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['url'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['image'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_meta_data']->value['facebook']['site_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }?><?php }} ?>
