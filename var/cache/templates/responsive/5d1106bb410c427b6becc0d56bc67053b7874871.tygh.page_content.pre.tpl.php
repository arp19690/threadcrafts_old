<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 19:45:14
         compiled from "/var/www/html/design/themes/responsive/templates/addons/social_buttons/hooks/pages/page_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146535805455eeed726385d1-11308209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1106bb410c427b6becc0d56bc67053b7874871' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/social_buttons/hooks/pages/page_content.pre.tpl',
      1 => 1439189924,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '146535805455eeed726385d1-11308209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'display_button_block' => 0,
    'provider_settings' => 0,
    'provider_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eeed7267a358_08861555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eeed7267a358_08861555')) {function content_55eeed7267a358_08861555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <div class="ty-social-buttons clearfix">
    <?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provider_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value&&$_smarty_tpl->tpl_vars['provider_data']->value['template']&&$_smarty_tpl->tpl_vars['provider_data']->value['data']) {?>
            <div class="ty-social-buttons__inline"><?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/providers/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
        <?php }?>
    <?php } ?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/pages/page_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/pages/page_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <div class="ty-social-buttons clearfix">
    <?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provider_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value&&$_smarty_tpl->tpl_vars['provider_data']->value['template']&&$_smarty_tpl->tpl_vars['provider_data']->value['data']) {?>
            <div class="ty-social-buttons__inline"><?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/providers/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
        <?php }?>
    <?php } ?>
    </div>
<?php }?>
<?php }?><?php }} ?>
