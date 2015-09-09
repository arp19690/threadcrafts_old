<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:19:59
         compiled from "/var/www/html/design/backend/templates/addons/rma/views/rma/properties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194292575455efba77494288-67202450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd5cc16d34e24bf70f5023fd7686740aaaad6fa' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/rma/views/rma/properties.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '194292575455efba77494288-67202450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'properties' => 0,
    'property' => 0,
    'property_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efba775ac470_86709266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efba775ac470_86709266')) {function content_55efba775ac470_86709266($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('position','reason','action','update_totals_and_inventory','status','delete','delete','delete','no_data','general','reason','action','position','new_reason','add_reason','rma_reasons','rma_actions'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rma_properties_form">
<input type="hidden" name="property_type" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['property_type'])===null||$tmp==='' ? @constant('RMA_REASON') : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['properties']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?>
    <th width="1%" class="center">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <?php }?>
    <th width="7%"><?php echo $_smarty_tpl->__("position");?>
</th>
    <th width="35%"><?php if ($_REQUEST['property_type']=="R") {?><?php echo $_smarty_tpl->__("reason");?>
<?php } else { ?><?php echo $_smarty_tpl->__("action");?>
<?php }?></th>
    <?php if ($_REQUEST['property_type']!=@constant('RMA_REASON')) {?>
    <th width="30%" class="center"><?php echo $_smarty_tpl->__("update_totals_and_inventory");?>
</th>
    <?php }?>
    <th width="10%">&nbsp;</th>
    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['property']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?>
    <td class="center">
        <input type="checkbox" name="property_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['property_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" /></td>
    <?php }?>
    <td>
        <input type="text" name="property_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['property_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="7" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden input-micro" /></td>
    <td>
        <input type="text" name="property_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['property_id'], ENT_QUOTES, 'UTF-8');?>
][property]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['property'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden input-xlarge" /></td>
    <?php if ($_REQUEST['property_type']!=@constant('RMA_REASON')) {?>
    <td class="center">
        <input type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value['update_totals_and_inventory'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['property']->value['update_totals_and_inventory']=="Y") {?>checked="checked"<?php }?> disabled="disabled" class="checkbox" /></td>
    <?php }?>
    <td class="nowrap right">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?>
            <?php $_smarty_tpl->tpl_vars["property_type"] = new Smarty_variable((($tmp = @$_REQUEST['property_type'])===null||$tmp==='' ? @constant('RMA_REASON') : $tmp), null, 0);?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"rma.delete_property?property_id=".((string)$_smarty_tpl->tpl_vars['property']->value['property_id'])."&property_type=".((string)$_smarty_tpl->tpl_vars['property_type']->value)));?>
</li>
        <?php } else { ?>
            <li class="disabled"><a class="undeleted-element cm-tooltip" title="<?php echo $_smarty_tpl->__("delete");?>
"><?php echo $_smarty_tpl->__("delete");?>
</a></li>
        <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right nowrap">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['property']->value['property_id'],'status'=>$_smarty_tpl->tpl_vars['property']->value['status'],'hidden'=>'','object_id_name'=>"property_id",'table'=>"rma_properties"), 0);?>

    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['properties']->value&&$_REQUEST['property_type']==@constant('RMA_REASON')) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[rma.m_delete_properties]",'form'=>"rma_properties_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['properties']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[rma.update_properties]",'but_role'=>"submit-link",'but_target_form'=>"rma_properties_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_rma_properties_form" class="form-horizontal form-edit ">
                <input type="hidden" name="property_type" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['property_type'])===null||$tmp==='' ? @constant('RMA_REASON') : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

                <div class="tabs cm-j-tabs">
                    <ul class="nav nav-tabs">
                        <li id="tab_rma_new" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                    </ul>
                </div>

                <div class="cm-tabs-content" id="content_tab_rma_new">
                    <div class="control-group">
                        <label class="control-label cm-required" for="add_property_data"><?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?><?php echo $_smarty_tpl->__("reason");?>
<?php } else { ?><?php echo $_smarty_tpl->__("action");?>
<?php }?></label>
                        <div class="controls">
                            <input type="text" name="add_property_data[0][property]" id="add_property_data" size="35" value="" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="add_property_position"><?php echo $_smarty_tpl->__("position");?>
</label>
                        <div class="controls">
                            <input type="text" name="add_property_data[0][position]" id="add_property_position" size="7" value="" />
                        </div>
                    </div>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"add_property_data[0][status]",'id'=>"add_property_data"), 0);?>

                </div>

                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[rma.add_properties]",'cancel_action'=>"close"), 0);?>

                </div>

            </form>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_reasons",'text'=>__("new_reason"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_reason"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php }?>
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
<?php if ($_REQUEST['property_type']==@constant('RMA_REASON')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rma_reasons"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rma_actions"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }?><?php }} ?>
