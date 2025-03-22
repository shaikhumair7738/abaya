<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:32:57
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/add_invoice_v2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537ce918c3e28_31351343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d6e0e6d1ed78c5f539fb688d6e060badebb490' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/add_invoice_v2.tpl',
      1 => 1693565681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6537ce918c3e28_31351343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
.alert-dismissable .close, .alert-dismissible .close {
    top: -8px;
    right: 0px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
.pad-2 {
    padding: 2px;
}
</style>

<div class="row" id="ibox_form">
  <form id="invform" method="post" enctype="multipart/form-data" parsley-validate novalidate>
		<div class="col-md-12">
			<div class="alert alert-danger alert-dismissable" id="emsg" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span id="emsgbody"></span>
			</div>
		</div>

		
    <div class="col-md-9">

			<div class="panel panel-default">
				<div class="panel-body pdd_010">
					<div class="row">

<div class="ibox-title margbtm_20">
                <h5><i class="fa fa-user" aria-hidden="true"></i> Customer Information <span id="already_cust">(New)</span></h5>


            </div>
                        <div class="col-md-4">
							<label for="cust_name">Customer Name</label>
							<input type="text" class="form-control" name="cust_name" required>
						</div>
                        <div class="col-md-4">
							<label for="cust_phone">Contact Number</label>
							<input type="text" class="form-control" name="cust_phone" required>
						</div>	
						<div class="col-md-4">
							<label for="cust_location">Location</label>
							<input type="text" class="form-control" name="cust_location" required>
						</div>
						<div class="col-md-12">
						    <br>
						</div>											
					</div>
					<div class="row">
						<div class="col-md-4 col_with_21">
							<h3 style="margin-top: 25px; "><i class="fa fa-tachometer" aria-hidden="true"></i> Measurements - </h3>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="length">Length</label>
								<input type="text" class="form-control pad-2" name="cust_length">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="shoulder">Shoulder</label>
								<input type="text" class="form-control pad-2" name="cust_shoulder">
							</div>
						</div>	
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="sleeves">Sleeves</label>
								<input type="text" class="form-control pad-2" name="cust_sleeves">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="armole">Armole</label>
								<input type="text" class="form-control pad-2" name="cust_armole">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="cuff">Cuff</label>
								<input type="text" class="form-control pad-2" name="cust_cuff">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="chest">Chest</label>
								<input type="text" class="form-control pad-2" name="cust_chest">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="waist">Waist</label>
								<input type="text" class="form-control pad-2" name="cust_waist">
							</div>
						</div>
						<div class="col-md-1 col_with_9">
							<div class="form-group">
								<label for="hipps">Hipps</label>
								<input type="text" class="form-control pad-2" name="cust_hipps">
							</div>
						</div>					
					</div>
					<div class="row">
							<div class="col-md-4 col_with_21">
								<h3><i class="fa fa-user" aria-hidden="true"></i> Other - </h3>
							</div>						
							<div class="col-md-6 pdd_00">
								<input type="checkbox" name="is_pocket" value="yes" id="is_pocket"> 
								<label class="pd_15" for="is_pocket">Pocket</label>
								
								<input type="checkbox" name="is_zip" value="yes" id="is_zip"> 
								<label class="pd_15" for="is_zip">Zip</label>

								<input type="checkbox" name="is_beading" value="yes" id="is_beading"> 
								<label class="pd_15" for="is_beading">Beading</label>	
								
								<input type="checkbox" name="is_folding" value="yes" id="is_folding"> 
								<label class="pd_15" for="is_folding">Folding</label>

								<input type="checkbox" name="is_pico" value="yes" id="is_pico"> 
								<label class="pd_15" for="is_pico">Pico</label>

								<br>

								<input type="checkbox" name="is_umbrella" value="yes"> 
								<label class="pd_10" for="umbrella_size">Umbrella</label>
								<input style="width:100px;display: inline;" class="form-control size_width" type="text" name="umbrella_size" placeholder="Size" id="umbrella_size">	
								
								<input type="checkbox" name="is_dupatta" value="yes"> 
								<label class="pd_10" for="dupatta_size">Dupatta</label>
								<input style="width:100px;display: inline;" class="form-control size_width" type="text" name="dupatta_size" placeholder="Size" id="dupatta_size">
							</div>
							<div class="col-md-2 pdd_00 text-center" style="margin-top: 3px;">
								 <span><b>Display Measurement</b></span><br>
								 <input type="radio" id="age1" name="d_measure" value="yes" checked>
								 <label for="age1">Yes</label><br>
								 <input type="radio" id="age2" name="d_measure" value="no">
								 <label for="age2">No</label><br>
							</div>						
					</div>
					<div class="row">
						<div class="col-md-4 col_with_21">
							<h3><i class="fa fa-user" aria-hidden="true"></i> File Upload - </h3>
						</div>
						<div class="col-md-4 pdd_00">
							<input type="file" accept="image/*" name="additional_imgs[]" class="form-control" multiple>
						</div>						
					</div>
				</div>
			</div>

			<div class="panel panel-default">
        <div class="panel-body">
			<div class="row">

			    <div class="col-md-12" style="margin-bottom:10px;">
					<input class="form-control" type="text" name="device" id="device" placeholder="Device" autofocus>
				</div>

				<div class="col-md-2">
					<h4 style="margin-top: 8px;"><i class="fa fa-pencil"></i> Customized</h4>
				</div>			
				<div class="col-md-1">
						<div class="design-image"></div>
				</div>	
				<div class="col-md-3">
				<select id="cloth_id" name="cloth_id" class="form-control drop-dn">
				<option value="">Select Product Type</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloths']->value, 'cloth');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cloth']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['cloth']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cloth']->value['name'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		  </select>					
				</div>
				<div class="col-md-3">
					<select id="design_id" class="form-control drop-dn" name="design_id">
						<option value="">Select Design</option>
						
					</select>					
				</div>		
				<div class="col-md-3">
					<button id="get-customized-items" type="button" class="btn btn-block btn-primary"><i class="fa fa-pencil"></i> Customize</button>
				</div>						
			</div>

					<div class="table-responsive m-t">
						<table class="table invoice-table" id="invoice_items">
							<thead>
								<tr>
									<th width="15%">Item Image</th>
									<th width="40%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
									<th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
									<th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
									<th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
          </div>
					<!-- /table-responsive -->
					<div class="col-md-12">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" id="item-add"><i
												class="fa fa-search"></i> Add Product </button>
						</div>
						
						<div class="col-md-3">						
							<!-- <button type="button" class="btn btn-danger" id="item-remove"><i
												class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>-->
						</div> 
						<div class="col-md-3">						
						
						</div>
						<div class="col-md-3">
							<label for="add_discount"><a href="#" id="add_discount" class="btn btn-info pull-right" >
									<i class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
							</label>
						</div>	
					</div>	
					<br>
					<br>
					<hr>
							<textarea class="form-control" name="notes" id="notes" rows="3"
												placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Terms'];?>
..."><?php echo $_smarty_tpl->tpl_vars['_c']->value['invoice_terms'];?>
</textarea>
					<br>
					<?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
							<input type="hidden" id="is_recurring" value="yes">
					<?php } else { ?>
							<input type="hidden" id="is_recurring" value="no">
					<?php }?>
					
				</div>
      </div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-right">
						<input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
						<!--<button class="btn btn-primary" id="submit" style="margin-bottom: 10px;"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save Invoice'];?>
</button>-->
						<!--<button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>-->
						<button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> Save & Print</button>
					</div>
				</div>
      </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table invoice-total" id="me">
						<tbody>
							<tr>
								<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
								<td id="sub_total" name="sub_total" class="amount">0.00</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
									<td id="discount_amount_total" class="amount">0.00</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
									<td id="taxtotal" class="amount">0.00</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
									<td name="total[]" id="total" class="amount">0.00</td>
							</tr>
						</tbody>
					</table>
				</div>
      </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group hide">
								<label for="company">Tax</label>
								<select class="form-control taxed selectpicker" name="taxed"> 
												<?php echo getTax_opt();?>

											</select>
						<label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
						<select id="company" name="company" class="form-control" required>
							<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Company'];?>
...</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comp']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cs']->value['id'] == (2)) {?>selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					
					<div class="form-group">
						<label for="advance_amount">Advance Amount</label>
						<input type="text" pattern="[0-9]+" class="form-control" name="advance_amount" id="advance_amount">
					</div>					
					
					<div class="form-group">
						<label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
						<select id="cid" name="cid" class="form-control">
							<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
										<?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 / <?php echo $_smarty_tpl->tpl_vars['cs']->value['phone'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
						
						<!--<span class="help-block"><a href="#" id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>-->
					</div>
					<div class="form-group hide">
						<label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
						<select id="currency" name="currency" class="form-control">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
													<?php if ($_smarty_tpl->tpl_vars['_c']->value['home_currency'] == ($_smarty_tpl->tpl_vars['currency']->value['cname'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
									<?php
}
} else {
?>

									<option value="0"><?php echo $_smarty_tpl->tpl_vars['_c']->value['home_currency'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>

					<div class="form-group hide">
							<label for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
							<textarea id="address" readonly class="form-control" rows="5"></textarea>
					</div>
					
					<div class="form-group">
							<label for="cn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 #</label>
							<input type="text" class="form-control" id="cn" name="cn">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['invoice_number_help'];?>
</span>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
					<div class="form-group">
						<label for="repeat"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>

						<select class="form-control" name="repeat" id="repeat">
							<option value="week1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Week'];?>
</option>
							<option value="weeks2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
							<option value="month1" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</option>
							<option value="months2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
							<option value="months3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
							<option value="months6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
							<option value="year1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Year'];?>
</option>
							<option value="years2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
							<option value="years3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
</option>
						</select>
					</div>
					<?php } else { ?>
							<input type="hidden" name="repeat" id="repeat" value="0">
					<?php }?>

					<div class="form-group">
						<label for="idate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</label>
						<input type="text" class="form-control" id="idate" name="idate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
					</div>
					<div class="form-group hide">
						<label for="duedate">Delivery Date</label>
						<select class="form-control" name="duedate1" id="duedate">
								<option value="due_on_receipt" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due On Receipt'];?>
</option>
								<option value="days3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_3'];?>
</option>
								<option value="days5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_5'];?>
</option>
								<option value="days7"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_7'];?>
</option>
								<option value="days10"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_10'];?>
</option>
								<option value="days15"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_15'];?>
</option>
								<option value="days30"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_30'];?>
</option>
								<option value="days45"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_45'];?>
</option>
								<option value="days60"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_60'];?>
</option>
						</select>
					</div>
					<div class="form-group">
						<label for="duedate">Delivery Date</label>
						<input type="text" class="form-control" id="duedate" name="duedate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
					</div>					
					<div class="form-group">
							
							<input type="hidden" id="discount_amount" name="discount_amount" value="">
							<input type="hidden" id="discount_type" name="discount_type" value="p">
							
					</div>
					
				</div>
      </div>
		</div>
  </form>
</div>



<input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
<input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
<input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
<input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
<input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
<input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">

<input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
