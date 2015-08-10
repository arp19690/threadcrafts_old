<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:46:55
         compiled from "/var/www/html/design/backend/templates/views/payments/processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109286996255c84fe7983604-87687265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08df60813311d2fc79eca2b5e71503937ab582f4' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/payments/processor.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109286996255c84fe7983604-87687265',
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
  'unifunc' => 'content_55c84fe79af7c6_88698380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84fe79af7c6_88698380')) {function content_55c84fe79af7c6_88698380($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("views/payments/components/cc_processors/".((string)$_smarty_tpl->tpl_vars['processor_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
