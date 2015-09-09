<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:08:13
         compiled from "/var/www/html/design/themes/responsive/mail/templates/addons/rma/hooks/orders/ordered_products.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152405502155efb7b59a9e82-66075241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1ad34c7beae78b34be89a3c7afef08f55ccad6' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/addons/rma/hooks/orders/ordered_products.post.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152405502155efb7b59a9e82-66075241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb7b5a073b7_12901067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb7b5a073b7_12901067')) {function content_55efb7b5a073b7_12901067($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('sku','returned_product','amount','subtotal','free'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['returned_products']) {?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['products']) {?><p></p><?php }?>
    <table cellpadding="2" cellspacing="1" border="0" width="100%" bgcolor="#000000">
    <tr>
        <td width="10%" align="center" bgcolor="#dddddd"><b><?php echo $_smarty_tpl->__("sku");?>
</b></td>
        <td width="60%" bgcolor="#dddddd"><b><?php echo $_smarty_tpl->__("returned_product");?>
</b></td>
        <td width="10%" align="center" bgcolor="#dddddd"><b><?php echo $_smarty_tpl->__("amount");?>
</b></td>
        <td width="10%" align="center" bgcolor="#dddddd"><b><?php echo $_smarty_tpl->__("subtotal");?>
</b></td>
    </tr>    
    <?php  $_smarty_tpl->tpl_vars['oi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['returned_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oi']->key => $_smarty_tpl->tpl_vars['oi']->value) {
$_smarty_tpl->tpl_vars['oi']->_loop = true;
?>
    <tr>
        <td bgcolor="#ffffff"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
        <td bgcolor="#ffffff">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product'], ENT_QUOTES, 'UTF-8');?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?></td>
        <td bgcolor="#ffffff" align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td align="right" bgcolor="#ffffff"><b><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['subtotal']), 0);?>
<?php }?></b>&nbsp;</td>
    </tr>
    <?php } ?>
    </table>
<?php }?><?php }} ?>
