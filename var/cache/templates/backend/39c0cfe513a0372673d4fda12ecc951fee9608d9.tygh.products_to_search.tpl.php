<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:20:12
         compiled from "/var/www/html/design/backend/templates/common/products_to_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168311398155eed9845a9219-49106251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c0cfe513a0372673d4fda12ecc951fee9608d9' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/products_to_search.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '168311398155eed9845a9219-49106251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'product_ids' => 0,
    'views' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eed9845dc9e2_18566541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed9845dc9e2_18566541')) {function content_55eed9845dc9e2_18566541($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add','or_saved_search'));
?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['p_ids']) {?>
    <?php $_smarty_tpl->tpl_vars["product_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['search']->value['p_ids']), null, 0);?>
<?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"added_products",'but_text'=>__("add"),'item_ids'=>$_smarty_tpl->tpl_vars['product_ids']->value,'input_name'=>"p_ids",'type'=>"links",'no_container'=>true,'picker_view'=>true), 0);?>

    <?php $_smarty_tpl->tpl_vars["views"] = new Smarty_variable(fn_get_views("products"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
    <?php echo $_smarty_tpl->__("or_saved_search");?>
:&nbsp;
    <select name="product_view_id">
        <option value="0">--</option>
        <?php  $_smarty_tpl->tpl_vars["f"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["f"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['views']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["f"]->key => $_smarty_tpl->tpl_vars["f"]->value) {
$_smarty_tpl->tpl_vars["f"]->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_view_id']==$_smarty_tpl->tpl_vars['f']->value['view_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    <?php }?><?php }} ?>
