<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:35:00
         compiled from "/var/www/html/design/backend/templates/common/ajax_select_object.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83931629355a9f3941b64f4-59332759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2b9ee73e63e01e96df86312c89084937a90577' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/ajax_select_object.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83931629355a9f3941b64f4-59332759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'id' => 0,
    'text' => 0,
    'label' => 0,
    'js_action' => 0,
    'objects' => 0,
    'runtime' => 0,
    'item' => 0,
    'name' => 0,
    'data_url' => 0,
    'result_elm' => 0,
    'extra_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f3942138c9_40466906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f3942138c9_40466906')) {function content_55a9f3942138c9_40466906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('search','loading'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("ajax_select_content", null, null); ob_start(); ?>

<a class="<?php if ($_smarty_tpl->tpl_vars['type']->value!='list') {?>btn-text<?php }?> dropdown-toggle" data-toggle="dropdown">
    <span id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_wrap_"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['text']->value,40,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</span>
    <b class="caret"></b>
</a>

<?php if ($_smarty_tpl->tpl_vars['label']->value) {?><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'ISO-8859-1');?>
</label><?php }?>

<?php if ($_smarty_tpl->tpl_vars['js_action']->value) {?>
<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.picker_js_action_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', function() {
        <?php echo $_smarty_tpl->tpl_vars['js_action']->value;?>

    });
}(Tygh, Tygh.$));
</script>
<?php }?>

<ul class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['type']->value=="opened") {?>dropdown-opened<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_ajax_select_object">
    <li>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_wrap_" class="search-shop cm-smart-position">
            <input type="text" value="<?php echo $_smarty_tpl->__("search");?>
..." class="span3 input-text cm-hint cm-ajax-content-input" data-ca-target-id="content_loader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="16">
        </div>
    </li>
    <li>
        <div class="ajax-popup-tools" id="scroller_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <ul class="cm-select-list" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["object_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["object_id"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['name'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],40,"...",true), null, 0);?>
                <?php }?>
                <li><a data-ca-action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
            <?php } ?>
            <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></ul>
            <ul>
                <li id="content_loader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-ajax-content-more" data-ca-target-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['data_url']->value), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-result-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_elm']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("loading");?>
</li>
            </ul>
        </div>
    </li>
    <?php echo $_smarty_tpl->tpl_vars['extra_content']->value;?>

</ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['type']->value=='list') {?>
    <li class="dropdown vendor-submenu"><?php echo Smarty::$_smarty_vars['capture']['ajax_select_content'];?>
</li>
<?php } else { ?>
    <div class="btn-group"><?php echo Smarty::$_smarty_vars['capture']['ajax_select_content'];?>
</div>
<?php }?><?php }} ?>