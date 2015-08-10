<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 14:58:52
         compiled from "/var/www/html/design/backend/templates/views/promotions/dynamic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4786386955c47a548ac105-96384309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d48ac46751fdfa5df8fec9d1533f6212df2ff7a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/promotions/dynamic.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4786386955c47a548ac105-96384309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'picker_selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c47a548eca18_88743236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c47a548eca18_88743236')) {function content_55c47a548eca18_88743236($_smarty_tpl) {?><div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_REQUEST['condition']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value), 0);?>


<?php } elseif ($_REQUEST['group']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_REQUEST['bonus']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
