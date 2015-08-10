<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:56:38
         compiled from "/var/www/html/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147912684655c8522e233034-51070243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b635dd48b0cab8edb0aecb02cd63d400f294efb' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147912684655c8522e233034-51070243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c8522e244611_41485977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8522e244611_41485977')) {function content_55c8522e244611_41485977($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {?><?php echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
