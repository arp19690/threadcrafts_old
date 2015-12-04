<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:43:08
         compiled from "/var/www/html/design/backend/templates/views/product_options/inventory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38905110355f319b4df6582-78503334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9202831e4a78dcb0f7839944d8b68d92ae43ad' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/product_options/inventory.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '38905110355f319b4df6582-78503334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'inventory' => 0,
    'i' => 0,
    'k' => 0,
    'product_options' => 0,
    'c' => 0,
    'product_inventory' => 0,
    'option' => 0,
    'variant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f319b4f27b47_01876097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f319b4f27b47_01876097')) {function content_55f319b4f27b47_01876097($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('combination','yes','no','sku','quantity','position','additional__option_thumbnail','delete','no_data','combination','in_stock','no','yes','new_combination','add_combination','rebuild_combinations','inventory'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_options_form" enctype="multipart/form-data" class="cm-disable-empty-files form-horizontal form-edit">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>

<?php if ($_smarty_tpl->tpl_vars['inventory']->value) {?>
<table  class="table" width="100%">
<thead>
<tr>
    <th class="left" width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("combination");?>
</th>
    <th>&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inventory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value) {
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
<tr valign="top">
    <td class="center"><input type="checkbox" name="combination_hashes[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
" class=" cm-item" /></td>
    <td>
        <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['combination']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["c"]->key;
?>
            <div class="control-group">
                <label class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_name'], ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="controls">
                <span class="shift-input">
                <?php if ($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_type']=="C") {?>
                    [<?php if ($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['variants'][$_smarty_tpl->tpl_vars['c']->value]['position']=="1") {?><?php echo $_smarty_tpl->__("yes");?>
<?php } else { ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>]
                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['variants'][$_smarty_tpl->tpl_vars['c']->value]['variant_name'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                </span>
                </div>
            </div>
        <?php } ?>

        <div class="control-group">
            <label class="control-label" for="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_product_code"><?php echo $_smarty_tpl->__("sku");?>
</label>
            <div class="controls">
            <input type="text" id="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_product_code" name="inventory[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
][product_code]" size="16" maxlength="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['product_inventory']->value=="O") {?>
        <div class="control-group">
            <label class="control-label" for="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_quantity"><?php echo $_smarty_tpl->__("quantity");?>
</label>
            <div class="controls">
            <input type="text" id="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_quantity" name="inventory[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <?php } else { ?>
            <input type="hidden" name="inventory[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_position"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
            <input type="text" id="inventory_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
_position" name="inventory[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['combination_hash'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['position'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_options:inventory_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_options:inventory_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_options:inventory_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"combinations",'image_object_type'=>"product_option",'image_pair'=>$_smarty_tpl->tpl_vars['i']->value['image_pairs'],'image_object_id'=>$_smarty_tpl->tpl_vars['i']->value['combination_hash'],'image_key'=>$_smarty_tpl->tpl_vars['i']->value['combination_hash'],'icon_title'=>__("additional__option_thumbnail"),'no_thumbnail'=>true), 0);?>

    </td>
    <td class="nowrap">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"product_options.delete_combination?combination_hash=".((string)$_smarty_tpl->tpl_vars['i']->value['combination_hash'])."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
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

<?php $_smarty_tpl->_capture_stack[0][] = array("add_new_combination", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="new_combination_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<table class="table table-middle">
<thead>
<tr class="cm-first-sibling">
    <th><?php echo $_smarty_tpl->__("combination");?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['product_inventory']->value=="O") {?>
    <th><?php echo $_smarty_tpl->__("in_stock");?>
</th>
    <?php }?>
    <th>&nbsp;</th>
</tr>
</thead>
<tr id="box_new_item">
    <td>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_options:new_inventory_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_options:new_inventory_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table>
<?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
<tr class="no-border">
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['option']->value['option_type']=="C") {?>
            <select name="add_options_combination[0][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]">
                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['variant']->value['position']==0) {?><?php echo $_smarty_tpl->__("no");?>
<?php } else { ?><?php echo $_smarty_tpl->__("yes");?>
<?php }?></option>
                <?php } ?>
            </select>
        <?php } else { ?>
            <select name="add_options_combination[0][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]">
                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        <?php }?>
    </td>
</tr>
<?php } ?>
</table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_options:new_inventory_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</td>
    <?php if ($_smarty_tpl->tpl_vars['product_inventory']->value!="O") {?>
        <input type="hidden" name="add_inventory[0][amount]" value="" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_inventory']->value=="O") {?>
    <td valign="top"><input type="text" name="add_inventory[0][amount]" size="10" value="1" class="input-text-short inventory" /></td>
    <?php }?>
    <td valign="top" class="right">
        <div class="hidden-tools">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"new_item"), 0);?>

        </div>
    </td>
</tr>
</table>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_options.add_combinations]",'cancel_action'=>"close"), 0);?>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_combination",'text'=>__("new_combination"),'title'=>__("add_combination"),'content'=>Smarty::$_smarty_vars['capture']['add_new_combination'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("rebuild_combinations"),'href'=>"product_options.rebuild_combinations?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)));?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['inventory']->value) {?>
            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[product_options.m_delete_combinations]",'form'=>"product_options_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['inventory']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_options.update_combinations]",'but_role'=>"submit-link",'but_target_form'=>"product_options_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("inventory"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>
<?php }} ?>
