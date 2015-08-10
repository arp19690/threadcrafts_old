<?php /* Smarty version Smarty-3.1.18, created on 2015-08-09 10:03:56
         compiled from "/var/www/html/design/themes/responsive/mail/templates/orders/track.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14925774155c6d8346fb619-99787977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41608a0c94688d6ce194bfbcb371b307e9477f5' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/orders/track.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14925774155c6d8346fb619-99787977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'o_id' => 0,
    'access_key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c6d834761e08_57719755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c6d834761e08_57719755')) {function content_55c6d834761e08_57719755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('hello','text_track_request','text_track_view_order','text_track_view_all_orders','hello','text_track_request','text_track_view_order','text_track_view_all_orders'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("hello");?>
,<br /><br />

<?php echo $_smarty_tpl->__("text_track_request");?>
<br /><br />

<?php if ($_smarty_tpl->tpl_vars['o_id']->value) {?>
<?php echo $_smarty_tpl->__("text_track_view_order",array("[order]"=>$_smarty_tpl->tpl_vars['o_id']->value));?>
<br />
<a href="<?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value)."&o_id=".((string)$_smarty_tpl->tpl_vars['o_id']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value)."&o_id=".((string)$_smarty_tpl->tpl_vars['o_id']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
</a><br />
<br />
<?php }?>

<?php echo $_smarty_tpl->__("text_track_view_all_orders");?>
<br />
<a href="<?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
</a><br />

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="orders/track.tpl" id="<?php echo smarty_function_set_id(array('name'=>"orders/track.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("hello");?>
,<br /><br />

<?php echo $_smarty_tpl->__("text_track_request");?>
<br /><br />

<?php if ($_smarty_tpl->tpl_vars['o_id']->value) {?>
<?php echo $_smarty_tpl->__("text_track_view_order",array("[order]"=>$_smarty_tpl->tpl_vars['o_id']->value));?>
<br />
<a href="<?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value)."&o_id=".((string)$_smarty_tpl->tpl_vars['o_id']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value)."&o_id=".((string)$_smarty_tpl->tpl_vars['o_id']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
</a><br />
<br />
<?php }?>

<?php echo $_smarty_tpl->__("text_track_view_all_orders");?>
<br />
<a href="<?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("orders.track?ekey=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
</a><br />

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
