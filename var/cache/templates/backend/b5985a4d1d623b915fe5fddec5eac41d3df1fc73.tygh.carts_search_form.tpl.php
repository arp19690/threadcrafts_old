<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:45:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/cart/components/carts_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17895604465571b6214c90a8-95426423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5985a4d1d623b915fe5fddec5eac41d3df1fc73' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/cart/components/carts_search_form.tpl',
      1 => 1413374304,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17895604465571b6214c90a8-95426423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'check_all' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b621552c80_09937363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b621552c80_09937363')) {function content_5571b621552c80_09937363($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','customer','email','total','content','cart','with_contact_information','online_only','tt_views_cart_components_carts_search_form_online_only','user_type','any','usergroup_registered','guest','products_in_cart'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="carts_search_form" method="get">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<div class="sidebar-field">
    <label for="cname"><?php echo $_smarty_tpl->__("customer");?>
</label>
    <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="total_from"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input class="input-small" type="text" name="total_from" id="total_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3"/>&nbsp;-&nbsp;<input class="input-small" type="text" name="total_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<div class="group">
    <div class="control-group">
        <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"carts_search_form"), 0);?>

    </div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("content");?>
</label>
            <div class="controls checkbox-list">
                <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']!="Y"&&$_smarty_tpl->tpl_vars['search']->value['product_type_w']!="Y") {?>
                    <?php $_smarty_tpl->tpl_vars["check_all"] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <label for="cb_product_type_c">
                    <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;" disabled="disabled" />
                    <?php echo $_smarty_tpl->__("cart");?>

                </label>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="with_info_only"><?php echo $_smarty_tpl->__("with_contact_information");?>
</label>
            <div class="controls">
                <input type="checkbox" id="with_info_only" name="with_info_only" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['with_info_only']) {?>checked="checked"<?php }?> />
            </div>
        </div>

	<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <div class="control-group">
            <label class="control-label" for="online_only"><?php echo $_smarty_tpl->__("online_only");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_cart_components_carts_search_form_online_only")), 0);?>
</label>
            <div class="controls">
                <input type="checkbox" id="online_only" name="online_only" value="Y" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['search']->value['online_only']) {?>checked="checked"<?php }?> />
            </div>
        </div>
	<?php }?>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="users_type"><?php echo $_smarty_tpl->__("user_type");?>
</label>
            <div class="controls">
                <select name="users_type" id="users_type">
                    <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                    <option value="R" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type']=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("usergroup_registered");?>
</option>
                    <option value="G" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type']=="G") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("guest");?>
</option>
                </select>
            </div>
        </div>
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    </div>
</div>

<div class="group">
    <div class="control-group">
        <label class='control-label'><?php echo $_smarty_tpl->__("products_in_cart");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('placement'=>"right"), 0);?>

        </div>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>"cart.cart_list",'view_type'=>"carts"), 0);?>


</form>
</div>
<hr>
<?php }} ?>
