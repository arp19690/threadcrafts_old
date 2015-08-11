<?php /* Smarty version Smarty-3.1.18, created on 2015-08-11 11:08:44
         compiled from "/var/www/html/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10139275155c98a64c00899-98819989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff209dfc9f54d295ff15ded5722cdc90ebe0c09' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10139275155c98a64c00899-98819989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c98a64c17063_25355749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c98a64c17063_25355749')) {function content_55c98a64c17063_25355749($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">

<div class="sidebar-field">
	<label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
	<input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

</form>

</div><?php }} ?>
