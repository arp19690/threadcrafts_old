<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:58:50
         compiled from "/var/www/html/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212397837955c852b2420284-74243166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563c165885bcd0b1c497c132f4c7718892d14287' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/previewer.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '212397837955c852b2420284-74243166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c852b2424b63_11409335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c852b2424b63_11409335')) {function content_55c852b2424b63_11409335($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
