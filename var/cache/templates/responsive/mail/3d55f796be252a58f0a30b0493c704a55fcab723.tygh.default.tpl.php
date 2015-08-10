<?php /* Smarty version Smarty-3.1.18, created on 2015-08-09 10:24:05
         compiled from "/var/www/html/design/themes/responsive/mail/templates/addons/gift_certificates/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46763482755c6dced7f8d28-27858917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d55f796be252a58f0a30b0493c704a55fcab723' => 
    array (
      0 => '/var/www/html/design/themes/responsive/mail/templates/addons/gift_certificates/templates/default.tpl',
      1 => 1437201219,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '46763482755c6dced7f8d28-27858917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'gift_cert_data' => 0,
    'images_dir' => 0,
    'logos' => 0,
    'addons' => 0,
    'company' => 0,
    'product' => 0,
    'suffix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c6dced9543f6_84131665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c6dced9543f6_84131665')) {function content_55c6dced9543f6_84131665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_cert_code','gift_certificate','gift_cert_from','gift_cert_to','free_products','shop_now','gift_cert_code','gift_certificate','gift_cert_from','gift_cert_to','free_products','shop_now'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable('', null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable("company_id=".((string)$_smarty_tpl->tpl_vars['gift_cert_data']->value['company_id']), null, 0);?>
<?php }?>

<html>
<head></head>

<style type="text/css">
body,th,td,tt,div,span,p {
    font-family: Arial, sans-serif;
    font-size: 13px;
    padding: 0px;
    margin: 0px;
}
</style>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <table  width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                
                <table cellpadding="0" cellspacing="0" width="600px" style="background-color: #1396ee;">
                    <tr height="81px" valign="top" background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_h.png">
                        <td>

                            <table>
                                <tr>
                                    <td width="325px">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="$logos.gift_cert.image.image_x}" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" style="margin: 20px 0px 8px 18px;" />
                                    </td>

                                    <td>
                                        <h4 style="padding: 17px 0px 0px 0px; margin: 0px; text-transform: uppercase; color: #7f7f80; font-weight: normal"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</h4>
                                        <h1 style="padding: 0px; margin: 0px; font-size: 23px;">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>

                                        </h1>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_bg.png">
                            
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="340px" valign="top">
                                        <div style="padding: 15px 0px 0px 18px; color: #ffffff">
                                            <h1 style="padding: 0; margin: 0; font: bold 25px Arial; text-transform: uppercase"><?php echo $_smarty_tpl->__("gift_certificate");?>

                                            </h1>
                                            <p style="color: #ffffff; padding: 10px 0px 0px 0px; margin: 0px">
                                                <?php echo $_smarty_tpl->__("gift_cert_from");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>

                                            </p>
                                            <p style="color: #ffffff; padding: 5px 0px 10px 0px; margin: 0px; border-bottom: 1px dashed #72c0f5;">
                                                <?php echo $_smarty_tpl->__("gift_cert_to");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>


                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=='P') {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
<br />
                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['phone']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
<br /><?php }?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
,&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['descr_country'], ENT_QUOTES, 'UTF-8');?>
,&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['descr_state'], ENT_QUOTES, 'UTF-8');?>
<br />
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </p>

                                            <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['message']) {?>
                                            <div style="color: #afdbf9; padding: 10px 0px 0px 0px; margin: 0px;">
                                                <?php echo $_smarty_tpl->tpl_vars['gift_cert_data']->value['message'];?>

                                            </div>
                                            <?php }?>

                                        </div>
                                    </td>
                                    <td align="left" width="300px" height="210px" valign="top"  background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificate_cart2.png" style="background-repeat: no-repeat">
                                        <h1 style="padding: 64px 125px 0px 35px; margin: 0; text-align: center; color: black; font-size: 40px">
                                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['amount']), 0);?>

                                        </h1>
                                    </td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <td style="padding-left: 5px">
                                        <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=='Y') {?>
                                        <div style="margin: 12px 0px 0px 10px;">
                                            <h5 style="text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0; font-size: 15px; color: #ffffff;"><?php echo $_smarty_tpl->__("free_products");?>
:</h5>
                                            <table border="0" cellpadding="10" cellspacing="10">
                                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                                    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("&".((string)$_smarty_tpl->tpl_vars['company']->value), null, 0);?>
                                                <?php }?>
                                                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_cert_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                                                    <tr valign="top">
                                                        <td><span style="color: #ffffff; line-height: 20px; font-weight: bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</td><td><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['suffix']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
" class="product-link" style="color: #ffffff; line-height: 20px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a><br />
                                                        <span style="color: #afdbf9">
                                                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0);?>
</span><br /></td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                        <?php }?>                                            
                                    </td>
                                </tr>    
                            </table>

                            <table cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/gift_m.png" style="background-repeat: no-repeat; height: 52px;">
                                        <div style="text-align: right;color: #ffffff; padding: 30px 5px 5px 0px">
                                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                                <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("?".((string)$_smarty_tpl->tpl_vars['company']->value), null, 0);?>
                                            <?php }?>
                                            <b><?php echo $_smarty_tpl->__("shop_now");?>
:</b>&nbsp;<a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['suffix']->value,'C','http'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="action-text-button" style="white-space: nowrap; margin-right: 1px; text-decoration: underline; padding: 2px 5px 2px 0px; color: #ffffff;"><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['suffix']->value,'C','http'), ENT_QUOTES, 'UTF-8');?>
</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr height="5px">
                        <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_b.png"></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>
</html><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/templates/default.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/templates/default.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable('', null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable("company_id=".((string)$_smarty_tpl->tpl_vars['gift_cert_data']->value['company_id']), null, 0);?>
<?php }?>

<html>
<head></head>

<style type="text/css">
body,th,td,tt,div,span,p {
    font-family: Arial, sans-serif;
    font-size: 13px;
    padding: 0px;
    margin: 0px;
}
</style>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <table  width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                
                <table cellpadding="0" cellspacing="0" width="600px" style="background-color: #1396ee;">
                    <tr height="81px" valign="top" background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_h.png">
                        <td>

                            <table>
                                <tr>
                                    <td width="325px">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="$logos.gift_cert.image.image_x}" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['gift_cert']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" style="margin: 20px 0px 8px 18px;" />
                                    </td>

                                    <td>
                                        <h4 style="padding: 17px 0px 0px 0px; margin: 0px; text-transform: uppercase; color: #7f7f80; font-weight: normal"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</h4>
                                        <h1 style="padding: 0px; margin: 0px; font-size: 23px;">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>

                                        </h1>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_bg.png">
                            
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="340px" valign="top">
                                        <div style="padding: 15px 0px 0px 18px; color: #ffffff">
                                            <h1 style="padding: 0; margin: 0; font: bold 25px Arial; text-transform: uppercase"><?php echo $_smarty_tpl->__("gift_certificate");?>

                                            </h1>
                                            <p style="color: #ffffff; padding: 10px 0px 0px 0px; margin: 0px">
                                                <?php echo $_smarty_tpl->__("gift_cert_from");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>

                                            </p>
                                            <p style="color: #ffffff; padding: 5px 0px 10px 0px; margin: 0px; border-bottom: 1px dashed #72c0f5;">
                                                <?php echo $_smarty_tpl->__("gift_cert_to");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>


                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=='P') {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
<br />
                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['phone']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
<br /><?php }?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
,&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['descr_country'], ENT_QUOTES, 'UTF-8');?>
,&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['descr_state'], ENT_QUOTES, 'UTF-8');?>
<br />
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </p>

                                            <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['message']) {?>
                                            <div style="color: #afdbf9; padding: 10px 0px 0px 0px; margin: 0px;">
                                                <?php echo $_smarty_tpl->tpl_vars['gift_cert_data']->value['message'];?>

                                            </div>
                                            <?php }?>

                                        </div>
                                    </td>
                                    <td align="left" width="300px" height="210px" valign="top"  background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificate_cart2.png" style="background-repeat: no-repeat">
                                        <h1 style="padding: 64px 125px 0px 35px; margin: 0; text-align: center; color: black; font-size: 40px">
                                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['amount']), 0);?>

                                        </h1>
                                    </td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <td style="padding-left: 5px">
                                        <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=='Y') {?>
                                        <div style="margin: 12px 0px 0px 10px;">
                                            <h5 style="text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0; font-size: 15px; color: #ffffff;"><?php echo $_smarty_tpl->__("free_products");?>
:</h5>
                                            <table border="0" cellpadding="10" cellspacing="10">
                                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                                    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("&".((string)$_smarty_tpl->tpl_vars['company']->value), null, 0);?>
                                                <?php }?>
                                                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_cert_data']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                                                    <tr valign="top">
                                                        <td><span style="color: #ffffff; line-height: 20px; font-weight: bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</td><td><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['suffix']->value),'C','http'), ENT_QUOTES, 'UTF-8');?>
" class="product-link" style="color: #ffffff; line-height: 20px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a><br />
                                                        <span style="color: #afdbf9">
                                                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0);?>
</span><br /></td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                        <?php }?>                                            
                                    </td>
                                </tr>    
                            </table>

                            <table cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/gift_m.png" style="background-repeat: no-repeat; height: 52px;">
                                        <div style="text-align: right;color: #ffffff; padding: 30px 5px 5px 0px">
                                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                                <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("?".((string)$_smarty_tpl->tpl_vars['company']->value), null, 0);?>
                                            <?php }?>
                                            <b><?php echo $_smarty_tpl->__("shop_now");?>
:</b>&nbsp;<a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['suffix']->value,'C','http'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="action-text-button" style="white-space: nowrap; margin-right: 1px; text-decoration: underline; padding: 2px 5px 2px 0px; color: #ffffff;"><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['suffix']->value,'C','http'), ENT_QUOTES, 'UTF-8');?>
</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr height="5px">
                        <td background="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/certificat_b.png"></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>
</html><?php }?><?php }} ?>
