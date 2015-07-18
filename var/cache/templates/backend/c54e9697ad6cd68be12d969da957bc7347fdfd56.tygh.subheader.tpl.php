<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:42:02
         compiled from "/var/www/html/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191118476055a9f53a8bb547-27407169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54e9697ad6cd68be12d969da957bc7347fdfd56' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/subheader.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191118476055a9f53a8bb547-27407169',
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
  'unifunc' => 'content_55a9f53a8d17d8_46236851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f53a8d17d8_46236851')) {function content_55a9f53a8d17d8_46236851($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="exicon-collapse"></span><?php }?>
</h4><?php }} ?>
