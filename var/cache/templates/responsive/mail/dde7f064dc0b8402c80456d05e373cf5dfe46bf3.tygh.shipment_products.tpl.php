<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:58:56
         compiled from "/var/www/html/design/themes/responsive/mail/templates/shipments/shipment_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211253026855efb58866e2f3-86813043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde7f064dc0b8402c80456d05e373cf5dfe46bf3' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/shipments/shipment_products.tpl',
      1 => 1439189911,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '211253026855efb58866e2f3-86813043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'shipment' => 0,
    'settings' => 0,
    'amount' => 0,
    'hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb5886e1713_65661252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb5886e1713_65661252')) {function content_55efb5886e1713_65661252($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('dear','products_were_sent','order_id','shipping_method','shipment_date','carrier','tracking_number','products','comments'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
,<br /><br />

<?php echo $_smarty_tpl->__("products_were_sent");?>
<br /><br />

<strong><?php echo $_smarty_tpl->__("order_id");?>
</strong>:&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
<br />
<strong><?php echo $_smarty_tpl->__("shipping_method");?>
</strong>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
<br />
<strong><?php echo $_smarty_tpl->__("shipment_date");?>
</strong>:&nbsp;<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
<br />
<?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/carriers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('carrier'=>$_smarty_tpl->tpl_vars['shipment']->value['carrier'],'tracking_number'=>$_smarty_tpl->tpl_vars['shipment']->value['tracking_number']), 0);?>

    <strong><?php echo $_smarty_tpl->__("carrier");?>
</strong>:&nbsp;<?php echo Smarty::$_smarty_vars['capture']['carrier_name'];?>
<br />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?>
    <strong><?php echo $_smarty_tpl->__("tracking_number");?>
</strong>:&nbsp;
    <?php if (Smarty::$_smarty_vars['capture']['carrier_url']) {?>
        <a <?php if (strpos(Smarty::$_smarty_vars['capture']['carrier_url'],"://")) {?>target="_blank"<?php }?> href="<?php echo Smarty::$_smarty_vars['capture']['carrier_url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>

    <?php }?>
    <br /><br />
<?php }?>

<?php echo Smarty::$_smarty_vars['capture']['carrier_info'];?>


<strong><?php echo $_smarty_tpl->__("products");?>
:</strong>
<p>
<?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["hash"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["hash"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['amount']->value>0) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;x&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['hash']->value]['product'], ENT_QUOTES, 'UTF-8');?>
<br />
        <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['hash']->value]['product_options']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['hash']->value]['product_options']), 0);?>
<br />
        <?php }?>
        <br />
    <?php }?>
<?php } ?>
</p>

<?php if ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
<br /><br />
<strong><?php echo $_smarty_tpl->__("comments");?>
</strong>:
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'UTF-8');?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
