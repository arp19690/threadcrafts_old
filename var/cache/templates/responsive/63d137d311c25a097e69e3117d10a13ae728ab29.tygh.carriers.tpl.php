<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 16:47:25
         compiled from "/var/www/html/design/themes/responsive/templates/common/carriers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150470805655eec3c5ebea84-84262495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d137d311c25a097e69e3117d10a13ae728ab29' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/carriers.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150470805655eec3c5ebea84-84262495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'carrier' => 0,
    'tracking_number' => 0,
    'shipping' => 0,
    'carrier_name' => 0,
    'url' => 0,
    'carrier_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eec3c618e270_12103146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eec3c618e270_12103146')) {function content_55eec3c618e270_12103146($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('usps','ups','fedex','australia_post','canada_post','dhl','chp','temando','usps','ups','fedex','australia_post','canada_post','dhl','chp','temando'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars['carrier_info'] = new Smarty_variable('', null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['carrier']->value=="usps") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("https://tools.usps.com/go/TrackConfirmAction_input?strOrigTrackNum=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("usps"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="ups") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("ups"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="fedex") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://fedex.com/Tracking?action=track&amp;tracknumbers=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("fedex"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="aup") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://auspost.com.au/track/track.html?id=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("australia_post"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="can") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.canadapost.com/cpotools/apps/track/personal/findByTrackNumber?trackingNumber=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("canada_post"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="dhl"||$_smarty_tpl->tpl_vars['shipping']->value['carrier']=="ARB") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.dhl-usa.com/en/express/tracking.shtml?ShipmentNumber=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("dhl"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="swisspost") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.post.ch/swisspost-tracking?formattedParcelCodes=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("chp"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="temando") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("https://temando.com/education-centre/support/track-your-item?token=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("temando"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['carrier']->value, null, 0);?>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:capture")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:capture"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_name", null, null); ob_start(); ?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_url", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_info", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['carrier_info']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:capture"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/carriers.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/carriers.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['carrier_info'] = new Smarty_variable('', null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['carrier']->value=="usps") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("https://tools.usps.com/go/TrackConfirmAction_input?strOrigTrackNum=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("usps"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="ups") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("ups"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="fedex") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://fedex.com/Tracking?action=track&amp;tracknumbers=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("fedex"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="aup") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://auspost.com.au/track/track.html?id=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("australia_post"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="can") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.canadapost.com/cpotools/apps/track/personal/findByTrackNumber?trackingNumber=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("canada_post"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="dhl"||$_smarty_tpl->tpl_vars['shipping']->value['carrier']=="ARB") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.dhl-usa.com/en/express/tracking.shtml?ShipmentNumber=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("dhl"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="swisspost") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("http://www.post.ch/swisspost-tracking?formattedParcelCodes=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("chp"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['carrier']->value=="temando") {?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("https://temando.com/education-centre/support/track-your-item?token=".((string)$_smarty_tpl->tpl_vars['tracking_number']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("temando"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['carrier']->value, null, 0);?>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:capture")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:capture"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_name", null, null); ob_start(); ?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_url", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("carrier_info", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['carrier_info']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:capture"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>
