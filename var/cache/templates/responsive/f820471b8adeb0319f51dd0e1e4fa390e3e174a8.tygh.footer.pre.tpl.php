<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:07:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/shipway/hooks/index/footer.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54261757855b1c121d3b9e1-86001196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f820471b8adeb0319f51dd0e1e4fa390e3e174a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/shipway/hooks/index/footer.pre.tpl',
      1 => 1437249716,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54261757855b1c121d3b9e1-86001196',
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
  'unifunc' => 'content_55b1c121d5c402_90509630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1c121d5c402_90509630')) {function content_55b1c121d5c402_90509630($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (fn_check_shipway_user('')==true) {?>
<div class="btn_track rotate_text" style="-webkit-transform: rotate(-90deg);transform: rotate(-90deg);position: fixed;bottom: 45%;right: -38px;z-index: 999" >
	<a href="index.php?dispatch=track.track" class="ty-btn ty-btn__primary" style="text-decoration:none;">Track Order</a>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/shipway/hooks/index/footer.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/shipway/hooks/index/footer.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (fn_check_shipway_user('')==true) {?>
<div class="btn_track rotate_text" style="-webkit-transform: rotate(-90deg);transform: rotate(-90deg);position: fixed;bottom: 45%;right: -38px;z-index: 999" >
	<a href="index.php?dispatch=track.track" class="ty-btn ty-btn__primary" style="text-decoration:none;">Track Order</a>
</div>
<?php }?><?php }?><?php }} ?>
