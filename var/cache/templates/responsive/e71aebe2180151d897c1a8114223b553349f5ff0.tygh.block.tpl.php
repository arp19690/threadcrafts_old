<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:34:37
         compiled from "/var/www/html/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120039906555a9f37d7ec1e3-08585516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71aebe2180151d897c1a8114223b553349f5ff0' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1437201213,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120039906555a9f37d7ec1e3-08585516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f37d806928_36968383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f37d806928_36968383')) {function content_55a9f37d806928_36968383($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    ty-float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    </div>
<?php }?><?php }} ?>
