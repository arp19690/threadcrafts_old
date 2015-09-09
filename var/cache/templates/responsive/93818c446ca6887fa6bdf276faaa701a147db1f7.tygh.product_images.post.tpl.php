<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 22:38:14
         compiled from "/var/www/html/design/themes/responsive/templates/addons/image_zoom/hooks/products/product_images.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88817489455ef15fe3698e8-39105978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93818c446ca6887fa6bdf276faaa701a147db1f7' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/image_zoom/hooks/products/product_images.post.tpl',
      1 => 1439189920,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '88817489455ef15fe3698e8-39105978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ef15fe3facd9_75068073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ef15fe3facd9_75068073')) {function content_55ef15fe3facd9_75068073($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/cloudzoom.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function(context) {

        // Disable Cloud zoom on mobile devices
        if($(window).width() > 767) {

            context.find('.cm-previewer').each(function() {
                var elm = $(this).find('img');
                if(elm.data('CloudZoom') == undefined) {
                    elm.attr('data-cloudzoom', 'zoomImage: "' + $(this).prop('href') + '"')
                        .CloudZoom({
                            tintColor: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_tint_color_picker'])===null||$tmp==='' ? "#ffffff" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            tintOpacity: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_opacity'])===null||$tmp==='' ? 0.6 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            animationTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            easeTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_ease_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            zoomFlyOut: <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_fly_out']=='Y') {?>true<?php } else { ?>false<?php }?>,
                            zoomSizeMode: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_size_mode'])===null||$tmp==='' ? "zoom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            captionPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_caption_position'])===null||$tmp==='' ? "bottom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position']=='inside') {?>zoomOffsetX: 0,<?php }?>
                            zoomPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            autoInside: 767,
                            disableOnScreenWidth: 767
                    });
                }
            });

        }
    });

}(Tygh, Tygh.$));
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/products/product_images.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/products/product_images.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/cloudzoom.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function(context) {

        // Disable Cloud zoom on mobile devices
        if($(window).width() > 767) {

            context.find('.cm-previewer').each(function() {
                var elm = $(this).find('img');
                if(elm.data('CloudZoom') == undefined) {
                    elm.attr('data-cloudzoom', 'zoomImage: "' + $(this).prop('href') + '"')
                        .CloudZoom({
                            tintColor: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_tint_color_picker'])===null||$tmp==='' ? "#ffffff" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            tintOpacity: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_opacity'])===null||$tmp==='' ? 0.6 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            animationTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            easeTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_ease_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            zoomFlyOut: <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_fly_out']=='Y') {?>true<?php } else { ?>false<?php }?>,
                            zoomSizeMode: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_size_mode'])===null||$tmp==='' ? "zoom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            captionPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_caption_position'])===null||$tmp==='' ? "bottom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position']=='inside') {?>zoomOffsetX: 0,<?php }?>
                            zoomPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            autoInside: 767,
                            disableOnScreenWidth: 767
                    });
                }
            });

        }
    });

}(Tygh, Tygh.$));
</script>
<?php }?><?php }} ?>
