<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 01:58:36
         compiled from "/var/www/html/design/themes/responsive/templates/addons/shipway/views/track/track.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67043998955aab6f47fc3b7-56424654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd287c5930777acd5e13d03ae7aa88807de5e80ad' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/shipway/views/track/track.tpl',
      1 => 1437251308,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67043998955aab6f47fc3b7-56424654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'track_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aab6f48664b2_41730315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aab6f48664b2_41730315')) {function content_55aab6f48664b2_41730315($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('submit','submit'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-company-fields">
    <h1 class="ty-mainbox-title">Track Your Shipment Status</h1>

    <div id="track_shipment" > 

        <form action="<?php echo htmlspecialchars(fn_url("track.track"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="track_shipment_form">

            <div class="ty-control-group">
                <label for="order_id" class="ty-control-group__title cm-required">Order ID</label>
                <input type="text" name="order_id" id="track_order_id" size="8" value="" class="ty-input-text" />
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0);?>

            </div>
        </form>		
    </div>
	<?php if (isset($_smarty_tpl->tpl_vars['track_data']->value)) {?>
		<div id="track_data">
			<?php echo $_smarty_tpl->tpl_vars['track_data']->value;?>

				
		</div>
	<?php }?>
</div>

<style>
 #track_shipment{}
 #track_data{width: 80%;margin: 0 auto;}
 .error{ max-width:50% ;background-color: #D82F2F;padding: 10px 20px;color: #ffffff;font-size: 14px;width: 80%;margin: 0 auto;border: 1px solid #AD2C2C;border-radius: 3px;text-align:center;}
 .track_table{margin: 20px auto;width: 50%;border: 1px solid #1A7AA0;text-align:center;}
 .track_table tr.head{   background-color: #428BCA;  color: #fff;}
 .track_table tr th{ border-right:1px solid #fff;padding:5px; }
 .track_table tr td{border-right:1px solid #2eade0;padding:5px;}
 .row-fluid .span0{width:23.404255319149%!important;}
 </style>
 
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/shipway/views/track/track.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/shipway/views/track/track.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-company-fields">
    <h1 class="ty-mainbox-title">Track Your Shipment Status</h1>

    <div id="track_shipment" > 

        <form action="<?php echo htmlspecialchars(fn_url("track.track"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="track_shipment_form">

            <div class="ty-control-group">
                <label for="order_id" class="ty-control-group__title cm-required">Order ID</label>
                <input type="text" name="order_id" id="track_order_id" size="8" value="" class="ty-input-text" />
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0);?>

            </div>
        </form>		
    </div>
	<?php if (isset($_smarty_tpl->tpl_vars['track_data']->value)) {?>
		<div id="track_data">
			<?php echo $_smarty_tpl->tpl_vars['track_data']->value;?>

				
		</div>
	<?php }?>
</div>

<style>
 #track_shipment{}
 #track_data{width: 80%;margin: 0 auto;}
 .error{ max-width:50% ;background-color: #D82F2F;padding: 10px 20px;color: #ffffff;font-size: 14px;width: 80%;margin: 0 auto;border: 1px solid #AD2C2C;border-radius: 3px;text-align:center;}
 .track_table{margin: 20px auto;width: 50%;border: 1px solid #1A7AA0;text-align:center;}
 .track_table tr.head{   background-color: #428BCA;  color: #fff;}
 .track_table tr th{ border-right:1px solid #fff;padding:5px; }
 .track_table tr td{border-right:1px solid #2eade0;padding:5px;}
 .row-fluid .span0{width:23.404255319149%!important;}
 </style>
 
<?php }?><?php }} ?>
