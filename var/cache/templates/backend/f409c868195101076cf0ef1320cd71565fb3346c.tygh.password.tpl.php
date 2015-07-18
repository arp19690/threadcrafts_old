<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 12:20:01
         compiled from "/var/www/html/design/backend/templates/views/settings_wizard/components/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149102740555a9f719555f43-47809967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f409c868195101076cf0ef1320cd71565fb3346c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/settings_wizard/components/password.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149102740555a9f719555f43-47809967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f719571d92_65464734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f719571d92_65464734')) {function content_55a9f719571d92_65464734($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_administrator_password','show','generate','hide','show','hide'));
?>
<div class="control-group setting-wide">
    <label for="password_field" class="control-label"><?php echo $_smarty_tpl->__("new_administrator_password");?>
:</label>
    <div class="controls">
        <input type="password" value="" id="password_field" name="new_password"><br>
        <a class="cm-show-password a-pseudo cm-off-password" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("show");?>
</a> <a class="cm-generate-password a-pseudo" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("generate");?>
</a>
    </div>
</div>

<script type="text/javascript">
    (function($, _) {
        $('.cm-show-password').on('click', function(e) {
            _this = $(this);
            if (_this.hasClass('cm-off-password')) {
                $('#' + _this.data('caResultId')).prop('type', 'text');
                _this.removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            } else {
                $('#' + _this.data('caResultId')).prop('type', 'password');
                _this.addClass('cm-off-password').html('<?php echo $_smarty_tpl->__("show");?>
');
            }
        });

        $('.cm-generate-password').on('click', function(e) {
            $('#' + $(this).data('caResultId')).val(Math.random().toString(36).slice(-10)).prop('type', 'text');
            if ($('.cm-show-password').hasClass('cm-off-password')) {
                $('.cm-show-password').removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            }
        });
    })(Tygh.$, Tygh);
</script><?php }} ?>
