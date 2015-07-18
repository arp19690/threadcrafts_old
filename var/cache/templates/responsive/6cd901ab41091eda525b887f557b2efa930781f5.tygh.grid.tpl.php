<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:05:15
         compiled from "/var/www/html/design/themes/responsive/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107335367055a9ec9b20f709-18973544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd901ab41091eda525b887f557b2efa930781f5' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/block_manager/render/grid.tpl',
      1 => 1437198874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107335367055a9ec9b20f709-18973544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'content' => 0,
    'fluid_width' => 0,
    'width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9ec9b243a93_38741383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9ec9b243a93_38741383')) {function content_55a9ec9b243a93_38741383($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
        <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'ISO-8859-1');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>
" >
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }?><?php }} ?>
