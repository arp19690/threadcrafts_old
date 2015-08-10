<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 23:19:22
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137785890455aa91a2c2bfd5-28103118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4eb47c4d423ae617a919b348f8d8f6a6ab700cd' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '137785890455aa91a2c2bfd5-28103118',
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
  'unifunc' => 'content_55aa91a2c40845_57556533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa91a2c40845_57556533')) {function content_55aa91a2c40845_57556533($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0);?>

   <div id="discussion_page_setting" class="in collapse">
   		<fieldset>
   	    	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"A",'title'=>__("discussion_title_page"),'non_editable'=>true), 0);?>

   		</fieldset>
   </div>
<?php }?><?php }} ?>
