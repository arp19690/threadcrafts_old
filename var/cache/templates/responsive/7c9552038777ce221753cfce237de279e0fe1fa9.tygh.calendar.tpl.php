<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 09:59:51
         compiled from "/var/www/html/design/themes/responsive/templates/common/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117967328755efb5bfeaaec0-62867477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c9552038777ce221753cfce237de279e0fe1fa9' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/calendar.tpl',
      1 => 1439189910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '117967328755efb5bfeaaec0-62867477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'date_id' => 0,
    'date_name' => 0,
    'date_meta' => 0,
    'date_val' => 0,
    'date_format' => 0,
    'extra' => 0,
    'ldelim' => 0,
    'start_year' => 0,
    'end_year' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb5c005ec54_85014062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb5c005ec54_85014062')) {function content_55efb5c005ec54_85014062($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%m/%d/%Y", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%d/%m/%Y", null, 0);?>
<?php }?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {?><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_val']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 size="10" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-calendar ty-calendar__button" title="<?php echo $_smarty_tpl->__("calendar");?>
"></i>
    </a>
</div>

<script type="text/javascript">
(function(_, $) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    $(document).ready(function() <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
').datepicker(
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,
            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format']=="sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->__("weekday_abr_0");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_1");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_2");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_3");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_4");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_5");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_6");?>
'],
            monthNamesShort: ['<?php echo $_smarty_tpl->__("month_name_abr_1");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_2");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_3");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_4");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_5");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_6");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_7");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_8");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_9");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_10");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_11");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_12");?>
'],
            yearRange: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['start_year']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'] : $tmp), ENT_QUOTES, 'UTF-8');?>
:<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['end_year']->value)===null||$tmp==='' ? 1 : $tmp),'y'=>smarty_modifier_date_format(@constant('TIME'),"%Y")),$_smarty_tpl);?>
',
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/calendar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/calendar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%m/%d/%Y", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%d/%m/%Y", null, 0);?>
<?php }?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {?><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_val']->value,((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 size="10" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-calendar ty-calendar__button" title="<?php echo $_smarty_tpl->__("calendar");?>
"></i>
    </a>
</div>

<script type="text/javascript">
(function(_, $) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    $(document).ready(function() <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
').datepicker(
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,
            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format']=="sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->__("weekday_abr_0");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_1");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_2");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_3");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_4");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_5");?>
', '<?php echo $_smarty_tpl->__("weekday_abr_6");?>
'],
            monthNamesShort: ['<?php echo $_smarty_tpl->__("month_name_abr_1");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_2");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_3");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_4");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_5");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_6");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_7");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_8");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_9");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_10");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_11");?>
', '<?php echo $_smarty_tpl->__("month_name_abr_12");?>
'],
            yearRange: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['start_year']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'] : $tmp), ENT_QUOTES, 'UTF-8');?>
:<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['end_year']->value)===null||$tmp==='' ? 1 : $tmp),'y'=>smarty_modifier_date_format(@constant('TIME'),"%Y")),$_smarty_tpl);?>
',
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
</script><?php }?><?php }} ?>
