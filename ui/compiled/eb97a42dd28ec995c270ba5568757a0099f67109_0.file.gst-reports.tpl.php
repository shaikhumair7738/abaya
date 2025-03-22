<?php
/* Smarty version 3.1.30, created on 2022-04-01 18:29:23
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/gst-reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6246f72b173397_81074498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb97a42dd28ec995c270ba5568757a0099f67109' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/gst-reports.tpl',
      1 => 1648817942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6246f72b173397_81074498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
.wrapper-content {
    font-size: 12px !important;
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title col-xs-12">
				<h5>GST Reports</h5>
				<div class="col-md-4">
					<div class="input-group">
						<!--<div class="input-group-addon">
							<span>Filter By Account</span>
						</div>-->
						<select id="filter" name="filter" style="height: 32px !important;">
							<option value="">Select Account</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ac']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
							<option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['account'];?>
 / <?php echo $_smarty_tpl->tpl_vars['row']->value['company'];?>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['email'] != '') {?> / <?php echo $_smarty_tpl->tpl_vars['row']->value['email'];
}?></option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
				</div>	
				<!--<input type="hidden" name="invoice_id" id="invoice_id" value="123">
				<input type="button" name="send_pdf" id="send_pdf" class="btn btn-primary btn-xs" value="Send PDF">-->
				<div class="ibox-tools">
					<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
						<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
						<span></span>
						<b class="caret"></b>
					</div>
				</div>
			</div>
			<div class="ibox-content ret_bal">
				<table class="table table-bordered table-hover sys_table footable" id="projectSpreadsheet">
					<thead>
						<tr>
							<th>#</th>
							<th style="width: 10%;">Date</th>
							<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
							<th>GST No</th>
							<th>Taxable <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
							<th>CGST</th>
							<th>SGST</th>
							<th>IGST</th>
							<th>GST Total</th>
							<th>Invoice Amount</th>
							<th align="center">Print</th>
							<!--<th align="center"><input type="checkbox" id="checkAll"></th>-->
						</tr>
					</thead>
					<tbody><?php $_smarty_tpl->_assignInScope('amt', 0);
?> <?php $_smarty_tpl->_assignInScope('cgst', 0);
?> <?php $_smarty_tpl->_assignInScope('sgst', 0);
?> <?php $_smarty_tpl->_assignInScope('igst', 0);
?> <?php $_smarty_tpl->_assignInScope('gst_total', 0);
?> <?php $_smarty_tpl->_assignInScope('currency_symbol', '');
?> <?php $_smarty_tpl->_assignInScope('invtotal', 0);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'inv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->value) {
?>
						<tr>
							<?php $_smarty_tpl->_assignInScope('amt', $_smarty_tpl->tpl_vars['amt']->value+$_smarty_tpl->tpl_vars['inv']->value['total']);
?> <?php $_smarty_tpl->_assignInScope('cgst', $_smarty_tpl->tpl_vars['cgst']->value+$_smarty_tpl->tpl_vars['inv']->value['CGST']);
?> <?php $_smarty_tpl->_assignInScope('sgst', $_smarty_tpl->tpl_vars['sgst']->value+$_smarty_tpl->tpl_vars['inv']->value['SGST']);
?> <?php $_smarty_tpl->_assignInScope('igst', $_smarty_tpl->tpl_vars['igst']->value+$_smarty_tpl->tpl_vars['inv']->value['IGST']);
?>
							<?php $_smarty_tpl->_assignInScope('invtotal', $_smarty_tpl->tpl_vars['invtotal']->value+$_smarty_tpl->tpl_vars['inv']->value['subtotal']);
?> <?php $_smarty_tpl->_assignInScope('currency_symbol', $_smarty_tpl->tpl_vars['inv']->value['currency_symbol']);
?>
							<?php $_smarty_tpl->_assignInScope('gst_total', $_smarty_tpl->tpl_vars['gst_total']->value+$_smarty_tpl->tpl_vars['inv']->value['taxamt']);
?>
							<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoicenum'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['inv']->value['date'];?>
</td>
							<td><?php echo get_type_by_id('crm_accounts','id',$_smarty_tpl->tpl_vars['inv']->value['userid'],'company');?>
</td>
							<td align="right"><?php echo get_type_by_id('crm_accounts','id',$_smarty_tpl->tpl_vars['inv']->value['userid'],'gst_no');?>
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
							<td align="center">
								<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['inv']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['inv']->value['vtoken'];?>
/view" target="_blank" class="btn btn-primary btn-xs">
									<i class="fa fa-print"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a>
							</td>
							<!--<td align="center">
								<input type="checkbox" name="invoice_pdf[]" class="check_invoice" value="<?php echo $_smarty_tpl->tpl_vars['inv']->value['invoicenum'];?>
">
							</td>-->
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
							<td colspan="4" align="right">
								<h3>Total</h3>
							</td>
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
				</table>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
