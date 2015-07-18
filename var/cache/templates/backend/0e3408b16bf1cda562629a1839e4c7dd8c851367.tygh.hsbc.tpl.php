<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 07:39:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/hsbc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3744956755a484588601a4-27928448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3408b16bf1cda562629a1839e4c7dd8c851367' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/components/cc_processors/hsbc.tpl',
      1 => 1413374306,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3744956755a484588601a4-27928448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a484588f7744_81897585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a484588f7744_81897585')) {function content_55a484588f7744_81897585($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_hsbc_notice','client_id','cpi_hash_key','test_live_mode','test','live','currency','currency_code_gbp','currency_code_eur','currency_code_usd','currency_code_hkd','currency_code_jpy'));
?>

<p><?php echo $_smarty_tpl->__("text_hsbc_notice",array("[cart_dir]"=>$_smarty_tpl->tpl_vars['config']->value['dir']['payments']));?>
</p>
<hr>

<div class="control-group">
    <label class="control-label" for="store_id"><?php echo $_smarty_tpl->__("client_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][store_id]" id="store_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['store_id'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="cpihashkey"><?php echo $_smarty_tpl->__("cpi_hash_key");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][cpihashkey]" id="cpihashkey" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['cpihashkey'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="T" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="P" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="826" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="826") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
            <option value="978" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="978") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="840" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="840") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="344" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="344") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_hkd");?>
</option>
            <option value="392" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="392") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_jpy");?>
</option>
        </select>
    </div>
</div><?php }} ?>
