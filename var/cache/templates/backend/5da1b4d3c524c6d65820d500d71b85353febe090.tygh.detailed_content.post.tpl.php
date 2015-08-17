<?php /* Smarty version Smarty-3.1.18, created on 2015-08-13 09:47:53
         compiled from "/var/www/html/design/backend/templates/addons/news_and_emails/addons/seo/hooks/news/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136467754255cc1a711556f4-87628962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da1b4d3c524c6d65820d500d71b85353febe090' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/news_and_emails/addons/seo/hooks/news/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136467754255cc1a711556f4-87628962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'news_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55cc1a71163a27_37262941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc1a71163a27_37262941')) {function content_55cc1a71163a27_37262941($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['news_data']->value,'object_name'=>"news_data",'object_id'=>$_smarty_tpl->tpl_vars['news_data']->value['news_id'],'object_type'=>"n"), 0);?>

<?php }?><?php }} ?>
