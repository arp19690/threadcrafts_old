<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 22:30:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48494932455a949d7e893e0-45723672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef62b186225b8b1856ade146e5b3c6dfe1a229c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl',
      1 => 1433514710,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48494932455a949d7e893e0-45723672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a949d7ec1cb2_84309849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a949d7ec1cb2_84309849')) {function content_55a949d7ec1cb2_84309849($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);?>
<?php }?><?php }} ?>
