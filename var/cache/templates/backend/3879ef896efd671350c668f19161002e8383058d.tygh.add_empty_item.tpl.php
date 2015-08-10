<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:47:46
         compiled from "/var/www/html/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157005038455c8501a6b3d92-03640555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3879ef896efd671350c668f19161002e8383058d' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157005038455c8501a6b3d92-03640555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c8501a6bb5b5_57566453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8501a6bb5b5_57566453')) {function content_55c8501a6bb5b5_57566453($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
