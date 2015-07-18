<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 20:24:13
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162966155055a537ad4323b2-28837079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c76391b05251f5e0ac012cbe1670332d268bf1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162966155055a537ad4323b2-28837079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a537ad443655_79383891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a537ad443655_79383891')) {function content_55a537ad443655_79383891($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {?><?php echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
