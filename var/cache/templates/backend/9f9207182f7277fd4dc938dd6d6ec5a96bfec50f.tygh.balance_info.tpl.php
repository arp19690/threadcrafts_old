<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:51:46
         compiled from "/var/www/html/design/backend/templates/views/companies/components/balance_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167237044855c4e92a4a9780-46480799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f9207182f7277fd4dc938dd6d6ec5a96bfec50f' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_info.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167237044855c4e92a4a9780-46480799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4e92a4d5350_33795424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4e92a4d5350_33795424')) {function content_55c4e92a4d5350_33795424($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('balance_carried_forward','sales_period_total','total_period_payout','total_amount_due','total_unpaid_balance'));
?>
<div class="statistic-list pull-right clearfix" id="balance_total">
    <table>
        <tr>
            <td><?php echo $_smarty_tpl->__("balance_carried_forward");?>
:</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['total']->value['BCF']>0) {?>text-error<?php } else { ?>text-success<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['BCF']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("sales_period_total");?>
:</td>
            <td class="text-success"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['NO']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_period_payout");?>
:</td>
            <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['TPP']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_amount_due");?>
:</td>
            <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['LPM']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_unpaid_balance");?>
:</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['total']->value['TOB']>0) {?>text-error<?php } else { ?>text-success<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['TOB']), 0);?>
</td>
        </tr>
    </table>
<!--balance_total--></div><?php }} ?>
