<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:25:37
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/hooks/shippings/tabs_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60560484355f31599d09a41-66667582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe26a77770b71bbf722644e5f5d69ad5ac5be68' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/hooks/shippings/tabs_content.pre.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '60560484355f31599d09a41-66667582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'linked_suppliers' => 0,
    'suppliers' => 0,
    'supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f31599d3a095_76922510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f31599d3a095_76922510')) {function content_55f31599d3a095_76922510($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/var/www/html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('available_for_supplier','none'));
?>
<div id="content_suppliers" class="hidden">
    <div class="control-group">
        <label for="suppiers_group" class="control-label"><?php echo $_smarty_tpl->__("available_for_supplier");?>
</label>

        <div class="controls">
            <div id="suppiers_group">
                <label for="supplier_none" class="checkbox">
                    <input type="hidden" name="shipping_data[suppliers][0]" value="N">
                    <input type="checkbox" class="cm-combo-checkbox" id="supplier_none" name="shipping_data[suppliers][0]" value="Y" <?php if (smarty_modifier_in_array(0,$_smarty_tpl->tpl_vars['linked_suppliers']->value)) {?>checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("none");?>

                </label>
            </div>
            <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                <div>
                    <label for="supplier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                        <input type="hidden" name="shipping_data[suppliers][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
                        <input type="checkbox" class="cm-combo-checkbox" id="supplier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[suppliers][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'],$_smarty_tpl->tpl_vars['linked_suppliers']->value)) {?>checked="checked"<?php }?>>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </label>
                </div>
            <?php } ?>
        </div>
    </div>
</div><?php }} ?>
