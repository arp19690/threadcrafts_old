<?php /* Smarty version Smarty-3.1.18, created on 2015-06-05 18:44:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/help_tutorial/components/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2384784175571b5c51380b9-28937521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce67fdc3160007a965bdd8f546cbfc5ae078ca4e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/work/threadcraftsnew/design/backend/templates/addons/help_tutorial/components/video.tpl',
      1 => 1413374300,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2384784175571b5c51380b9-28937521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5571b5c513f6e7_24619882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571b5c513f6e7_24619882')) {function content_5571b5c513f6e7_24619882($_smarty_tpl) {?><div class="help-tutorial-wrapper">
    <div class="help-tutorial-content" id="help_tutorial_content">
        <iframe width="640" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script type="text/javascript">
    (function(_, $) {
        $(function() {
            $('#help_tutorial_link').on('click', function() {
                var self = $(this);
                self.toggleClass('open');
                $('#help_tutorial_content').toggleClass('open');
            });
            if($('#elm_sidebar').length == 0) {
                $('#help_tutorial_link').css('margin-left', 0);
            }
        });
    }(Tygh, Tygh.$));
</script><?php }} ?>
