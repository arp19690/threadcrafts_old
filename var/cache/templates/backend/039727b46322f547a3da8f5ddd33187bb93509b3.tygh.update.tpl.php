<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:25:50
         compiled from "/var/www/html/design/backend/templates/views/currencies/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181723947055a9f8767830e4-76256210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039727b46322f547a3da8f5ddd33187bb93509b3' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/currencies/update.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '181723947055a9f8767830e4-76256210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f876843898_18704743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f876843898_18704743')) {function content_55a9f876843898_18704743($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('general','name','code','primary_currency','currency_rate','currency_sign','after_sum','tt_views_currencies_update_after_sum','ths_sign','tt_views_currencies_update_ths_sign','dec_sign','tt_views_currencies_update_dec_sign','decimals','tt_views_currencies_update_decimals'));
?>
<?php if ($_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value['currency_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>    
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="update_currency_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class=" form-horizontal<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

    <input type="hidden" name="currency_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content" id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<fieldset>
    <div class="control-group">
        <label class="control-label cm-required" for="description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
" id="description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="18">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required" for="currency_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("code");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[currency_code]" size="8" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'ISO-8859-1');?>
" id="currency_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" onkeyup="var matches = this.value.match(/^(\w*)/gi);  if (matches) this.value = matches;">
        </div>
    </div>
    
    
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label class="control-label" for="is_primary_currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[coefficient]" value="1" />
            <input type="checkbox" name="currency_data[is_primary]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$('.cm-coefficient').prop('disabled', Tygh.$(this).prop('checked'))" id="is_primary_currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label cm-required" for="coefficient_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("currency_rate");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[coefficient]" size="7" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['coefficient'], ENT_QUOTES, 'ISO-8859-1');?>
" id="coefficient_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-coefficient" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>disabled="disabled"<?php }?>>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="symbol_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("currency_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[symbol]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol'], ENT_QUOTES, 'ISO-8859-1');?>
" id="symbol_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:autoupdate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:autoupdate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:autoupdate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="control-group">
        <label class="control-label" for="after_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("after_sum");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_currencies_update_after_sum")), 0);?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[after]" value="N" />
            <input type="checkbox" name="currency_data[after]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['after']=="Y") {?>checked="checked"<?php }?> id="after_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['id']->value&&!fn_allowed_for("ULTIMATE:FREE")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"currency_data[status]",'id'=>"add_currency",'hidden'=>true), 0);?>

    <?php }?>

    <div class="control-group">
        <label class="control-label" for="thousands_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ths_sign");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_currencies_update_ths_sign")), 0);?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[thousands_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['thousands_separator'], ENT_QUOTES, 'ISO-8859-1');?>
" id="thousands_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimal_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("dec_sign");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_currencies_update_dec_sign")), 0);?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[decimals_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['decimals_separator'], ENT_QUOTES, 'ISO-8859-1');?>
" id="decimal_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimals_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("decimals");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_currencies_update_decimals")), 0);?>
:</label>
       <div class="controls">
            <input type="text" name="currency_data[decimals]" size="1" maxlength="2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['decimals'], ENT_QUOTES, 'ISO-8859-1');?>
" id="decimals_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
       </div>
    </div>
    </fieldset>
</div>

<?php if (fn_allow_save_object('','',true)) {?>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[currencies.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
<?php }?>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
