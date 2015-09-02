<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:18:55
         compiled from "/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/orders/tabs.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16300678155e68dc702f717-79276475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e7f059a0334cdf07734f6160623e92a72a0f99' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/orders/tabs.post.tpl',
      1 => 1439189918,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16300678155e68dc702f717-79276475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68dc705d293_72775136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68dc705d293_72775136')) {function content_55e68dc705d293_72775136($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('discussion_title_order','discussion_title_order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'object_type'=>"O",'title'=>__("discussion_title_order")), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/orders/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/orders/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'object_type'=>"O",'title'=>__("discussion_title_order")), 0);?>
<?php }?><?php }} ?>
