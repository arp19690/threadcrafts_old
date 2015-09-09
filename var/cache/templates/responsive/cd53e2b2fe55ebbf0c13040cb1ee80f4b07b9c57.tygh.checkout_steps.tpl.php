<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:52:28
         compiled from "/var/www/html/design/themes/responsive/templates/views/checkout/components/checkout_steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136881671855efb404a22dd5-22671175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd53e2b2fe55ebbf0c13040cb1ee80f4b07b9c57' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/checkout/components/checkout_steps.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136881671855efb404a22dd5-22671175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'edit_step' => 0,
    'completed_steps' => 0,
    'edit' => 0,
    'profile_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb404b1bfb4_36687690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb404b1bfb4_36687690')) {function content_55efb404b1bfb4_36687690($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('continue','continue','continue','continue','continue','continue','continue','continue','continue','continue','continue','continue'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
    <?php $_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_one") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_two") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_three") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_four") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>    
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['checkout_error_content'];?>

    
    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_one") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>true,'but_text'=>__("continue")), 0);?>

        
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_two") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>true,'but_text'=>__("continue")), 0);?>

            
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_three") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>true,'but_text'=>__("continue")), 0);?>

        
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_four") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('edit'=>true,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>
<?php }?>
<!--checkout_steps--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_steps.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_steps.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
    <?php $_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_one") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_two") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_three") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_four") {?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(true, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable(false, null, 0);?><?php }?>    
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['checkout_error_content'];?>

    
    <?php if ($_smarty_tpl->tpl_vars['edit_step']->value=="step_one") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>true,'but_text'=>__("continue")), 0);?>

        
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_two") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>true,'but_text'=>__("continue")), 0);?>

            
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_three") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>true,'but_text'=>__("continue")), 0);?>

        
    <?php } elseif ($_smarty_tpl->tpl_vars['edit_step']->value=="step_four") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('edit'=>true,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>
<?php }?>
<!--checkout_steps--></div><?php }?><?php }} ?>
