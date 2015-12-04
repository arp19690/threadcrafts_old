<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 15:34:07
         compiled from "/var/www/html/design/backend/mail/templates/companies/apply_for_vendor_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141846880455fbe19704a812-87391204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22f2db5c96638f7ff1d38e70786995b1e03658c' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/companies/apply_for_vendor_notification.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141846880455fbe19704a812-87391204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_id' => 0,
    'company' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fbe197117e58_03783020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fbe197117e58_03783020')) {function content_55fbe197117e58_03783020($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_candidate_notification','company_name','description','account_name','first_name','last_name','email','phone','url','fax','address','city','country','state','zip_postal_code','vendor_candidate_notification','company_name','description','account_name','first_name','last_name','email','phone','url','fax','address','city','country','state','zip_postal_code'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["company_update_url"] = new Smarty_variable(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value),'A','http',@constant('CART_LANGUAGE'),true), null, 0);?>
<?php echo $_smarty_tpl->__("vendor_candidate_notification",array("<a>"=>"<a href=".((string)$_smarty_tpl->tpl_vars['company_update_url']->value).">"));?>


<br/><br/>

<table>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("company_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['company_description']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("description");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_description'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['request_account_name']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("account_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['request_account_name'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['admin_firstname']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("first_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['admin_firstname'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['admin_lastname']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("last_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['admin_lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("email");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("phone");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['url']) {?>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("url");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['url'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['fax']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("fax");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("address");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['address'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("city");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['city'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("country");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['country'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("state");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['state'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("zip_postal_code");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
</table><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="companies/apply_for_vendor_notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"companies/apply_for_vendor_notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["company_update_url"] = new Smarty_variable(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value),'A','http',@constant('CART_LANGUAGE'),true), null, 0);?>
<?php echo $_smarty_tpl->__("vendor_candidate_notification",array("<a>"=>"<a href=".((string)$_smarty_tpl->tpl_vars['company_update_url']->value).">"));?>


<br/><br/>

<table>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("company_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['company_description']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("description");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_description'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['request_account_name']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("account_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['request_account_name'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['admin_firstname']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("first_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['admin_firstname'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['admin_lastname']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("last_name");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['admin_lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("email");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("phone");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['url']) {?>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("url");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['url'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value['fax']) {?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("fax");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php }?>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("address");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['address'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("city");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['city'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("country");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['country'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("state");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['state'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("zip_postal_code");?>
:&nbsp;</td>
        <td ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
</table><?php }?><?php }} ?>
