<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:47:26
         compiled from "/var/www/html/design/backend/templates/views/companies/components/company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162669406655c850065ef369-74539793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de145a7f2731103b4ca0c9890329c6d3364e0e7' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/company_name.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162669406655c850065ef369-74539793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c850066088a1_27586410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c850066088a1_27586410')) {function content_55c850066088a1_27586410($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php } else { ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
    <?php }?>
<?php }?><?php }} ?>
