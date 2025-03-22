<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:32:28
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537ce749bf498_21224662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c156daae8a02f785925d6447ec451aaec4071e' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-view.tpl',
      1 => 1692703335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6537ce749bf498_21224662 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credited_stock']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['stock'];?>
</td>
                        <td><?php echo date('Y-m-d H:i:s',strtotime($_smarty_tpl->tpl_vars['row']->value['timestamp']));?>
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
                    <th>Stock</th>
                    <th>Ready Product Name</th>
                    <th>Invoice ID</th>
                    <th>Date</th>
                    <?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['debited_stock']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['stock'];?>
</td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['parent_item_id'])) {?>
                                <?php echo get_type_by_id('sys_items','id',$_smarty_tpl->tpl_vars['row']->value['parent_item_id'],'name');?>

                            <?php } else { ?>
                                -
                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['invoice_id'])) {?>
                                <?php echo get_type_by_id('sys_invoices','id',$_smarty_tpl->tpl_vars['row']->value['invoice_id'],'invoicenum');?>

                            <?php } else { ?>
                                -
                            <?php }?>
                        </td>
                        <td><?php echo date('Y-m-d H:i:s',strtotime($_smarty_tpl->tpl_vars['row']->value['timestamp']));?>
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
        

		

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
