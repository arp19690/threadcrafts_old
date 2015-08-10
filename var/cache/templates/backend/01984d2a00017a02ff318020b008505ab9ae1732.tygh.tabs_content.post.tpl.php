<?php /* Smarty version Smarty-3.1.18, created on 2015-07-20 12:52:15
         compiled from "/var/www/html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114202551755aca1a742ef29-87888690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01984d2a00017a02ff318020b008505ab9ae1732' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114202551755aca1a742ef29-87888690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aca1a743a185_80168237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aca1a743a185_80168237')) {function content_55aca1a743a185_80168237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>
<?php }} ?>
