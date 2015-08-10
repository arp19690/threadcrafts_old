<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:49:55
         compiled from "/var/www/html/design/backend/templates/views/states/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145299556155c8509b64b569-93827987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f058b11b3b556ba38f2f92e2c0a23d8cd48ef8da' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/states/manage.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145299556155c8509b64b569-93827987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'states' => 0,
    'state' => 0,
    'has_permission' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c8509b74c041_60854113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8509b74c041_60854113')) {function content_55c8509b74c041_60854113($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('code','state','status','delete','no_data','new_states','general','code','state','add_state','search','country','states'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="states_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="country_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['country'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['states']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th width="10%"><?php echo $_smarty_tpl->__("code");?>
</th>
    <th width="60%"><?php echo $_smarty_tpl->__("state");?>
</th>
    <th width="5%">&nbsp;</th>
    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['state']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <td>
        <input type="checkbox" name="state_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" /></td>
    <td class="left nowrap row-status">
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span>
        </td>
    <td>
        <input type="text" name="states[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
][state]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden span8"/></td>
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"states.delete?state_id=".((string)$_smarty_tpl->tpl_vars['state']->value['state_id'])."&country_code=".((string)$_smarty_tpl->tpl_vars['search']->value['country'])));?>
</li>
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
    <td class="right">
        <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("tools","update_status","admin","GET",array("table"=>"states")), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['state']->value['state_id'],'status'=>$_smarty_tpl->tpl_vars['state']->value['status'],'hidden'=>'','object_id_name'=>"state_id",'table'=>"states",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("tools", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_states_form" class="form-horizontal form-edit">
    <input type="hidden" name="state_data[country_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="country_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="state_id" value="0" />

    <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['search']->value['country_code']) {?>
            <?php ob_start();?><?php echo $_smarty_tpl->__("new_states");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1." (".((string)$_smarty_tpl->tpl_vars['country']->value).")", null, 0);?>
        <?php }?>
    <?php } ?>

    <div class="cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_new_states" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content">
    <fieldset>
        <div class="control-group">
            <label class="cm-required control-label" for="elm_state_code"><?php echo $_smarty_tpl->__("code");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_state_code" name="state_data[code]" size="8" value="" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_state_name"><?php echo $_smarty_tpl->__("state");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_state_name" name="state_data[state]" size="55" value="" />
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"state_data[status]",'id'=>"elm_state_status"), 0);?>

    </fieldset>
    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('create'=>true,'but_name'=>"dispatch[states.update]",'cancel_action'=>"close"), 0);?>

    </div>

</form>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"states:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"states:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['states']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[states.m_delete]",'form'=>"states_form"));?>
</li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"states:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['states']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[states.m_update]",'but_role'=>"submit-link",'but_target_form'=>"states_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"new_state",'action'=>"states.add",'text'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_state"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="states_filter_form" method="get">
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("country");?>
:</label>
        <select name="country_code">
            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['search']->value['country_code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
</div>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[states.manage]"), 0);?>

</form>
</div>
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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("states"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>
<?php }} ?>
