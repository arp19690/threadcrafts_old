<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:08:09
         compiled from "/var/www/html/design/backend/templates/common/period_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38881183355efb7b10dbaf5-22010691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbe89f3a7659782e057e6babe2d03e7de3f62db' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/period_selector.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '38881183355efb7b10dbaf5-22010691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'prefix' => 0,
    'period' => 0,
    'time_from' => 0,
    'search' => 0,
    'settings' => 0,
    'date_meta' => 0,
    'time_to' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb7b11b4fe2_17018009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb7b11b4fe2_17018009')) {function content_55efb7b11b4fe2_17018009($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates'));
?>
<?php if ($_smarty_tpl->tpl_vars['display']->value!="form") {?>
    <div class="nowrap">
        <div class="form-inline">
<?php } else { ?>
    <div class="sidebar-field">
<?php }?>       <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects"><?php echo $_smarty_tpl->__("period");?>
:</label>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects">
                <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value=="A"||!$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                <optgroup label="=============">
                    <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                    <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value=="W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                    <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value=="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                    <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                    <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                    <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                    <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                    <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
                </optgroup>
            </select>
            
<?php if ($_smarty_tpl->tpl_vars['display']->value!="form") {?>
    &nbsp;&nbsp;
<?php } else { ?>
    </div>
    <div class="sidebar-field">
<?php }?>
            <label<?php if ($_smarty_tpl->tpl_vars['display']->value!="form") {?> class="label-html"<?php }?>><?php echo $_smarty_tpl->__("select_dates");?>
:</label>
            
            <?php $_smarty_tpl->tpl_vars["time_from"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["time_to"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to", null, 0);?>
            
            <?php if ($_smarty_tpl->tpl_vars['display']->value=="form") {?>
                <?php $_smarty_tpl->tpl_vars["date_meta"] = new Smarty_variable("input-date", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["date_meta"] = new Smarty_variable("input-small", null, 0);?>
            <?php }?>
            
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."f_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_from']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['display']->value=="form") {?>
                -
            <?php } else { ?>
                &nbsp;&nbsp;-&nbsp;&nbsp;
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."t_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_to']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value), 0);?>

            
<?php if ($_smarty_tpl->tpl_vars['display']->value!="form") {?>     
        </div>
    </div>
<?php } else { ?>
    </div>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

<script type="text/javascript">
Tygh.$(document).ready(function() <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
</script>
<?php }} ?>
