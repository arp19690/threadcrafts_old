<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 22:30:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/call_requests/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87901296455a949d7dd53c3-46983723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cddc854aa810f47a2b76618337ebca74ba475119' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/call_requests/hooks/index/scripts.post.tpl',
      1 => 1433514708,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '87901296455a949d7dd53c3-46983723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'call_requests_phone_mask_codes' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a949d7e15f73_07515424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a949d7e15f73_07515424')) {function content_55a949d7e15f73_07515424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/call_requests/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>


<script type="text/javascript">
    (function(_, $) {
        _.call_requests_phone_masks_list = <?php echo $_smarty_tpl->tpl_vars['call_requests_phone_mask_codes']->value;?>
;
    }(Tygh, Tygh.$));
</script>

<?php echo smarty_function_script(array('src'=>"js/addons/call_requests/call_requests.js"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/call_requests/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>


<script type="text/javascript">
    (function(_, $) {
        _.call_requests_phone_masks_list = <?php echo $_smarty_tpl->tpl_vars['call_requests_phone_mask_codes']->value;?>
;
    }(Tygh, Tygh.$));
</script>

<?php echo smarty_function_script(array('src'=>"js/addons/call_requests/call_requests.js"),$_smarty_tpl);?>
<?php }?><?php }} ?>
