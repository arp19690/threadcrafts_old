<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 13:09:08
         compiled from "/var/www/html/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190637125055c8551c4dd399-14501803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42981a38c3ea3976827b3619045dc11fcf585f6a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190637125055c8551c4dd399-14501803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c8551c50cbc6_18564530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8551c50cbc6_18564530')) {function content_55c8551c50cbc6_18564530($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="news") {?>
    <a href="<?php echo htmlspecialchars(fn_url("news.update?news_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['news'], ENT_QUOTES, 'UTF-8');?>
</a><br>                        
<?php }?><?php }} ?>
