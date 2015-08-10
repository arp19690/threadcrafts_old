<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:15
         compiled from "/var/www/html/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85128675655aca1a7141b72-71277269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32190c855499a86663ae41fe70a61fdb1293831e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85128675655aca1a7141b72-71277269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a7161023_98760201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a7161023_98760201')) {function content_55aca1a7161023_98760201($_smarty_tpl) {?><div class="center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
