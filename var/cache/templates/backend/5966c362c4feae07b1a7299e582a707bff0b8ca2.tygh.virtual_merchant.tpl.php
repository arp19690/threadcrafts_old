<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 20:51:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/virtual_merchant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180185055055a9327a3910d3-84166133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5966c362c4feae07b1a7299e582a707bff0b8ca2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/virtual_merchant.tpl',
      1 => 1413374306,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180185055055a9327a3910d3-84166133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9327a478d83_51199581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9327a478d83_51199581')) {function content_55a9327a478d83_51199581($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('merchant_id','user_id','user_pin','test_live_mode','test','live','demo','order_prefix','cvv2','avs'));
?>
<div class="control-group">
    <label class="control-label" for="merchant_id"><?php echo $_smarty_tpl->__("merchant_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_id"><?php echo $_smarty_tpl->__("user_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][user_id]" id="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_pin"><?php echo $_smarty_tpl->__("user_pin");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][user_pin]" id="user_pin" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['user_pin'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
            <option value="demo" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="demo") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("demo");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="cvv2"><?php echo $_smarty_tpl->__("cvv2");?>
:</label>
    <div class="controls">
        <input type="hidden" name="payment_data[processor_params][cvv2]" value="N">
        <input type="checkbox" name="payment_data[processor_params][cvv2]" id="cvv2" value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['cvv2']=="Y") {?>checked="checked"<?php }?>>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="avs"><?php echo $_smarty_tpl->__("avs");?>
:</label>
    <div class="controls">
        <input type="hidden" name="payment_data[processor_params][avs]" value="N">
        <input type="checkbox" name="payment_data[processor_params][avs]" id="avs" value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['avs']=="Y") {?>checked="checked"<?php }?>>
    </div>
</div><?php }} ?>
