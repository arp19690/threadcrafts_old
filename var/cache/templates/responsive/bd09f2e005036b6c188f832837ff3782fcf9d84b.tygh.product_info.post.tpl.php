<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:07:54
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145487716955efb7a262ffb0-07361504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd09f2e005036b6c188f832837ff3782fcf9d84b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/hooks/orders/product_info.post.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145487716955efb7a262ffb0-07361504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'return_statuses' => 0,
    'key' => 0,
    'status' => 0,
    'amount' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb7a269dd30_92392107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb7a269dd30_92392107')) {function content_55efb7a269dd30_92392107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','collapse_sublist_of_items','returns_info','items','expand_sublist_of_items','collapse_sublist_of_items','returns_info','items'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['product']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {?><?php $_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);?><?php }?>
        <div class="ty-mtb-xs"><a class="cm-combination combination-link" id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-right-dir ty-dir-list"></i><i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-down-dir ty-dir-list hidden"></i><?php echo $_smarty_tpl->__("returns_info");?>
</a></div>
    <div class="hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
            <p><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
</p>
        <?php } ?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/orders/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/orders/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {?><?php $_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);?><?php }?>
        <div class="ty-mtb-xs"><a class="cm-combination combination-link" id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-right-dir ty-dir-list"></i><i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-down-dir ty-dir-list hidden"></i><?php echo $_smarty_tpl->__("returns_info");?>
</a></div>
    <div class="hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
            <p><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
</p>
        <?php } ?>
    </div>
<?php }?>
<?php }?><?php }} ?>
