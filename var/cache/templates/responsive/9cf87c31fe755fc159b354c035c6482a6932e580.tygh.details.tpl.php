<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:28:45
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205828807955efbc85451ce3-22309708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf87c31fe755fc159b354c035c6482a6932e580' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/details.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205828807955efbc85451ce3-22309708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'return_info' => 0,
    'ri' => 0,
    'reason_id' => 0,
    'reasons' => 0,
    'settings' => 0,
    'action_id' => 0,
    'actions' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efbc85622581_37370797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efbc85622581_37370797')) {function content_55efbc85622581_37370797($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('print_slip','related_order','product','price','quantity','reason','free','text_no_products_found','product','price','quantity','reason','free','text_no_products_found','comments','return_info','status','action','print_slip','related_order','product','price','quantity','reason','free','text_no_products_found','product','price','quantity','reason','free','text_no_products_found','comments','return_info','status','action'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-rma-detail clearfix">
    <div class="ty-rma-detail__actions clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("print_slip"),'but_href'=>"rma.print_slip?return_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['return_id']),'but_role'=>"text",'but_meta'=>"cm-new-window ty-btn__text",'but_icon'=>"ty-rma-detail__actions-icon ty-icon-print"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("related_order"),'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['order_id']),'but_role'=>"text",'but_meta'=>"ty-btn__text ",'but_icon'=>"ty-rma-detail__actions-icon ty-icon-arrow-left"), 0);?>

    </div>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['return_info']->value) {?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="return_info_form" />
<input type="hidden" name="return_id" value="<?php echo htmlspecialchars($_REQUEST['return_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="total_amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['total_amount'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_status" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['status'], ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <div id="content_return_products">
        <table class="ty-table ty-rma-detail__table">
            <thead>
            <tr>
                <th class="ty-rma-detail__table-products"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th class="ty-rma-detail__table-price ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-rma-detail__table-qty"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <th class="ty-rma-detail__table-reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td><?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>
<?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>

                <?php }?></td>
            <td class="ty-right ty-nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="ty-nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars["ri"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products_found");?>
</p></td>
        </tr>
        <?php } ?>
        </table>
    </div>



    <div id="content_declined_products" class="hidden">
        <table class="ty-table ty-rma-detail__table">
        <thead>
        <tr>
                <th class="ty-rma-detail__table-products"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th class="ty-rma-detail__table-price ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-rma-detail__table-qty"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <th class="ty-rma-detail__table-reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_DECLINED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td>
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>
<?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>

                <?php }?></td>
            <td class="ty-right ty-nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="ty-nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars["ri"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products_found");?>
</p></td>
        </tr>
        <?php } ?>
        </table>
    </div>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>

<?php if ($_smarty_tpl->tpl_vars['return_info']->value['comment']) {?>
    <div class="ty-rma-comments">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments")), 0);?>

        <div class="ty-rma-comments__body">
            <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <?php echo nl2br($_smarty_tpl->tpl_vars['return_info']->value['comment']);?>

        </div>
    </div>
<?php }?>
</form>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("return_info");?>
&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['return_id'], ENT_QUOTES, 'UTF-8');?>

    <em class="ty-date">
        (<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
)
    </em>
    <div class="ty-status">
        <span class="ty-rma-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['return_info']->value['status'],'display'=>"view",'name'=>"update_return[status]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>
</span>
        <span class="ty-rma-status"><?php echo $_smarty_tpl->__("action");?>
: <?php $_smarty_tpl->tpl_vars["action_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['return_info']->value['action'], null, 0);?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['action_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
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
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/rma/details.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/rma/details.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-rma-detail clearfix">
    <div class="ty-rma-detail__actions clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("print_slip"),'but_href'=>"rma.print_slip?return_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['return_id']),'but_role'=>"text",'but_meta'=>"cm-new-window ty-btn__text",'but_icon'=>"ty-rma-detail__actions-icon ty-icon-print"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("related_order"),'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['order_id']),'but_role'=>"text",'but_meta'=>"ty-btn__text ",'but_icon'=>"ty-rma-detail__actions-icon ty-icon-arrow-left"), 0);?>

    </div>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['return_info']->value) {?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="return_info_form" />
<input type="hidden" name="return_id" value="<?php echo htmlspecialchars($_REQUEST['return_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="total_amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['total_amount'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_status" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['status'], ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <div id="content_return_products">
        <table class="ty-table ty-rma-detail__table">
            <thead>
            <tr>
                <th class="ty-rma-detail__table-products"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th class="ty-rma-detail__table-price ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-rma-detail__table-qty"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <th class="ty-rma-detail__table-reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td><?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>
<?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>

                <?php }?></td>
            <td class="ty-right ty-nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="ty-nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars["ri"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products_found");?>
</p></td>
        </tr>
        <?php } ?>
        </table>
    </div>



    <div id="content_declined_products" class="hidden">
        <table class="ty-table ty-rma-detail__table">
        <thead>
        <tr>
                <th class="ty-rma-detail__table-products"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th class="ty-rma-detail__table-price ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-rma-detail__table-qty"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <th class="ty-rma-detail__table-reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_DECLINED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td>
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['ri']->value['product'];?>
<?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>

                <?php }?></td>
            <td class="ty-right ty-nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);?>
<?php }?></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="ty-nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars["ri"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products_found");?>
</p></td>
        </tr>
        <?php } ?>
        </table>
    </div>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>

<?php if ($_smarty_tpl->tpl_vars['return_info']->value['comment']) {?>
    <div class="ty-rma-comments">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments")), 0);?>

        <div class="ty-rma-comments__body">
            <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <?php echo nl2br($_smarty_tpl->tpl_vars['return_info']->value['comment']);?>

        </div>
    </div>
<?php }?>
</form>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("return_info");?>
&nbsp;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['return_id'], ENT_QUOTES, 'UTF-8');?>

    <em class="ty-date">
        (<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
)
    </em>
    <div class="ty-status">
        <span class="ty-rma-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['return_info']->value['status'],'display'=>"view",'name'=>"update_return[status]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>
</span>
        <span class="ty-rma-status"><?php echo $_smarty_tpl->__("action");?>
: <?php $_smarty_tpl->tpl_vars["action_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['return_info']->value['action'], null, 0);?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['action_id']->value]['property'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>
