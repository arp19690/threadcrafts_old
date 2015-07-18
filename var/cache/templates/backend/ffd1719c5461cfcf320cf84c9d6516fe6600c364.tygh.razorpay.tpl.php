<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 20:59:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/razorpay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96514650855a9348ba56676-49763555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd1719c5461cfcf320cf84c9d6516fe6600c364' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/razorpay.tpl',
      1 => 1424777854,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96514650855a9348ba56676-49763555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'payment_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9348badb748_62325745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9348badb748_62325745')) {function content_55a9348badb748_62325745($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('key_id','key_secret','currency','currency_code_inr','iframe_mode','enabled'));
?>


<div class="form-field">
    <label for="key_id"><?php echo $_smarty_tpl->__("key_id");?>
:</label>
    <input type="text" name="payment_data[processor_params][key_id]" id="key_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['key_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
</div>

<div class="form-field">
    <label for="key_secret"><?php echo $_smarty_tpl->__("key_secret");?>
:</label>
    <input type="text" name="payment_data[processor_params][key_secret]" id="key_secret" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['key_secret'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
</div>

<div class="form-field">
    <label for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <select name="payment_data[processor_params][currency]" id="currency">
        <option value="INR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="INR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_inr");?>
</option>
    </select>
</div>
<div class="control-group">
    <label class="control-label" for="iframe_mode_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("iframe_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][iframe_mode]" id="iframe_mode_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="Y" selected="selected"><?php echo $_smarty_tpl->__("enabled");?>
</option>
        </select>
    </div>
</div><?php }} ?>
