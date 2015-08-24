<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:46:10
         compiled from "/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128559435055d4738a6b69c5-87357226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91cbb85def85ae1eee8eb71e92d1dbba609cc52f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128559435055d4738a6b69c5-87357226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'company_id' => 0,
    'product_id' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4738a6e2495_20498453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4738a6e2495_20498453')) {function content_55d4738a6e2495_20498453($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendor_by_email'));
?>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reason");?>
:</label>
	    <div class="controls">
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[status]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<textarea name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="input-text"></textarea>
	    </div>
	</div>
	
	<div class="control-group cm-toggle-button">
		<label class="control-label" for="notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("notify_vendor_by_email");?>
</label>
	    <div class="controls">
	    	<input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
]" id="notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" checked="checked">
	    </div>
	</div>
</div><?php }} ?>
