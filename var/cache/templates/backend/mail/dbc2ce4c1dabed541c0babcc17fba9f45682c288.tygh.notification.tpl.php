<?php /* Smarty version Smarty-3.1.18, created on 2015-08-19 17:52:35
         compiled from "/var/www/html/design/backend/mail/templates/addons/vendor_data_premoderation/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176890874855d4750bcc0cd0-68717630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc2ce4c1dabed541c0babcc17fba9f45682c288' => 
    array (
      0 => '/var/www/html/design/backend/mail/templates/addons/vendor_data_premoderation/notification.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '176890874855d4750bcc0cd0-68717630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'products' => 0,
    'product' => 0,
    'reason' => 0,
    'product_url' => 0,
    'product_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d4750bd237e1_30828580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4750bd237e1_30828580')) {function content_55d4750bd237e1_30828580($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('approved','disapproved','hello','products_approval_status_approved','products_approval_status_disapproved','text_shoppers_can_order_products','product_approval_status_approved','product_approval_status_disapproved'));
?>
<?php if ($_smarty_tpl->tpl_vars['status']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["text_status"] = new Smarty_variable($_smarty_tpl->__("approved"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["text_status"] = new Smarty_variable($_smarty_tpl->__("disapproved"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("hello");?>
,<br /><br />

<?php if (count($_smarty_tpl->tpl_vars['products']->value)>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value=="Y") {?>
        <?php echo $_smarty_tpl->__("products_approval_status_approved");?>
<br />
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("products_approval_status_disapproved");?>
<br />
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products_list"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products_list"]['iteration']++;
?>
        <?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products_list']['iteration'], ENT_QUOTES, 'UTF-8');?>
) <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),"V","http"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a><br />
    <?php } ?>
    
    <?php if ($_smarty_tpl->tpl_vars['status']->value=="Y") {?>
        <br /><?php echo $_smarty_tpl->__("text_shoppers_can_order_products");?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['reason']->value) {?>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['products']->value[0]['product'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["product_url"] = new Smarty_variable(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['products']->value[0]['product_id']),"V","http"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value=="Y") {?>
        <?php echo $_smarty_tpl->__("product_approval_status_approved",array("[product]"=>"<a href='".((string)$_smarty_tpl->tpl_vars['product_url']->value)."'>".((string)$_smarty_tpl->tpl_vars['product_name']->value)."</a>"));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->__("product_approval_status_disapproved",array("[product]"=>"<a href='".((string)$_smarty_tpl->tpl_vars['product_url']->value)."'>".((string)$_smarty_tpl->tpl_vars['product_name']->value)."</a>"));?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['reason']->value) {?>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
