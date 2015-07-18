<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:05:14
         compiled from "/var/www/html/design/themes/responsive/templates/addons/image_zoom/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30012235055a9ec9b002b49-45057780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2417a8d753dd1b4754f9fa1d5324b2e212c022bc' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/image_zoom/hooks/index/scripts.post.tpl',
      1 => 1437198874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '30012235055a9ec9b002b49-45057780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9ec9b025d54_64428475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9ec9b025d54_64428475')) {function content_55a9ec9b025d54_64428475($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><script type="text/javascript">
CloudZoom = {
    path: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'ISO-8859-1');?>
/js/addons/image_zoom'
};
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><script type="text/javascript">
CloudZoom = {
    path: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'ISO-8859-1');?>
/js/addons/image_zoom'
};
</script>
<?php }?><?php }} ?>
