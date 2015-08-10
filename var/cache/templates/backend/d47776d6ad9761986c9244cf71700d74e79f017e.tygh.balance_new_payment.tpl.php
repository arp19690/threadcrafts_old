<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:51:46
         compiled from "/var/www/html/design/backend/templates/views/companies/components/balance_new_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39241124155c4e92a426c90-59104540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd47776d6ad9761986c9244cf71700d74e79f017e' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_new_payment.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39241124155c4e92a426c90-59104540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'settings' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4e92a474938_73481934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4e92a474938_73481934')) {function content_55c4e92a474938_73481934($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_period','payment_amount','payment_method','comments','notify_vendor'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="shipments_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment[vendor]",'id'=>"p_vendor",'selected'=>(($tmp = @$_REQUEST['vendor'])===null||$tmp==='' ? '' : $tmp)), 0);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%m/%d/%Y", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%d/%m/%Y", null, 0);?>
<?php }?>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("sales_period");?>
</label>
    <div class="controls">
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_name'=>"payment[start_date]",'date_val'=>$_smarty_tpl->tpl_vars['total']->value['new_period_date'],'date_id'=>"start_date"), 0);?>
 - 
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_name'=>"payment[end_date]",'date_val'=>@constant('TIME'),'date_id'=>"end_date"), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="cm-required control-label" for="payment_amount"><?php echo $_smarty_tpl->__("payment_amount");?>
</label>
    <div class="controls">
        <input type="text" name="payment[amount]" id="payment_amount" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="payment_method"><?php echo $_smarty_tpl->__("payment_method");?>
</label>
    <div class="controls">
        <input type="text" name="payment[payment_method]" id="payment_method" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="payment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

<div class="control-group">
<label for="" class="control-label">&nbsp;</label>
<div class="controls cm-toggle-button">
    <div class="select-field notify-customer">
        <label class="checkbox" for="notify_user"><input type="checkbox" name="payment[notify_user]" id="notify_user" value="Y"  />
        <?php echo $_smarty_tpl->__("notify_vendor");?>
</label>
    </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.payouts_add]",'cancel_action'=>"close"), 0);?>

</div>

</form><?php }} ?>
