<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:42:34
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19471041555571b55a0d74c4-79851489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3036b27eeb1f5fb29f58ee6a940fa332146284af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19471041555571b55a0d74c4-79851489',
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
  'unifunc' => 'content_5571b55a0ec463_45318811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b55a0ec463_45318811')) {function content_5571b55a0ec463_45318811($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0);?>

<?php }?><?php }} ?>
