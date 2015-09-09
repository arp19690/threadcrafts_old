<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:58:56
         compiled from "/var/www/html/design/themes/responsive/mail/templates/shipments/shipment_products_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72969579455efb5886231f3-36835293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd164f16d4f0429bf46b828b629dec6aae9e896f' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/shipments/shipment_products_subj.tpl',
      1 => 1439189911,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '72969579455efb5886231f3-36835293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb588656a98_90468285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb588656a98_90468285')) {function content_55efb588656a98_90468285($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('order','new_shipment_was_created'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("new_shipment_was_created");?>
<?php }} ?>
