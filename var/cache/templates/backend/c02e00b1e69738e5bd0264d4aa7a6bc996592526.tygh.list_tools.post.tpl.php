<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:09:28
         compiled from "/var/www/html/design/backend/templates/addons/quickbooks/hooks/orders/list_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38305764055d46af0a8f9c4-85212554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c02e00b1e69738e5bd0264d4aa7a6bc996592526' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/quickbooks/hooks/orders/list_tools.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '38305764055d46af0a8f9c4-85212554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d46af0a9d9c8_51297508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d46af0a9d9c8_51297508')) {function content_55d46af0a9d9c8_51297508($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('export_to_quickbooks'));
?>
<?php if ($_smarty_tpl->tpl_vars['orders']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("export_to_quickbooks"),'dispatch'=>"dispatch[quickbooks_export.export_to_iif]",'form'=>"orders_list_form"));?>
</li>
<?php }?><?php }} ?>
