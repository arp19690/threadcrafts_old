<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:01:16
         compiled from "/var/www/html/design/backend/templates/views/destinations/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213757629355e689a41be995-84444077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d261b7657184bda8c23a26da84624c7d703fc6' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/destinations/update.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '213757629355e689a41be995-84444077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destination' => 0,
    'id' => 0,
    'destination_data' => 0,
    'countries' => 0,
    'states' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e689a42647f3_23069072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e689a42647f3_23069072')) {function content_55e689a42647f3_23069072($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/var/www/html/app/functions/smarty_plugins/block.notes.php';
?><?php
fn_preload_lang_vars(array('general','name','multiple_selectbox_notice','countries','states','zipcodes','text_zipcodes_wildcards','cities','text_cities_wildcards','addresses','text_addresses_wildcards','new_location','editing_location'));
?>
<?php if ($_smarty_tpl->tpl_vars['destination']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['destination']->value['destination_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("general")), 0);?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="destinations_form" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="destination_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="control-group">
    <label for="elm_destination_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
    <div class="controls">
        <input type="text" name="destination_data[destination]" id="elm_destination_name" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"destination_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['destination']->value['localization']), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"destination_data[status]",'id'=>"elm_destination_status",'obj'=>$_smarty_tpl->tpl_vars['destination']->value), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<hr />



<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("countries"),'first_name'=>"destination_data[countries]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['countries'],'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['countries']->value,'class_name'=>"destination-countries"), 0);?>

<hr />



<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("states"),'first_name'=>"destination_data[states]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['states'],'second_name'=>"all_states",'second_data'=>$_smarty_tpl->tpl_vars['states']->value,'class_name'=>"destination-states"), 0);?>

<hr />


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("zipcodes")), 0);?>

<table width="100%">
<tr>
    <td width="48%">
        <textarea name="destination_data[zipcodes]" id="elm_destination_zipcodes" rows="8" class="input-full"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['zipcodes'], ENT_QUOTES, 'UTF-8');?>
</textarea></td>
    <td>&nbsp;</td>

    <td width="48%"><?php echo $_smarty_tpl->__("text_zipcodes_wildcards");?>
</td>
</tr>
</table>

<hr />


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("cities")), 0);?>

<table cellpadding="0" cellspacing="0" width="100%"    border="0">
<tr>
    <td width="48%">
        <textarea name="destination_data[cities]" id="elm_destination_cities" rows="8" class="input-full"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['cities'], ENT_QUOTES, 'UTF-8');?>
</textarea></td>
    <td>&nbsp;</td>

    <td width="48%"><?php echo $_smarty_tpl->__("text_cities_wildcards");?>
</td>
</tr>
</table>

<hr />


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("addresses")), 0);?>

<table cellpadding="0" cellspacing="0" width="100%"    border="0">
<tr>
    <td width="48%">
        <textarea name="destination_data[addresses]" id="elm_destination_cities" rows="8" class="input-full"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['addresses'], ENT_QUOTES, 'UTF-8');?>
</textarea></td>
    <td>&nbsp;</td>

    <td width="48%"><?php echo $_smarty_tpl->__("text_addresses_wildcards");?>
</td>
</tr>
</table>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[destinations.update]",'but_target_form'=>"destinations_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

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

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_location"), null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_location");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['destination']->value['destination']), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
