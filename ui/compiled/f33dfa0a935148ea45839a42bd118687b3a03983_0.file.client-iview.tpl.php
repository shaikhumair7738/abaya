<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:36:22
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/client-iview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537cf5ec15c60_98696005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f33dfa0a935148ea45839a42bd118687b3a03983' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/client-iview.tpl',
      1 => 1692962592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537cf5ec15c60_98696005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
 - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl'] == '1') {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>
    <style type="text/css">
        body {

            background-color: #FAFAFA;
            overflow-x: visible;
        }
        .paper {
            margin: 50px auto;
            width: 980px;
            border: 2px solid #DDD;
            background-color: #FFF;
            position: relative;
            width: 980px;
        }
    </style>
</head>

<body class="fixed-nav">

<div class="paper">
	<section class="panel">
		<div class="panel-body">
			<div class="invoice">
				<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)) {?>
						<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				<?php }?>
				<header class="clearfix">
					<div class="row">
						<div class="col-sm-6 mt-md">
							<h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
</h2>
							<h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
</h4>
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
							<div class="bill-to" style="font-size:12px;">
								<p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoiced To'];?>
</strong></p>
								<address style="margin:0px">
										<?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
												<strong><?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>
</strong>
												<br>
												<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

												<br>
										<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

												<br>
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <!--<br>
										<?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
										<?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
										<?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>
-->
										<br>
										<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

										<br>
										<!--<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>
-->
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
										<!--<strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['gst_no'];?>
-->
										<?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

								</address>
								<h3 class="alert alert-info" style="color: #383d41;background-color: #e2e3e5;border-color: #d6d8db;">Invoice Status : <?php echo $_smarty_tpl->tpl_vars['d']->value['delivery_status'];?>
</h3>
							</div>
						</div>
						<div class="col-sm-6 text-right mt-md mb-md">
							<div class="ib">
									<img width="100px" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/<?php echo $_smarty_tpl->tpl_vars['comp']->value['company_logo'];?>
" alt="Logo">
							</div>
							<address class="ib mr-xlg">
											<table width="100%">			<tr>				<td style="border: 0; text-align: left" width="62%"><div id="logo" style="font-size:12px; margin-top:13%;">					<strong>Invoice From:</strong> <br><br>					<strong><?php echo $_smarty_tpl->tpl_vars['comp']->value['account'];?>
</strong><br>					<?php echo $_smarty_tpl->tpl_vars['comp']->value['address'];?>
<br>					<strong>Phone : </strong><?php echo $_smarty_tpl->tpl_vars['comp']->value['contact_phone'];?>
<br>					<strong>Email : </strong><?php echo $_smarty_tpl->tpl_vars['comp']->value['email'];?>
<br>					<!--<strong>GSTIN : </strong><?php echo $_smarty_tpl->tpl_vars['comp']->value['gstin'];?>
<br>-->					<strong>Account Name : </strong><?php echo get_type_by_id('sys_accounts','id',$_smarty_tpl->tpl_vars['d']->value['company_id'],'account');?>
<br>					<strong>Account No : </strong><?php echo get_type_by_id('sys_accounts','id',$_smarty_tpl->tpl_vars['d']->value['company_id'],'account_number');?>
<br>					<strong>IFSC Code : </strong><?php echo get_type_by_id('sys_accounts','id',$_smarty_tpl->tpl_vars['d']->value['company_id'],'ifsc');?>
					</div>				</td>						</tr>		</table>
							</address>
						</div>
					</div>
				</header>
					<div class="bill-info">
						<div class="row">
							<div class="col-md-6">
								<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
 </h2>
											<?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
													<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
													<h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
											<?php }?>
											<?php if ((($_smarty_tpl->tpl_vars['d']->value['status']) != 'Paid') && (ib_pg_count() != '0' && (($_smarty_tpl->tpl_vars['d']->value['status']) != 'Cancelled'))) {?>	
							</div>
							<div class="col-md-6">
								<div class="bill-data text-right">
									<p class="mb-none">
											<span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</span>
											<span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
									</p>
									<p class="mb-none">
											<span class="text-dark">Delivery Date:</span>
											<span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['duedate']));?>
</span>
									</p>
									<!--<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
">-->
									<form class="form-inline" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipay/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
										<input placeholder="Enter Amount" type="number" min="500" max="<?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
" step="0.01" class="no-spinners form-control" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
">
										<input type="hidden" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['account'];?>
">
										<input type="hidden" name="email" value="bills@abayadesigner.com">
										<input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>
">
										<input type="hidden" name="productinfo" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
@<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
										<input type="hidden" name="surl" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipay_success">
										<input type="hidden" name="furl" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipay_cancel">
										<input type="hidden" name="txnid" value="<?php echo $_smarty_tpl->tpl_vars['txnid']->value;?>
">
										<?php if (($_smarty_tpl->tpl_vars['d']->value['company_id']) == '1') {?>
										<input type="hidden" name="key" value="ByhijwgB">
										
										<?php } else { ?>
										<input type="hidden" name="key" value="ByhijwgB">
										<?php }?>
											<div class="form-group has-success">
										
											</div>
											<button type="submit" class="btn btn-info ml-sm"><i class="fa fa-credit-card"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Pay Now'];?>
</button>
									</form>
											<?php }?>
											
								</div>
							</div>
						</div>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['d']->value['d_measure'] == 'yes') {?>
					<div class="invoice_tb">			<h3>Measurements :</h3>
											
											
<table class="table">
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['a']->value['measurements']), 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
	<tr>
		<th ><?php echo ucfirst($_smarty_tpl->tpl_vars['key']->value);?>
</th>
	<td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
 </td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table>

<div>
		<h3>Files :</h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['d']->value['additional_imgs']), 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
		<img data-img="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" width="50px" height="50px" class="img-popup">
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
	<br>
					</div>
					<?php }?>

					<div class="table-responsive">
						<table class="table table-bordered invoice-items">
							<thead>
								<tr class="h4 text-dark">
									<th rowspan="2" id="cell-item" class="text-semibold">#</th>
									<th rowspan="2" id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
									<th rowspan="2" id="cell-item" class="text-semibold">Image</th>
									<th rowspan="2" id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
									<!--<th rowspan="2" id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</th>-->			
									<!--<th colspan="2" id="cell-cgst" class="text-center text-semibold">CGST</th>				
									<th colspan="2" id="cell-cgst" class="text-center text-semibold">SGST</th>				
									<th colspan="2" id="cell-igst" class="text-center text-semibold">IGST</th>-->				
									<!--<th rowspan="2" id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>-->
								</tr>
								<!--<tr>
									<th>%</th>
									<th>AMT</th>
									<th>%</th>
									<th>AMT</th>
									<th>%</th>
									<th>AMT</th>
								</tr>-->
							</thead>
							<tbody>
								<?php $_smarty_tpl->_assignInScope('i', 1);
?> 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> 
									<tr class="item-row">
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
										<td class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['item_img'])) {?>
												<img data-img="/ui/lib/imgs/invoice-contents/<?php echo $_smarty_tpl->tpl_vars['item']->value['item_img'];?>
" class="img-popup" width="40px" height="40px" src="/ui/lib/imgs/invoice-contents/<?php echo $_smarty_tpl->tpl_vars['item']->value['item_img'];?>
">
											<?php }?>
										</td>
										<td align="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
										<!--<td align="right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['amount'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>-->
										<!--<?php if (($_smarty_tpl->tpl_vars['item']->value['taxtype'] == "GST")) {?>
										<td align="right"><?php echo ($_smarty_tpl->tpl_vars['item']->value['taxrate']/2);?>
</td>
										<td align="right"><?php echo ib_money_format(($_smarty_tpl->tpl_vars['item']->value['taxamount']/2),$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
										<td align="right"><?php echo ($_smarty_tpl->tpl_vars['item']->value['taxrate']/2);?>
</td>
										<td align="right"><?php echo ib_money_format(($_smarty_tpl->tpl_vars['item']->value['taxamount']/2),$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
										<?php } else { ?>
										<td align="right"></td>
										<td align="right"></td>
										<td align="right"></td>
										<td align="right"></td>
										<?php }?>
										<?php if (($_smarty_tpl->tpl_vars['item']->value['taxtype'] == "IGST")) {?>
										<td align="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['taxrate'];?>
</td>
										<td align="right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['taxamount'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
										<?php } else { ?>
										<td align="right"></td>
										<td align="right"></td>
										<?php }?>-->
										<!--<td align="right"><span class="price"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</span></td>-->
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
															<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
</td>
															<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
													</tr>

													<?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
															<tr>
																	<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>

																	 <?php if ($_smarty_tpl->tpl_vars['d']->value['discount_type'] == 'p') {?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_value'];?>
%)<?php }?>
																	</td>
																	<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['discount'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
															</tr>
													<?php }?>

													<!--<tr>
															<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 Amount</td>
															<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['taxamt'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
													</tr>-->
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
																	<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
															</tr>
															<tr class="h4">
																	<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
																	<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
															</tr>
													<?php } else { ?>
															<tr class="h4">
																	<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
																	<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
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
							<th align="left"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
							<th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
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
											<td align="left"><?php echo $_smarty_tpl->tpl_vars['tr']->value['method'];?>
</td>
											<td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['tr']->value['amount'],$_smarty_tpl->tpl_vars['_c']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['tr']->value['description'];?>
</td>
									</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
					<div class="well m-t">
							<?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

					</div>
			<?php }?>
			<div class="text-right">
					 <br>
					
			</div>
		</div>
	</section>
</div>

<div style="display: none;" class="pop-outer text-right">
        <div class="pop-inner">
            <button class="close-popup btn btn-danger">X</button>
            <img src="" width="100%">
        </div>
    </div>

	<style>
			.pop-outer {
				background-color: rgba(0, 0, 0, 0.5);
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
			.pop-inner {
				background-color: #fff;
				width: 500px;
				height: auto;
				padding: 10px;
				margin: 5% auto;
			}
	
			img.img-popup {
				cursor: pointer;
			}    
			
.no-spinners::-webkit-inner-spin-button,
.no-spinners::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.no-spinners {
    appearance: textfield;
    -moz-appearance: textfield; /* Firefox */
}			
		</style>    

<!-- Mainly scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-ui-1.10.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var _L = [];
    var config_animate = 'No';
    <?php if (($_smarty_tpl->tpl_vars['_c']->value['animate']) == '1') {?>
    var config_animate = 'Yes';
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['jsvar']->value;?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- Custom and plugin javascript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/moment.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/pace.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/progress.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/bootbox.min.js"><?php echo '</script'; ?>
>

<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        <?php if (isset($_smarty_tpl->tpl_vars['xjq']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

    });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
        $(document).ready(function (){
            $('body').on('click', '.img-popup', function (){
                $('.pop-outer img').attr("src", $(this).attr("data-img"));
                $(".pop-outer").fadeIn("slow");       
            });
            $(".close-popup").click(function (){
                $(".pop-outer").fadeOut("slow");
            });
        });
	<?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
