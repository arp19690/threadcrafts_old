<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 16:47:03
         compiled from "/var/www/html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53639210355d465af672c61-21282023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e069c73d0a07624485bcdf53a059c9b8db5a05f3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53639210355d465af672c61-21282023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d465af683cc4_90774187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d465af683cc4_90774187')) {function content_55d465af683cc4_90774187($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>