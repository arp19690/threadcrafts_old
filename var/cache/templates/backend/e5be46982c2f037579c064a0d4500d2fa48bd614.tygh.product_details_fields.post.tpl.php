<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 16:47:03
         compiled from "/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138426780755d465af4b4755-33570650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5be46982c2f037579c064a0d4500d2fa48bd614' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138426780755d465af4b4755-33570650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d465af4d83d1_73993109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d465af4d83d1_73993109')) {function content_55d465af4d83d1_73993109($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y") {?><?php echo $_smarty_tpl->__("yes");?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P") {?><?php echo $_smarty_tpl->__("pending");?>
<?php } else { ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>
