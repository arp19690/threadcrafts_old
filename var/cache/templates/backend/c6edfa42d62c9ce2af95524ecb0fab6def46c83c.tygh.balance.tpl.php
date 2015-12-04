<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:18:15
         compiled from "/var/www/html/design/backend/templates/views/companies/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192216672355f313df5e3624-08941452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6edfa42d62c9ce2af95524ecb0fab6def46c83c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/balance.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '192216672355f313df5e3624-08941452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'c_url' => 0,
    'payouts' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'payout' => 0,
    'settings' => 0,
    'hide_controls' => 0,
    'hide_extra_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f313df758b93_11228709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f313df758b93_11228709')) {function content_55f313df758b93_11228709($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('new_payout','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','vendor','sales_period','payment_amount','date','vendor_commission','payment','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','deleted','order','delete','comment','no_data','save','new_payout','add_payout','vendor_account_balance'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_controls"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"exicon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"exicon-dummy\"></i>", null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_new_payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('c_url'=>$_smarty_tpl->tpl_vars['c_url']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_payment",'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'text'=>__("new_payout"),'act'=>"hidden"), 0);?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="manage_payouts_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['payouts']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th class="left"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th>
        <span id="on_st" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class=" hand cm-combinations-visitors"><span class="exicon-expand"></span></span>
        <span id="off_st" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combinations-visitors"><span class="exicon-collapse"></span></span>
        <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_vendor&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sort_vendor") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
    <th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_period&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("sales_period");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sort_period") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
    <th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("payment_amount");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sort_amount") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
    <th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sort_date") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
    <th><?php echo $_smarty_tpl->__("vendor_commission");?>
</th>
    <th><?php echo $_smarty_tpl->__("payment");?>
</th>
    <th class="center" width="5%">&nbsp;
    </th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['payout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["payouts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['payout']->key => $_smarty_tpl->tpl_vars['payout']->value) {
$_smarty_tpl->tpl_vars['payout']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["payouts"]['iteration']++;
?>
<tr>
    <td class="left">
           <input type="checkbox" name="payout_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td>
        <span name="plus_minus" id="on_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-visitors"><span class="exicon-expand"></span></span>
        <span name="minus_plus" id="off_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-visitors"><span class="exicon-collapse"></span></span>
        <?php if ($_smarty_tpl->tpl_vars['payout']->value['company_id']) {?>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['payout']->value['company'])===null||$tmp==='' ? $_smarty_tpl->__("deleted") : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
    </td>
    <td>
        <?php if (!$_smarty_tpl->tpl_vars['payout']->value['date']) {?>
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['payout']->value['start_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
&nbsp;-&nbsp;<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['payout']->value['end_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            -
        <?php }?>
    </td>
    <td>
        <span class="<?php if ($_smarty_tpl->tpl_vars['payout']->value['payout_amount']<0) {?>text-error<?php } else { ?>text-success<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['payout_amount']), 0);?>
</span>
    </td>
    <td>
        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['payout']->value['payout_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['payout']->value['commission_type']=="A") {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['commission']), 0);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['commission'], ENT_QUOTES, 'UTF-8');?>
%<?php }?>
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['payout']->value['payment_method']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payment_method'], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['payout']->value['order_id']) {?><?php echo $_smarty_tpl->__("order");?>
: <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['payout']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>-<?php }?>
    </td>
    <td class="center nowrap">    
        <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"companies.payout_delete?payout_id=".((string)$_smarty_tpl->tpl_vars['payout']->value['payout_id'])."&redirect_url=".$_tmp1));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
        <?php }?>
    </td>
</tr>
<tr id="payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'UTF-8');?>
" class="row-more <?php if ($_smarty_tpl->tpl_vars['hide_extra_button']->value!="Y") {?>hidden<?php }?>">
    <td colspan="8" class="row-more-body top row-gray">
        <div class="control-group">
            <label class="control-label" for="payout_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comment");?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <p>
                <?php if ($_smarty_tpl->tpl_vars['payout']->value['comments']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>-<?php }?>
                </p>
            <?php } else { ?>
            <textarea class="span6" rows="4" cols="25" name="payout_comments[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
]" id="payout_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php }?>
            </div>
        </div>
    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value&&$_smarty_tpl->tpl_vars['payouts']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[companies.m_delete_payouts]",'form'=>"manage_payouts_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_name'=>"dispatch[companies.update_payout_comments]",'but_role'=>"submit-link",'but_target_form'=>"manage_payouts_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_payment",'text'=>__("new_payout"),'content'=>'','title'=>__("add_payout"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.balance",'view_type'=>"balance"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.balance"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("vendor_account_balance"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
