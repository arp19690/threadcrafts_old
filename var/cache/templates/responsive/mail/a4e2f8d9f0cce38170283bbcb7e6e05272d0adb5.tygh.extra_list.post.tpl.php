<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 12:45:41
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/addons/gift_certificates/hooks/orders/extra_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179728171455b1e61d91bcb8-79476107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e2f8d9f0cce38170283bbcb7e6e05272d0adb5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/mail/templates/addons/gift_certificates/hooks/orders/extra_list.post.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179728171455b1e61d91bcb8-79476107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'gift' => 0,
    'settings' => 0,
    'addons' => 0,
    '_colspan' => 0,
    'oi' => 0,
    'gift_key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1e61db76265_91682557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1e61db76265_91682557')) {function content_55b1e61db76265_91682557($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','code','free','free','free_products','product','quantity','unit_price','discount','tax','subtotal','deleted_product','sku','gift_certificate','code','free','free','free_products','product','quantity','unit_price','discount','tax','subtotal','deleted_product','sku'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>

<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;">
        <?php echo $_smarty_tpl->__("gift_certificate");?>

        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
        <p><?php echo $_smarty_tpl->__("code");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
    </td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;">&nbsp;1</td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->__("free");?>
<?php }?></td>    
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>

    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><b><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->__("free");?>
<?php }?></b>&nbsp;</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=='Y') {?>
<tr>
    <?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable("4", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?><?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?><?php }?>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;" colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
        <p><?php echo $_smarty_tpl->__("free_products");?>
 (<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
):</p>

        <table width="100%" cellpadding="0" cellspacing="1" style="background-color: #dddddd;">
        <tr>
            <th width="70%" style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("discount");?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("tax");?>
</th>
            <?php }?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["sub_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["sub_key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']&&$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
        <tr>
            <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product'])===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), ENT_QUOTES, 'UTF-8');?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0);?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0);?>
<?php } else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if ($_smarty_tpl->tpl_vars['oi']->value['tax_value']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0);?>
<?php } else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);?>
&nbsp;</td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
    </td>
</tr>
<?php }?>
<?php } ?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/orders/extra_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/orders/extra_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>

<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;">
        <?php echo $_smarty_tpl->__("gift_certificate");?>

        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
        <p><?php echo $_smarty_tpl->__("code");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
    </td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;">&nbsp;1</td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->__("free");?>
<?php }?></td>    
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>

    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><b><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->__("free");?>
<?php }?></b>&nbsp;</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=='Y') {?>
<tr>
    <?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable("4", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?><?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?><?php }?>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;" colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
        <p><?php echo $_smarty_tpl->__("free_products");?>
 (<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
):</p>

        <table width="100%" cellpadding="0" cellspacing="1" style="background-color: #dddddd;">
        <tr>
            <th width="70%" style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("discount");?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("tax");?>
</th>
            <?php }?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["sub_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["sub_key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']&&$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
        <tr>
            <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product'])===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), ENT_QUOTES, 'UTF-8');?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0);?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0);?>
<?php } else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if ($_smarty_tpl->tpl_vars['oi']->value['tax_value']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0);?>
<?php } else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);?>
&nbsp;</td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
    </td>
</tr>
<?php }?>
<?php } ?>
<?php }?><?php }?><?php }} ?>
