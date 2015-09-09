<?php /* Smarty version Smarty-3.1.18, created on 2015-09-09 10:10:10
         compiled from "/var/www/html/design/backend/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47106595755efb82ab6d846-96067441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8772a79cd5b25ff95533f84b410786002231873b' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl',
      1 => 1439189760,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47106595755efb82ab6d846-96067441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discussion' => 0,
    'stars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55efb82ab982a3_70677329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55efb82ab982a3_70677329')) {function content_55efb82ab982a3_70677329($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo.rich_snippets_rating','seo.rich_snippets_reviews'));
?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>

<?php $_smarty_tpl->tpl_vars['stars'] = new Smarty_variable(fn_get_discussion_rating($_smarty_tpl->tpl_vars['discussion']->value['average_rating']), null, 0);?>
<p class="nowrap gstars">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['name'] = "full_star";
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stars']->value['full']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total']);
?><i class="gicon-star"></i><?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['stars']->value['part']) {?><i class="gicon-star-half"></i><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['name'] = "full_star";
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stars']->value['empty']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["full_star"]['total']);
?><i class="gicon-star-empty"></i><?php endfor; endif; ?>
</p>
&nbsp;<?php echo $_smarty_tpl->__("seo.rich_snippets_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['average_rating'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->__("seo.rich_snippets_reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 - <?php }?>‎<?php }} ?>
