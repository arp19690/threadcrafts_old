<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 22:30:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/google_analytics/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129937650755a949d7d7bd49-67195411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76aec65f76a57de87b1a189c3413d569723c1c56' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/design/themes/responsive/templates/addons/google_analytics/hooks/index/scripts.post.tpl',
      1 => 1433514709,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129937650755a949d7d7bd49-67195411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'config' => 0,
    'addons' => 0,
    'url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a949d7dd0736_88076601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a949d7dd0736_88076601')) {function content_55a949d7dd0736_88076601($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/addons/google_analitycs/google_analitycs.js"),$_smarty_tpl);?>

<script type="text/javascript">
(function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url'],'C','rel'), null, 0);?>
ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', 'auto');
ga('send', 'pageview', '<?php echo strtr($_smarty_tpl->tpl_vars['url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/google_analytics/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/addons/google_analitycs/google_analitycs.js"),$_smarty_tpl);?>

<script type="text/javascript">
(function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url'],'C','rel'), null, 0);?>
ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', 'auto');
ga('send', 'pageview', '<?php echo strtr($_smarty_tpl->tpl_vars['url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
</script>
<?php }?><?php }} ?>
