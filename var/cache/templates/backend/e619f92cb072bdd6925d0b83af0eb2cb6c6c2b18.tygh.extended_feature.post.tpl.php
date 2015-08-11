<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 10:57:44
         compiled from "/var/www/html/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106761369855c987d01a48d1-96383067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e619f92cb072bdd6925d0b83af0eb2cb6c6c2b18' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106761369855c987d01a48d1-96383067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c987d01b93b3_12377784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c987d01b93b3_12377784')) {function content_55c987d01b93b3_12377784($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0);?>

<?php }?><?php }} ?>
