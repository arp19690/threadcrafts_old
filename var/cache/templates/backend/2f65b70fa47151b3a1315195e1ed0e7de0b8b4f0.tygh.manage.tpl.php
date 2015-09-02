<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:06:47
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/views/suppliers/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131340848555e68aef69eaa8-85965484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f65b70fa47151b3a1315195e1ed0e7de0b8b4f0' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/views/suppliers/manage.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '131340848555e68aef69eaa8-85965484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'suppliers' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'supplier' => 0,
    'allow_save' => 0,
    'auth' => 0,
    'no_hide_input' => 0,
    'settings' => 0,
    'link_text' => 0,
    'return_current_url' => 0,
    'popup_additional_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68aef7f4148_52530937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68aef7f4148_52530937')) {function content_55e68aef7f4148_52530937($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('id','name','email','registered','status','view','view_supplier_products','delete','notify_supplier','no_data','add_supplier','suppliers'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="suppliers_list_form" id="suppliers_list_form">
        <input type="hidden" name="fake" value="1" />

        <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"exicon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"exicon-dummy\"></i>", null, 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
        <table width="100%" class="table table-middle">
            <thead>
                <tr>
                    <th width="1%" class="left">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </th>
                    <th width="5%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="id") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
                    <th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
                    <th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("email");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="email") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
                    <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("registered");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <th width="15%" class="">&nbsp;</th>
                    <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?><?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>
<?php }?></a></th>
                </tr>
            </thead>

            <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>

                <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['supplier']->value,"suppliers"), null, 0);?>
                <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value&&!defined("RESTRICTED_ADMIN")&&$_smarty_tpl->tpl_vars['auth']->value['is_root']!='Y') {?>
                    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["popup_additional_class"] = new Smarty_variable('', null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['allow_save']->value||defined("RESTRICTED_ADMIN")||$_smarty_tpl->tpl_vars['auth']->value['is_root']=='Y') {?>
                    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable("edit", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["popup_additional_class"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["popup_additional_class"] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable("edit", null, 0);?>
                <?php }?>

                <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['supplier']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <td class="center <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="checkbox" name="supplier_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
                    </td>
                    <td><a class="row-status" href="<?php echo htmlspecialchars(fn_url("suppliers.update?supplier_id=".((string)$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['supplier_id'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                    <td class="row-status"><?php if ($_smarty_tpl->tpl_vars['supplier']->value['name']) {?><a href="<?php echo htmlspecialchars(fn_url("suppliers.update?supplier_id=".((string)$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>-<?php }?><?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['supplier']->value), 0);?>
</td>
                    <td width="25%"><a class="row-status" href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['supplier']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                    <td class="row-status"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['supplier']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"suppliers:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"suppliers:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"suppliers:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <td class="center">
                        <div class="hidden-tools">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("view_supplier_products"),'href'=>"products.manage?supplier_id=".((string)$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'])));?>
</li>
                                <li class="divider"></li>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__($_smarty_tpl->tpl_vars['link_text']->value),'href'=>"suppliers.update?supplier_id=".((string)$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'])));?>
</li>
                                <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"suppliers.delete?supplier_id=".((string)$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
</li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        </div>
                    </td>
                    <td class="right">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['supplier']->value['supplier_id'],'status'=>$_smarty_tpl->tpl_vars['supplier']->value['status'],'hidden'=>'','update_controller'=>"suppliers",'notify'=>true,'notify_text'=>__("notify_supplier"),'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['popup_additional_class']->value)." dropleft"), 0);?>

                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[suppliers.m_delete]",'form'=>"suppliers_list_form"));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"add",'title'=>__("add_supplier"),'href'=>"suppliers.add"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"suppliers.manage",'view_type'=>"suppliers"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"suppliers.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("suppliers"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>
<?php }} ?>
