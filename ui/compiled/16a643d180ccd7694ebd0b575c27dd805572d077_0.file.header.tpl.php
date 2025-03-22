<?php
/* Smarty version 3.1.30, created on 2019-07-19 16:16:14
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d319f760885b4_22457162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a643d180ccd7694ebd0b575c27dd805572d077' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/sections/header.tpl',
      1 => 1563533172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d319f760885b4_22457162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
