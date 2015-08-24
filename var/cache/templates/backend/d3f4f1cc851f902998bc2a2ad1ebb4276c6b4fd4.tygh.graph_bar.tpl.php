<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:15:49
         compiled from "/var/www/html/design/backend/templates/views/sales_reports/components/graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209088439155d46c6d29e961-67594951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f4f1cc851f902998bc2a2ad1ebb4276c6b4fd4' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/sales_reports/components/graph_bar.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '209088439155d46c6d29e961-67594951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value_width' => 0,
    'color' => 0,
    'bar_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d46c6d2db326_31822752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d46c6d2db326_31822752')) {function content_55d46c6d2db326_31822752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" <?php if ($_smarty_tpl->tpl_vars['bar_width']->value) {?> style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bar_width']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?> align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
