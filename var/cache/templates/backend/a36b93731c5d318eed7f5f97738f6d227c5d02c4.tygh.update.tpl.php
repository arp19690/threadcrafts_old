<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:39:35
         compiled from "/var/www/html/design/backend/templates/addons/data_feeds/views/data_feeds/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142293518255f318df9b6b57-55752321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36b93731c5d318eed7f5f97738f6d227c5d02c4' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/data_feeds/views/data_feeds/update.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142293518255f318df9b6b57-55752321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datafeed_data' => 0,
    'id' => 0,
    'date' => 0,
    'pattern' => 0,
    'o' => 0,
    'p_id' => 0,
    'k' => 0,
    'datafeed_langs' => 0,
    'vk' => 0,
    'vi' => 0,
    'addons' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f318dfb68534_33282183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f318dfb68534_33282183')) {function content_55f318dfb68534_33282183($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/html/app/lib/other/smarty/plugins/function.html_checkboxes.php';
?><?php
fn_preload_lang_vars(array('general_settings','datafeed_name','filename','enclosure','csv_delimiter','exclude_disabled_products','export_to_server','save_directory','export_to_ftp','ftp_url','ftp_url_hint','ftp_user','ftp_pass','cron_export','export_by_cron_to','server','ftp','export_cron_hint','categories_products','products','local_export','export_to_server','upload_to_ftp','add_new_datafeed','update_datafeed'));
?>
<?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["date"] = new Smarty_variable(smarty_modifier_date_format(@constant('TIME'),"%m%d%Y"), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="feed_update_form" class=" form-horizontal" enctype="multipart/form-data"> 
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="datafeed_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />



<div id="content_detailed"> 
<fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("general_settings"),'target'=>"#data_feed_general_settings"), 0);?>


<div id="data_feed_general_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("datafeed_name");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[datafeed_name]" id="elm_datafeed_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_datafeed_file_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("filename");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[file_name]" id="elm_datafeed_file_name" size="55" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['file_name'])===null||$tmp==='' ? "datafeed_".((string)$_smarty_tpl->tpl_vars['date']->value).".csv" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_datafeed_enclosure" class="control-label"><?php echo $_smarty_tpl->__("enclosure");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[enclosure]" id="elm_datafeed_enclosure" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['enclosure'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['options']) {?>
    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pattern']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
    <?php if (!$_smarty_tpl->tpl_vars['o']->value['import_only']) {?>
    <div class="control-group">
        <label for="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['title']);?>
<?php if ($_smarty_tpl->tpl_vars['o']->value['description']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__($_smarty_tpl->tpl_vars['o']->value['description'])), 0);?>
<?php }?>:
        </label>
        <div class="controls"><?php if ($_smarty_tpl->tpl_vars['o']->value['type']=="checkbox") {?>
                <input type="hidden" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value]=="Y") {?>checked="checked"<?php }?> />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="input") {?>
                <input id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" type="text" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="languages") {?>
                <div class="checkbox-list">
                    <?php echo smarty_function_html_checkboxes(array('name'=>"datafeed_data[export_options][lang_code]",'options'=>$_smarty_tpl->tpl_vars['datafeed_langs']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['lang_code'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp),'columns'=>8),$_smarty_tpl);?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="select") {?>
                <select id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]">
                <?php if ($_smarty_tpl->tpl_vars['o']->value['variants_function']) {?>
                    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['vk'] = new Smarty_Variable;
 $_from = call_user_func($_smarty_tpl->tpl_vars['o']->value['variants_function']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vk']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value==(($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp)) {?>checked="checked"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vi']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['vk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['o']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vk']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value==(($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp)) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vi']->value);?>
</option>
                    <?php } ?>
                <?php }?>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['o']->value['notes']) {?>
                <p class="muted"><?php echo $_smarty_tpl->tpl_vars['o']->value['notes'];?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>
    <?php } ?>
    <?php }?>
    
    <div class="control-group">
        <label for="elm_datafeed_csv_delimiter" class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
        <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"datafeed_data[csv_delimiter]",'value'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['csv_delimiter'],'id'=>"elm_datafeed_csv_delimiter"), 0);?>
</div>
    </div>
    
    <div class="control-group">
        <label for="elm_datafeed_exclude_disabled_products" class="control-label"><?php echo $_smarty_tpl->__("exclude_disabled_products");?>
:</label>
        <div class="controls"><input type="hidden" name="datafeed_data[exclude_disabled_products]" value="N" />
            <input type="checkbox" name="datafeed_data[exclude_disabled_products]" id="elm_datafeed_exclude_disabled_products" value="Y" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['exclude_disabled_products']=="Y") {?>checked="checked"<?php }?> /></div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[status]",'id'=>"elm_datafeed_status",'obj'=>$_smarty_tpl->tpl_vars['datafeed_data']->value,'hidden'=>false), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("export_to_server"),'target'=>"#data_feed_export_settings"), 0);?>


<div id="data_feed_export_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_save_directory" id="label_save_directory" class="control-label"><?php echo $_smarty_tpl->__("save_directory");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[save_dir]" id="elm_datafeed_save_directory" size="55" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['save_dir'])===null||$tmp==='' ? fn_get_files_dir_path() : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("export_to_ftp"),'target'=>"#data_feed_ftp_settings"), 0);?>


<div id="data_feed_ftp_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_ftp_url" id="label_ftp_url" class="control-label"><?php echo $_smarty_tpl->__("ftp_url");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[ftp_url]" id="elm_datafeed_ftp_url" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_url'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <p><small><?php echo $_smarty_tpl->__("ftp_url_hint");?>
</small></p>
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_datafeed_ftp_user" id="label_ftp_user" class="control-label"><?php echo $_smarty_tpl->__("ftp_user");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[ftp_user]" id="elm_datafeed_ftp_user" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_user'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_datafeed_ftp_pass" class="control-label"><?php echo $_smarty_tpl->__("ftp_pass");?>
:</label>
        <div class="controls">
            <input type="password" name="datafeed_data[ftp_pass]" id="elm_datafeed_ftp_pass" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_pass'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium" />
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("cron_export"),'target'=>"#data_feed_cron_settings"), 0);?>


<div id="data_feed_cron_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_export_file_location" class="control-label"><?php echo $_smarty_tpl->__("export_by_cron_to");?>
:</label>
        <div class="controls">
            <select name="datafeed_data[export_location]" id="elm_datafeed_export_file_location">
                <option value=""> -- </option>
                <option value="S" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_location']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
                <option value="F" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_location']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ftp");?>
</option>
            </select>
            
            <p><small><?php echo $_smarty_tpl->__("export_cron_hint");?>
:<br>php /path/to/cart/<?php echo htmlspecialchars(fn_url('',"A","rel"), ENT_QUOTES, 'UTF-8');?>
 --dispatch=exim.cron_export --cron_password=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['data_feeds']['cron_password'], ENT_QUOTES, 'UTF-8');?>
</small>
            </p>
        </div>
    </div>
</div>

</fieldset>

</div> 

<div id="content_exported_items" class="hidden"> 
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("categories_products")), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[categories]",'item_ids'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['categories'],'multiple'=>true,'single_line'=>true,'use_keys'=>"N",'placement'=>"right"), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("products")), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[products]",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['products'],'type'=>"links",'placement'=>"right"), 0);?>


</div> 

<div id="content_fields" class="hidden"> 
    <?php echo $_smarty_tpl->getSubTemplate ("addons/data_feeds/views/data_feeds/components/datafeed_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div> 

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>__("local_export"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=L"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>__("export_to_server"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=S"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>__("upload_to_ftp"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=F"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[data_feeds.update]",'but_role'=>"submit-link",'but_target_form'=>"feed_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("add_new_datafeed"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("update_datafeed");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_name']),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>
<?php }} ?>
