<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:14:30
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80167454455e68cbe125c95-62962139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f4ccf49b3ec015b42452ea87a2bd2aa5cbc45a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80167454455e68cbe125c95-62962139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68cbe16a242_24670551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68cbe16a242_24670551')) {function content_55e68cbe16a242_24670551($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('supplier'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/supplier_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("supplier"),'name'=>"product_data[supplier_id]",'id'=>"product_data_supplier_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['supplier_id'],'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'read_only'=>$_smarty_tpl->tpl_vars['readonly']->value), 0);?>
<?php }} ?>
