<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 14:04:13
         compiled from "/var/www/html/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157662083355efef0580df38-60345859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ae080e0751c6d35d526f720dca82bc5e3a5f5c2' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl',
      1 => 1441787647,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157662083355efef0580df38-60345859',
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
  'unifunc' => 'content_55efef0585efe5_90012320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efef0585efe5_90012320')) {function content_55efef0585efe5_90012320($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:payment_icons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!--<span class="ty-payment-icons__item twocheckout">&nbsp;</span>-->
    <!--<span class="ty-payment-icons__item paypal">&nbsp;</span>-->
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:payment_icons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/payment_icons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/payment_icons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:payment_icons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!--<span class="ty-payment-icons__item twocheckout">&nbsp;</span>-->
    <!--<span class="ty-payment-icons__item paypal">&nbsp;</span>-->
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:payment_icons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }?><?php }} ?>
