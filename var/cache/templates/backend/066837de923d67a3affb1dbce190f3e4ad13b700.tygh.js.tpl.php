<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:08:23
         compiled from "/var/www/html/design/backend/templates/pickers/pages/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106964920155aa1e8f83ac47-86003501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066837de923d67a3affb1dbce190f3e4ad13b700' => 
    array (
      0 => '/var/www/html/design/backend/templates/pickers/pages/js.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106964920155aa1e8f83ac47-86003501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'default_name' => 0,
    'multiple' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'page' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
    'hide_input' => 0,
    'input_id' => 0,
    'first_item' => 0,
    'single_line' => 0,
    'extra_class' => 0,
    'display_input_id' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa1e8f8a51a0_47350820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e8f8a51a0_47350820')) {function content_55aa1e8f8a51a0_47350820($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["page"] = new Smarty_variable((($tmp = @fn_get_page_name($_smarty_tpl->tpl_vars['page_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."page".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["page"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td><input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-text-short"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
    
    <td><a href="<?php echo htmlspecialchars(fn_url("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></td>

    <td>
        <div class="hidden-tools">
        <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['page_id']->value)."', 'a'); return false;"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php }?>
        </div>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
        <input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <?php }?>
</tr>
<?php } else { ?>
    <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item no-margin<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
    <input class="cm-picker-value-description <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> size="10" name="page_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'ISO-8859-1');?>
>&nbsp;
    </span>
<?php }?><?php }} ?>
