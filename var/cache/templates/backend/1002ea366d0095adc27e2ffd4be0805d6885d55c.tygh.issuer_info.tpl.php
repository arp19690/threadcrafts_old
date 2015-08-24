<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 22:46:52
         compiled from "/var/www/html/design/backend/templates/views/order_management/components/issuer_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191056906155d4ba04e61876-44892427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1002ea366d0095adc27e2ffd4be0805d6885d55c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/order_management/components/issuer_info.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191056906155d4ba04e61876-44892427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'user_full_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4ba04e86e90_61649468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4ba04e86e90_61649468')) {function content_55d4ba04e86e90_61649468($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('issuer_info'));
?>

<?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
<div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("issuer_info");?>
</h6>
        <div class="profile-info">
            <i class="icon-user"></i>

            <p class="strong">
                <?php $_smarty_tpl->tpl_vars['user_full_name'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname'])), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
                        <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>,
                    <?php } elseif ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
,
                    <?php }?>
                <?php }?>
                <a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
            </p>
        </div>
</div>
<hr>
<?php }?>


<?php }} ?>
