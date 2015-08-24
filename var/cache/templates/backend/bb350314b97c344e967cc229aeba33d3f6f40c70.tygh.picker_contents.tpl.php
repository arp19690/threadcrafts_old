<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 22:51:53
         compiled from "/var/www/html/design/backend/templates/pickers/companies/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109816749655d4bb31ae7796-62518335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb350314b97c344e967cc229aeba33d3f6f40c70' => 
    array (
      0 => '/var/www/html/design/backend/templates/pickers/companies/picker_contents.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109816749655d4bb31ae7796-62518335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companies' => 0,
    'company' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4bb31bb7678_35619877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4bb31bb7678_35619877')) {function content_55d4bb31bb7678_35619877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('text_items_added','id','name','email','registered','active','disable','active','no_data','no_data','choose','add_companies_and_close','add_companies'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
(function(_, $) {

    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_companies_form', function(frm, elm) {
        var companies = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                companies[id] = $('#company_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), companies, 'm', {
                '{company_id}': '%id',
                '{company}': '%item'
            });
            

            if (display_type != 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;        
    });
}(Tygh, Tygh.$));
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/companies_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="companies_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%" class="center">
        <?php if ($_REQUEST['display']!="radio") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <?php }?>
    <th><?php echo $_smarty_tpl->__("id");?>
</th>
    <th><?php echo $_smarty_tpl->__("name");?>
</th>
    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <th><?php echo $_smarty_tpl->__("email");?>
</th>
    <?php }?>
    <th><?php echo $_smarty_tpl->__("registered");?>
</th>
    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <th class="right"><?php echo $_smarty_tpl->__("active");?>
</th>
    <?php }?>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
<tr>
    <td class="center">
        <?php if ($_REQUEST['display']=="radio") {?>
        <input type="radio" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "companies_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio" />
        <?php } else { ?>
        <input type="checkbox" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "companies_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
        <?php }?>
    </td>
    <td><a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
    <td><a id="company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
</a></td>
    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <td><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
    <?php }?>
    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['company']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <td class="right"><?php if ($_smarty_tpl->tpl_vars['company']->value['status']!="A") {?><?php echo $_smarty_tpl->__("disable");?>
<?php } else { ?><?php echo $_smarty_tpl->__("active");?>
<?php }?></td>
    <?php }?>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['company']->_loop) {
?>
<tr class="no-items">
    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <td colspan="6"><p><?php echo $_smarty_tpl->__("no_data");?>
</p></td>
    <?php } else { ?>
        <td colspan="4"><p><?php echo $_smarty_tpl->__("no_data");?>
</p></td>
    <?php }?>
</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_companies_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_companies"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
