<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:34:59
         compiled from "/var/www/html/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23425227455a9f3937711f0-02914040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b911bcedaf646572d4af2faebdee22541547488' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/loading_box.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23425227455a9f3937711f0-02914040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f3937744a0_59266700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f3937744a0_59266700')) {function content_55a9f3937744a0_59266700($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
