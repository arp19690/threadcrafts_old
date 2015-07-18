<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:35:00
         compiled from "/var/www/html/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145586007055a9f3945ec891-77031158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e446d253d6ced82435d9c86b18fefc65f1e4539' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/comet.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145586007055a9f3945ec891-77031158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f3945f11a8_31417784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f3945f11a8_31417784')) {function content_55a9f3945f11a8_31417784($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
