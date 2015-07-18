<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:35:53
         compiled from "/var/www/html/design/backend/mail/templates/profiles/usergroup_disactivation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27849535955aa6b51c076a0-43441085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9054e1d965215dcba30b356d3006c35f4bd997b3' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/usergroup_disactivation.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27849535955aa6b51c076a0-43441085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usergroup_ids' => 0,
    'u_id' => 0,
    'usergroups' => 0,
    'settings' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6b51c3b522_69264755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6b51c3b522_69264755')) {function content_55aa6b51c3b522_69264755($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_usergroup_disactivated','usergroups','usergroup','username','person_name'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_usergroup_disactivated");?>
<br>
<p>
<table>
<tr>
    <td><?php if (sizeof($_smarty_tpl->tpl_vars['usergroup_ids']->value)>1) {?><?php echo $_smarty_tpl->__("usergroups");?>
<?php } else { ?><?php echo $_smarty_tpl->__("usergroup");?>
<?php }?>:</td>
    <td>
        <?php  $_smarty_tpl->tpl_vars['u_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroup_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['u_id']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['u_id']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['u_id']->key => $_smarty_tpl->tpl_vars['u_id']->value) {
$_smarty_tpl->tpl_vars['u_id']->_loop = true;
 $_smarty_tpl->tpl_vars['u_id']->iteration++;
 $_smarty_tpl->tpl_vars['u_id']->last = $_smarty_tpl->tpl_vars['u_id']->iteration === $_smarty_tpl->tpl_vars['u_id']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ugroups']['last'] = $_smarty_tpl->tpl_vars['u_id']->last;
?>
            <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroups']->value[$_smarty_tpl->tpl_vars['u_id']->value]['usergroup'], ENT_QUOTES, 'ISO-8859-1');?>
</b><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['ugroups']['last']) {?>, <?php }?>
        <?php } ?>
    </td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("username");?>
:</td>
    <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=='Y') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'ISO-8859-1');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_login'], ENT_QUOTES, 'ISO-8859-1');?>
<?php }?></td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("person_name");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
</tr>
</table>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
