<?php /* Smarty version Smarty-3.1.18, created on 2015-08-09 10:04:16
         compiled from "/var/www/html/design/themes/responsive/templates/views/orders/components/order_repay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166387432955c6d848ab0a63-67796076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a056d99c9dbcecc720ffa6b1909135d14cd3cfa6' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/orders/components/order_repay.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166387432955c6d848ab0a63-67796076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'order_payment_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c6d848b21f73_65990158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c6d848b21f73_65990158')) {function content_55c6d848b21f73_65990158($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('repay_order','repay_order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>

<?php if ($_REQUEST['payment_id']) {?>

<script type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
</script>

<?php }?>

<h3 class="ty-subheader" id="repay_order"><?php echo $_smarty_tpl->__("repay_order");?>
</h3>
<div class="ty-repay" id="elm_payments_list">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>(($tmp = @$_smarty_tpl->tpl_vars['order_payment_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order_info']->value['payment_id'] : $tmp),'order_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>

<!--elm_payments_list--></div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/order_repay.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/order_repay.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>

<?php if ($_REQUEST['payment_id']) {?>

<script type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
</script>

<?php }?>

<h3 class="ty-subheader" id="repay_order"><?php echo $_smarty_tpl->__("repay_order");?>
</h3>
<div class="ty-repay" id="elm_payments_list">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>(($tmp = @$_smarty_tpl->tpl_vars['order_payment_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order_info']->value['payment_id'] : $tmp),'order_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>

<!--elm_payments_list--></div>
<?php }?><?php }?><?php }} ?>
