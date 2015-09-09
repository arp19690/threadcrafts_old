<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:10:10
         compiled from "/var/www/html/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36473945555efb82ae67b04-67852975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7629a478bc00626e7109d00c02380f50df3a84ae' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36473945555efb82ae67b04-67852975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb82ae9b086_48506607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb82ae9b086_48506607')) {function content_55efb82ae9b086_48506607($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('rma','returnable','return_period_days'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rma"),'target'=>"#acc_addon_rma"), 0);?>

<div id="acc_addon_rma" class="collapse in">
<div class="control-group">
    <label class="control-label" for="is_returnable"><?php echo $_smarty_tpl->__("returnable");?>
:</label>
    <div class="controls">
        <label class="checkbox">
        <input type="hidden" name="product_data[is_returnable]" id="is_returnable" value="N" />
        <input type="checkbox" name="product_data[is_returnable]" value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable']=="Y"||$_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms(['return_period'], !this.checked);" />
        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="return_period"><?php echo $_smarty_tpl->__("return_period_days");?>
:</label>
    <div class="controls">
        <input type="text" id="return_period" name="product_data[return_period]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['return_period'])===null||$tmp==='' ? "10" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="10"  <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable']!="Y"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']!="add") {?>disabled="disabled"<?php }?> />
    </div>
</div>
</div>
<?php }} ?>
