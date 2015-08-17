<?php /* Smarty version Smarty-3.1.18, created on 2015-08-12 10:36:39
         compiled from "/var/www/html/design/backend/templates/views/payments/components/cc_processors/razorpay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112070661955cad45f61f674-35435793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc579d52c0035a3985d1f079a6f62eb2b19dbff' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/payments/components/cc_processors/razorpay.tpl',
      1 => 1439355819,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112070661955cad45f61f674-35435793',
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
  'unifunc' => 'content_55cad45f66f712_90365182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cad45f66f712_90365182')) {function content_55cad45f66f712_90365182($_smarty_tpl) {?><?php
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
