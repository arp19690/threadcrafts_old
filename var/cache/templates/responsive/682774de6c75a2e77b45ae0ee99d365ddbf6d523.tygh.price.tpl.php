<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:08:54
         compiled from "/var/www/html/design/themes/responsive/templates/common/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50655350255eed6dec33cd3-61091971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682774de6c75a2e77b45ae0ee99d365ddbf6d523' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/price.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50655350255eed6dec33cd3-61091971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'value' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'span_id' => 0,
    'class' => 0,
    'live_editor_name' => 0,
    'secondary_currency' => 0,
    'is_integer' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eed6decbf309_55661877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed6decbf309_55661877')) {function content_55eed6decbf309_55661877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format_price')) include '/var/www/html/app/functions/smarty_plugins/modifier.format_price.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency']=="use_selected_and_alternative") {?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value!=$_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }?><?php }?><?php } else { ?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/price.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/price.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency']=="use_selected_and_alternative") {?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value!=$_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }?><?php }?><?php } else { ?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['live_editor_name']->value);?>
<?php }?><?php }?><?php }} ?>
