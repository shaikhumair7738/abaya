<?php
/* Smarty version 3.1.30, created on 2022-04-02 14:35:38
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/invoice-view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_624811e2a97a64_46903450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32644235aa0e6fb3de8423a5a2f18a7b85a0a67a' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/invoice-view.tpl',
      1 => 1648890328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_624811e2a97a64_46903450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unique Invoice URL'];?>
:</label>
			<input type="text" class="form-control" id="invoice_public_url" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
		</div>
	</div>
	<div class="col-lg-12"  id="application_ajaxrender">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 - <?php if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
 <?php }?></h5>
				<input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">
				<div class="btn-group  pull-right" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-envelope-o"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>

								<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
								<li><a href="#" id="mail_invoice_created"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Created'];?>
</a></li>
								<li><a href="#" id="mail_invoice_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Reminder'];?>
</a></li>
								<li><a href="#" id="mail_invoice_overdue"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Overdue Notice'];?>
</a></li>
								<li><a href="#" id="mail_invoice_confirm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Confirmation'];?>
</a></li>
								<li><a href="#" id="mail_invoice_refund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Refund Confirmation'];?>
</a></li>
						</ul>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn  btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-ellipsis-v"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>

								<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
								<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Paid') {?>
										<li><a href="#" id="mark_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Unpaid') {?>
										<li><a href="#" id="mark_unpaid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Partially Paid') {?>
										<li><a href="#" id="mark_partially_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Cancelled') {?>
										<li><a href="#" id="mark_cancelled"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
								<?php }?>
						</ul>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting'] == '1') {?>
							<button type="button" class="btn  btn-danger btn-sm" id="add_payment"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Payment'];?>
</button>
					<?php }?>
					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense&userid=<?php echo $_smarty_tpl->tpl_vars['d']->value['userid'];?>
&invoiceid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn  btn-warning btn-sm" id="add_expense"><i class="fa fa-plus"></i> Add Expense</a>
					<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fa fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</a> -->
					<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
					<?php }?>
					<div class="btn-group" role="group">
						<button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-file-pdf-o"></i>
								<?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>

								<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a></li>
						</ul>
					</div>
					<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a> -->
				</div>
			</div>
			<div class="ibox-content">
				<div class="invoice">
					<header class="clearfix">
						<div class="row">
							<div class="col-sm-6 mt-md">
									<h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
</h2>
									<h4 class="h4 m-none text-dark text-bold">#<?php if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
 <?php }?></h4>
									<?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
											<h3 class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</h3>
									<?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
											<h3 class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</h3>
									<?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
											<h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</h3>
									<?php } else { ?>
											<h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</h3>
									<?php }?>
								<div class="bill-to">
									<p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoiced To'];?>
:</strong></p>
									<address>  
											<?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
													<?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

													<br>
												 <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

													<br>
													<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

													<br>
											<?php }?>

											<?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <br>
											<?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
											<?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
											<?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>

											<br>
											<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

											<br>
											<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
?>
													<br>
													<strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											<br>
											<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['gst_no'];?>


											<?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

									</address>
								</div>
							</div>
							<div class="col-sm-6 text-right mt-md mb-md">
								<div class="ib">
									<img width="200px" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/<?php echo $_smarty_tpl->tpl_vars['comp']->value['company_logo'];?>
" alt="Logo">
								</div>  
								<address class="ib mr-xlg">
									<strong><?php echo $_smarty_tpl->tpl_vars['comp']->value['account'];?>
</strong><br>
									<?php echo $_smarty_tpl->tpl_vars['comp']->value['address'];?>
<br>
									<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['comp']->value['email'];?>
<br>
									<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['comp']->value['contact_phone'];?>
<br>
									<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['comp']->value['gstin'];?>

									<!-- <?php echo var_dump($_smarty_tpl->tpl_vars['comp']->value);?>
 -->
									<!-- <?php echo $_smarty_tpl->tpl_vars['_c']->value['caddress'];?>
 -->
								</address>	
							</div>
						</div>
					</header>
					<div class="bill-info">
						<div class="row">
							<div class="col-md-6">
									
							</div>
							<div class="col-md-6">
								<div class="bill-data text-right">
										<p class="mb-none">
												<span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
:</span>
												<span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
										</p>
										<p class="mb-none">
												<span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
:</span>
												<span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['duedate']));?>
</span>
										</p>
										<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
: <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</span> </h2>
										<?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
												<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
:  <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['credit'];?>
</span> </h2>
												
												<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
</span> </h2>
										<?php }?>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table invoice-items">
							<thead>
								<tr class="h4 text-dark">
									<th id="cell-id" class="text-semibold">S.No</th>
									<th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
									<th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
									<th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</th>
									<th id="cell-gst_per" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst_per'];?>
</th>
									<th id="cell-gst_amt" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst_amt'];?>
</th>
									<th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php $_smarty_tpl->_assignInScope('i', 1);
?> 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
									<td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
									<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
									<td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
									<td class="text-center amount" ><?php echo $_smarty_tpl->tpl_vars['item']->value['taxrate'];?>
</td>
									<td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['taxamount'];?>
</td>
									
									<td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tbody>
						</table>
					</div>
					<div class="invoice-summary">
						<div class="row">
							<div class="col-sm-4 col-sm-offset-8">
								<table class="table h5 text-dark">
									<tbody>
									<tr class="b-top-none">
											<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
											<td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
									</tr>
								
									<tr>
											<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
											<td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['taxamt'];?>
</td>
									</tr>
									 <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
										 <tr>
												 <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
												 <td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>
</td>
										 </tr>
								 <?php }?>
									<?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
											<tr>
													<td colspan="2">Invoice <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
													<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
											</tr>
											<tr>
													<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
													<td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['credit'];?>
</td>
											</tr>
											<tr class="h4">
													<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
													
													<td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
</td>
											</tr>
											<?php } else { ?>
											<tr class="h4">
													<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
													<td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</td>
											</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<?php if (($_smarty_tpl->tpl_vars['trs_c']->value != '')) {?>
				<h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Transactions'];?>
</h3>
				<table class="table table-bordered sys_table">
					 <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
					 <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
					 <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
					 <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
					 <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
					 <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trs']->value, 'tr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
?>
							 <tr class="<?php if ($_smarty_tpl->tpl_vars['tr']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
									 <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['tr']->value['date']));?>
</td>
									 <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['account'];?>
</td>
									 <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['method'];?>
</td>
									 <td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['tr']->value['amount'];?>
</td>
									 <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['description'];?>
</td>
									 <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['tr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
							 </tr>
					 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<?php }?>
<h5>Notes</h5>
				<?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
						<div class="well m-t">
								<?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

						</div>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) == '') {?>
						<div class="well m-t">
								<?php echo $_smarty_tpl->tpl_vars['app_config']->value['value'];?>

						</div>
				<?php }?>
				
				<?php if (($_smarty_tpl->tpl_vars['emls_c']->value != '')) {?>
						<hr>
						<h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Emails'];?>
</h3>
						<table class="table table-bordered sys_table">
								<th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
								<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emls']->value, 'eml');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eml']->value) {
?>
										<tr>
												<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['eml']->value['date']));?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['eml']->value['subject'];?>
</td>
										</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
<input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">


<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
