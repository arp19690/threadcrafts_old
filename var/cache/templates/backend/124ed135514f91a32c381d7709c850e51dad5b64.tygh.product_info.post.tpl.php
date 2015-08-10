<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:14
         compiled from "/var/www/html/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64294746755aca1a6dcecb9-38954026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124ed135514f91a32c381d7709c850e51dad5b64' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64294746755aca1a6dcecb9-38954026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a6ddd302_35566702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a6ddd302_35566702')) {function content_55aca1a6ddd302_35566702($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
