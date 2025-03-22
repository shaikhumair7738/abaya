<?php
/* Smarty version 3.1.30, created on 2017-10-16 17:21:16
  from "F:\wamp64\www\makbilling\ui\theme\ibilling\sections\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e49d34284ee8_88156080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56634da18ab23ec99c63aaf6d0f80f8c3f031aa0' => 
    array (
      0 => 'F:\\wamp64\\www\\makbilling\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1474954870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e49d34284ee8_88156080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
