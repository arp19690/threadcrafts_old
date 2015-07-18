<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:20:06
         compiled from "/var/www/html/design/backend/templates/views/settings_wizard/components/default_currency.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31803669355a9f71edd0aa0-61465886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875f6cad08d6432db73abe727084c457e25766af' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/settings_wizard/components/default_currency.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31803669355a9f71edd0aa0-61465886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f71ee13497_82571422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f71ee13497_82571422')) {function content_55a9f71ee13497_82571422($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('primary_currency'));
?>
<div class="control-group setting-wide">
    <label for="" class="control-label"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
    <div class="controls">
        <select name="default_currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (@constant('CART_PRIMARY_CURRENCY')==$_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
