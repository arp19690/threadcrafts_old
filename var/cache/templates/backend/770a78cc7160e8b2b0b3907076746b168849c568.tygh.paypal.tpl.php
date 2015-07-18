<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:25:19
         compiled from "/var/www/html/design/backend/templates/views/payments/components/cc_processors/paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117403779055a9f857645ef4-25048994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '770a78cc7160e8b2b0b3907076746b168849c568' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/payments/components/cc_processors/paypal.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '117403779055a9f857645ef4-25048994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f85787d7e5_35265470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f85787d7e5_35265470')) {function content_55a9f85787d7e5_35265470($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('account','paypal_item_name','currency','currency_code_cad','currency_code_eur','currency_code_gbp','currency_code_usd','currency_code_jpy','currency_code_rur','currency_code_aud','currency_code_nzd','currency_code_chf','currency_code_hkd','currency_code_sgd','currency_code_sek','currency_code_dkk','currency_code_pln','currency_code_nok','currency_code_huf','currency_code_czk','currency_code_ils','currency_code_mxn','currency_code_brl','currency_code_myr','currency_code_php','currency_code_twd','currency_code_thb','currency_code_try','test_live_mode','test','live','order_prefix','see_demo','text_paypal_status_map','refunded','completed','pending','canceled_reversal','created','denied','expired','reversed','processed','voided'));
?>
<div class="control-group">
    <label class="control-label" for="account"><?php echo $_smarty_tpl->__("account");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][account]" id="account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account'], ENT_QUOTES, 'ISO-8859-1');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="item_name"><?php echo $_smarty_tpl->__("paypal_item_name");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][item_name]" id="item_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['item_name'], ENT_QUOTES, 'ISO-8859-1');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="CAD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CAD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_cad");?>
</option>
            <option value="EUR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="EUR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="GBP" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="GBP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
            <option value="USD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="USD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="JPY" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="JPY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_jpy");?>
</option>
            <option value="RUB" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="RUB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_rur");?>
</option>
            <option value="AUD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="AUD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_aud");?>
</option>
            <option value="NZD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NZD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nzd");?>
</option>
            <option value="CHF" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CHF") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_chf");?>
</option>
            <option value="HKD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HKD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_hkd");?>
</option>
            <option value="SGD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SGD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sgd");?>
</option>
            <option value="SEK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SEK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sek");?>
</option>
            <option value="DKK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="DKK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_dkk");?>
</option>
            <option value="PLN" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="PLN") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_pln");?>
</option>
            <option value="NOK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NOK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nok");?>
</option>
            <option value="HUF" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HUF") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_huf");?>
</option>
            <option value="CZK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CZK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_czk");?>
</option>
            <option value="ILS" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="ILS") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_ils");?>
</option>
            <option value="MXN" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="MXN") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_mxn");?>
</option>
            <option value="BRL" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="BRL") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_brl");?>
</option>
            <option value="MYR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="MYR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_myr");?>
</option>
            <option value="PHP" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="PHP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_php");?>
</option>
            <option value="TWD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="TWD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_twd");?>
</option>
            <option value="THB" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="THB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_thb");?>
</option>
            <option value="TRY" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="TRY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_try");?>
</option>
        </select>
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
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'ISO-8859-1');?>
" >
    </div>
</div>

<p>
<?php echo $_smarty_tpl->__("see_demo");?>
: <a href="http://www.paypal-marketing.com/html/partner/portal/standard.html">http://www.paypal-marketing.com/html/partner/portal/standard.html</a>
</p>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_paypal_status_map"),'target'=>"#text_paypal_status_map"), 0);?>


<div id="text_paypal_status_map" class="in collapse">
    <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER')), null, 0);?>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_refunded"><?php echo $_smarty_tpl->__("refunded");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][refunded]" id="elm_paypal_refunded">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['refunded'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['refunded']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['refunded'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_completed"><?php echo $_smarty_tpl->__("completed");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][completed]" id="elm_paypal_completed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['completed'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['completed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['completed'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_pending"><?php echo $_smarty_tpl->__("pending");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][pending]" id="elm_paypal_pending">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['pending'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['pending']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['pending'])&&$_smarty_tpl->tpl_vars['k']->value=='O')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_canceled_reversal"><?php echo $_smarty_tpl->__("canceled_reversal");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][canceled_reversal]" id="elm_paypal_canceled_reversal">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['canceled_reversal'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['canceled_reversal']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['canceled_reversal'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_created"><?php echo $_smarty_tpl->__("created");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][created]" id="elm_paypal_created">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['created'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['created']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['created'])&&$_smarty_tpl->tpl_vars['k']->value=='O')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_denied"><?php echo $_smarty_tpl->__("denied");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][denied]" id="elm_paypal_denied">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['denied'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['denied']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['denied'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_expired"><?php echo $_smarty_tpl->__("expired");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][expired]" id="elm_paypal_expired">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['expired'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['expired']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['expired'])&&$_smarty_tpl->tpl_vars['k']->value=='F')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_reversed"><?php echo $_smarty_tpl->__("reversed");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][reversed]" id="elm_paypal_reversed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['reversed'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['reversed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['reversed'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_processed"><?php echo $_smarty_tpl->__("processed");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][processed]" id="elm_paypal_processed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['processed'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['processed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['processed'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_paypal_voided"><?php echo $_smarty_tpl->__("voided");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][statuses][voided]" id="elm_paypal_voided">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['voided'])&&$_smarty_tpl->tpl_vars['processor_params']->value['statuses']['voided']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['statuses']['voided'])&&$_smarty_tpl->tpl_vars['k']->value=='O')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<?php }} ?>
