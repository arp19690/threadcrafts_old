<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:45:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14745779995571b6216a95a9-12027360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c3626a64c2e3aa276f630734ce4cca24a77443' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl',
      1 => 1413374302,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14745779995571b6216a95a9-12027360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'check_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b6216bb568_43538500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b6216bb568_43538500')) {function content_5571b6216bb568_43538500($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cart','wishlist'));
?>
<label for="cb_product_type_c"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;"/>
<?php echo $_smarty_tpl->__("cart");?>
</label>

<label for="cb_product_type_w"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_w']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_w" id="cb_product_type_w" onclick="if (!this.checked) document.getElementById('cb_product_type_c').checked = true;"  />
<?php echo $_smarty_tpl->__("wishlist");?>
</label><?php }} ?>
