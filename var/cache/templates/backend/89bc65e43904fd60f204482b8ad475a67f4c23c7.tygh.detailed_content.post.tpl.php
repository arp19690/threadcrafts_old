<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 13:51:35
         compiled from "/var/www/html/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190697853055c85f0f849dd5-43137778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89bc65e43904fd60f204482b8ad475a67f4c23c7' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190697853055c85f0f849dd5-43137778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c85f0f8587a9_00303082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c85f0f8587a9_00303082')) {function content_55c85f0f8587a9_00303082($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['page_data']->value,'object_name'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"a"), 0);?>

<?php }?><?php }} ?>
