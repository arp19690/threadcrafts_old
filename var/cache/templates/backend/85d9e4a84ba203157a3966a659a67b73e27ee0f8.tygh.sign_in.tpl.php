<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:38:52
         compiled from "/var/www/html/design/backend/templates/buttons/sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122885456655a9f47c0d6158-86709038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d9e4a84ba203157a3966a659a67b73e27ee0f8' => 
    array (
      0 => '/var/www/html/design/backend/templates/buttons/sign_in.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122885456655a9f47c0d6158-86709038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f47c0dea73_50388889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f47c0dea73_50388889')) {function content_55a9f47c0dea73_50388889($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
