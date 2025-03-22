<?php
/* Smarty version 3.1.30, created on 2022-06-03 18:40:00
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_629a08287bca89_39457979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec2d070870d4284620fc49812191ee6e72b960d' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-view.tpl',
      1 => 1654261800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_629a08287bca89_39457979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_assignInScope('stock', json_decode(product_stock_info($_smarty_tpl->tpl_vars['id']->value),true));
?>
<div class="row">
	<div class="col-lg-12"  id="application_ajaxrender">
            <div class="ibox float-e-margins">
                    <div class="ibox-content">		
                        <h1>Product Name : <b><?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
</b></h1>	
                        <h3>Current Stock : <?php echo $_smarty_tpl->tpl_vars['stock']->value['current_stock_count'];?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['product_stock_type']);?>
</h3>			
                    </div>
                </div>

		<div class="ibox float-e-margins">
			<div class="ibox-content">			
				<h3>Credited Stocks</h3>
				<table class="table table-bordered sys_table">
                    <th>#</th>
                    <th>Stock</th>
                    <th>Date</th>
                    <?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sys_items_stock']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['stock'];?>
</td>
                        <td><?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['row']->value['timestamp']));?>
</td>
                    </tr> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>			
			</div>
        </div>
        

		<div class="ibox float-e-margins">
            <div class="ibox-content">			
                <h3>Debited Stocks</h3>
                <table class="table table-bordered sys_table">
                    <th>#</th>
                    <th>Invoice ID</th>
                    <th>Stock</th>
                    <th>Date</th>
                    <?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sys_invoiceitems']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo get_type_by_id('sys_invoices','id',$_smarty_tpl->tpl_vars['row']->value['invoiceid'],'invoicenum');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['qty'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['duedate'];?>
</td>
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
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
