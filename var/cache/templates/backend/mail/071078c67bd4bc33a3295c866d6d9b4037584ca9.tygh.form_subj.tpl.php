<?php /* Smarty version Smarty-3.1.18, created on 2015-08-20 14:46:27
         compiled from "/var/www/html/design/backend/mail/templates/addons/form_builder/form_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52578137255d59aeb802114-46999936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071078c67bd4bc33a3295c866d6d9b4037584ca9' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/form_builder/form_subj.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52578137255d59aeb802114-46999936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'form_title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d59aeb84b0b6_25733748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d59aeb84b0b6_25733748')) {function content_55d59aeb84b0b6_25733748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/form_builder/form_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/form_builder/form_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_title']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }} ?>