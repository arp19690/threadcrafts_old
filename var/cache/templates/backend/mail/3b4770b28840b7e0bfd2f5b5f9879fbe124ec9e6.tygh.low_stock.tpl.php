<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:53:14
         compiled from "/var/www/html/design/backend/mail/templates/orders/low_stock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118439081355efb4329578f6-91843845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4770b28840b7e0bfd2f5b5f9879fbe124ec9e6' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/orders/low_stock.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '118439081355efb4329578f6-91843845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_id' => 0,
    'product_code' => 0,
    'new_amount' => 0,
    'product_options' => 0,
    'o' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb4329c49e2_96012526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb4329c49e2_96012526')) {function content_55efb4329c49e2_96012526($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('product','id','sku','amount','product_options','product','id','sku','amount','product_options'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table>
<tr>
    <td><?php echo $_smarty_tpl->__("product");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("id");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("sku");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_code']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("amount");?>
:</td>
    <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_amount']->value, ENT_QUOTES, 'UTF-8');?>
</b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
<tr>
    <td colspan="2"><?php echo $_smarty_tpl->__("product_options");?>
:<br><hr></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
<tr>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php } ?>
<?php }?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="orders/low_stock.tpl" id="<?php echo smarty_function_set_id(array('name'=>"orders/low_stock.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table>
<tr>
    <td><?php echo $_smarty_tpl->__("product");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("id");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("sku");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_code']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("amount");?>
:</td>
    <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_amount']->value, ENT_QUOTES, 'UTF-8');?>
</b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
<tr>
    <td colspan="2"><?php echo $_smarty_tpl->__("product_options");?>
:<br><hr></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
<tr>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php } ?>
<?php }?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
