<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:20:01
         compiled from "/var/www/html/design/backend/templates/views/settings_wizard/components/ssl_checking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96085714555a9f71957dcb6-35911137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99fce504c796c221df8792c4bbffc9dfb314bf72' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/settings_wizard/components/ssl_checking.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96085714555a9f71957dcb6-35911137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checking_result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f7195bded4_64563536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f7195bded4_64563536')) {function content_55a9f7195bded4_64563536($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('warning_https_disabled','ssl_certificate','check_ssl','fail','ok'));
?>
<div id="ssl_checking">
    <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
    <br>
    <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <p><?php echo $_smarty_tpl->__("warning_https_disabled");?>
</p>
    </div>
    <?php }?>
    <br>
    <div class="control-group setting-wide">
        <label for="" class="control-label"><?php echo $_smarty_tpl->__("ssl_certificate");?>
</label>
        <div class="controls">
            <a class="btn cm-ajax" href="<?php echo htmlspecialchars(fn_url("settings_wizard.check_ssl"), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="ssl_checking"><?php echo $_smarty_tpl->__("check_ssl");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
                <span class="label label-important"><?php echo $_smarty_tpl->__("fail");?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['checking_result']->value=="ok") {?>
                <span class="label label-success"><?php echo $_smarty_tpl->__("ok");?>
</span>
            <?php }?>
        </div>
    </div>
<!--ssl_checking--></div><?php }} ?>
