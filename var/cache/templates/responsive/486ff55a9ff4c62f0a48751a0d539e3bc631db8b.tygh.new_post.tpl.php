<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:22:26
         compiled from "/var/www/html/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97148804755efbb0a397062-25863365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486ff55a9ff4c62f0a48751a0d539e3bc631db8b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/views/discussion/components/new_post.tpl',
      1 => 1439189918,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97148804755efbb0a397062-25863365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'new_post_title' => 0,
    'post_redirect_url' => 0,
    'discussion' => 0,
    'config' => 0,
    'auth' => 0,
    'user_info' => 0,
    'rate_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efbb0a49b483_39979388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efbb0a49b483_39979388')) {function content_55efbb0a49b483_39979388($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('your_name','your_rating','your_message','submit','your_name','your_rating','your_message','submit'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-discussion-post-popup hidden" id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_post_title']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> posts-form" name="add_post_form" id="add_post_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="posts_list,new_post,average_rating*">
<input type ="hidden" name="post_data[thread_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type ="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post_redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="" />

<div id="new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-control-group">
    <label for="dsc_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input type="text" id="dsc_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[name]" value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" size="50" class="ty-input-text-large" />
</div>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
<div class="ty-control-group">
    <?php $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <label class="ty-control-group__title cm-required cm-multiple-radios"><?php echo $_smarty_tpl->__("your_rating");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"post_data[rating_value]"), 0);?>

</div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:add_post")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:add_post"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
<div class="ty-control-group">
    <label for="dsc_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="dsc_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['post_data']['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:add_post"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_discussion"), 0);?>


<!--new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit",'but_name'=>"dispatch[discussion.add]"), 0);?>

</div>

</form>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/new_post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/new_post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-discussion-post-popup hidden" id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_post_title']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> posts-form" name="add_post_form" id="add_post_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="posts_list,new_post,average_rating*">
<input type ="hidden" name="post_data[thread_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type ="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post_redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="" />

<div id="new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-control-group">
    <label for="dsc_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input type="text" id="dsc_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[name]" value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" size="50" class="ty-input-text-large" />
</div>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
<div class="ty-control-group">
    <?php $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <label class="ty-control-group__title cm-required cm-multiple-radios"><?php echo $_smarty_tpl->__("your_rating");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"post_data[rating_value]"), 0);?>

</div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:add_post")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:add_post"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
<div class="ty-control-group">
    <label for="dsc_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="dsc_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['post_data']['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:add_post"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_discussion"), 0);?>


<!--new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit",'but_name'=>"dispatch[discussion.add]"), 0);?>

</div>

</form>
</div>
<?php }?><?php }} ?>
