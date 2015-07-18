<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:43:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/themes/responsive/templates/blocks/smarty_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18132740385571b57b0b65e0-04673650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c1c372b13523d7bc08216dce8379a554cd29ec' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/themes/responsive/templates/blocks/smarty_block.tpl',
      1 => 1433514706,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18132740385571b57b0b65e0-04673650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'no_wrap' => 0,
    'block' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b57b103165_85168796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b57b103165_85168796')) {function content_5571b57b103165_85168796($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_eval_string')) include '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/app/functions/smarty_plugins/function.eval_string.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
><?php }?><?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>
<?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
><?php }?><?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>
<?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }?><?php }?><?php }} ?>
