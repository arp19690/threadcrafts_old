<?php /* Smarty version Smarty-3.1.18, created on 2015-09-08 18:07:40
         compiled from "/var/www/html/design/backend/templates/addons/help_tutorial/components/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15741511255eed694ca43d1-14463359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17e6b2e62c98479229bd75cc6c1427e50bd6e0e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_tutorial/components/video.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15741511255eed694ca43d1-14463359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55eed694cac3f7_05884130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eed694cac3f7_05884130')) {function content_55eed694cac3f7_05884130($_smarty_tpl) {?><div class="help-tutorial-wrapper">
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
