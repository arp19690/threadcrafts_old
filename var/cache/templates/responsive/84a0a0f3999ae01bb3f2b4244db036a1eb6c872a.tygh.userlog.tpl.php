<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 01:36:13
         compiled from "/var/www/html/design/themes/responsive/templates/addons/reward_points/views/reward_points/userlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92242719955aab1b5cd06a1-30264373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a0a0f3999ae01bb3f2b4244db036a1eb6c872a' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/reward_points/views/reward_points/userlog.tpl',
      1 => 1437201221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92242719955aab1b5cd06a1-30264373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'c_url' => 0,
    'sort_sign' => 0,
    'userlog' => 0,
    'ul' => 0,
    'settings' => 0,
    'reason' => 0,
    'order_exist' => 0,
    'statuses' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aab1b5e9af77_91602085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aab1b5e9af77_91602085')) {function content_55aab1b5e9af77_91602085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('date','points','reason','order','text_points_used_in_order','order','deleted','order','placed','no_items','reward_points_log','date','points','reason','order','text_points_used_in_order','order','deleted','order','placed','no_items','reward_points_log'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="ty-reward-points-userlog ty-table">
<thead>
    <tr>
        <th class="ty-reward-points-userlog__date"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        <th class="ty-reward-points-userlog__points"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("points");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        <th class="ty-reward-points-userlog__reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
    </tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["ul"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ul"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ul"]->key => $_smarty_tpl->tpl_vars["ul"]->value) {
$_smarty_tpl->tpl_vars["ul"]->_loop = true;
?>
<tr>
    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ul']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER')) {?>
            <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),true,true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['from']], ENT_QUOTES, 'UTF-8');?>
&nbsp;&#8212;&#8250;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['to']], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['reason']->value['text']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['reason']->value['text']);?>
)<?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_USE')) {?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php echo $_smarty_tpl->__("text_points_used_in_order");?>
: <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['ul']->value['reason'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER_DELETE')) {?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
 <strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo $_smarty_tpl->__("deleted");?>

        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER_PLACE')) {?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
 <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>: <?php echo $_smarty_tpl->__("placed");?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"reward_points:userlog")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"reward_points:userlog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"reward_points:userlog"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars["ul"]->_loop) {
?>
<tr class="ty-table__no-items">
    <td colspan="3"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
</tr>
<?php } ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("reward_points_log");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/views/reward_points/userlog.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/views/reward_points/userlog.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="ty-reward-points-userlog ty-table">
<thead>
    <tr>
        <th class="ty-reward-points-userlog__date"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        <th class="ty-reward-points-userlog__points"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("points");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?><?php echo $_smarty_tpl->tpl_vars['sort_sign']->value;?>
<?php }?></th>
        <th class="ty-reward-points-userlog__reason"><?php echo $_smarty_tpl->__("reason");?>
</th>
    </tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["ul"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ul"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ul"]->key => $_smarty_tpl->tpl_vars["ul"]->value) {
$_smarty_tpl->tpl_vars["ul"]->_loop = true;
?>
<tr>
    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ul']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER')) {?>
            <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),true,true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['from']], ENT_QUOTES, 'UTF-8');?>
&nbsp;&#8212;&#8250;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['to']], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['reason']->value['text']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['reason']->value['text']);?>
)<?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_USE')) {?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php echo $_smarty_tpl->__("text_points_used_in_order");?>
: <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['ul']->value['reason'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER_DELETE')) {?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
 <strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo $_smarty_tpl->__("deleted");?>

        <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==@constant('CHANGE_DUE_ORDER_PLACE')) {?>
            <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
            <?php echo $_smarty_tpl->__("order");?>
 <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</strong><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>: <?php echo $_smarty_tpl->__("placed");?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"reward_points:userlog")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"reward_points:userlog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"reward_points:userlog"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars["ul"]->_loop) {
?>
<tr class="ty-table__no-items">
    <td colspan="3"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
</tr>
<?php } ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("reward_points_log");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
