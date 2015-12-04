<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 14:02:41
         compiled from "/var/www/html/design/backend/templates/views/file_editor/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182562502555efeea91689c9-21743022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e85bb3a180c07d1a09b5abc5c27b16dc403583e' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/file_editor/manage.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182562502555efeea91689c9-21743022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_path' => 0,
    'rel_path' => 0,
    'images_dir' => 0,
    'id' => 0,
    'config' => 0,
    'current_url' => 0,
    'active_section' => 0,
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efeea9289507_08354074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efeea9289507_08354074')) {function content_55efeea9289507_08354074($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('text_restore_question','open_file_or_create_new','new_file','create_file','could_not_open_file','upload_file','upload','new_folder','name','new_file','name','change_permissions','on_site_template_editing','restore_from_repository','change_permissions','download','make_archive','extract_archive','rename','delete','create_file','create_folder','upload_file','create','file_editor'));
?>
<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/file_editor.js"),$_smarty_tpl);?>


<script type="text/javascript">
    (function (_, $) {
        _.tr({
            text_restore_question : '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_enter_filename : '<?php echo $_smarty_tpl->__(strtr("text_enter_filename", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
',
            text_are_you_sure_to_delete_file : '<?php echo $_smarty_tpl->__(strtr("text_are_you_sure_to_delete_file", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
'
        });

        <?php if ($_smarty_tpl->tpl_vars['selected_path']->value) {?>
        _.file_editor.selected_path = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_path']->value, ENT_QUOTES, 'UTF-8');?>
';
        <?php }?>
        _.file_editor.rel_path = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rel_path']->value, ENT_QUOTES, 'UTF-8');?>
';
    }(Tygh, Tygh.$));
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div id="error_box" class="hidden">
    <div align="center" class="notification-e">
        <div id="error_status"></div>
    </div>
</div>

<div id="status_box" class="hidden">
    <div class="notification-n" align="center">
        <div id="status"></div>
    </div>
</div>

<!--Editor-->
<div class="te-content cm-te-content">
    <div id="template_text"></div>
    <div id="template_image" class="te-template-image"></div>
</div>

<div class="cm-te-messages">
    <div class="te-empty-folder empty-text">
        <h2><?php echo $_smarty_tpl->__("open_file_or_create_new");?>
</h2>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'text'=>__("new_file"),'content'=>'','link_text'=>__("create_file"),'act'=>"general",'link_class'=>"cm-dialog-auto-size btn-primary",'icon'=>"icon-plus icon-white"), 0);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:directory_action")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:directory_action"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:directory_action"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="te-unknown-file empty-text">
        <h2><?php echo $_smarty_tpl->__("could_not_open_file");?>
</h2>
    </div>
</div>

<div class="hidden" id="content_upload_file" title="<?php echo $_smarty_tpl->__("upload_file");?>
">
    
    <div class="install-addon">
        <form name="upload_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="path" id="upload_path" />
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"uploaded_data[0]"), 0);?>

            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[file_editor.upload_file]",'but_meta'=>"cm-te-upload-file",'cancel_action'=>"close",'but_text'=>__("upload")), 0);?>


            </div>
        </form>
    </div>
</div>

<div class="hidden" id="content_add_new_folder" title="<?php echo $_smarty_tpl->__("new_folder");?>
">
    <form name="add_folder_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_folder" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
        <div class="controls">
            <input type="text" class="span4" name="new_folder" id="elm_new_folder" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-te-create-folder cm-dialog-closer"), 0);?>

    </div>
    </form>
</div>

<div class="hidden" id="content_add_new_file" title="<?php echo $_smarty_tpl->__("new_file");?>
">
    <form name="add_file_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_file" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" class="span4" name="new_file" id="elm_new_file" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-dialog-closer cm-te-create-file"), 0);?>

    </div>
    </form>
</div>

<?php if (!defined("IS_WINDOWS")) {?>
    <div class="hidden" title="<?php echo $_smarty_tpl->__("change_permissions");?>
" id="content_chmod">
        <?php echo $_smarty_tpl->getSubTemplate ("views/file_editor/components/chmod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:on_site_template_editing")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:on_site_template_editing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-onsite-editing"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("on_site_template_editing"),'href'=>fn_url("customization.update_mode?type=design&status=enable&return_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)),'target'=>"_blank"));?>
</li>
        <li class="divider"></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:on_site_template_editing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php if ($_smarty_tpl->tpl_vars['active_section']->value=="themes") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:restore_from_repository")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:restore_from_repository"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-restore"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("restore_from_repository")));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:restore_from_repository"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
        <?php if (!defined("IS_WINDOWS")) {?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"chmod",'link_text'=>__("change_permissions"),'act'=>"link",'link_class'=>"cm-te-perms cm-dialog-auto-size"), 0);?>
</li>
        <?php }?>
        <li class="cm-te-getfile"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("download")));?>
</li>
        <li class="cm-te-compress"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("make_archive")));?>
</li>
        <li class="cm-te-decompress"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("extract_archive")));?>
</li>
        <li class="cm-te-rename"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("rename")));?>
</li>
        <li class="cm-te-delete"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete")));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"ce-te-actions"));?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:save_file")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:save_file"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-te-save-file btn-primary disabled",'but_role'=>"submit"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:save_file"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <ul class="nav nav-pills">
            <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['active_section']->value==$_smarty_tpl->tpl_vars['section']->value) {?>class="active"<?php }?>><a href="<?php echo htmlspecialchars(fn_url("file_editor.manage?active_section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&selected_path=/"), ENT_QUOTES, 'UTF-8');?>
" ><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section']->value);?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <hr>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:tree")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:tree"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-row">
        <!--file tree-->
        <div id="filelist" class="cm-te-file-tree nested-list nested-list-folders"></div>
        <!--#file tree-->
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:tree"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"file_editor:tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"file_editor:tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-create-file"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'content'=>'','link_text'=>__("create_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <li class="cm-te-create-folder"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_folder",'content'=>'','link_text'=>__("create_folder"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_file",'content'=>'','link_text'=>__("upload_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"file_editor:tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"main",'tool_meta'=>"cm-te-create",'hide_actions'=>true,'tools_list'=>Smarty::$_smarty_vars['capture']['tools_list'],'display'=>"inline",'title'=>__("create"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->__("file_editor");?>
<span class="muted f-small cm-te-path te-path"></span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>

<?php }} ?>
