<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:28:10
         compiled from "/var/www/html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119241237755aa2332855f24-24732135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26013ff423495bd62bb886ea8bfec6e9b7964c18' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119241237755aa2332855f24-24732135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'key_id' => 0,
    'key' => 0,
    'provider_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa2332874d01_13785604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa2332874d01_13785604')) {function content_55aa2332874d01_13785604($_smarty_tpl) {?><div id="content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php  $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["key"]->_loop = false;
 $_smarty_tpl->tpl_vars["key_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["key"]->key => $_smarty_tpl->tpl_vars["key"]->value) {
$_smarty_tpl->tpl_vars["key"]->_loop = true;
 $_smarty_tpl->tpl_vars["key_id"]->value = $_smarty_tpl->tpl_vars["key"]->key;
?>
        <div class="control-group">
            <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['key']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value['label']);?>
:</label>
            <div class="controls">
                <input type="text" name="provider_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value['db_field'], ENT_QUOTES, 'ISO-8859-1');?>
]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value[$_smarty_tpl->tpl_vars['key']->value['db_field']], ENT_QUOTES, 'ISO-8859-1');?>
" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
        </div>
    <?php } ?>
<!--content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php }} ?>
