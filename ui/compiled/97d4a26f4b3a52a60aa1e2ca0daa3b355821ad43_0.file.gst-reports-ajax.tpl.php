<?php
/* Smarty version 3.1.30, created on 2017-08-09 12:16:35
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\gst-reports-ajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598aafcb360667_89125650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d4a26f4b3a52a60aa1e2ca0daa3b355821ad43' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\gst-reports-ajax.tpl',
      1 => 1502261038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598aafcb360667_89125650 (Smarty_Internal_Template $_smarty_tpl) {
?>

				<table class="table table-bordered table-hover sys_table footable" id="projectSpreadsheet">
					<thead>
						<tr>
								<th>#</th>
								<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
								<th>Taxable <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
								<th>CGST</th>
								<th>SGST</th>
								<th>IGST</th>
								<th>Invoice Amount</th>
								<th align="center">Print</th>
						</tr>
					</thead>
					<tbody><?php $_smarty_tpl->_assignInScope('amt', 0);
?> <?php $_smarty_tpl->_assignInScope('cgst', 0);
?> <?php $_smarty_tpl->_assignInScope('sgst', 0);
?> <?php $_smarty_tpl->_assignInScope('igst', 0);
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
								<?php $_smarty_tpl->_assignInScope('igst', $_smarty_tpl->tpl_vars['igst']->value+$_smarty_tpl->tpl_vars['inv']->value['IGST']);
?>
								<?php $_smarty_tpl->_assignInScope('invtotal', $_smarty_tpl->tpl_vars['invtotal']->value+$_smarty_tpl->tpl_vars['inv']->value['subtotal']);
?>
								<?php $_smarty_tpl->_assignInScope('currency_symbol', $_smarty_tpl->tpl_vars['inv']->value['currency_symbol']);
?>
								<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['account'];?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['total'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['CGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['SGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['IGST'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['inv']->value['subtotal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
								<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['inv']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['inv']->value['vtoken'];?>
" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-print">  </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
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
							<td colspan="2" align="right"><h3>Total</h3></td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['amt']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['cgst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['sgst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['igst']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['invtotal']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
							<td align="right">Total GST<br><?php echo number_format($_smarty_tpl->tpl_vars['totaltax']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
						</tr>
					</tfoot>
				</table><?php }
}
