<?php
/* Smarty version 3.1.30, created on 2017-07-03 12:30:43
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5959eb9b94a071_42199007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87da245b59a56068e385c39d67e441c3c926354a' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\transactions.tpl',
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
function content_5959eb9b94a071_42199007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>
. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h5>

            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-bordered sys_table">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                
                                

                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Income') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Expense') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Transfer') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>

                                    <?php }?>
                                </td>

                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['dr'];?>
</td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>
                                <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['bal'] < 0) {?> text-red<?php }?>" ><?php echo $_smarty_tpl->tpl_vars['ds']->value['bal'];?>
</span></td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                    </table>
                </div>


            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

    </div>

   <!-- Widget-1 end-->

    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
