<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 00:23:36
         compiled from "/var/www/html/design/backend/templates/views/addons/components/addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170161729255aaa0b0aba364-11405622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f707a982b9799f1159f167f0078b9a3031d9da' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/addons_search_form.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170161729255aaa0b0aba364-11405622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'extra' => 0,
    'search' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aaa0b0ad7ca3_02792617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aaa0b0ad7ca3_02792617')) {function content_55aaa0b0ad7ca3_02792617($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','name','remove','search'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 addons-search-form">
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        
        <div class="sidebar-field ">
            <label for="elm_addon"><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text" name="q" id="elm_addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
            <i class="icon icon-remove hidden" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
"></i>
        </div>
        
        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
        </div>
    </form>
</div><?php }} ?>
