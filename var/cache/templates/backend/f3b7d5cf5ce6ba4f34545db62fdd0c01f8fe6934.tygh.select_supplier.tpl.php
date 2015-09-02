<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 11:14:26
         compiled from "/var/www/html/design/backend/templates/addons/suppliers/views/suppliers/components/select_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86750143755e68cbac22521-61299495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b7d5cf5ce6ba4f34545db62fdd0c01f8fe6934' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/suppliers/views/suppliers/components/select_supplier.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86750143755e68cbac22521-61299495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e68cbac53c09_98826444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e68cbac53c09_98826444')) {function content_55e68cbac53c09_98826444($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search_by_supplier'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>

<div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "control-group" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['supplier_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <label class="control-label"><?php echo $_smarty_tpl->__("search_by_supplier");?>
</label>
    <div class="controls">
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"suppliers.get_suppliers_list?show_all=Y&search=Y",'text'=>fn_get_supplier_name($_smarty_tpl->tpl_vars['search']->value['supplier_id']),'result_elm'=>$_smarty_tpl->tpl_vars['id']->value,'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector"), 0);?>

    </div>
</div><?php }} ?>
