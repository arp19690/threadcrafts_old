<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:47:46
         compiled from "/var/www/html/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116772267155c8501a6c3151-04043578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5361234ec52a225892c3a8b1be3caaa6719c1fd8' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/clone_item.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116772267155c8501a6c3151-04043578',
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
  'unifunc' => 'content_55c8501a6cb0c5_33936928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8501a6cb0c5_33936928')) {function content_55c8501a6cb0c5_33936928($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="exicon-clone cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
