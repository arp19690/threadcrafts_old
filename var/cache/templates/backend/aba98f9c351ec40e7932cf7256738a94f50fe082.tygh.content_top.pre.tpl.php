<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:31:58
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17759406985571b2de2f1fd7-85201758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba98f9c351ec40e7932cf7256738a94f50fe082' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17759406985571b2de2f1fd7-85201758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b2de30d169_40589147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b2de30d169_40589147')) {function content_5571b2de30d169_40589147($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"RseUfuFdctg"), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"BVOLfcROTyg"), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"cCJOoAZnCqk"), 0);?>

<?php }?><?php }} ?>
