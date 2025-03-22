<?php
/* Smarty version 3.1.30, created on 2017-11-07 12:40:20
  from "/home4/arifkhan/public_html/bill/application/lib/invoices/pdf-x2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a015c5c903d34_77169337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c7ce78745007ab69ae6feb889bc9782f170766' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/application/lib/invoices/pdf-x2.php',
      1 => 1510038517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a015c5c903d34_77169337 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>

    <style>

/*

PDF library using PHP have some limitations and all CSS properties may not support. Before Editing this file, Please create a backup, so that You can restore this.

The location of this file is here- application/lib/invoices/pdf-x2.php

*/

        * { margin: 0; padding: 0; }
        body {
            /*

            Important: Do not Edit Font Name, Unless you are sure. It's required for PDF Rendering Properly

            */


            font: 14px/1.4  dejavusanscondensed;


            /*

            Font Name End

            */
        }

        #page-wrap { width: 800px; margin: 0 auto; }

        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }


        #customer { overflow: hidden; }

        #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #eee; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #eee; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td {  vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 175px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: right; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #eee; }
        #items td.blank { border: 0; }

        #terms { text-align: left; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font: 13px <?php echo '<?php ';?>echo $config['pdf_font']; <?php echo '?>';?>; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}
.borderless td, .borderless th {
    border: none;
}
    </style>

</head>

<body style="font-family:dejavusanscondensed">

<div id="page-wrap">
	<table width="100%">
		<tr>
			<td style="border: 0;  text-align: left" width="62%">
				<span style="font-size: 18px; color: #2f4f4f"><strong><?php echo '<?php ';?>echo $_L['INVOICE']; <?php echo '?>';?> # <?php echo '<?php ';?>echo ($d['invoice_no']); <?php echo '?>';?>
								</strong></span>
			</td>
			<td style="border: 0;  text-align: right" width="62%"><div id="logo" style="font-size:18px">
							<img id="image" src="<?php echo '<?php ';?>echo APP_URL; <?php echo '?>';?>/application/storage/system/<?php echo '<?php ';?>echo $comp['company_logo']; <?php echo '?>';?>" alt="logo" /> <br> <br>								<strong><?php echo '<?php ';?>echo $comp['account']; <?php echo '?>';?>	</strong><br>
							<?php echo '<?php ';?>echo $comp['address']; <?php echo '?>';?><br>							<strong>Email : </strong><?php echo '<?php ';?>echo $comp['email']; <?php echo '?>';?><br>							<strong>Phone : </strong><?php echo '<?php ';?>echo $comp['contact_phone']; <?php echo '?>';?><br>							<strong>Gstin : </strong><?php echo '<?php ';?>echo $comp['gstin']; <?php echo '?>';?>
					</div>
			</td>
		</tr>
	</table><hr>
  <div style="clear:both"></div>
    <div id="customer">
      <table id="meta">
				<tr>
					<td rowspan="5" style="border: 1px solid white; border-right: 1px solid black; text-align: left" width="62%"> <strong><?php echo '<?php ';?>echo $_L['Invoiced To']; <?php echo '?>';?></strong> <br>
							<?php echo '<?php ';?>if($a['company'] != '') { <?php echo '?>';?>
									<?php echo '<?php ';?>echo $a['company']; <?php echo '?>';?> <br>
									<?php echo '<?php ';?>echo $_L['ATTN']; <?php echo '?>';?>: <?php echo '<?php ';?>echo $a['account']; <?php echo '?>';?> <br>
							<?php echo '<?php
							';?>}
							else{
									<?php echo '?>';?>
									<?php echo '<?php ';?>echo $d['account']; <?php echo '?>';?> <br>
							<?php echo '<?php
							';?>}
							<?php echo '?>';?>
							<?php echo '<?php ';?>echo $a['address']; <?php echo '?>';?> <br>
							<?php echo '<?php ';?>echo $a['city']; <?php echo '?>';?> <?php echo '<?php ';?>echo $a['state']; <?php echo '?>';?> <?php echo '<?php ';?>echo $a['zip']; <?php echo '?>';?> <br>
							<?php echo '<?php ';?>echo $a['country']; <?php echo '?>';?> <br>
							<?php echo '<?php
							';?>if(($a['phone']) != ''){
									echo 'Phone: '. $a['phone']. ' <br>';
							}
							if(($a['email']) != ''){
									echo 'Email: '. $a['email']. ' <br>';
							}
							foreach ($cf as $cfs){
									echo $cfs['fieldname'].': '. get_custom_field_value($cfs['id'],$a['id']). ' <br>';
							}
							<?php echo '?>';?><br>
										<strong><?php echo '<?php ';?>echo $_L['gst'].": ";<?php echo '?>';?></strong> <?php echo '<?php ';?>echo $a['gst_no']; <?php echo '?>';?>
					</td>
					
				</tr>
				<tr>
						<td class="meta-head"><?php echo '<?php ';?>echo $_L['Status']; <?php echo '?>';?></td>
						<td><?php echo '<?php ';?>echo ib_lan_get_line($d['status']); <?php echo '?>';?></td>
				</tr>
				<tr>
						<td class="meta-head"><?php echo '<?php ';?>echo $_L['Invoice Date']; <?php echo '?>';?></td>
						<td><?php echo '<?php ';?>echo date($config['df'], strtotime($d['date'])); <?php echo '?>';?></td>
				</tr>
				<tr>
						<td class="meta-head"><?php echo '<?php ';?>echo $_L['Due Date']; <?php echo '?>';?></td>
						<td><?php echo '<?php ';?>echo date($config['df'], strtotime($d['duedate'])); <?php echo '?>';?></td>
				</tr>
				<?php echo '<?php
				';?>if($d['credit'] != '0.00'){
						<?php echo '?>';?>
						<tr>
								<td class="meta-head"><?php echo '<?php ';?>echo $_L['Amount Due']; <?php echo '?>';?></td>
								<td><div class="due"><?php echo '<?php ';?>echo ib_money_format($i_due,$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
						</tr>
				<?php echo '<?php
				';?>}
				else{
						<?php echo '?>';?>
						<tr>
								<td class="meta-head"><?php echo '<?php ';?>echo $_L['Amount Due']; <?php echo '?>';?></td>
								<td><div class="due"><?php echo '<?php ';?>echo ib_money_format($i_due,$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
						</tr>
				<?php echo '<?php
				';?>}
				<?php echo '?>';?>
        </table>
    </div>
			
		<div class="table-responsive">
			<table class="table" id="items" width="100%">
				<tr>
					<th id="cell-item" class="text-semibold">#</th>
					<th id="cell-item" class="text-semibold"><?php echo '<?php ';?>echo $_L['Description'];<?php echo '?>';?></th>
					
					<th id="cell-qty" class="text-center text-semibold"><?php echo '<?php ';?>echo $_L['Qty'];<?php echo '?>';?></th>
					<th id="cell-price" class="text-center text-semibold"><?php echo '<?php ';?>echo $_L['Rate'];<?php echo '?>';?></th>				
					
					<th id="cell-total" class="text-center text-semibold"><?php echo '<?php ';?>echo $_L['Total'];<?php echo '?>';?></th>
				</tr>
				
					<?php echo '<?php  ';?>$i=0; 
					foreach ($items as $item){ 
							echo '<tr class="item-row">
							<td class="center">'.++$i.'</td>
							<td class="">'.$item['description'].'</td>
							<td align="right">'.$item['qty'].'</td>
							<td align="right">'.$item['amount'].'</td>
							<td align="right"><span class="price">'.number_format($item['qty']*$item['amount'],2,".","").'</span></td>
					</tr>';
					} 

					<?php echo '?>';?>
			</table>
		</div>		<br>
		<div class="table-responsive">
			<table class="table borderless" width="50%" align="right">		
					<tr><td class="total-line" align="left"><?php echo '<?php ';?>echo $_L['Sub Total']; <?php echo '?>';?></td>
							<td class="total-value" align="right"><div id="subtotal"><?php echo '<?php ';?>echo ib_money_format($d['total'],$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
					</tr>
				<?php echo '<?php ';?>if(($d['discount']) != '0.00'){ <?php echo '?>';?>
					<tr><td class="total-line"><?php echo '<?php ';?>echo $_L['Discount']; <?php echo '?>';?>
								<?php echo '<?php ';?>if($d['discount_type'] == 'p'){ echo '('.$d['discount_value'].')%'; } <?php echo '?>';?></td>
							<td class="total-value" align="right"><div id="subtotal"><?php echo '<?php ';?>echo ib_money_format($d['discount'],$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
					</tr>
				<?php echo '<?php ';?>} <?php echo '?>';?>
				
				<?php echo '<?php ';?>if($d['credit'] != '0.00'){ <?php echo '?>';?>
					<tr><td class="total-line"><?php echo '<?php ';?>echo $_L['Invoice Total']; <?php echo '?>';?></td>
							<td class="total-value" align="right"><div class="due"><?php echo '<?php ';?>echo ib_money_format($d['subtotal'],$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
					</tr>
					<tr><td  class="total-line"><?php echo '<?php ';?>echo $_L['Total Paid']; <?php echo '?>';?></td>
							<td class="total-value" align="right"><div class="due"><?php echo '<?php ';?>echo ib_money_format($d['credit'],$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
					</tr>
					<tr><td class="total-line balance"><?php echo '<?php ';?>echo $_L['Amount Due']; <?php echo '?>';?></td>
							<td class="total-value balance" align="right"><div class="due"><?php echo '<?php ';?>echo ib_money_format($i_due,$config,$d['currency_symbol']) <?php echo '?>';?></div></td>
					</tr>
				<?php echo '<?php ';?>} <?php echo '?>';?>
				<tr><td class="total-line balance">CGST (9%)</td>
					<td class="total-value" align="right"><div id="total"><?php echo '<?php ';?>echo ib_money_format($d['taxamt']/2,$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
				</tr>
				<tr><td class="total-line balance">SGST (9%)</td>
					<td class="total-value" align="right"><div id="total"><?php echo '<?php ';?>echo ib_money_format($d['taxamt']/2,$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
				</tr>
				<tr><td class="total-line balance">GST Amount</td>
					<td class="total-value" align="right"><div id="total"><?php echo '<?php ';?>echo ib_money_format($d['taxamt'],$config,$d['currency_symbol']); <?php echo '?>';?></div></td>
				</tr>
				<tr><td class="total-line balance">Total</td>
					<td class="total-value balance" align="right"><div class="due"><?php echo '<?php ';?>echo ib_money_format($i_due,$config,$d['currency_symbol']) <?php echo '?>';?></div></td>
				</tr>
				<tr>
					<td colspan="2" class="total-value balance" align="right"><?php echo '<?php ';?>echo get_amt_inWords($i_due );<?php echo '?>';?></td>
				</tr>
			</table>
		</div>
</div>

</body>

</html><?php }
}
