<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 07:39:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186267536655a484587a0c86-45460332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f931dea691a9dc50fe009c556aba2308bbae702' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/payments/processor.tpl',
      1 => 1413374306,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186267536655a484587a0c86-45460332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'curl_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a4845884fb67_71349718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a4845884fb67_71349718')) {function content_55a4845884fb67_71349718($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("views/payments/components/cc_processors/".((string)$_smarty_tpl->tpl_vars['processor_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
