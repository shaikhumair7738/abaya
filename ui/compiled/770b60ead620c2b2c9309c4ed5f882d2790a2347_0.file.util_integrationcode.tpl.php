<?php
/* Smarty version 3.1.30, created on 2017-10-23 12:19:25
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/util_integrationcode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed90f5a91eb8_83985418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '770b60ead620c2b2c9309c4ed5f882d2790a2347' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/util_integrationcode.tpl',
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
function content_59ed90f5a91eb8_83985418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">

    <div class="col-md-8 col-xs-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h5>

            </div>
            <div class="ibox-content">
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
<pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>

            </div>
        </div>
    </div>



</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
