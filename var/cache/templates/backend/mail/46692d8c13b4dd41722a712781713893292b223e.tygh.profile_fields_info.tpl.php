<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:45:06
         compiled from "/var/www/html/design/backend/mail/templates/profiles/profile_fields_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114413361755c84f7ab465e6-71114154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46692d8c13b4dd41722a712781713893292b223e' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/profile_fields_info.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114413361755c84f7ab465e6-71114154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'fields' => 0,
    'user_data' => 0,
    'field' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84f7ab5c8d0_06653676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84f7ab5c8d0_06653676')) {function content_55c84f7ab5c8d0_06653676($_smarty_tpl) {?><tr>
    <td colspan="2" class="form-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
<hr size="1" noshade="noshade" /></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
<tr>
    <td class="form-field-caption" width="30%" nowrap="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
    <td>
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>

    </td>
</tr>
<?php }?>
<?php } ?><?php }} ?>
