<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 21:50:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11815854255a9404b1d0fc7-07522751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2346fc4c5b50a5789452247e0f7e5f2a50504498' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/common/view_tools.tpl',
      1 => 1413374302,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11815854255a9404b1d0fc7-07522751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_tools' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9404b270ca7_99211456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9404b270ca7_99211456')) {function content_55a9404b270ca7_99211456($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('prev_page','next'));
?>
<div class="btn-group prev-next">
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['prev_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("prev_page");?>
<?php }?>"<?php }?>><i class="icon-chevron-left"></i></a>
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['next_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("next");?>
<?php }?>"<?php }?>> <i class="icon-chevron-right"></i> </a>
</div><?php }} ?>
