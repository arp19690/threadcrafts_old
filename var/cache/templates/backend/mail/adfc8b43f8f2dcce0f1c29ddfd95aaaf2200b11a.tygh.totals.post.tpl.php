<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 22:11:29
         compiled from "/var/www/html/design/backend/mail/templates/addons/gift_certificates/hooks/orders/totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192909335455c4dfb9b022d2-34629026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfc8b43f8f2dcce0f1c29ddfd95aaaf2200b11a' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/gift_certificates/hooks/orders/totals.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '192909335455c4dfb9b022d2-34629026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'code' => 0,
    'certificate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c4dfb9b17d10_04384366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4dfb9b17d10_04384366')) {function content_55c4dfb9b17d10_04384366($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
<?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["certificate"]->key;
?>
<tr>
    <td colspan="2" style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;">
        <b><?php echo $_smarty_tpl->__("gift_certificate");?>
</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0);?>
)</td>
</tr>
<?php } ?>
<?php }?><?php }} ?>
