<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:01:02
         compiled from "/var/www/html/design/backend/templates/views/destinations/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165988162355e689965eb691-77723489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abcb264966885ec42d07e3737f2f9fe8b99d5ae3' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/destinations/manage.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165988162355e689965eb691-77723489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destinations' => 0,
    'destination' => 0,
    'has_permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e689966a18f7_56234907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e689966a18f7_56234907')) {function content_55e689966a18f7_56234907($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','status','edit','delete','no_items','add_location','locations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="destinations_form" class="<?php if (fn_check_form_permissions('')) {?>cm-hide-inputs<?php }?>">

<?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th width="80%"><?php echo $_smarty_tpl->__("name");?>
</th>
    <th width="5%">&nbsp;</th>
    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['destination']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-ct-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
">
    <td class="left">
        <input name="destination_ids[]" type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['destination']->value['destination_id']==1) {?>disabled="disabled"<?php }?> class=" cm-item" /></td>
    <td data-ct-destination-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
">
       <a class="row-status" href="<?php echo htmlspecialchars(fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</a>
    </td>
    <td class="nowrap" >
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"destinations:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"destinations:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])));?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['destination']->value['destination_id']!=1) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"cm-confirm",'href'=>"destinations.delete?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"destinations:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
        <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("tools","update_status","admin","GET",array("table"=>"destinations")), null, 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['destination']->value['destination_id'],'status'=>$_smarty_tpl->tpl_vars['destination']->value['status'],'hidden'=>'','object_id_name'=>"destination_id",'table'=>"destinations",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

    </td>
</tr>
<?php } ?>
</table>
</form>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[destinations.m_delete]",'form'=>"destinations_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"destinations.add",'prefix'=>"top",'hide_tools'=>"true",'title'=>__("add_location"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("locations"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
