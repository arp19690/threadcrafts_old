<?php /* Smarty version Smarty-3.1.18, created on 2015-06-06 01:56:31
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96696424355721b0f7fcc64-39114744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '285605eefde03c6848c514c0bf8ceeabbd5f658a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96696424355721b0f7fcc64-39114744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55721b0f812459_67517806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55721b0f812459_67517806')) {function content_55721b0f812459_67517806($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
		<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>__("discussion_title_category")), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
