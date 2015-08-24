<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:15:45
         compiled from "/var/www/html/design/backend/templates/views/sales_reports/components/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120740022855d46c69efb202-36802145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74abd30f15788f267d82b4493691631898e5fad0' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/sales_reports/components/table.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120740022855d46c69efb202-36802145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_id' => 0,
    'table_conditions' => 0,
    'i' => 0,
    'o' => 0,
    'table' => 0,
    'element' => 0,
    'row' => 0,
    'element_hash' => 0,
    'interval_id' => 0,
    'interval_name' => 0,
    'percent_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d46c6a09c871_16674498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d46c6a09c871_16674498')) {function content_55d46c6a09c871_16674498($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('table_conditions','total','total'));
?>
<?php if ($_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("table_conditions"),'meta'=>"collapsed",'target'=>"#box_table_conditions_".((string)$_smarty_tpl->tpl_vars['table_id']->value)), 0);?>

    <div id="box_table_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <dl class="dl-horizontal">
        <?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value) {
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
            <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8');?>
:</dt>
            <dd>
                <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["o"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["o"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
 $_smarty_tpl->tpl_vars["o"]->iteration++;
 $_smarty_tpl->tpl_vars["o"]->last = $_smarty_tpl->tpl_vars["o"]->iteration === $_smarty_tpl->tpl_vars["o"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["feco"]['last'] = $_smarty_tpl->tpl_vars["o"]->last;
?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['href']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['o']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['o']->value['href']) {?></a><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['feco']['last']) {?>, <?php }?>
                <?php } ?>
            </dd>
        <?php } ?>
        </dl>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['table']->value['interval_id']!=1) {?>
    <table width="100%">
        <tr valign="top">
            <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

            <td width="30%">
                <table width="100%" class="table">
                    <thead>
                        <tr>
                            <th width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
                        </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;</td>
                        </tr>
                    <?php } ?>
                    <tr class="td-no-bg">
                        <td class="right"><?php echo $_smarty_tpl->__("total");?>
:</td>
                    </tr>
                </table>
            </td>
            <td width="70%">
                <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

                <div id="div_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="scroll-x scroll-sales-report">
                    <table class="table no-left-border" >
                        <thead>
                            <tr class="nowrap">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <th class="center">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                            <tr>
                                <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                                    <td class="center">
                                        <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');?>
<?php }?>
                                            <?php } else { ?>-<?php }?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <tr class="td-no-bg">
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['totals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <td class="center">
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                                        <span><?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></span>
                                        <?php } else { ?>-<?php }?>
                                </td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
<?php } else { ?>
<table class="table table-middle">
    <thead>
        <tr>
            <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars["interval_name"] = new Smarty_variable("reports_interval_".((string)$_smarty_tpl->tpl_vars['interval_id']->value), null, 0);?>
                <th class="right"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['interval_name']->value);?>
</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars["elements_count"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['table']->value['elements']), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                    <?php echo smarty_function_math(array('equation'=>"round(value_/max_value*100)",'value_'=>(($tmp = @$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value])===null||$tmp==='' ? "0" : $tmp),'max_value'=>$_smarty_tpl->tpl_vars['table']->value['max_value'],'assign'=>"percent_value"),$_smarty_tpl);?>

                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;
                        <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/graph_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bar_width'=>"100px",'value_width'=>$_smarty_tpl->tpl_vars['percent_value']->value), 0);?>

                    </td>
                    <td  class="right">
                        <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
        <tr class="td-no-bg">
            <td class="right" width="70%"><?php echo $_smarty_tpl->__("total");?>
:</td>
            <td class="right" width="30%">
                <?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['totals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    <?php } else { ?>
                        -
                    <?php }?>
                <?php } ?>
            </td>
        </tr>
    </tbody>
</table>

<?php }?>
<?php }} ?>
