<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 22:52:50
         compiled from "/var/www/html/design/backend/templates/views/block_manager/block_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11848974955d4bb6a68c4b0-66503982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a3494ae567df873603f1cb0ec5087f1c9122137' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11848974955d4bb6a68c4b0-66503982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid_id' => 0,
    'extra_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4bb6a6df383_74476609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4bb6a6df383_74476609')) {function content_55d4bb6a6df383_74476609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('manage_existing_block','use_existing_block','create_new_block'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage']&&$_REQUEST['manage']=="Y") {?><?php echo $_smarty_tpl->__("manage_existing_block");?>
<?php } else { ?><?php echo $_smarty_tpl->__("use_existing_block");?>
<?php }?></a></li>
        <li id="create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_create_new_blocks--></div>

    <div id="content_user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_user_existing_blocks--></div>
</div><?php }} ?>