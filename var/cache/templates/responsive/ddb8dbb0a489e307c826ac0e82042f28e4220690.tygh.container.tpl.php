<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:05:15
         compiled from "/var/www/html/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141012314655a9ec9b24a2b0-47652534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb8dbb0a489e307c826ac0e82042f28e4220690' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1437198874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141012314655a9ec9b24a2b0-47652534',
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
  'unifunc' => 'content_55a9ec9b254962_49295986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9ec9b254962_49295986')) {function content_55a9ec9b254962_49295986($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
