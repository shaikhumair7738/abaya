<?php
/* Smarty version 3.1.30, created on 2019-09-06 18:49:27
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d725cdf0cbf11_60198476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e95443d8461c8f115a1b3661d6dba3442362bd3' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/sections/header.tpl',
      1 => 1563533172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d725cdf0cbf11_60198476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
