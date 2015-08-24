<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 22:46:53
         compiled from "/var/www/html/design/backend/templates/views/profiles/components/profile_fields_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164087834755d4ba0512be98-90712738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b918727526601415b1700a08ce0bcbc62f460639' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/profiles/components/profile_fields_info.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '164087834755d4ba0512be98-90712738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'field' => 0,
    'user_data' => 0,
    'customer_info' => 0,
    'first_field' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4ba05156ff3_78237324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4ba05156ff3_78237324')) {function content_55d4ba05156ff3_78237324($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["first_field"] = new Smarty_variable(true, null, 0);?>
<p>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name']) {?>
        <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
            <?php if (!$_smarty_tpl->tpl_vars['first_field']->value) {?>, <?php }?><span class="additional-fields">
        <?php } else { ?>
            <div class="control-group">
        <?php }?>
        <?php $_smarty_tpl->tpl_vars["first_field"] = new Smarty_variable(false, null, 0);?>

            <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>


        <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
            </span>
        <?php } else { ?>
            </div>
        <?php }?>
    <?php }?>
<?php } ?>
</p><?php }} ?>
