<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:11:09
         compiled from "/var/www/html/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100223422655efb865f092b5-15550415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae31c44dfbc17f29611ae0002cc8dd59584bfc87' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/colorpicker.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100223422655efb865f092b5-15550415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb865f11db7_36412635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb865f11db7_36412635')) {function content_55efb865f11db7_36412635($_smarty_tpl) {?><div class="colorpicker">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-view="palette" class="cm-colorpicker">
</div><?php }} ?>
