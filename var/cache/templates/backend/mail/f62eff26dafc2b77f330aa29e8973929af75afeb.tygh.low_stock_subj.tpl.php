<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:53:14
         compiled from "/var/www/html/design/backend/mail/templates/orders/low_stock_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167116211755efb432916c48-92915778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62eff26dafc2b77f330aa29e8973929af75afeb' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/orders/low_stock_subj.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167116211755efb432916c48-92915778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb4329428f9_35147719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb4329428f9_35147719')) {function content_55efb4329428f9_35147719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('low_stock_subj','low_stock_subj'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo html_entity_decode($_smarty_tpl->__("low_stock_subj",array("[product]"=>((string)$_smarty_tpl->tpl_vars['product']->value)." #".((string)$_smarty_tpl->tpl_vars['product_id']->value))));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="orders/low_stock_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"orders/low_stock_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo html_entity_decode($_smarty_tpl->__("low_stock_subj",array("[product]"=>((string)$_smarty_tpl->tpl_vars['product']->value)." #".((string)$_smarty_tpl->tpl_vars['product_id']->value))));?>

<?php }?><?php }} ?>
