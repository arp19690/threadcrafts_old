<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 18:39:27
         compiled from "/var/www/html/design/backend/templates/views/logs/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209012376355aba1870b3809-21021459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aafaae519efb15a1fe9de338361692b09adc27c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/logs/manage.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '209012376355aba1870b3809-21021459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logs' => 0,
    'log' => 0,
    '_type' => 0,
    '_action' => 0,
    'v' => 0,
    'k' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aba18718ead5_27379115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aba18718ead5_27379115')) {function content_55aba18718ead5_27379115($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('content','user','ip','time','backtrace','no_data','settings','phpinfo','db_backup_restore','clean_logs','logs'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"logs.manage",'view_type'=>"logs"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/logs/components/logs_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
<table class="table">
<thead>
    <tr>
        <th><?php echo $_smarty_tpl->__("content");?>
</th>
        <th><?php echo $_smarty_tpl->__("user");?>
</th>
        <th><?php echo $_smarty_tpl->__("ip");?>
</th>
        <th><?php echo $_smarty_tpl->__("time");?>
</th>
    </tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars["log"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["log"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["log"]->key => $_smarty_tpl->tpl_vars["log"]->value) {
$_smarty_tpl->tpl_vars["log"]->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["_type"] = new Smarty_variable("log_type_".((string)$_smarty_tpl->tpl_vars['log']->value['type']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_action"] = new Smarty_variable("log_action_".((string)$_smarty_tpl->tpl_vars['log']->value['action']), null, 0);?>
<tr>
    <td width="70%" class="wrap">
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_type']->value);?>
<?php if ($_smarty_tpl->tpl_vars['log']->value['action']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_action']->value);?>
)<?php }?><br>
        <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['log']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value&&$_smarty_tpl->tpl_vars['k']->value!='ip_address'&&$_smarty_tpl->tpl_vars['k']->value!='id') {?>
            <strong><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['k']->value);?>
:</strong> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</span><br />
        <?php }?>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['log']->value['backtrace']) {?>
        <p><a onclick="Tygh.$('#backtrace_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['log_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;" class="underlined"><span><?php echo $_smarty_tpl->__("backtrace");?>
&rsaquo;&rsaquo;</span></a></p>
        <div id="backtrace_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['log_id'], ENT_QUOTES, 'UTF-8');?>
" class="notice-box hidden">
        <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value['backtrace']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['file'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['function']) {?>&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['function'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['line'], ENT_QUOTES, 'UTF-8');?>
<br />
        <?php } ?>
        </div>
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['log']->value['user_id']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['log']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['log']->value['firstname']||$_smarty_tpl->tpl_vars['log']->value['lastname']) {?>&nbsp;<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            &mdash;
        <?php }?>
    </td>
    <td class="center">
        <?php if ($_smarty_tpl->tpl_vars['log']->value['content']['ip_address']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['content']['ip_address'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>&mdash;<?php }?>
    </td>
    <td>
        <span class="nowrap"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
    </td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"logs:tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"logs:tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("settings"),'href'=>"settings.manage?section_id=Logging"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>__("phpinfo"),'href'=>"tools.phpinfo"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("db_backup_restore"),'href'=>"database.manage"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("clean_logs"),'href'=>"logs.clean",'class'=>"cm-confirm"));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"logs:tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("logs"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
