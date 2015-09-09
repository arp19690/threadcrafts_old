<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:28:26
         compiled from "/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/create_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18483109855efbc723387a2-38041344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '123f4edd9bbff97e13358b90eae4f28da12e230f' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/rma/views/rma/create_return.tpl',
      1 => 1439189922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18483109855efbc723387a2-38041344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'actions' => 0,
    'action_id' => 0,
    'action' => 0,
    'oi' => 0,
    'key' => 0,
    'reasons' => 0,
    'reason_id' => 0,
    'reason' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efbc72469b18_36455493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efbc72469b18_36455493')) {function content_55efbc72469b18_36455493($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('what_you_would_like_to_do','check_uncheck_all','product','price','quantity','reason','free','no_items','type_comment','rma_return','return_registration','what_you_would_like_to_do','check_uncheck_all','product','price','quantity','reason','free','no_items','type_comment','rma_return','return_registration'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-rma-register">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="return_registration_form">
    <input name="order_id" type="hidden" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input name="user_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
        <div class="ty-rma-register__actions">
            <strong><?php echo $_smarty_tpl->__("what_you_would_like_to_do");?>
:</strong>
            <select class="ty-rma-register__action-select" name="action">
                <?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["action"]->_loop = false;
 $_smarty_tpl->tpl_vars["action_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value) {
$_smarty_tpl->tpl_vars["action"]->_loop = true;
 $_smarty_tpl->tpl_vars["action_id"]->value = $_smarty_tpl->tpl_vars["action"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['property'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    <?php }?>

    <table class="ty-table ty-rma-register__table">
    <thead>
        <tr>
            <th class="ty-center"><input type="checkbox" name="check_all" value="Y" title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" class="checkbox cm-check-items" /></th>
            <th><?php echo $_smarty_tpl->__("product");?>
</th>
            <th class="ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
            <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th><?php echo $_smarty_tpl->__("reason");?>
</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <tr>
            <td class="ty-center ty-rma-register-id">
                <input type="checkbox" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][chosen]" id="delete_checkbox" value="Y" class="checkbox cm-item" />
                <input type="hidden" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            </td>
            <td style="width: 60%" class="ty-left"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['oi']->value['product'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>

                <?php }?>
            </td>
            <td class="ty-right ty-nowrap">
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0);?>
<?php }?>
            </td>
            <td class="ty-center">
                <input type="hidden" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][available_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                <select name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][amount]">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value])) unset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['name'] = $_smarty_tpl->tpl_vars['key']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['oi']->value['amount']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] = ((int) "1") == 0 ? 1 : (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php endfor; endif; ?>
                </select>
            </td>
            <td class="ty-center">
                <?php if ($_smarty_tpl->tpl_vars['reasons']->value) {?>
                    <select name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][reason]">
                    <?php  $_smarty_tpl->tpl_vars["reason"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["reason"]->_loop = false;
 $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reasons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["reason"]->key => $_smarty_tpl->tpl_vars["reason"]->value) {
$_smarty_tpl->tpl_vars["reason"]->_loop = true;
 $_smarty_tpl->tpl_vars["reason_id"]->value = $_smarty_tpl->tpl_vars["reason"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['property'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </select>
                <?php }?>
            </td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["oi"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

    <div class="ty-rma-register__comments">
        <strong class="ty-rma-register__comments-title"><?php echo $_smarty_tpl->__("type_comment");?>
</strong>
        <textarea name="comment" cols="3" rows="4" class="ty-rma-register__comments-textarea"></textarea>
    </div>
    <div class="ty-rma-register__buttons buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("rma_return"),'but_name'=>"dispatch[rma.add_return]",'but_meta'=>"ty-btn__secondary cm-process-items"), 0);?>

    </div>

    </form>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("return_registration");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/rma/create_return.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/rma/create_return.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-rma-register">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="return_registration_form">
    <input name="order_id" type="hidden" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input name="user_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
        <div class="ty-rma-register__actions">
            <strong><?php echo $_smarty_tpl->__("what_you_would_like_to_do");?>
:</strong>
            <select class="ty-rma-register__action-select" name="action">
                <?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["action"]->_loop = false;
 $_smarty_tpl->tpl_vars["action_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value) {
$_smarty_tpl->tpl_vars["action"]->_loop = true;
 $_smarty_tpl->tpl_vars["action_id"]->value = $_smarty_tpl->tpl_vars["action"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['property'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    <?php }?>

    <table class="ty-table ty-rma-register__table">
    <thead>
        <tr>
            <th class="ty-center"><input type="checkbox" name="check_all" value="Y" title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" class="checkbox cm-check-items" /></th>
            <th><?php echo $_smarty_tpl->__("product");?>
</th>
            <th class="ty-right"><?php echo $_smarty_tpl->__("price");?>
</th>
            <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th><?php echo $_smarty_tpl->__("reason");?>
</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <tr>
            <td class="ty-center ty-rma-register-id">
                <input type="checkbox" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][chosen]" id="delete_checkbox" value="Y" class="checkbox cm-item" />
                <input type="hidden" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            </td>
            <td style="width: 60%" class="ty-left"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['oi']->value['product'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>

                <?php }?>
            </td>
            <td class="ty-right ty-nowrap">
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->__("free");?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0);?>
<?php }?>
            </td>
            <td class="ty-center">
                <input type="hidden" name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][available_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                <select name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][amount]">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value])) unset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['name'] = $_smarty_tpl->tpl_vars['key']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['oi']->value['amount']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] = ((int) "1") == 0 ? 1 : (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php endfor; endif; ?>
                </select>
            </td>
            <td class="ty-center">
                <?php if ($_smarty_tpl->tpl_vars['reasons']->value) {?>
                    <select name="returns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['cart_id'], ENT_QUOTES, 'UTF-8');?>
][reason]">
                    <?php  $_smarty_tpl->tpl_vars["reason"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["reason"]->_loop = false;
 $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reasons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["reason"]->key => $_smarty_tpl->tpl_vars["reason"]->value) {
$_smarty_tpl->tpl_vars["reason"]->_loop = true;
 $_smarty_tpl->tpl_vars["reason_id"]->value = $_smarty_tpl->tpl_vars["reason"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['property'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </select>
                <?php }?>
            </td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["oi"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

    <div class="ty-rma-register__comments">
        <strong class="ty-rma-register__comments-title"><?php echo $_smarty_tpl->__("type_comment");?>
</strong>
        <textarea name="comment" cols="3" rows="4" class="ty-rma-register__comments-textarea"></textarea>
    </div>
    <div class="ty-rma-register__buttons buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("rma_return"),'but_name'=>"dispatch[rma.add_return]",'but_meta'=>"ty-btn__secondary cm-process-items"), 0);?>

    </div>

    </form>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("return_registration");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
