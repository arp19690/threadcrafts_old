<?php /* Smarty version Smarty-3.1.18, created on 2015-07-24 10:11:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/social_buttons/providers/twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177036229955b1c213db8187-98641078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa89485ff25a13a11370422813842cb862578a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/social_buttons/providers/twitter.tpl',
      1 => 1437239221,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177036229955b1c213db8187-98641078',
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
  'unifunc' => 'content_55b1c213ebb6b8_79678087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1c213ebb6b8_79678087')) {function content_55b1c213ebb6b8_79678087($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<script type="text/javascript" class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function () {
        if($(".twitter-share-button").length > 0){
            if (typeof (twttr) != 'undefined') {
                twttr.widgets.load();
            } else {
                $.getScript('//platform.twitter.com/widgets.js');
            }
        }
    });
}(Tygh, Tygh.$));
</script>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/twitter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/twitter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<script type="text/javascript" class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function () {
        if($(".twitter-share-button").length > 0){
            if (typeof (twttr) != 'undefined') {
                twttr.widgets.load();
            } else {
                $.getScript('//platform.twitter.com/widgets.js');
            }
        }
    });
}(Tygh, Tygh.$));
</script>
<?php }?>
<?php }?><?php }} ?>
