<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:52:18
         compiled from "/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141184797455c4e94a519fa8-34283402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae3d3d6844e83d33323c7c569576f57784ff3e5f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141184797455c4e94a519fa8-34283402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4e94a538bb7_32837425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4e94a538bb7_32837425')) {function content_55c4e94a538bb7_32837425($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal">
	<div class="control-group">
	    <label class="control-label" ><?php echo $_smarty_tpl->__("reason");?>
:</label>
	    <div class="controls">
	    	<textarea name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="input-text"></textarea>
	    </div>
	</div>
	
	<div class="control-group cm-toggle-button">
	    <label class="control-label" for="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
	    <div class="controls">
	    	<input type="checkbox" name="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" checked="checked">
	    </div>
	</div>
</div><?php }} ?>
