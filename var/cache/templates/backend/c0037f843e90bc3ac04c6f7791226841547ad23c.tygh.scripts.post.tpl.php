<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:34:59
         compiled from "/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75517073255a9f393629517-87128973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0037f843e90bc3ac04c6f7791226841547ad23c' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75517073255a9f393629517-87128973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_pre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f3936361f8_97223118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f3936361f8_97223118')) {function content_55a9f3936361f8_97223118($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('text_vendor_profile_changes_notice'));
?>
<script type="text/javascript">
(function(_, $) {
	_.tr({
		text_vendor_profile_changes_notice: '<?php echo strtr($_smarty_tpl->__("text_vendor_profile_changes_notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
	});
	_.vendor_pre = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['vendor_pre']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'ISO-8859-1');?>
';
}(Tygh, Tygh.$));
</script>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_data_premoderation/func.js"),$_smarty_tpl);?>


<?php }} ?>
