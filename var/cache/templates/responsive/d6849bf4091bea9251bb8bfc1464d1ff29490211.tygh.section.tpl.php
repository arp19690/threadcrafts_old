<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 19:29:02
         compiled from "/var/www/html/design/themes/responsive/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55315566255aa5ba6e45827-12570866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6849bf4091bea9251bb8bfc1464d1ff29490211' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/section.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '55315566255aa5ba6e45827-12570866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'section_title' => 0,
    'id' => 0,
    'collapse' => 0,
    'class' => 0,
    'rnd' => 0,
    'section_body_class' => 0,
    'section_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa5ba6ec2b63_23978813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa5ba6ec2b63_23978813')) {function content_55aa5ba6ec2b63_23978813($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('open_action','hide','open_action','hide'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value]||$_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div class="ty-section<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->__("open_action");?>
<i class="ty-section__arrow ty-icon-down-open"></i></span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->__("hide");?>
<i class="ty-section__arrow ty-icon-up-open"></i></span>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['section_body_class']->value)===null||$tmp==='' ? "ty-section__body" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value]||$_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div class="ty-section<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->__("open_action");?>
<i class="ty-section__arrow ty-icon-down-open"></i></span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->__("hide");?>
<i class="ty-section__arrow ty-icon-up-open"></i></span>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['section_body_class']->value)===null||$tmp==='' ? "ty-section__body" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div><?php }?><?php }} ?>
