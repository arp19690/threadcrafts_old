<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:08:02
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/returns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9524458355efb7aaf00080-90236275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6418c2f2d4e69a87da170238425185d02eea8ce2' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/returns.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9524458355efb7aaf00080-90236275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'sort_sign' => 0,
    'return_requests' => 0,
    'request' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb7ab166be1_84138630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb7ab166be1_84138630')) {function content_55efb7ab166be1_84138630($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search_options','id','status','customer','date','order','id','quantity','no_return_requests_found','return_requests','search_options','id','status','customer','date','order','id','quantity','no_return_requests_found','return_requests'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-rma-return">
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rma/views/rma/components/rma_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rma_list_form">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<table class="ty-table ty-rma-return__table">
    <thead>
        <tr>
            <th style="width: 10%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=return_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="return_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 13%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 35%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("quantity");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["request"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["request"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["request"]->key => $_smarty_tpl->tpl_vars["request"]->value) {
$_smarty_tpl->tpl_vars["request"]->_loop = true;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td>
                <input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'display'=>"view",'name'=>"return_statuses[".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])."]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

            </td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="ty-center"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['total_amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["request"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_return_requests_found");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("return_requests");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/rma/returns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/rma/returns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-rma-return">
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rma/views/rma/components/rma_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rma_list_form">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<table class="ty-table ty-rma-return__table">
    <thead>
        <tr>
            <th style="width: 10%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=return_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="return_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 13%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 35%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("quantity");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["request"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["request"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["request"]->key => $_smarty_tpl->tpl_vars["request"]->value) {
$_smarty_tpl->tpl_vars["request"]->_loop = true;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td>
                <input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'display'=>"view",'name'=>"return_statuses[".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])."]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

            </td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="ty-center"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['total_amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["request"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_return_requests_found");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("return_requests");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>
