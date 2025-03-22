<?php
/* Smarty version 3.1.30, created on 2023-11-03 20:42:05
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/view-design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65450dc57ef316_08903699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba0eb303a951a61a555fc292091cd31a1399501' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/view-design.tpl',
      1 => 1693830612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_65450dc57ef316_08903699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
	<div class="col-lg-12"  id="application_ajaxrender">
            <div class="ibox float-e-margins">
                    <div class="ibox-content">		
                        <h1>Product Name : <b><?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
</b></h1>	
                    </div>
                </div>
                
        <?php $_smarty_tpl->_assignInScope('invoiceIds', array());
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoiceItems']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
           <?php if (!in_array($_smarty_tpl->tpl_vars['row']->value['invoiceid'],$_smarty_tpl->tpl_vars['invoiceIds']->value)) {?>
               <?php $_smarty_tpl->_assignInScope('invoiceIds', array_merge($_smarty_tpl->tpl_vars['invoiceIds']->value,array($_smarty_tpl->tpl_vars['row']->value['invoiceid'])));
?>
           <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               

		<div class="ibox float-e-margins">
			<div class="ibox-content">			
				<h3>Designs used in Invoices</h3>
				<table class="table table-bordered sys_table">
                    <th>#</th>
                    <th>Invoice</th>
                    <th>Date</th>
                    <?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoiceIds']->value, 'invoiceId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['invoiceId']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('invDetail', get_type_by_id_multi('sys_invoices','id',$_smarty_tpl->tpl_vars['invoiceId']->value,'invoicenum,date'));
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['invDetail']->value['invoicenum'];?>
</td>
                        <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['invDetail']->value['date']));?>
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
