<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 00:32:48
         compiled from "/var/www/html/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178327032855aaa2d86d0934-00711862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d4a9225de22e0581a9e909b19a7ad4795c4b24d' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl',
      1 => 1437201224,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178327032855aaa2d86d0934-00711862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aaa2d8713e90_58918115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aaa2d8713e90_58918115')) {function content_55aaa2d8713e90_58918115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']&&$_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'], ENT_QUOTES, 'UTF-8');?>
></div>
<script class="cm-ajax-force">
    if ($(".fb-like").length > 0) {
        if (typeof (FB) != 'undefined') {
            FB.init({ status: true, cookie: true, xfbml: true });
        } else {
            $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                FB.init({ status: true, cookie: true, xfbml: true });
            });
        }
    }
</script>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']&&$_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'], ENT_QUOTES, 'UTF-8');?>
></div>
<script class="cm-ajax-force">
    if ($(".fb-like").length > 0) {
        if (typeof (FB) != 'undefined') {
            FB.init({ status: true, cookie: true, xfbml: true });
        } else {
            $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                FB.init({ status: true, cookie: true, xfbml: true });
            });
        }
    }
</script>
<?php }?>
<?php }?><?php }} ?>
