<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 16:16:35
         compiled from "/var/www/html/design/themes/responsive/templates/views/companies/catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73348702355f00e0b3f7df3-65725465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1657cf6b3c5dcaf685f0b2b86c83701a84aff0f4' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/companies/catalog.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73348702355f00e0b3f7df3-65725465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'companies' => 0,
    'company' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'capture_name' => 0,
    'rating' => 0,
    'company_name' => 0,
    'company_descr' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f00e0b4c3022_73984919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f00e0b4c3022_73984919')) {function content_55f00e0b4c3022_73984919($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('all_vendors','no_items','all_vendors','no_items'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:catalog")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:catalog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("all_vendors"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>

<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['company']->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true), 0);?>

<div class="ty-companies">
    <div class="ty-companies__img">
        <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

        
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
    
    <div class="ty-companies__info">
        <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['company_name']->value];?>


        <div>
            <?php $_smarty_tpl->tpl_vars["company_descr"] = new Smarty_variable("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['company_descr']->value];?>

        </div>
    </div>
</div>
<?php } ?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:catalog"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/catalog.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/catalog.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:catalog")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:catalog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("all_vendors"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>

<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['company']->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true), 0);?>

<div class="ty-companies">
    <div class="ty-companies__img">
        <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

        
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
    
    <div class="ty-companies__info">
        <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['company_name']->value];?>


        <div>
            <?php $_smarty_tpl->tpl_vars["company_descr"] = new Smarty_variable("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['company_descr']->value];?>

        </div>
    </div>
</div>
<?php } ?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:catalog"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>
