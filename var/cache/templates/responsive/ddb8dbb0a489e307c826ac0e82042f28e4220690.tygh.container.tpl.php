<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:08:53
         compiled from "/var/www/html/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108252143455eed6dd080393-53482371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb8dbb0a489e307c826ac0e82042f28e4220690' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108252143455eed6dd080393-53482371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eed6dd08d3c9_48300983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed6dd08d3c9_48300983')) {function content_55eed6dd08d3c9_48300983($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
