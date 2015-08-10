<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:15
         compiled from "/var/www/html/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26270817855aca1a70d2dd7-89011924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7a6d26ea4ae7a616e2d07b4b3daf622b7d950c' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26270817855aca1a70d2dd7-89011924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a70f50a9_53163925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a70f50a9_53163925')) {function content_55aca1a70f50a9_53163925($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points','points_lower','points_in_use','points_lower'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
):</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
