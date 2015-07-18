<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:28:10
         compiled from "/var/www/html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57624612855aa2332811010-41244625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf9c2051a1e19bd8c71084949df5ead2760f505' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/update.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57624612855aa2332811010-41244625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'available_providers' => 0,
    'provider_code' => 0,
    'provider_data' => 0,
    'providers_schema' => 0,
    'provider' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa233284e8c1_08916016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa233284e8c1_08916016')) {function content_55aa233284e8c1_08916016($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','provider'));
?>
<div id="content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="provider_form" class="form-horizontal form-edit">
        <input type="hidden" name="provider_data[provider_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

        <div class="tabs cm-j-tabs">
            <ul class="nav nav-tabs">
                <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <div id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

                <div class="control-group">
                    <label for="section_provider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("provider");?>
:</label>
                    <div class="controls">
                        <select name="provider_data[provider]" id="provider" class="cm-select-provider">
                            <?php  $_smarty_tpl->tpl_vars["provider_code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_providers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_code"]->key => $_smarty_tpl->tpl_vars["provider_code"]->value) {
$_smarty_tpl->tpl_vars["provider_code"]->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_code']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['provider_code']->value==$_smarty_tpl->tpl_vars['provider_data']->value['provider']) {?> selected="selected"<?php }?> data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_code']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider_code']->value]['provider'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('provider'=>$_smarty_tpl->tpl_vars['provider']->value), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/hybrid_auth/provider_params.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('provider'=>$_smarty_tpl->tpl_vars['provider']->value), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"provider_data[status]",'id'=>"provider_status",'obj'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

            </div>
        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[hybrid_auth.update_provider]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        </div>

    </form>
<!--content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
