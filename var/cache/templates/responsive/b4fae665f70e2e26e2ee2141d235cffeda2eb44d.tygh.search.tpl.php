<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 19:50:30
         compiled from "/var/www/html/design/themes/responsive/templates/views/products/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57672925555eeeeae3411d2-84781124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4fae665f70e2e26e2ee2141d235cffeda2eb44d' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/products/search.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57672925555eeeeae3411d2-84781124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'search' => 0,
    '_collapse' => 0,
    'products' => 0,
    'category_data' => 0,
    'settings' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'product_columns' => 0,
    '_title' => 0,
    'title_extra' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eeeeae41dab4_26235697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eeeeae41dab4_26235697')) {function content_55eeeeae41dab4_26235697($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search_results','advanced_search','products_found','text_no_matching_products_found','search_results','advanced_search','products_found','text_no_matching_products_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("search_results"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("advanced_search"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.search",'collapse'=>$_smarty_tpl->tpl_vars['_collapse']->value), 0);?>


<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();?><?php echo $_smarty_tpl->__("products_found");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_no_matching_found")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

<?php }?>

<!--products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_mainbox_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div id="products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("search_results"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("advanced_search"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.search",'collapse'=>$_smarty_tpl->tpl_vars['_collapse']->value), 0);?>


<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();?><?php echo $_smarty_tpl->__("products_found");?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_no_matching_found")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

<?php }?>

<!--products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_mainbox_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>
