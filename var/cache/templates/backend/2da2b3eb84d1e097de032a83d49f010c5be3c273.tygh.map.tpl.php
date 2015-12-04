<?php /* Smarty version Smarty-3.1.18, created on 2015-09-11 23:39:03
         compiled from "/var/www/html/design/backend/templates/addons/store_locator/pickers/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153236684355f318bf6249e6-09183003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da2b3eb84d1e097de032a83d49f010c5be3c273' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/store_locator/pickers/map.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153236684355f318bf6249e6-09183003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'map_provider' => 0,
    'map_admin_templates' => 0,
    'map_container' => 0,
    'allow_save' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f318bf64a332_08843128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f318bf64a332_08843128')) {function content_55f318bf64a332_08843128($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('select_coordinates','cancel','set'));
?>
<?php $_smarty_tpl->tpl_vars["map_provider"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['store_locator']['map_provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_provider_api"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['map_provider']->value)."_map_api", null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_admin_templates"] = new Smarty_variable(fn_get_store_locator_map_templates("A"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['map_admin_templates']->value&&$_smarty_tpl->tpl_vars['map_admin_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value]) {?>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['map_admin_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="hidden" id="map_picker" title="<?php echo $_smarty_tpl->__("select_coordinates");?>
">
    <div class="map-canvas" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
" style="z-index: 2000; height: 100%;"></div>

    <form name="map_picker" action="" method="">
    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("set"),'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-closer cm-map-save-location"), 0);?>

        <?php }?>
    </div>
    </form>
</div><?php }} ?>
