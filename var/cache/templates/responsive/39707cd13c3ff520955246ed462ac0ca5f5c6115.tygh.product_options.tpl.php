<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:42:30
         compiled from "/var/www/html/design/themes/responsive/templates/views/products/components/product_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200981128555aa6cdea3c375-02951095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39707cd13c3ff520955246ed462ac0ca5f5c6115' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/products/components/product_options.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200981128555aa6cdea3c375-02951095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
    'details_page' => 0,
    'product' => 0,
    'param' => 0,
    'value' => 0,
    'product_options' => 0,
    'obj_prefix' => 0,
    'location' => 0,
    'name' => 0,
    'id' => 0,
    'obj_id' => 0,
    'extra_id' => 0,
    'capture_options_vs_qty' => 0,
    'po' => 0,
    'disabled' => 0,
    'vr' => 0,
    'show_modifiers' => 0,
    'var' => 0,
    'selected_variant' => 0,
    'no_script' => 0,
    'form_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6cdf1762a2_49147763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6cdf1762a2_49147763')) {function content_55aa6cdf1762a2_49147763($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination','select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y"&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']!="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])))) {?>
<?php $_smarty_tpl->tpl_vars["show_modifiers"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details_page']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["param"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['detailed_params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["param"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="cart"||$_smarty_tpl->tpl_vars['product']->value['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][object_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra_id']->value) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&$_smarty_tpl->tpl_vars['location']->value=="cart") {?>
    <?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(true, null, 0);?>
<?php }?>



<div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php  $_smarty_tpl->tpl_vars["po"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["po"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["po"]->key => $_smarty_tpl->tpl_vars["po"]->value) {
$_smarty_tpl->tpl_vars["po"]->_loop = true;
?>
    
    <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable('', null, 0);?>
    <div class="ty-control-group ty-product-options__item<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?> clearfix" id="opt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php if (!(strpos("SRC",$_smarty_tpl->tpl_vars['po']->value['option_type'])!==false&&!$_smarty_tpl->tpl_vars['po']->value['variants']&&$_smarty_tpl->tpl_vars['po']->value['missing_variants_handling']=="H")) {?>
            <label <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type']!=="R"&&$_smarty_tpl->tpl_vars['po']->value['option_type']!=="F") {?>for="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-control-group__label ty-product-options__item-label<?php if ($_smarty_tpl->tpl_vars['po']->value['required']=="Y") {?> cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?> cm-regexp<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>data-ca-regexp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['regexp'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-message="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['incorrect_message'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
<?php if (trim($_smarty_tpl->tpl_vars['po']->value['description'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description']), 0);?>
<?php }?>:</label>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type']=="S") {?> 
            <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                <?php if (($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)&&!$_smarty_tpl->tpl_vars['po']->value['not_required']) {?><input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" /><?php }?>
                <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> onchange="<?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php } else { ?> fn_change_variant_image('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled" class="disabled"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['options_type']=="S") {?>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value||($_smarty_tpl->tpl_vars['runtime']->value['checkout']&&!$_smarty_tpl->tpl_vars['po']->value['value'])) {?>
                            <option value=""><?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?><?php echo $_smarty_tpl->__("select_option_above");?>
<?php } else { ?><?php echo $_smarty_tpl->__("please_select_one");?>
<?php }?></option>
                        <?php }?>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
                        <?php if (!($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)||(($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)&&$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id'])) {?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?><?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['vr']->value['variant_id'], null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></option>
                        <?php }?>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <span><?php echo $_smarty_tpl->__("na");?>
</span>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="R") {?> 
            <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                <ul id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
_group" class="ty-product-options__elem">
                    <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
                        <li class="hidden"><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" /></li>
                        
                        <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
                            <li><label id="option_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-options__box option-items"><input type="radio" class="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?><?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['vr']->value['variant_id'], null, 0);?>checked="checked"<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php } else { ?> fn_change_variant_image('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></label></li>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>

                    <?php }?>
                </ul>
                <?php if (!$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&!($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)) {?><p class="ty-product-options__description ty-clear-both"><?php echo $_smarty_tpl->__("please_select_one");?>
</p><?php } elseif (!$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)) {?><p class="ty-product-options__description ty-clear-both"><?php echo $_smarty_tpl->__("select_option_above");?>
</p><?php }?>
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <span><?php echo $_smarty_tpl->__("na");?>
</span>
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="C") {?> 
            <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['vr']->value['position']==0) {?>
                <input id="unchecked_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> />
            <?php } else { ?>
                <label class="ty-product-options__box option-items">
                    <span class="cm-field-container">
                        <input id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>onclick="fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/>
                        <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
                    </span>
                </label>
            <?php }?>
            <?php }
if (!$_smarty_tpl->tpl_vars["vr"]->_loop) {
?>
                <label class="ty-product-options__box option-items"><input type="checkbox" class="checkbox" disabled="disabled" />
                <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></label>
            <?php } ?>

        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="I") {?> 
            <input id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['po']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled="disabled"<?php }?> class="ty-valign ty-input-text<?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?> cm-hint<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?> disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> />
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="T") {?> 
            <textarea id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-options__textarea<?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?> cm-hint<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?> disabled<?php }?>" rows="3" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['po']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="F") {?> 
            <div class="ty-product-options__elem ty-product-options__fileuploader">
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']],'var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'multiupload'=>$_smarty_tpl->tpl_vars['po']->value['multiupload'],'hidden_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[custom_files][".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'hidden_value'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value), 0);?>

            </div>
        <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['po']->value['comment']) {?>
            <div class="ty-product-options__description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['comment'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("variant_images", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
                <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['var']->value['image_pair']['image_id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['selected_variant']->value) {?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("is-selected", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("ty-product-variant-image-unselected", null, 0);?><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"ty-hand ".((string)$_smarty_tpl->tpl_vars['_class']->value)." ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'image_width'=>"50",'image_height'=>"50",'obj_id'=>"variant_image_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."', '".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."', '".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id'])."'); void(0);"), 0);?>

                    <?php }?>
                <?php } ?>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if (trim(Smarty::$_smarty_vars['capture']['variant_images'])) {?><div class="ty-product-variant-image ty-clear-both"><?php echo Smarty::$_smarty_vars['capture']['variant_images'];?>
</div><?php }?>
    </div>
    <?php } ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_exception_warning']=="Y") {?>
    <p id="warning_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-no-combinations<?php if ($_smarty_tpl->tpl_vars['location']->value!="cart") {?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>"><?php echo $_smarty_tpl->__("nocombination");?>
</p>
<?php }?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_script']->value) {?>
<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['form_name']->value)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
', function(frm, elm) {
        if ($('.cm-no-combinations<?php if ($_smarty_tpl->tpl_vars['location']->value!="cart") {?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>').length) {
            $.ceNotification('show', {
                type: 'W', 
                title: _.tr('warning'), 
                message: _.tr('cannot_buy'),
            });

            return false;
        }
            
        return true;
    });
}(Tygh, Tygh.$));
</script>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y"&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']!="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])))) {?>
<?php $_smarty_tpl->tpl_vars["show_modifiers"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details_page']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["param"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['detailed_params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["param"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="cart"||$_smarty_tpl->tpl_vars['product']->value['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][object_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra_id']->value) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&$_smarty_tpl->tpl_vars['location']->value=="cart") {?>
    <?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable(true, null, 0);?>
<?php }?>



<div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php  $_smarty_tpl->tpl_vars["po"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["po"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["po"]->key => $_smarty_tpl->tpl_vars["po"]->value) {
$_smarty_tpl->tpl_vars["po"]->_loop = true;
?>
    
    <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable('', null, 0);?>
    <div class="ty-control-group ty-product-options__item<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?> clearfix" id="opt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php if (!(strpos("SRC",$_smarty_tpl->tpl_vars['po']->value['option_type'])!==false&&!$_smarty_tpl->tpl_vars['po']->value['variants']&&$_smarty_tpl->tpl_vars['po']->value['missing_variants_handling']=="H")) {?>
            <label <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type']!=="R"&&$_smarty_tpl->tpl_vars['po']->value['option_type']!=="F") {?>for="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-control-group__label ty-product-options__item-label<?php if ($_smarty_tpl->tpl_vars['po']->value['required']=="Y") {?> cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?> cm-regexp<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>data-ca-regexp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['regexp'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-message="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['incorrect_message'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
<?php if (trim($_smarty_tpl->tpl_vars['po']->value['description'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description']), 0);?>
<?php }?>:</label>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type']=="S") {?> 
            <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                <?php if (($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)&&!$_smarty_tpl->tpl_vars['po']->value['not_required']) {?><input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" /><?php }?>
                <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> onchange="<?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php } else { ?> fn_change_variant_image('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled" class="disabled"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['options_type']=="S") {?>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value||($_smarty_tpl->tpl_vars['runtime']->value['checkout']&&!$_smarty_tpl->tpl_vars['po']->value['value'])) {?>
                            <option value=""><?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?><?php echo $_smarty_tpl->__("select_option_above");?>
<?php } else { ?><?php echo $_smarty_tpl->__("please_select_one");?>
<?php }?></option>
                        <?php }?>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
                        <?php if (!($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)||(($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)&&$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id'])) {?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?><?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['vr']->value['variant_id'], null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></option>
                        <?php }?>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <span><?php echo $_smarty_tpl->__("na");?>
</span>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="R") {?> 
            <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                <ul id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
_group" class="ty-product-options__elem">
                    <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
                        <li class="hidden"><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" /></li>
                        
                        <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
                            <li><label id="option_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-options__box option-items"><input type="radio" class="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?><?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['vr']->value['variant_id'], null, 0);?>checked="checked"<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php } else { ?> fn_change_variant_image('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
');<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></label></li>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>

                    <?php }?>
                </ul>
                <?php if (!$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&!($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)) {?><p class="ty-product-options__description ty-clear-both"><?php echo $_smarty_tpl->__("please_select_one");?>
</p><?php } elseif (!$_smarty_tpl->tpl_vars['po']->value['value']&&$_smarty_tpl->tpl_vars['product']->value['options_type']=="S"&&($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value)) {?><p class="ty-product-options__description ty-clear-both"><?php echo $_smarty_tpl->__("select_option_above");?>
</p><?php }?>
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <span><?php echo $_smarty_tpl->__("na");?>
</span>
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="C") {?> 
            <?php  $_smarty_tpl->tpl_vars["vr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vr"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vr"]->key => $_smarty_tpl->tpl_vars["vr"]->value) {
$_smarty_tpl->tpl_vars["vr"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['vr']->value['position']==0) {?>
                <input id="unchecked_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> />
            <?php } else { ?>
                <label class="ty-product-options__box option-items">
                    <span class="cm-field-container">
                        <input id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['po']->value['value']==$_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']||$_smarty_tpl->tpl_vars['po']->value['disabled']||$_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>onclick="fn_change_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/>
                        <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
                    </span>
                </label>
            <?php }?>
            <?php }
if (!$_smarty_tpl->tpl_vars["vr"]->_loop) {
?>
                <label class="ty-product-options__box option-items"><input type="checkbox" class="checkbox" disabled="disabled" />
                <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:options_modifiers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:options_modifiers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></label>
            <?php } ?>

        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="I") {?> 
            <input id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['po']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled="disabled"<?php }?> class="ty-valign ty-input-text<?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?> cm-hint<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?> disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> />
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="T") {?> 
            <textarea id="option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-options__textarea<?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?> cm-hint<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?> disabled<?php }?>" rows="3" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']&&!$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['po']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type']=="F") {?> 
            <div class="ty-product-options__elem ty-product-options__fileuploader">
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']],'var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'multiupload'=>$_smarty_tpl->tpl_vars['po']->value['multiupload'],'hidden_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[custom_files][".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'hidden_value'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value), 0);?>

            </div>
        <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['po']->value['comment']) {?>
            <div class="ty-product-options__description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['comment'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("variant_images", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled']&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
                <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['po']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['var']->value['image_pair']['image_id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['selected_variant']->value) {?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("is-selected", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("ty-product-variant-image-unselected", null, 0);?><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"ty-hand ".((string)$_smarty_tpl->tpl_vars['_class']->value)." ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'image_width'=>"50",'image_height'=>"50",'obj_id'=>"variant_image_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)."', '".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."', '".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id'])."'); void(0);"), 0);?>

                    <?php }?>
                <?php } ?>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if (trim(Smarty::$_smarty_vars['capture']['variant_images'])) {?><div class="ty-product-variant-image ty-clear-both"><?php echo Smarty::$_smarty_vars['capture']['variant_images'];?>
</div><?php }?>
    </div>
    <?php } ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_exception_warning']=="Y") {?>
    <p id="warning_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-no-combinations<?php if ($_smarty_tpl->tpl_vars['location']->value!="cart") {?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>"><?php echo $_smarty_tpl->__("nocombination");?>
</p>
<?php }?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_script']->value) {?>
<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['form_name']->value)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
', function(frm, elm) {
        if ($('.cm-no-combinations<?php if ($_smarty_tpl->tpl_vars['location']->value!="cart") {?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>').length) {
            $.ceNotification('show', {
                type: 'W', 
                title: _.tr('warning'), 
                message: _.tr('cannot_buy'),
            });

            return false;
        }
            
        return true;
    });
}(Tygh, Tygh.$));
</script>
<?php }?><?php }?><?php }} ?>
