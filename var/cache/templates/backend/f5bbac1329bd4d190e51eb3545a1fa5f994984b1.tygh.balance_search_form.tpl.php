<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:51:46
         compiled from "/var/www/html/design/backend/templates/views/companies/components/balance_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14186174055c4e92a50e348-44649372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bbac1329bd4d190e51eb3545a1fa5f994984b1' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_search_form.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14186174055c4e92a50e348-44649372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'runtime' => 0,
    'search' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4e92a5931a6_63244975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4e92a5931a6_63244975')) {function content_55c4e92a5931a6_63244975($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','vendor','all_vendors','transaction_type','both','income','expenditure','sales_period','payment'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="balance_search_form" method="get" class="cm-disable-empty">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="sidebar-field ajax-select">
    <label><?php echo $_smarty_tpl->__("vendor");?>
</label>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <input type="hidden" name="vendor" id="search_hidden_vendor" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['vendor'])===null||$tmp==='' ? 'all' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?show_all=Y",'text'=>(($tmp = @fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']))===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") : $tmp),'result_elm'=>"search_hidden_vendor",'id'=>"company_search"), 0);?>

        <?php } else { ?>
        <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
</div>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("transaction_type");?>
</label>
    <select name="transaction_type">
        <option value="both" <?php if ($_smarty_tpl->tpl_vars['search']->value['transaction_type']=="both") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("both");?>
</option>
        <option value="income" <?php if ($_smarty_tpl->tpl_vars['search']->value['transaction_type']=="income") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("income");?>
</option>
        <option value="expenditure" <?php if ($_smarty_tpl->tpl_vars['search']->value['transaction_type']=="expenditure") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("expenditure");?>
</option>
    </select>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("sales_period");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"balance_search_form"), 0);?>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("payment");?>
</label>
        <div class="controls">
            <input type="text" name="payment" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['payment'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"balance"), 0);?>


</form>
</div>
<hr><?php }} ?>
