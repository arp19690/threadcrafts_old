<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:58:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/views/orders/components/placing_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103482807555b1ccf7df0d45-51625566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540d31e7faf88349698cb74890d3e77c081fbef5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/views/orders/components/placing_order.tpl',
      1 => 1437239222,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103482807555b1ccf7df0d45-51625566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_action' => 0,
    'onload' => 0,
    'payment_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1ccf7ee6a40_21876425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1ccf7ee6a40_21876425')) {function content_55b1ccf7ee6a40_21876425($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('please_be_patient','please_be_patient'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><html>
<head>
<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_action']->value, ENT_QUOTES, 'UTF-8');?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body class="clear-body" <?php if ($_smarty_tpl->tpl_vars['onload']->value) {?>onload="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onload']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['order_action']->value) {?>
    <div class="ty-order-status">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_action']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->__("please_be_patient");?>
...
    </div>
    <?php }?>

    <div id="place_order_data"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_content']->value, ENT_QUOTES, 'UTF-8');?>
</div>
</body>
</html>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/placing_order.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/placing_order.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><html>
<head>
<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_action']->value, ENT_QUOTES, 'UTF-8');?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body class="clear-body" <?php if ($_smarty_tpl->tpl_vars['onload']->value) {?>onload="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onload']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['order_action']->value) {?>
    <div class="ty-order-status">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_action']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->__("please_be_patient");?>
...
    </div>
    <?php }?>

    <div id="place_order_data"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_content']->value, ENT_QUOTES, 'UTF-8');?>
</div>
</body>
</html>
<?php }?><?php }} ?>
