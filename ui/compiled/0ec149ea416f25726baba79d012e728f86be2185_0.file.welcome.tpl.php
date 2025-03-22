<?php
/* Smarty version 3.1.30, created on 2020-01-04 17:37:44
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/welcome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e1080101239c6_82798897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec149ea416f25726baba79d012e728f86be2185' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/welcome.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5e1080101239c6_82798897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
    <div class="col-md-12">

        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

    </div>



</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
