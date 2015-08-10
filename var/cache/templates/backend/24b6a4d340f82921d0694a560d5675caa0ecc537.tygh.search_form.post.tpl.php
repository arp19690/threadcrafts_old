<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 18:40:35
         compiled from "/var/www/html/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37525718355aba1cb623277-86564166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b6a4d340f82921d0694a560d5675caa0ecc537' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37525718355aba1cb623277-86564166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55aba1cb642032_87010096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aba1cb642032_87010096')) {function content_55aba1cb642032_87010096($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_cert_code','purchased','used'));
?>
<div class="search-field">
    <label for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }} ?>
