<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:40:50
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/news_and_emails/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143047218555f3192a55ec95-70937432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01f36e26295294349750f4b36e0c12e44720a23' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/news_and_emails/tabs_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143047218555f3192a55ec95-70937432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f3192a563087_30836542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f3192a563087_30836542')) {function content_55f3192a563087_30836542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['news_data']->value['company_id']), 0);?>
<?php }} ?>
