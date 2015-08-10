<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:15
         compiled from "/var/www/html/design/backend/templates/addons/shipway/overrides/common/carriers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4382802655aca1a721d415-28009711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54299ccb0148763ced6f3c53abbbacaf3df8b26a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/shipway/overrides/common/carriers.tpl',
      1 => 1437247109,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4382802655aca1a721d415-28009711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'capture' => 0,
    'id' => 0,
    'name' => 0,
    'meta' => 0,
    'carriers' => 0,
    'code' => 0,
    'carrier' => 0,
    'carrier_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a7299c47_34897055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a7299c47_34897055')) {function content_55aca1a7299c47_34897055($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('carrier_','carrier_'));
?>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_field", null, null); ob_start(); ?>
<?php }?>

<select <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <option value="">--</option>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php  $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["code"]->key => $_smarty_tpl->tpl_vars["code"]->value) {
$_smarty_tpl->tpl_vars["code"]->_loop = true;
?>
    	<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value==((string)$_smarty_tpl->tpl_vars['code']->value)) {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("carrier_".((string)$_smarty_tpl->tpl_vars['code']->value)), null, 0);?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("carrier_".((string)$_smarty_tpl->tpl_vars['code']->value));?>
</option>
    <?php } ?>
	<option value="bluedart" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="bluedart") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Bluedart", null, 0);?> selected="selected"<?php }?> >Bluedart</option>
	<option value="delhivery" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="delhivery") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Delhivery", null, 0);?> selected="selected"<?php }?> >Delhivery</option>
	<option value="gati" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="gati") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Gati", null, 0);?> selected="selected"<?php }?>>Gati</option>
	<option value="gojavas" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="gojavas") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Gojavas", null, 0);?> selected="selected"<?php }?>>Gojavas</option>
	<option value="ecomexpress" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="ecomexpress") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Ecom Express", null, 0);?> selected="selected"<?php }?> >Ecom Express</option>
	<option value="dtdc" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="dtdc") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("DTDC", null, 0);?> selected="selected"<?php }?> >DTDC</option>
	<option value="dotzot" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="dotzot") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Dotzot", null, 0);?> selected="selected"<?php }?> > DotZot</option>
	<option value="redexpress" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="redexpress") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Red Express", null, 0);?> selected="selected"<?php }?>>Red Express</option>
	<option value="firstflight" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="firstflight") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("First Flight", null, 0);?> selected="selected"<?php }?>>First Flight</option>
	<option value="aramex" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="aramex") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Aramex", null, 0);?> selected="selected"<?php }?> >Aramex</option>
	<option value="professional" <?php if ($_smarty_tpl->tpl_vars['carrier']->value=="professional") {?><?php $_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable("Professional Courier", null, 0);?> selected="selected"<?php }?> >Professional Courier</option>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</select>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_name", null, null); ob_start(); ?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
