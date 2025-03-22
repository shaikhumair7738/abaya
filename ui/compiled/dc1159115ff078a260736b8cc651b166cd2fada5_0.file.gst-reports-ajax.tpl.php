<?php
/* Smarty version 3.1.30, created on 2017-12-19 18:12:17
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/gst-reports-ajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a390929024246_22331329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1159115ff078a260736b8cc651b166cd2fada5' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/gst-reports-ajax.tpl',
      1 => 1513687319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a390929024246_22331329 (Smarty_Internal_Template $_smarty_tpl) {
?>

				<table class="table table-bordered table-hover sys_table footable" id="projectSpreadsheet">
					<thead>
						<tr>
								<th>#</th>
								<th style="width: 10%;">Date</th>
								<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
								<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</th>
								<th>Taxable <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
								<th>CGST</th>
								<th>SGST</th>
								<th>IGST</th>
								<th>GST Total</th>
								<th>Invoice Amount</th>
								<th align="center">Print</th>
						</tr>
					</thead>
					<tbody><?php $_smarty_tpl->_assignInScope('amt', 0);
?> <?php $_smarty_tpl->_assignInScope('cgst', 0);
?> <?php $_smarty_tpl->_assignInScope('sgst', 0);
?> <?php $_smarty_tpl->_assignInScope('igst', 0);
?> <?php $_smarty_tpl->_assignInScope('gst_total', 0);
?> <?php $_smarty_tpl->_assignInScope('currency_symbol', '');
?> <?php $_smarty_tpl->_assignInScope('invtotal', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'inv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->value) {
?>
							<tr> 
								<?php $_smarty_tpl->_assignInScope('amt', $_smarty_tpl->tpl_vars['amt']->value+$_smarty_tpl->tpl_vars['inv']->value['total']);
?>
								<?php $_smarty_tpl->_assignInScope('cgst', $_smarty_tpl->tpl_vars['cgst']->value+$_smarty_tpl->tpl_vars['inv']->value['CGST']);
?>
								<?php $_smarty_tpl->_assignInScope('sgst', $_smarty_tpl->tpl_vars['sgst']->value+$_smarty_tpl->tpl_vars['inv']->value['SGST']);
?>
								<?php $_smarty_tpl->_assignInScope('igst', $_smarty_tpl->tpl_vars['igst']->value+$_smarty_tpl->tpl_vars['inv']->value['IGST']);
?>
								<?php $_smarty_tpl->_assignInScope('invtotal', $_smarty_tpl->tpl_vars['invtotal']->value+$_smarty_tpl->tpl_vars['inv']->value['subtotal']);
?>
								<?php $_smarty_tpl->_assignInScope('currency_symbol', $_smarty_tpl->tpl_vars['inv']->value['currency_symbol']);
?>
								<?php $_smarty_tpl->_assignInScope('gst_total', $_smarty_tpl->tpl_vars['gst_total']->value+$_smarty_tpl->tpl_vars['inv']->value['taxamt']);
?>
								<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoicenum'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['date'];?>
</td>
								<td><?php echo get_type_by_id('crm_accounts','id',$_smarty_tpl->tpl_vars['inv']->value['userid'],'company');?>
</td>
								<td><?php echo get_type_by_id('sys_accounts','id',$_smarty_tpl->tpl_vars['inv']->value['company_id'],'account');?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['total'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['CGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['SGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['IGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['taxamt'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['subtotal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['inv']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['inv']->value['vtoken'];?>
/view" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-print">  </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a></td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tbody>
					<tfoot>
						<tr><?php $_smarty_tpl->_assignInScope('totaltax', $_smarty_tpl->tpl_vars['cgst']->value+$_smarty_tpl->tpl_vars['sgst']->value+$_smarty_tpl->tpl_vars['igst']->value);
?>
							<td colspan="4" align="right"><h3>Total</h3></td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['amt']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['cgst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['sgst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['igst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['gst_total']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['invtotal']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							
						</tr>
					</tfoot>
				</table><?php }
}
