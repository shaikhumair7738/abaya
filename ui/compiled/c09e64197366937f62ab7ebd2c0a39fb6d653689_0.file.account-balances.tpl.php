<?php
/* Smarty version 3.1.30, created on 2022-01-19 18:13:07
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/account-balances.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61e8075b822e68_79008580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c09e64197366937f62ab7ebd2c0a39fb6d653689' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/account-balances.tpl',
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
function content_61e8075b822e68_79008580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Financial Balances'];?>
</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                            <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?>class="text-red"<?php }?>><?php echo ib_money_format($_smarty_tpl->tpl_vars['ds']->value['balance'],$_smarty_tpl->tpl_vars['_c']->value);?>
</span> </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                    <tr>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
:</strong></td>
                        <td class="text-right"><strong><span <?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</span></strong></td>
                    </tr>
                </table>

            </div>
        </div>



    </div>



</div>




<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
