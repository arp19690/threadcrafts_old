<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 19:50:30
         compiled from "/var/www/html/design/themes/responsive/templates/addons/suppliers/hooks/products/search_query_input.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201850006455eeeeae6d3145-78267406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b5675789dd8aa00874f4a01c5ee36394bb9ff85' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/suppliers/hooks/products/search_query_input.post.tpl',
      1 => 1441172124,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201850006455eeeeae6d3145-78267406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eeeeae708f67_82460844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eeeeae708f67_82460844')) {function content_55eeeeae708f67_82460844($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search_by_supplier','search_by_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-control-group">
    <input type="hidden" name="supplier_id" id="supplier_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['supplier_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label'=>__("search_by_supplier"),'data_url'=>"suppliers.get_suppliers_list?show_all=Y&search=Y",'text'=>fn_get_supplier_name($_smarty_tpl->tpl_vars['search']->value['supplier_id']),'result_elm'=>"supplier_id",'id'=>"company_id_selector"), 0);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/suppliers/hooks/products/search_query_input.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/suppliers/hooks/products/search_query_input.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-control-group">
    <input type="hidden" name="supplier_id" id="supplier_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['supplier_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label'=>__("search_by_supplier"),'data_url'=>"suppliers.get_suppliers_list?show_all=Y&search=Y",'text'=>fn_get_supplier_name($_smarty_tpl->tpl_vars['search']->value['supplier_id']),'result_elm'=>"supplier_id",'id'=>"company_id_selector"), 0);?>

</div><?php }?><?php }} ?>
