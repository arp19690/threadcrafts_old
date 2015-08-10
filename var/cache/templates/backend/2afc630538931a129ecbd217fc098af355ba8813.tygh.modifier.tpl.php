<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:15
         compiled from "/var/www/html/design/backend/templates/common/modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128237441755aca1a7037473-62378766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2afc630538931a129ecbd217fc098af355ba8813' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/modifier.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128237441755aca1a7037473-62378766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_integer' => 0,
    'mod_value' => 0,
    'display_sign' => 0,
    'mod_type' => 0,
    'span_id' => 0,
    'no_ids' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a7068c58_34902930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a7068c58_34902930')) {function content_55aca1a7068c58_34902930($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_integer']->value==true) {?><?php $_smarty_tpl->tpl_vars["mod_value"] = new Smarty_variable(round($_smarty_tpl->tpl_vars['mod_value']->value), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['display_sign']->value) {?><?php if ($_smarty_tpl->tpl_vars['mod_value']->value>0) {?>+<?php } else { ?>-<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['mod_type']->value=="A"||$_smarty_tpl->tpl_vars['mod_type']->value=="F") {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?><span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars(abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?></span><?php }?>%<?php }?><?php }} ?>
