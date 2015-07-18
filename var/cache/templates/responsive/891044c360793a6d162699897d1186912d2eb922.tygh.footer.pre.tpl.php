<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 00:57:24
         compiled from "/var/www/html/design/themes/responsive/templates/addons/shipway/hooks/index/footer.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56355132255aaa89c4ad701-92289630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '891044c360793a6d162699897d1186912d2eb922' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/shipway/hooks/index/footer.pre.tpl',
      1 => 1437247109,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '56355132255aaa89c4ad701-92289630',
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
  'unifunc' => 'content_55aaa89c4fd0f4_78778535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aaa89c4fd0f4_78778535')) {function content_55aaa89c4fd0f4_78778535($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
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
