<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:17:07
         compiled from "/var/www/html/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55982591455f3139b7834c3-57362712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10687664e7c16294b418db2397c2aceb483870d3' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/sidebox.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '55982591455f3139b7834c3-57362712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f3139b78d3f0_76720649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f3139b78d3f0_76720649')) {function content_55f3139b78d3f0_76720649($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
