<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 02:08:15
         compiled from "/var/www/html/design/themes/responsive/templates/addons/gift_certificates/hooks/orders/totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59849376355aab9372da705-20116744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c4e56487fb7a625ddb31b62f0f07cbf2776ec2' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/gift_certificates/hooks/orders/totals.post.tpl',
      1 => 1437201219,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59849376355aab9372da705-20116744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'code' => 0,
    'certificate' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aab937340223_96872212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aab937340223_96872212')) {function content_55aab937340223_96872212($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('payment_method','gift_certificate','payment_method','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["certificate"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["certificate"]->key;
 $_smarty_tpl->tpl_vars["certificate"]->index++;
 $_smarty_tpl->tpl_vars["certificate"]->first = $_smarty_tpl->tpl_vars["certificate"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["certs"]['first'] = $_smarty_tpl->tpl_vars["certificate"]->first;
?>
        <tr class="ty-orders-summary__row">
            <td><?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['certs']['first']) {?><strong><?php echo $_smarty_tpl->__("payment_method");?>
:</strong><?php }?>&nbsp;</td>
            <td>
            <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['code']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a> (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0);?>
)
            </td>
        </tr>
    <?php } ?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/orders/totals.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/orders/totals.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["certificate"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["certificate"]->key;
 $_smarty_tpl->tpl_vars["certificate"]->index++;
 $_smarty_tpl->tpl_vars["certificate"]->first = $_smarty_tpl->tpl_vars["certificate"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["certs"]['first'] = $_smarty_tpl->tpl_vars["certificate"]->first;
?>
        <tr class="ty-orders-summary__row">
            <td><?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['certs']['first']) {?><strong><?php echo $_smarty_tpl->__("payment_method");?>
:</strong><?php }?>&nbsp;</td>
            <td>
            <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['code']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a> (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0);?>
)
            </td>
        </tr>
    <?php } ?>
<?php }?><?php }?><?php }} ?>