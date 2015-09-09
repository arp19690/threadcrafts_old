<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:26:23
         compiled from "/var/www/html/design/themes/responsive/templates/addons/cp_ajax_update/hooks/checkout/extra_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57064130555efbbf71315a9-41259157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35a7e292b9b16ad3a78ae799925945b85403fc0' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/cp_ajax_update/hooks/checkout/extra_list.post.tpl',
      1 => 1441635482,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57064130555efbbf71315a9-41259157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efbbf7150964_18666023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efbbf7150964_18666023')) {function content_55efbbf7150964_18666023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
    <script>
        $(document).ready(function() {
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
        });
        $(document).ajaxComplete(function(event,request, settings) {
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            var url = settings.url;
            if (url.indexOf("products.options") >= 0) {
                $('#button_cart').click();
            }
        }); 
    </script>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_ajax_update/hooks/checkout/extra_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_ajax_update/hooks/checkout/extra_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
    <script>
        $(document).ready(function() {
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
        });
        $(document).ajaxComplete(function(event,request, settings) {
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            var url = settings.url;
            if (url.indexOf("products.options") >= 0) {
                $('#button_cart').click();
            }
        }); 
    </script>

<?php }?><?php }} ?>
