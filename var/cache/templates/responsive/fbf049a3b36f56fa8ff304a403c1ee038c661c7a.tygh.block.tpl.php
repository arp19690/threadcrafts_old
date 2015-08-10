<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:07:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178524201955b1c12060f619-51933635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf049a3b36f56fa8ff304a403c1ee038c661c7a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1437239222,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178524201955b1c12060f619-51933635',
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
  'unifunc' => 'content_55b1c12062b417_95206602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1c12062b417_95206602')) {function content_55b1c12062b417_95206602($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    ty-float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    </div>
<?php }?><?php }} ?>
