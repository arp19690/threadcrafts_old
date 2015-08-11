<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 09:46:39
         compiled from "/var/www/html/design/backend/templates/views/companies/components/logos_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156110952055c97727158ba0-51154008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d58485dd6e7f1fc23187d6f2029db69167504b6' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/logos_list.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156110952055c97727158ba0-51154008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_types' => 0,
    'logos' => 0,
    'type' => 0,
    'company_id' => 0,
    'id' => 0,
    'type_data' => 0,
    'image' => 0,
    'company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c9772719ed67_01103266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c9772719ed67_01103266')) {function content_55c9772719ed67_01103266($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('no_image','alt_text','tt_views_site_layout_logos_alt_text'));
?>
<?php  $_smarty_tpl->tpl_vars["type_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["type_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["type_data"]->key => $_smarty_tpl->tpl_vars["type_data"]->value) {
$_smarty_tpl->tpl_vars["type_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["type_data"]->key;
?>

<?php if ($_smarty_tpl->tpl_vars['logos']->value&&$_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(array(), null, 0);?>
<?php }?>
<input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
<input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="attach-images">
    <div class="upload-box clearfix">
        <h5><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['type_data']->value['text']);?>
</h5>
        <div class="image-wrap pull-left">
            <div class="image">
                <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                <img class="solid-border" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="152">
                <?php } else { ?>
                <div class="no-image"><i class="glyph-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></div>
                <?php }?>
            </div>
            <div class="image-alt">
                <div class="input-prepend">
                    <span class="add-on cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
. <?php echo $_smarty_tpl->__("tt_views_site_layout_logos_alt_text");?>
"><i class="icon-comment"></i></span>
                    <input type="text" class="input-text cm-image-field" id="alt_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image']->value['alt'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="">
                </div>
            </div>
        </div>

        <div class="image-upload">
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['type']->value)."]"), 0);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"logos:upload_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"logos:upload_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"logos:upload_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>


    </div>
</div>
<?php } ?><?php }} ?>
