<?php
/* Smarty version 3.1.30, created on 2022-01-22 15:20:51
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/util-activity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61ebd37babda87_53379433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b96898c955babc6e65ade2c4227e53a795904e' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/util-activity.tpl',
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
function content_61ebd37babda87_53379433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                    . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h5>
                <a href="#" class="btn btn-primary btn-sm pull-right" id="clear_logs"><i
                            class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Clear Old Data'];?>
</a>


            </div>
            <div class="ibox-content" id="application_ajaxrender">


                <table class="table table-bordered sys_table" id="sys_logs">
                    <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['UID'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip'];?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </tbody>
                </table>

                <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


            </div>


        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
