<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 09:58:48
         compiled from "/var/www/html/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191571294855c84ba86c6998-05727698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b911bcedaf646572d4af2faebdee22541547488' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/loading_box.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191571294855c84ba86c6998-05727698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84ba86c9e43_49457551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84ba86c9e43_49457551')) {function content_55c84ba86c9e43_49457551($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
