<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 20:40:22
         compiled from "/var/www/html/design/backend/templates/pickers/users/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17444926355aa6c5edb3668-81279402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a668a6b55fea9c4b143c3c4383ce01ac265d876d' => 
    array (
      0 => '/var/www/html/design/backend/templates/pickers/users/picker.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17444926355aa6c5edb3668-81279402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'item_ids' => 0,
    'display' => 0,
    'extra_var' => 0,
    'but_text' => 0,
    'placement' => 0,
    'picker_for' => 0,
    'shared_force' => 0,
    '_but_text' => 0,
    'but_meta' => 0,
    'but_icon' => 0,
    'input_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'user' => 0,
    'user_info' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa6c5ee816b6_59540194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6c5ee816b6_59540194')) {function content_55aa6c5ee816b6_59540194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('add_users','choose','select_customer','person_name','no_items'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['display']->value)===null||$tmp==='' ? "checkbox" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="checkbox") {?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("add_users"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("select_customer"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['placement']->value=='right') {?>
        <div class="clearfix">
            <div class="pull-right">
    <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profiles.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&shared_force=".((string)$_smarty_tpl->tpl_vars['shared_force']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['placement']->value=='right') {?>
        </div></div>
    <?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio") {?>
        <input id="u<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_ids" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?><?php echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'ISO-8859-1');?>
<?php }?>" />

        <table width="100%" class="table table-middle">
        <thead>
        <tr>
            <th width="100%"><?php echo $_smarty_tpl->__("person_name");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'email'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."email".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'user_name'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_name".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["user"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["user"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["user"]->key => $_smarty_tpl->tpl_vars["user"]->value) {
$_smarty_tpl->tpl_vars["user"]->_loop = true;
 $_smarty_tpl->tpl_vars["user"]->index++;
 $_smarty_tpl->tpl_vars["user"]->first = $_smarty_tpl->tpl_vars["user"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["user"]->first;
?>
            <?php $_smarty_tpl->tpl_vars["user_info"] = new Smarty_variable(fn_get_user_short_info($_smarty_tpl->tpl_vars['user']->value), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['user']->value,'email'=>$_smarty_tpl->tpl_vars['user_info']->value['email'],'user_name'=>((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first']), 0);?>

        <?php } ?>
        <?php }?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr class="no-items">
            <td colspan="2"><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p></td>
        </tr>
        </tbody>
        </table>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>
    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_but_text']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    </div>
<?php }?><?php }} ?>
