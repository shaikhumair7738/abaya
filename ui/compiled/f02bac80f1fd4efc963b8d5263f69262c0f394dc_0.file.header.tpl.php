<?php
/* Smarty version 3.1.30, created on 2022-04-14 17:20:04
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62580a6ca62284_55389531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02bac80f1fd4efc963b8d5263f69262c0f394dc' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/header.tpl',
      1 => 1563533172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62580a6ca62284_55389531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
