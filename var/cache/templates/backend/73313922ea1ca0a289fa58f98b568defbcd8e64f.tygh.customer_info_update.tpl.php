<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:12:21
         compiled from "/var/www/html/design/backend/templates/views/order_management/components/customer_info_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92720955355efb8ad5807a2-51400393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73313922ea1ca0a289fa58f98b568defbcd8e64f' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/order_management/components/customer_info_update.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92720955355efb8ad5807a2-51400393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_ids' => 0,
    'customer_auth' => 0,
    'settings' => 0,
    'user_data' => 0,
    'cart' => 0,
    'user_profiles' => 0,
    'user_profile' => 0,
    'current_profile_id' => 0,
    'users_shared_force' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb8ad5e6dd9_93300980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb8ad5e6dd9_93300980')) {function content_55efb8ad5e6dd9_93300980($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('customer_info','select_profile','contact_information','billing_address','shipping_address','cancel','choose_user','update'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div title="<?php echo $_smarty_tpl->__("customer_info");?>
" id="customer_info">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit cm-ajax cm-form-dialog-closer" name="om_customer_info_form">

<input type="hidden" name="result_ids" value="customer_info,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['customer_auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=="Y") {?> 
    <?php $_smarty_tpl->tpl_vars['current_profile_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['profile_id'] : $tmp), null, 0);?>
    <div class="control-group">
        <label class="control-label" for="profile_id"><?php echo $_smarty_tpl->__("select_profile");?>
</label>
        <div class="controls">
            <select name="profile_id" id="profile_id" class="select-expanded">
                <?php  $_smarty_tpl->tpl_vars["user_profile"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user_profile"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["user_profile"]->key => $_smarty_tpl->tpl_vars["user_profile"]->value) {
$_smarty_tpl->tpl_vars["user_profile"]->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_profile']->value['profile_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_profile_id']->value==$_smarty_tpl->tpl_vars['user_profile']->value['profile_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_profile']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
<?php }?>

<div id="profile_fields_c">
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"C",'title'=>__("contact_information")), 0);?>

</div>
<div id="profile_fields_b">
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"B",'title'=>__("billing_address")), 0);?>

</div>
<div id="profile_fields_s">
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'section'=>"S",'title'=>__("shipping_address"),'body_id'=>"sa"), 0);?>

</div>

<?php if (!$_smarty_tpl->tpl_vars['customer_auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('redirect_denied'=>true), 0);?>

<?php }?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:customer_info_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:customer_info_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="buttons-container">
    <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page']),'display'=>"radio",'but_text'=>__("choose_user"),'no_container'=>true,'but_meta'=>"btn",'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("update"),'but_meta'=>'','but_name'=>"dispatch[order_management.customer_info]",'but_role'=>"button_main"), 0);?>

</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:customer_info_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</form>
<!--customer_info--></div>

<script type="text/javascript">
(function(_, $) {
    $(_.doc).on('change', '#profile_id', function() {
        var data = {
            'result_ids' : 'customer_info'
        };

        $.ceAjax('request', '<?php echo fn_url("order_management.customer_info?profile_id=");?>
' + $(this).val(), data);
    });
}(Tygh, Tygh.$));
</script><?php }} ?>
