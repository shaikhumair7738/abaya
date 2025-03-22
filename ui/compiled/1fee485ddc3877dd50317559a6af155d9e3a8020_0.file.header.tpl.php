<?php
/* Smarty version 3.1.30, created on 2022-01-19 17:54:48
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61e803107e87a8_53218819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fee485ddc3877dd50317559a6af155d9e3a8020' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sections/header.tpl',
      1 => 1563533172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e803107e87a8_53218819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
