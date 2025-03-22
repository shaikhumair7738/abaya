<?php
/* Smarty version 3.1.30, created on 2017-07-28 11:57:30
  from "F:\wamp64\www\mbilling\ui\theme\ibilling\sections\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ad9529af305_91703685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f907d950208b74cf8c29901cc1415eaa889b16' => 
    array (
      0 => 'F:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1474954870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597ad9529af305_91703685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
