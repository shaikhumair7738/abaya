<?php
/* Smarty version 3.1.30, created on 2017-10-16 18:19:05
  from "F:\wamp64\www\makbilling\ui\theme\ibilling\add_invoice_v2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e4aac1933621_37179238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a5ab0c893a4f052aa55d982df72f0f6a8bfe17' => 
    array (
      0 => 'F:\\wamp64\\www\\makbilling\\ui\\theme\\ibilling\\add_invoice_v2.tpl',
      1 => 1507800237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_59e4aac1933621_37179238 (Smarty_Internal_Template $_smarty_tpl) {
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
</style>

<div class="row" id="ibox_form">
  <form id="invform" method="post" parsley-validate novalidate>
		<div class="col-md-12">
			<div class="alert alert-danger alert-dismissable" id="emsg" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span id="emsgbody"></span>
			</div>
		</div>

		
    <div class="col-md-9">
			<div class="panel panel-default">
        <div class="panel-body">
					<div class="table-responsive m-t">
						<table class="table invoice-table" id="invoice_items">
							<thead>
								<tr>
									<th width="5%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
									<th width="40%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
									<th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
									<th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
									<th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
									<th width="15%">Tax</th>
								</tr>
							</thead>
							<tbody>
								<tr class="tr_clone"> 
									<td><span id="codei_0" name="i_code[]"></span></td> 
									<td><select class="required form-control items" id="i_0" name="desc[]" required 			data-parsley-errors-container="#proerrors">
											<option value="">Select Product</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select><span id="proerrors"></span></td>
									<td><input type="number" class="form-control qty" value="1" name="qty[]"></td> 
									<td><input type="number" class="form-control item_price" name="amount[]" required></td> 
									<td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" name="total[]" value=""></td> 
									<td><select class="form-control taxed selectpicker" name="taxed[]"> 
												<?php echo getTax_opt();?>

											</select>
									</td>
								</tr>
							</tbody>
						</table>
          </div>
					<!-- /table-responsive -->
					<div class="col-md-12">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary tr_clone_add" id="blank-add"><i
												class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
						</div>
						
						<div class="col-md-3">						
							<button type="button" class="btn btn-danger" id="item-remove"><i
												class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
						</div>
						<div class="col-md-3">						
						
						</div>
						<div class="col-md-3">
							
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
						<button class="btn btn-primary" id="submit" style="margin-bottom: 10px;"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save Invoice'];?>
</button>
						<button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
					</div>
				</div>
      </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table invoice-total">
						<tbody>
							<tr>
								<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
								<td id="sub_total" class="amount">0.00</td>
							</tr>
							
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
									<td id="taxtotal" class="amount">0.00</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
									<td id="total" class="amount">0.00</td>
							</tr>
						</tbody>
					</table>
				</div>
      </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
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
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					<div class="form-group">
						<label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
						<select id="cid" name="cid" class="form-control" required>
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
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
						
						<span class="help-block"><a href="#" id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>
					</div>
					<div class="form-group" style="display: none;">
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

					<div class="form-group">
							<label for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
							<textarea id="address" readonly class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
							<label for="invoicenum"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Prefix'];?>
</label>
							<input type="text" class="form-control" id="invoicenum" name="invoicenum">
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
					<div class="form-group">
						<label for="duedate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Terms'];?>
</label>
						<select class="form-control" name="duedate" id="duedate">
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

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
