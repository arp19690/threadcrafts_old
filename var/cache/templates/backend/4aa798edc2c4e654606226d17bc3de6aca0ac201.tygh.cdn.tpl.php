<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 22:50:12
         compiled from "/var/www/html/design/backend/templates/views/storage/cdn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20620208755aa8acc70b6b1-25103185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa798edc2c4e654606226d17bc3de6aca0ac201' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/storage/cdn.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20620208755aa8acc70b6b1-25103185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cdn_data' => 0,
    'cdn_test_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa8acc7b26b2_91359833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa8acc7b26b2_91359833')) {function content_55aa8acc7b26b2_91359833($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','enable_cdn','text_cdn_check','status','active','in_progress','host','provider','key','tt_views_storage_cdn_key','secret_key','extra','cname','tt_views_storage_cdn_cname','cdn_settings'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="cdn_form" class="form-horizontal form-edit">

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("general"),'target'=>"#acc_general"), 0);?>

<div id="acc_general" class="collapsed in">

    <?php if ($_smarty_tpl->tpl_vars['cdn_data']->value['host']) {?>

    <div class="control-group">
        <label for="elm_enable_cdn" class="control-label"><?php echo $_smarty_tpl->__("enable_cdn");?>
:</label>
        <div class="controls">
            <input type="hidden" name="cdn_data[is_enabled]" value="0" />
            <input type="checkbox" name="cdn_data[is_enabled]" id="elm_enable_cdn" value="1" <?php if ($_smarty_tpl->tpl_vars['cdn_data']->value['is_enabled']) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['cdn_data']->value['is_active']) {?>disabled="disabled"<?php }?> />
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="shift-input"><?php echo $_smarty_tpl->__("text_cdn_check",array("[url]"=>$_smarty_tpl->tpl_vars['cdn_test_url']->value));?>
</span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
:</label>
        <div class="controls">
            <span class="shift-input">
                
                <?php if ($_smarty_tpl->tpl_vars['cdn_data']->value['is_active']) {?>
                <span class="label btn-info o-status-c"><?php echo $_smarty_tpl->__("active");?>
</span>
                <?php } else { ?>
                <span class="label btn-info o-status-i"><?php echo $_smarty_tpl->__("in_progress");?>
</span>
                <?php }?>

            </span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("host");?>
:</label>
        <div class="controls">
            <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdn_data']->value['host'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        </div>
    </div>

    <?php }?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("provider");?>
:</label>
        <div class="controls">
            <span class="shift-input">Amazon</span>
        </div>
    </div>


    <div class="control-group">
        <label for="elm_cf_key" class="control-label cm-required"><?php echo $_smarty_tpl->__("key");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_storage_cdn_key")), 0);?>
:</label>
        <div class="controls">
            <input type="text" name="cdn_data[key]" id="elm_cf_key" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdn_data']->value['key'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" />
        </div>
    </div>

    <div class="control-group">
        <label for="elm_cf_secret" class="control-label cm-required"><?php echo $_smarty_tpl->__("secret_key");?>
:</label>
        <div class="controls">
            <input type="text" name="cdn_data[secret]" id="elm_cf_secret" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdn_data']->value['secret'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" />
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("extra"),'target'=>"#acc_extra",'meta'=>"collapsed"), 0);?>

<div id="acc_extra" class="collapse">

    <div class="control-group">
        <label for="elm_cf_cname" class="control-label"><?php echo $_smarty_tpl->__("cname");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_storage_cdn_cname")), 0);?>
:</label>
        <div class="controls">
            <input type="text" name="cdn_data[cname]" id="elm_cf_cname" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdn_data']->value['cname'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" />
        </div>
    </div>
</div>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[storage.update_cdn]",'but_role'=>"submit-link",'but_target_form'=>"cdn_form",'save'=>true,'hide_second_button'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'title'=>__("cdn_settings"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>


<?php }} ?>
