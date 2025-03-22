<?php
/* Smarty version 3.1.30, created on 2017-07-03 12:30:47
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\balance-sheet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5959eb9f01d2f0_65597473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ad6f88f9c58e804e5d4cc603c905060d0ceaaa' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\balance-sheet.tpl',
      1 => 1474954870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5959eb9f01d2f0_65597473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
 </h5>

            </div>
            <div class="ibox-content">

                <table class="table table-bordered sys_table">

                    <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
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

                            <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ds']->value['balance'];?>
</span></td>

                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                </table>
                <table class="table invoice-total">
                    <tbody>

                    <tr>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                        <td><strong><span class="amount<?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>




    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
