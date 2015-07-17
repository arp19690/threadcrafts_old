<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 20:28:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/file_editor/components/chmod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196792731655a538ad048432-73135224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2a240c512f1c2e4e2c923ec81582d859b710d7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/views/file_editor/components/chmod.tpl',
      1 => 1413374304,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '196792731655a538ad048432-73135224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a538ad08c286_06057322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a538ad08c286_06057322')) {function content_55a538ad08c286_06057322($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('owner','read','write','exec','global','read','write','exec','world','read','write','exec','recursively'));
?>
<div id="file_editor_perms" class="te-permissions">
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("owner"),'target'=>"#acc_owner"), 0);?>

    <div id="acc_owner" class="collapsed in">
        <div class="control-group checkbox-list">
            <div class="controls">
                <label><input id="o_read" type="checkbox" name="o_read" /><?php echo $_smarty_tpl->__("read");?>
</label>
                <label><input id="o_write" type="checkbox" name="o_write" /><?php echo $_smarty_tpl->__("write");?>
</label>
                <label><input id="o_exec" type="checkbox" name="o_exec" /><?php echo $_smarty_tpl->__("exec");?>
</label>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("global"),'target'=>"#acc_global"), 0);?>

    <div id="acc_global" class="collapsed in">
        <div class="control-group checkbox-list">
            <div class="controls">
                <label><input id="g_read" type="checkbox" name="g_read" /><?php echo $_smarty_tpl->__("read");?>
</label>
                <label><input id="g_write" type="checkbox" name="g_write" /><?php echo $_smarty_tpl->__("write");?>
</label>
                <label><input id="g_exec" type="checkbox" name="g_exec" /><?php echo $_smarty_tpl->__("exec");?>
</label>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("world"),'target'=>"#acc_world"), 0);?>

    <div id="acc_world" class="collapsed in">
        <div class="control-group checkbox-list">
            <div class="controls">
                <label><input id="w_read" type="checkbox" name="w_read" /><?php echo $_smarty_tpl->__("read");?>
</label>
                <label><input id="w_write" type="checkbox" name="w_write" /><?php echo $_smarty_tpl->__("write");?>
</label>
                <label><input id="w_exec" type="checkbox" name="w_exec" /><?php echo $_smarty_tpl->__("exec");?>
</label>
            </div>
        </div>
    </div>
    <hr />
    <label for="chmod_recursive" class="checkbox inline"><input id="chmod_recursive" type="checkbox" name="r" value="Y" /><?php echo $_smarty_tpl->__("recursively");?>
</label>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_type'=>"button",'but_meta'=>"cm-dialog-closer cm-te-chmod cm-no-submit",'cancel_action'=>"close",'save'=>true), 0);?>

    </div>
</div>
<?php }} ?>
