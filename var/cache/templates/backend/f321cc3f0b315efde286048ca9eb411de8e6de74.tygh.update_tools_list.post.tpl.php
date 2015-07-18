<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:42:02
         compiled from "/var/www/html/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55567452955a9f53ac48fd3-17076064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f321cc3f0b315efde286048ca9eb411de8e6de74' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '55567452955a9f53ac48fd3-17076064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f53ac54830_88679158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f53ac54830_88679158')) {function content_55a9f53ac54830_88679158($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('view_user_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }?><?php }} ?>
