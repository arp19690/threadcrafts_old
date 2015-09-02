<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:18:54
         compiled from "/var/www/html/design/themes/responsive/templates/common/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149780610055e68dc6f07251-90228607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658c6a64d61f1e0060f7c9133f3a7ed5c6f8b3ea' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/group.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149780610055e68dc6f07251-90228607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68dc6f2cee0_11379312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68dc6f2cee0_11379312')) {function content_55e68dc6f2cee0_11379312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div>
    <div class="ty-subheaders-group"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/group.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/group.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div>
    <div class="ty-subheaders-group"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</div>
</div><?php }?><?php }} ?>
