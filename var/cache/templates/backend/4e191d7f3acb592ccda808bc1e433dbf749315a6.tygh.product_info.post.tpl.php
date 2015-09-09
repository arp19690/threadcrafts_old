<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:59
         compiled from "/var/www/html/design/backend/templates/addons/rma/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16728670055efb8d38a0699-38280661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e191d7f3acb592ccda808bc1e433dbf749315a6' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/rma/hooks/orders/product_info.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16728670055efb8d38a0699-38280661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'return_statuses' => 0,
    'key' => 0,
    'status' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8d38f3613_24157584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8d38f3613_24157584')) {function content_55efb8d38f3613_24157584($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','collapse_sublist_of_items','returns_info','status','amount'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {?><?php $_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);?><?php }?>

    <p class="shift-top">
        <i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination exicon-expand"></i>
        <i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand hidden cm-combination exicon-collapse"></i>
        <a id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("returns_info");?>
</a>
    </p>
    <table width="100%" class="table table-condensed table-no-bg hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
    <thead>
    <tr>
        <th>&nbsp;<?php echo $_smarty_tpl->__("status");?>
</th>
        <th><?php echo $_smarty_tpl->__("amount");?>
</th>
    </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
        <tr>
            <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
<?php }?>
<?php }} ?>
