<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:08:52
         compiled from "/var/www/html/design/themes/responsive/templates/addons/search_ajax/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67012064155eed6dc7ce920-18215183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '564b1bb9ee37f137d192d4aeaefcdcf7b7cf8ef8' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/search_ajax/hooks/index/scripts.post.tpl',
      1 => 1439267957,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67012064155eed6dc7ce920-18215183',
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
  'unifunc' => 'content_55eed6dc7fc122_02761429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed6dc7fc122_02761429')) {function content_55eed6dc7fc122_02761429($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!-- include if not exist -->
<!-- script src="js/lib/jqueryui/jquery-ui.custom.min.js" -->
<script type="text/javascript">
var ajax ;
	var data_ajax;
  $(function() {
    var input_search = $("form[name=search_form] input[type=text]");
	input_search.autocomplete
	({
		minLength: 0,
	  source: function (request, response) 
	  {
		  var q = input_search.val();
		  if(ajax != null)
		  	ajax.abort();
		  ajax =  $.ajax({
			  url: '<?php echo htmlspecialchars(fn_url("products.search"), ENT_QUOTES, 'UTF-8');?>
'+ '&' + $('form[name=search_form]').serialize(),
			  dataType: "json",
			  data:{},
			  success: function (data) {
				data_ajax = data.html;
				response($.map(data, function(v,i)
				  {
					   if(input_search.val().length >= 1)
					  {
						  return 1;
					  }
				  }));
			  }
		  });
	  },
	  open: function ()
	  {
		  $('ul.ui-autocomplete').html(data_ajax);
	  }
	});
 });
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/search_ajax/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/search_ajax/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><!-- include if not exist -->
<!-- script src="js/lib/jqueryui/jquery-ui.custom.min.js" -->
<script type="text/javascript">
var ajax ;
	var data_ajax;
  $(function() {
    var input_search = $("form[name=search_form] input[type=text]");
	input_search.autocomplete
	({
		minLength: 0,
	  source: function (request, response) 
	  {
		  var q = input_search.val();
		  if(ajax != null)
		  	ajax.abort();
		  ajax =  $.ajax({
			  url: '<?php echo htmlspecialchars(fn_url("products.search"), ENT_QUOTES, 'UTF-8');?>
'+ '&' + $('form[name=search_form]').serialize(),
			  dataType: "json",
			  data:{},
			  success: function (data) {
				data_ajax = data.html;
				response($.map(data, function(v,i)
				  {
					   if(input_search.val().length >= 1)
					  {
						  return 1;
					  }
				  }));
			  }
		  });
	  },
	  open: function ()
	  {
		  $('ul.ui-autocomplete').html(data_ajax);
	  }
	});
 });
</script><?php }?><?php }} ?>
