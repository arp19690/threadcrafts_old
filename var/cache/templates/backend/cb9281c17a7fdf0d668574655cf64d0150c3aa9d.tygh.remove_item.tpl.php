<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 20:29:50
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/buttons/remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167157352755a538feccde10-79600760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9281c17a7fdf0d668574655cf64d0150c3aa9d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/buttons/remove_item.tpl',
      1 => 1413374302,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167157352755a538feccde10-79600760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a538fecf1f91_24224026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a538fecf1f91_24224026')) {function content_55a538fecf1f91_24224026($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
	<a class="icon-remove cm-opacity cm-tooltip <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
<?php }?>
<a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-remove cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>></a><?php }} ?>
