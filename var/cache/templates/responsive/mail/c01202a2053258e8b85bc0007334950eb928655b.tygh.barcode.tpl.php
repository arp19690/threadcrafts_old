<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 12:45:41
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/addons/barcode/barcode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111653187355b1e61dd61ee1-71690354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01202a2053258e8b85bc0007334950eb928655b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/addons/barcode/barcode.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '111653187355b1e61dd61ee1-71690354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'id' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1e61ddb8238_72783912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1e61ddb8238_72783912')) {function content_55b1e61ddb8238_72783912($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><img src="<?php echo htmlspecialchars(fn_url("image.barcode.draw?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
" /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/barcode/barcode.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/barcode/barcode.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><img src="<?php echo htmlspecialchars(fn_url("image.barcode.draw?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?><?php }} ?>
