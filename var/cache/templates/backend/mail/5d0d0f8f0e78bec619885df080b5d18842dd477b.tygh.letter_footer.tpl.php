<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 12:45:06
         compiled from "/var/www/html/design/backend/mail/templates/common/letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166115901455c84f7ab5ef29-19720460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0d0f8f0e78bec619885df080b5d18842dd477b' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/common/letter_footer.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166115901455c84f7ab5ef29-19720460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84f7ab657e6_65219535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84f7ab657e6_65219535')) {function content_55c84f7ab657e6_65219535($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('admin_text_letter_footer'));
?>
<p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }} ?>
