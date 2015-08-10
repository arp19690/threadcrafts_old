<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:12:13
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26632240855b1c225dc8394-26317807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a9f8a6300f650c32e085b3b6deb9e8b9ddfc8e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26632240855b1c225dc8394-26317807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'redirect_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b1c225e2fab0_34754911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1c225e2fab0_34754911')) {function content_55b1c225e2fab0_34754911($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><script type="text/javascript">

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');?>
';
        opener.location.href = url.replace(/\&amp;/g,'&');
    <?php } else { ?>
        opener.location.reload();
    <?php }?>

    close();

</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/login_error.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/views/auth/login_error.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><script type="text/javascript">

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');?>
';
        opener.location.href = url.replace(/\&amp;/g,'&');
    <?php } else { ?>
        opener.location.reload();
    <?php }?>

    close();

</script><?php }?><?php }} ?>
