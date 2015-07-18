<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:42:51
         compiled from "/var/www/html/design/backend/mail/templates/profiles/update_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31855250555a9f56b714445-76081626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f212beaf8cd03364e138fe4219aa107102e0b5ea' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/update_profile.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31855250555a9f56b714445-76081626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f56b731316_05993252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f56b731316_05993252')) {function content_55a9f56b731316_05993252($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('dear','update_profile_notification_header'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php if ($_smarty_tpl->tpl_vars['user_data']->value['firstname']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
<?php } else { ?><?php echo htmlspecialchars(strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type'])), ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>,<br><br>

<?php echo $_smarty_tpl->__("update_profile_notification_header");?>
<br><br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:update_profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:update_profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:update_profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
