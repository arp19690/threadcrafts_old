<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:34:11
         compiled from "/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/companies/top_links.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91089828355aa249b5fcfc9-60642602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86472e0f8fd561543475b8911347a0cea50f9793' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/companies/top_links.pre.tpl',
      1 => 1437201218,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91089828355aa249b5fcfc9-60642602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'discussion' => 0,
    'object_type' => 0,
    'object_id' => 0,
    'obj_id' => 0,
    'rating' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa249b669233_81067317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa249b669233_81067317')) {function content_55aa249b669233_81067317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('reviews','write_review','reviews','write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <span class="ty-discussion__rating-wrapper" id="average_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items']) {?>
            <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>        
        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {?>
            <a class="ty-discussion__review-write cm-external-click cm-dialog-opener cm-dialog-auto-size" data-ca-external-click-id="discussion" data-ca-target-id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("write_review");?>
</a>
        <?php }?>
    <!--average_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></span>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/top_links.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/top_links.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <span class="ty-discussion__rating-wrapper" id="average_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items']) {?>
            <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company_data']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>        
        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {?>
            <a class="ty-discussion__review-write cm-external-click cm-dialog-opener cm-dialog-auto-size" data-ca-external-click-id="discussion" data-ca-target-id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("write_review");?>
</a>
        <?php }?>
    <!--average_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></span>
<?php }?><?php }?><?php }} ?>
