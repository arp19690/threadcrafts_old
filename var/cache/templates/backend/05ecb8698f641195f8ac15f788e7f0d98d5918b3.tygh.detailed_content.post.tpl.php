<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:40:50
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/news_and_emails/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208988534755f3192a46dfc2-54309146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ecb8698f641195f8ac15f788e7f0d98d5918b3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/news_and_emails/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '208988534755f3192a46dfc2-54309146',
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
  'unifunc' => 'content_55f3192a47d228_88843824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f3192a47d228_88843824')) {function content_55f3192a47d228_88843824($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_news'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"news_data",'object_id'=>$_smarty_tpl->tpl_vars['news_data']->value['news_id'],'object_type'=>"N",'title'=>__("discussion_title_news"),'non_editable'=>true), 0);?>

<?php }?><?php }} ?>
