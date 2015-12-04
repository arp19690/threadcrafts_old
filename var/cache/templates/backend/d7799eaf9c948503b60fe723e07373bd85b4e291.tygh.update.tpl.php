<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:39:03
         compiled from "/var/www/html/design/backend/templates/addons/store_locator/views/store_locator/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102248284555f318bf507290-20023865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7799eaf9c948503b60fe723e07373bd85b4e291' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/store_locator/views/store_locator/update.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102248284555f318bf507290-20023865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_location' => 0,
    'allow_save' => 0,
    'suffix' => 0,
    'id' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'show_save_btn' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f318bf618f71_41760199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f318bf618f71_41760199')) {function content_55f318bf618f71_41760199($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','position','description','country','select_country','city','coordinates','latitude_short','longitude_short','latitude','longitude','select','editing_store_location','new_store_location'));
?>
<?php if ($_smarty_tpl->tpl_vars['store_location']->value['store_location_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['store_location']->value['store_location_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['store_location']->value,"store_locations"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_save']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/pickers/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" name="store_locations_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="store_location_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="selected_section" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "detailed" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <div id="content_detailed">
            <fieldset>
                <div class="control-group">
                    <label for="elm_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" id="elm_name" name="store_location_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"store_location_data[company_id]",'id'=>"company_id_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['store_location']->value['company_id']), 0);?>

                <?php } else { ?>
                    <input type="hidden" name="store_location_data[company_id]" value="0">
                <?php }?>

                <div class="control-group">
                    <label class="control-label" for="elm_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
                    <div class="controls">
                        <input type="text" name="store_location_data[position]" id="elm_position" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
                    <div class="controls">
                        <textarea id="elm_description" name="store_location_data[description]" cols="55" rows="2" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_country"><?php echo $_smarty_tpl->__("country");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1,@constant('CART_LANGUAGE')), null, 0);?>
                        <select id="elm_country" name="store_location_data[country]" class="select">
                            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['store_location']->value['country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
:</label>
                    <div class="controls">
                        <input type="text" name="store_location_data[city]" id="elm_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("coordinates");?>
 (<?php echo $_smarty_tpl->__("latitude_short");?>
 &times; <?php echo $_smarty_tpl->__("longitude_short");?>
):</label>
                    <label class="control-label cm-required hidden" for="elm_latitude"><?php echo $_smarty_tpl->__("latitude");?>
</label>
                    <label class="control-label cm-required hidden" for="elm_longitude"><?php echo $_smarty_tpl->__("longitude");?>
</label>
                    <div class="controls">
                        <input type="hidden" id="elm_latitude_hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" />
                        <input type="hidden" id="elm_longitude_hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" />
                        <input type="text" name="store_location_data[latitude]" id="elm_latitude" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" class="input-small">
                        &times;
                        <input type="text" name="store_location_data[longitude]" id="elm_longitude" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" class="input-small">

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("select"),'but_role'=>"action",'but_meta'=>"btn-primary cm-map-dialog"), 0);?>

                    </div>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_from'=>$_smarty_tpl->tpl_vars['store_location']->value['localization'],'data_name'=>"store_location_data[localization]"), 0);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"store_location_data[status]",'id'=>"elm_status",'obj_id'=>$_smarty_tpl->tpl_vars['store_location']->value['location_id'],'obj'=>$_smarty_tpl->tpl_vars['store_location']->value), 0);?>


            </fieldset>
        </div>

        <div id="content_addons">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:addons_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:addons_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:addons_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[store_locator.update]",'but_role'=>"submit-link",'but_target_form'=>"store_locations_form".((string)$_smarty_tpl->tpl_vars['suffix']->value)), 0);?>

            <?php } else { ?>
                <?php if (!$_smarty_tpl->tpl_vars['show_save_btn']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["hide_second_button"] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[store_locator.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_role'=>"submit-link",'but_target_form'=>"store_locations_form".((string)$_smarty_tpl->tpl_vars['suffix']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    </form>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_store_location");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['store_location']->value['name']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_store_location"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>


<?php }} ?>
