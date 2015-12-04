<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:39:35
         compiled from "/var/www/html/design/backend/templates/addons/data_feeds/views/data_feeds/components/datafeed_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112380499855f318dfc01d79-36777361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d50216d708abf339304a7f516eafc09b3b208f3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/data_feeds/views/data_feeds/components/datafeed_fields.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112380499855f318dfc01d79-36777361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datafeed_data' => 0,
    'key' => 0,
    'field' => 0,
    'export_fields' => 0,
    '_field' => 0,
    'feature_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f318dfc7f674_83665155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f318dfc7f674_83665155')) {function content_55f318dfc7f674_83665155($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('position_short','field_name','field_type','active','fields','features','fields','features'));
?>
<?php $_smarty_tpl->tpl_vars["key"] = new Smarty_variable("0", null, 0);?>

<table class="table">
<thead class="cm-first-sibling">
<tr>
    <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <th><?php echo $_smarty_tpl->__("field_name");?>
</th>
    <th><?php echo $_smarty_tpl->__("field_type");?>
</th>
    <th class="center"><?php echo $_smarty_tpl->__("active");?>
</th>
    <th>&nbsp;</th>
</tr>
</thead>

<tbody>
<?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['fields']) {?>
<?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datafeed_data']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
<tr class="cm-row-item">
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini">
    </td>
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][export_field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['export_field_name'], ENT_QUOTES, 'UTF-8');?>
" size="60">
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['export_fields']->value) {?>
            <select name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][field]">
                <optgroup label="<?php echo $_smarty_tpl->__("fields");?>
">
                <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </optgroup>
                
                <?php if ($_smarty_tpl->tpl_vars['feature_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>
            </select>
        <?php }?>
    </td>

    <td class="center">
        <input type="hidden" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="N" />
        <input type="checkbox" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value['avail']=="Y") {?>checked="checked"<?php }?> /></td>

    <td><?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>
</td>
</tr>
<?php } ?>
<?php }?>

<?php echo smarty_function_math(array('equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['key']->value,'assign'=>"key"),$_smarty_tpl);?>


<tr id="box_add_datafeed_fields">
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="" class="input-mini">
    </td>
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][export_field_name]" value="" size="60"></td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['export_fields']->value) {?>
            <select name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][field]">
                <optgroup label="<?php echo $_smarty_tpl->__("fields");?>
">
                <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </optgroup>
                
                <?php if ($_smarty_tpl->tpl_vars['feature_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>
            </select>
        <?php }?>
    </td>

    <td class="center">
        <input type="hidden" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="N" />
        <input type="checkbox" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="Y" checked="checked" />
    </td>

    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_datafeed_fields"), 0);?>

    </td>
</tr>
</tbody>
</table><?php }} ?>
