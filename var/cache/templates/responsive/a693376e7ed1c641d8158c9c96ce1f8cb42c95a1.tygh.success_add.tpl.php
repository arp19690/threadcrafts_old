<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 15:06:12
         compiled from "/var/www/html/design/themes/responsive/templates/views/profiles/success_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104517018355c47c0c99b781-89169409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a693376e7ed1c641d8158c9c96ce1f8cb42c95a1' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/profiles/success_add.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '104517018355c47c0c99b781-89169409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c47c0ca22916_70471779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c47c0ca22916_70471779')) {function content_55c47c0ca22916_70471779($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('successfully_registered','success_registration_text','edit_profile','edit_profile_note','orders','track_orders','compare_list','compare_list_note','successfully_registered','success_registration_text','edit_profile','edit_profile_note','orders','track_orders','compare_list','compare_list_note'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("successfully_registered");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<span class="ty-success-registration__text"><?php echo $_smarty_tpl->__("success_registration_text");?>
</span>
<ul class="success-registration__list">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:success_registration")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:success_registration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("edit_profile");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("edit_profile_note");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("orders");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("track_orders");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("compare_list");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("compare_list_note");?>
</span>
        </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:success_registration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/success_add.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/success_add.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("successfully_registered");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<span class="ty-success-registration__text"><?php echo $_smarty_tpl->__("success_registration_text");?>
</span>
<ul class="success-registration__list">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:success_registration")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:success_registration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("edit_profile");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("edit_profile_note");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("orders");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("track_orders");?>
</span>
        </li>
        <li class="ty-success-registration__item">
            <a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("compare_list");?>
</a>
            <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("compare_list_note");?>
</span>
        </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:success_registration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<?php }?><?php }} ?>
