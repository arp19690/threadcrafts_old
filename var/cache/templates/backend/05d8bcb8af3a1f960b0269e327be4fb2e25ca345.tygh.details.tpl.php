<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 12:49:30
         compiled from "/var/www/html/design/backend/templates/views/shipments/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4453811355ee8c02056260-27488469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d8bcb8af3a1f960b0269e327be4fb2e25ca345' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/shipments/details.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4453811355ee8c02056260-27488469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
    'shipment' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ee8c0212c3e5_55430353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee8c0212c3e5_55430353')) {function content_55ee8c0212c3e5_55430353($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('product','quantity','sku','comments','shipment_info','shipment','on','by','order','print_packing_slip','print_pdf_packing_slip','delete','shipment_details'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_general">
    
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0);?>

    

    <table width="100%" class="table table-middle">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("product");?>
</th>
            <th width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['oi']->value['amount']>0) {?>
    <tr>
        <td>
            <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['oi']->value['product'];?>
<?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?></p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
        </td>
        <td class="center">
            &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
<br />
        </td>
    </tr>
    <?php }?>
    <?php } ?>
    </table>
    <div class="row-fluid">
        <h3><label for="notes"><?php echo $_smarty_tpl->__("comments");?>
:</label></h3>
        <textarea class="input-xxlarge" cols="40" rows="5" readonly="readonly"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    </div>
    
<!--content_general--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("shipment_info");?>
</h6>
        <?php echo $_smarty_tpl->getSubTemplate ("common/carriers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('capture'=>true,'carrier'=>$_smarty_tpl->tpl_vars['shipment']->value['carrier']), 0);?>


        <p><?php echo $_smarty_tpl->__("shipment");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>

        <?php echo $_smarty_tpl->__("on");?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
 <br />
        <?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <br /><?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');?>
)<?php }?><?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?> (<?php echo trim(Smarty::$_smarty_vars['capture']['carrier_name']);?>
)<?php }?></p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:customer_shot_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:customer_shot_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:customer_shot_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php ob_start();?><?php echo $_smarty_tpl->__("order");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1." #".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("print_packing_slip"),'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id']),'class'=>"cm-new-window"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("print_pdf_packing_slip"),'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])."&format=pdf",'class'=>"cm-new-window"));?>
</li>
            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"cm-confirm",'href'=>"shipments.delete?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("shipment_details"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
