<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 09:46:39
         compiled from "/var/www/html/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111962335555c977272e60d5-92997193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56417bc376eb98d9b24103368350546b619348f1' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '111962335555c977272e60d5-92997193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c977272f33f1_85523447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c977272f33f1_85523447')) {function content_55c977272f33f1_85523447($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0);?>

<?php }?><?php }} ?>
