<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:46:10
         compiled from "/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/products_approval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36595910955d4738a4ace99-37033475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be37a57a37304d2976b3c79aeb2e5c35b6ae3691' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/products_approval.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36595910955d4738a4ace99-37033475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'products' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4738a5f7778_45328717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4738a5f7778_45328717')) {function content_55d4738a5f7778_45328717($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('name','vendor','status','approved','pending','disapproved','approve','disapprove','disapprove','approve','no_data','proceed','approve_selected','approve_selected','proceed','disapprove_selected','disapprove_selected','approve_selected','disapprove_selected','product_approval'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"premoderation.products_approval"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_products_form">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"exicon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"exicon-dummy\"></i>", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<table class="table table-middle">
<thead>
    <tr>
        <th class="left" width="5%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="50%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="product") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="30%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="company") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=approval&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="approval") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
        <th width="5%">&nbsp;</th>
    </tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
<tr>
    <td class="left">
        <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td>
        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
        <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['status']=="N") {?>class="manage-root-item-disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    </td>
    <td>
        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_name'], ENT_QUOTES, 'UTF-8');?>

    <td>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="Y") {?><?php echo $_smarty_tpl->__("approved");?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['approved']=="P") {?><?php echo $_smarty_tpl->__("pending");?>
<?php } else { ?><?php echo $_smarty_tpl->__("disapproved");?>
<?php }?>
        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][current_status]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['approved'], ENT_QUOTES, 'UTF-8');?>
" />
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("approve", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"approval_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'status'=>"Y",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("approve"),'but_name'=>"dispatch[premoderation.products_approval.approve.".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'cancel_action'=>"close"), 0);?>

            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php $_smarty_tpl->_capture_stack[0][] = array("disapprove", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"approval_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'status'=>"N",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("disapprove"),'but_name'=>"dispatch[premoderation.products_approval.disapprove.".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'cancel_action'=>"close"), 0);?>

            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="Y"||$_smarty_tpl->tpl_vars['product']->value['approved']=="P") {?>
            <?php ob_start();?><?php echo $_smarty_tpl->__("disapprove");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"disapprove_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_tmp1." \"".((string)$_smarty_tpl->tpl_vars['product']->value['product'])."\"",'content'=>Smarty::$_smarty_vars['capture']['disapprove'],'link_text'=>" ",'act'=>"edit",'icon'=>"icon-thumbs-down"), 0);?>

        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['product']->value['approved']=="P"||$_smarty_tpl->tpl_vars['product']->value['approved']=="N") {?>
            <?php ob_start();?><?php echo $_smarty_tpl->__("approve");?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"approve_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_tmp2." \"".((string)$_smarty_tpl->tpl_vars['product']->value['product'])."\"",'content'=>Smarty::$_smarty_vars['capture']['approve'],'link_text'=>" ",'act'=>"edit",'icon'=>"icon-thumbs-up"), 0);?>

        <?php }?>
        
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


<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("approve_selected", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"approved"), 0);?>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("proceed"),'but_name'=>"dispatch[premoderation.m_approve]",'cancel_action'=>"close",'but_meta'=>"cm-process-items"), 0);?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"approve_selected",'text'=>__("approve_selected"),'content'=>Smarty::$_smarty_vars['capture']['approve_selected'],'link_text'=>__("approve_selected")), 0);?>
    

    <?php $_smarty_tpl->_capture_stack[0][] = array("disapprove_selected", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"declined"), 0);?>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("proceed"),'but_name'=>"dispatch[premoderation.m_decline]",'cancel_action'=>"close",'but_meta'=>"cm-process-items"), 0);?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"disapprove_selected",'text'=>__("disapprove_selected"),'content'=>Smarty::$_smarty_vars['capture']['disapprove_selected'],'link_text'=>__("disapprove_selected")), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_id'=>"content_approve_selected",'but_text'=>__("approve_selected"),'but_meta'=>"cm-process-items cm-dialog-opener",'but_target_form'=>"manage_products_form"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_id'=>"content_disapprove_selected",'but_text'=>__("disapprove_selected"),'but_meta'=>"cm-process-items cm-dialog-opener",'but_target_form'=>"manage_products_form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("product_approval"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>
<?php }} ?>
