<?php /* Smarty version Smarty-3.1.18, created on 2015-08-10 10:00:04
         compiled from "/var/www/html/design/backend/templates/common/share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52390669455c84bf4bb9557-29159709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8efc2fec77ece5fe0c9e4af7c92fcfe820c14f6f' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/share.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52390669455c84bf4bb9557-29159709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'url' => 0,
    'logos' => 0,
    'tweet_text' => 0,
    'product_name' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55c84bf4c11803_95437846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c84bf4c11803_95437846')) {function content_55c84bf4c11803_95437846($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('share.congratulations_first_order','share.first_order_tweet','share.installation_tweet','share.installation_tweet'));
?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {?>
    <?php echo $_smarty_tpl->__("share.congratulations_first_order");?>

<?php }?>

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url('',"C"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['tweet_text'] = new Smarty_variable($_smarty_tpl->__("share.first_order_tweet",array("[product]"=>@constant('PRODUCT_NAME'))), null, 0);?>

<ul class="inline social-share">
    <li><a href="#" class="uibutton large confirm" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
&p[images][0]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['http_image_path'], ENT_QUOTES, 'UTF-8');?>
&p[title]=<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));?>
<?php }?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"> Share on Facebook</a></li>
    <li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-text="<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));?>
<?php }?>" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" data-via="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['twitter'], ENT_QUOTES, 'UTF-8');?>
" data-size="large">Tweet</a>
        
            <script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </li>
</ul>
<?php }} ?>
