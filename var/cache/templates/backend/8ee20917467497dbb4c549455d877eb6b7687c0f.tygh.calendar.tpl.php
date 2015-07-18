<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:26:49
         compiled from "/var/www/html/design/backend/templates/common/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145317979155a9f8b1654058-64639089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ee20917467497dbb4c549455d877eb6b7687c0f' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/calendar.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145317979155a9f8b1654058-64639089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f8b16c31c1_66506878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f8b16c31c1_66506878')) {function content_55a9f8b16c31c1_66506878($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%m/%d/%Y", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%d/%m/%Y", null, 0);?>
<?php }?>

<div class="calendar">
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php }?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {?><?php echo htmlspecialchars(smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['date_val']->value),((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>" <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>
 size="10" />
    <span data-ca-external-focus-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="icon-calendar cm-external-focus"></span>
</div>

<script type="text/javascript">
(function(_, $) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

    $(document).ready(function() <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').datepicker(
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

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
            yearRange: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['start_year']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
:<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['end_year']->value)===null||$tmp==='' ? 1 : $tmp),'y'=>smarty_modifier_date_format(@constant('TIME'),"%Y")),$_smarty_tpl);?>
',
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
(Tygh, Tygh.$));
</script><?php }} ?>
