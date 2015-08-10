<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 10:07:32
         compiled from "/var/www/html/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123510613355c84db4da8922-82702846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54e9697ad6cd68be12d969da957bc7347fdfd56' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/subheader.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123510613355c84db4da8922-82702846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84db4dbf5f1_37280100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84db4dbf5f1_37280100')) {function content_55c84db4dbf5f1_37280100($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="exicon-collapse"></span><?php }?>
</h4><?php }} ?>
