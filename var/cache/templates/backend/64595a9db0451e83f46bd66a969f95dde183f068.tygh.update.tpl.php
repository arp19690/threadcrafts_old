<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 15:07:42
         compiled from "/var/www/html/design/backend/templates/views/sitemap/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148607385555aa1e6662a2a0-55295750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64595a9db0451e83f46bd66a969f95dde183f068' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/sitemap/update.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '148607385555aa1e6662a2a0-55295750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'id' => 0,
    'links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aa1e6668e469_25238670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e6668e469_25238670')) {function content_55aa1e6668e469_25238670($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','section_links','name','position_short','name','url'));
?>
<?php if ($_smarty_tpl->tpl_vars['section']->value['section_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value['section_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="links_form" class="form-horizontal form-edit">
    <input type="hidden" name="section_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <li id="tab_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("section_links");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div class="hidden" id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <div class="control-group">
                <label for="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                <div class="controls">
                    <input type="text" name="section" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['section'], ENT_QUOTES, 'ISO-8859-1');?>
" id="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"status",'id'=>"section_status",'obj'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

    </div>

    <div id="content_tab_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <table class="table table-middle hidden-inputs">
    <thead>
        <tr>
            <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th width="30%"><?php echo $_smarty_tpl->__("url");?>
</th>
            <th width="10%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
    <tr>
        <td>
            <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'ISO-8859-1');?>
][position]" size="2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['position'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-micro input-hidden"></td>
        <td>
            <input type="hidden" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'ISO-8859-1');?>
][link_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'ISO-8859-1');?>
][link]" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-xlarge input-hidden"></td>
        <td>
            <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'ISO-8859-1');?>
][link_href]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_href'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-xlarge input-hidden"></td>
        <td class="right">
            <div class="hidden-tools">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>"Y"), 0);?>

                </a>
            </div>
        </td>
    </tr>
    <?php } ?>
    <tr id="box_add_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <td>
            <input type="text" name="add_link_data[0][position]" size="2" value="" class="input-micro"></td>
        <td>
            <input type="hidden" name="add_link_data[0][link_id]" value="0" />
            <input type="text" name="add_link_data[0][link]" size="25" value="" class="ïnput-xlarge"></td>
        <td>
            <input type="text" name="add_link_data[0][link_href]" size="35" value="" class="ïnput-xlarge"></td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_link_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[sitemap.update_sitemap]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>

    </form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
