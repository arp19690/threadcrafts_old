<?php /* Smarty version Smarty-3.1.18, created on 2015-07-18 09:34:58
         compiled from "/var/www/html/design/backend/templates/common/analytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110006595655a9f3927250f4-98808115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaba0b348fd44140f04131f87055a2a0659b0f19' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/analytics.tpl',
      1 => 1437201145,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110006595655a9f3927250f4-98808115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a9f392729270_14283469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9f392729270_14283469')) {function content_55a9f392729270_14283469($_smarty_tpl) {?><!-- GA code -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40339423-1']);
    _gaq.push(['_setDomainName', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_host'], ENT_QUOTES, 'ISO-8859-1');?>
']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- GA code end -->
<?php }} ?>
