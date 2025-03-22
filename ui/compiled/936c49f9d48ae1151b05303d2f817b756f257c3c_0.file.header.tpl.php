<?php
/* Smarty version 3.1.30, created on 2017-06-13 07:27:36
  from "/home3/webtesti/public_html/mbilling/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593fcc285b70b7_47525102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '936c49f9d48ae1151b05303d2f817b756f257c3c' => 
    array (
      0 => '/home3/webtesti/public_html/mbilling/ui/theme/ibilling/sections/header.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593fcc285b70b7_47525102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
