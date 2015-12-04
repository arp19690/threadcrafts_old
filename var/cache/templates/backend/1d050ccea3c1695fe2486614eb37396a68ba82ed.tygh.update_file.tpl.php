<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:30:35
         compiled from "/var/www/html/design/backend/templates/views/products/update_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193005128255f316c369e4a7-10761752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d050ccea3c1695fe2486614eb37396a68ba82ed' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/products/update_file.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193005128255f316c369e4a7-10761752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_file' => 0,
    'id' => 0,
    'product_id' => 0,
    'product_file_folders' => 0,
    'folder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f316c37be7d9_84583233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f316c37be7d9_84583233')) {function content_55f316c37be7d9_84583233($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_formatfilesize')) include '/var/www/html/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('general','name','position','folder','file','preview','none','activation_mode','manually','immediately','after_full_payment','max_downloads','license_agreement','agreement_required','yes','no','readme'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_file']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product_file']->value['file_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit cm-check-changes <?php if (!fn_allow_save_object($_smarty_tpl->tpl_vars['product_file']->value,'')) {?>  cm-hide-inputs<?php }?>" name="files_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
<input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="files" />
<input type="hidden" name="file_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="product_file[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="control-group ">
            <label for="elm_file_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="product_file[file_name]" id="elm_file_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
" class="span9" />
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" name="product_file[position]" id="elm_file_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-medium" />
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_filder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("folder");?>
</label>
            <div class="controls">
                <select name="product_file[folder_id]" id="elm_file_folder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['folder_id']=="0") {?>selected="selected"<?php }?>>--</option>
                    <?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['folder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_file_folders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->_loop = true;
?>
                    <option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['folder']->value['folder_id'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['product_file']->value['folder_id']==$_smarty_tpl->tpl_vars['folder']->value['folder_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['folder']->value['folder_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group ">
            <label for="type_<?php echo htmlspecialchars(md5("base_file[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if (!$_smarty_tpl->tpl_vars['product_file']->value) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__("file");?>
</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['product_file']->value['file_path']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("products.get_file?file_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['file_path'], ENT_QUOTES, 'UTF-8');?>
</a> (<?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['product_file']->value['file_size']);?>
)
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"base_file[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="type_<?php echo htmlspecialchars(md5("file_preview[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("preview");?>
</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['product_file']->value['preview_path']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("products.get_file?file_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&file_type=preview"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['preview_path'], ENT_QUOTES, 'UTF-8');?>
</a> (<?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['product_file']->value['preview_size']);?>
)
                <?php } elseif ($_smarty_tpl->tpl_vars['product_file']->value) {?>
                    <?php echo $_smarty_tpl->__("none");?>

                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"file_preview[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_activation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("activation_mode");?>
</label>
            <div class="controls">
                <select name="product_file[activation_type]" id="elm_file_activation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <option value="M" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['activation_type']=="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("manually");?>
</option>
                    <option value="I" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['activation_type']=="I") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("immediately");?>
</option>
                    <option value="P" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['activation_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("after_full_payment");?>
</option>
                </select>
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_max_downloads_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("max_downloads");?>
</label>
            <div class="controls">
                <input type="text" name="product_file[max_downloads]" id="elm_file_max_downloads_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['max_downloads'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-text-short" />
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("license_agreement");?>
</label>
            <div class="controls">
                <textarea id="elm_file_license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_file[license]" cols="55" rows="8" class="cm-wysiwyg span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['license'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label"><?php echo $_smarty_tpl->__("agreement_required");?>
</label>
            <div class="controls">
                <label for="elm_file_agreement_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_y" class="radio"><input type="radio" name="product_file[agreement]" id="elm_file_agreement_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_y" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['agreement']=="Y"||!$_smarty_tpl->tpl_vars['product_file']->value) {?>checked="checked"<?php }?> value="Y" />
                <?php echo $_smarty_tpl->__("yes");?>
</label>
                <label for="elm_file_agreement_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_n" class="radio"><input type="radio" name="product_file[agreement]" id="elm_file_agreement_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_n" <?php if ($_smarty_tpl->tpl_vars['product_file']->value['agreement']=="N") {?>checked="checked"<?php }?> value="N"  />
                <?php echo $_smarty_tpl->__("no");?>
</label>
            </div>
        </div>

        <div class="control-group ">
            <label class="control-label" for="elm_file_readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("readme");?>
</label>
            <div class="controls">
                <textarea id="elm_file_readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_file[readme]" cols="55" rows="8" class="cm-wysiwyg span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_file']->value['readme'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_files:properties")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_files:properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_files:properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>

<div class="modal-footer buttons-container">
<?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['product_file']->value,'')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.update_file]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php }?>
</div>

</form><?php }} ?>
