<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 15:00:11
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/views/gift_certificates/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151467952855c47aa3a2ab88-87491551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3baff481a96ef9f60eea4deacf9f2f63bcd10c7' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/views/gift_certificates/manage.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '151467952855c47aa3a2ab88-87491551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'gift_certificates' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'gift' => 0,
    'settings' => 0,
    'gift_status_descr' => 0,
    'gift_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c47aa3b800b5_38229222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c47aa3b800b5_38229222')) {function content_55c47aa3b800b5_38229222($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('code','gift_cert_from','gift_cert_to','type','date','current_amount','status','mail','email','edit','delete','no_data','add_gift_certificate','gift_certificates'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="gift_cert_list_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"exicon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"exicon-dummy\"></i>", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['gift_certificates']->value) {?>
<table class="table table-middle sortable">
<thead>
    <tr>
        <th class="center" width="1%">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="15%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="gift_cert_code") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=gift_cert_code&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("code");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="gift_cert_code") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="10%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sender") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sender&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_from");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sender") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="15%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="recipient") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=recipient&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_to");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="recipient") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="10%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="send_via") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=send_via&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("type");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="send_via") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="15%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="15%"><?php echo $_smarty_tpl->__("current_amount");?>
</th>
        <th width="5%">&nbsp;</th>
        <th width="10%" class="right"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
    </tr>
</thead>
<?php $_smarty_tpl->tpl_vars["gift_status_descr"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_GIFT_CERTIFICATE')), null, 0);?>
<tbody>
<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['gift']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <td class="left" width="1%">
        <input type="checkbox" name="gift_cert_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" /></td>
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="nowrap row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['gift']->value), 0);?>

    </td>
    <td class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td class="row-status"><span class="nowrap"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="P") {?><?php echo $_smarty_tpl->__("mail");?>
<?php } else { ?><?php echo $_smarty_tpl->__("email");?>
</span><br>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['email'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></td>
    <td class="row-status"><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['gift']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td class="row-status"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['debit']), 0);?>
</td>
    <td class="nowrap">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right nowrap">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'],'status'=>$_smarty_tpl->tpl_vars['gift']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['gift_status_descr']->value,'update_controller'=>"gift_certificates",'notify'=>true,'statuses'=>$_smarty_tpl->tpl_vars['gift_statuses']->value,'popup_additional_class'=>"dropleft"), 0);?>

    </td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"gift_certificates.manage",'view_type'=>"gift_certs"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['gift_certificates']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[gift_certificates.m_delete]",'form'=>"gift_cert_list_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"gift_certificates.add",'prefix'=>"top",'hide_tools'=>true,'title'=>__("add_gift_certificate"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("gift_certificates"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
