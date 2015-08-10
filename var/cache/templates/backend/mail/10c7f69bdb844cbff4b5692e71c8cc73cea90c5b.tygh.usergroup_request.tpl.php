<?php /* Smarty version Smarty-3.1.18, created on 2015-08-07 15:07:22
         compiled from "/var/www/html/design/backend/mail/templates/profiles/usergroup_request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81349485055c47c522b9061-68301747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c7f69bdb844cbff4b5692e71c8cc73cea90c5b' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/profiles/usergroup_request.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81349485055c47c522b9061-68301747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'usergroup_id' => 0,
    'usergroups' => 0,
    'settings' => 0,
    'user_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c47c52316bc1_24442224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c47c52316bc1_24442224')) {function content_55c47c52316bc1_24442224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_usergroup_request','usergroup','username','person_name','email','text_usergroup_request','usergroup','username','person_name','email'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_usergroup_request");?>
<br>
<p>
<table>
<tr>
    <td><?php echo $_smarty_tpl->__("usergroup");?>
:</td>
    <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroups']->value[$_smarty_tpl->tpl_vars['usergroup_id']->value]['usergroup'], ENT_QUOTES, 'UTF-8');?>
</b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
<tr>
    <td><?php echo $_smarty_tpl->__("username");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_login'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php }?>
<tr>
    <td><?php echo $_smarty_tpl->__("person_name");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("email");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
</table>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_type'=>'A'), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="profiles/usergroup_request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"profiles/usergroup_request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_usergroup_request");?>
<br>
<p>
<table>
<tr>
    <td><?php echo $_smarty_tpl->__("usergroup");?>
:</td>
    <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroups']->value[$_smarty_tpl->tpl_vars['usergroup_id']->value]['usergroup'], ENT_QUOTES, 'UTF-8');?>
</b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
<tr>
    <td><?php echo $_smarty_tpl->__("username");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_login'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php }?>
<tr>
    <td><?php echo $_smarty_tpl->__("person_name");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->__("email");?>
:</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
</table>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_type'=>'A'), 0);?>
<?php }?><?php }} ?>
