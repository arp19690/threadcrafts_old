<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:45:15
         compiled from "/var/www/html/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7359408555a9f5fbe8f5b1-86037470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf8862aeaf538b3496be94ad8fda1b7b38438a6' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/tooltip.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7359408555a9f5fbe8f5b1-86037470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f5fbe9add2_60522591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f5fbe9add2_60522591')) {function content_55a9f5fbe9add2_60522591($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
