<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 21:44:47
         compiled from "/var/www/html/design/themes/responsive/templates/blocks/list_templates/compact_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183879571355ef0977c407c7-35281049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aedb0594aa44519dde25cbb53a91d4c29d8aa7d5' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/blocks/list_templates/compact_list.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '183879571355ef0977c407c7-35281049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'config' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'obj_id_prefix' => 0,
    'obj_id' => 0,
    'discount_label' => 0,
    'name' => 0,
    'show_sku' => 0,
    'sku' => 0,
    'old_price' => 0,
    'price' => 0,
    'show_add_to_cart' => 0,
    'product_options' => 0,
    'qty' => 0,
    'add_to_cart' => 0,
    'force_ajax' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ef0977d63c30_21400272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ef0977d63c30_21400272')) {function content_55ef0977d63c30_21400272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

    <form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="short_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

    <div class="ty-compact-list">

    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_compact_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-compact-list__item">
            <div class="ty-compact-list__content">

                <div class="ty-compact-list__image">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

                    </a>
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                </div>
                
                <div class="ty-compact-list__title">
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


                    <br/>
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <span class="sku"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</span>
                        <br/>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
 <?php }?><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                <div class="ty-compact-list__controls">

                    <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>

                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </div>
                <?php }?>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_compact_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
    </div>
    </form>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/compact_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/compact_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

    <form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="short_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

    <div class="ty-compact-list">

    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_compact_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-compact-list__item">
            <div class="ty-compact-list__content">

                <div class="ty-compact-list__image">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

                    </a>
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                </div>
                
                <div class="ty-compact-list__title">
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


                    <br/>
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <span class="sku"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</span>
                        <br/>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
 <?php }?><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                <div class="ty-compact-list__controls">

                    <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>

                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </div>
                <?php }?>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_compact_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
    </div>
    </form>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?><?php }?><?php }} ?>
