<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:39:03
         compiled from "/var/www/html/design/backend/templates/addons/store_locator/views/store_locator/components/maps/google.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9441947455f318bf652428-70009553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6210291344bc62df36e080185555762c2e5d19df' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/store_locator/views/store_locator/components/maps/google.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9441947455f318bf652428-70009553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map_provider_api' => 0,
    'map_container' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f318bf66a2d8_31227097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f318bf66a2d8_31227097')) {function content_55f318bf66a2d8_31227097($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php if (!Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['map_provider_api']->value]) {?>
<script src="http://www.google.com/jsapi"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;language=<?php echo htmlspecialchars(fn_store_locator_google_langs(@constant('CART_LANGUAGE')), ENT_QUOTES, 'UTF-8');?>
" type="text/javascript"></script>
<?php echo smarty_function_script(array('src'=>"/js/addons/store_locator/google.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array(((string)$_smarty_tpl->tpl_vars['map_provider_api']->value), null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<script type="text/javascript">
    
    (function(_, $) {

        options = {
            
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
'
            
        };

        $.ceMap('init', options);
    }(Tygh, Tygh.$));
    
</script><?php }} ?>
