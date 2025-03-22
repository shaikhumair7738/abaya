<?php
/* Smarty version 3.1.30, created on 2019-03-19 16:23:04
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/edit_invoice_v2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c90ca105777d9_17198172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4a7300e5dc71cd97861fbbc5fe6dd5b6bf41588' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/edit_invoice_v2.tpl',
      1 => 1552992783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5c90ca105777d9_17198172 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/arifkhan/public_html/bill/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<div class="row" id="ibox_form">
	<form id="invform" method="post">
		<div class="col-md-12">
				<div class="alert alert-danger alert-dismissable" id="emsg">
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
								</tr>
							</thead>
							<tbody><?php $_smarty_tpl->_assignInScope('idi', 0);
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
									<tr class="tr_clone"> 
										<td class="number"><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                        <input type="hidden" class="form-control item_id" name="i_id[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="i_id">
                                        <input type="hidden" class="form-control item_id" name="p_id[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
" id="p_id">
                                        <input type="hidden" class="form-control item_id" name="s_id[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['s_id'];?>
" id="s_id">
                                    </td>
										<td><input type="text" class="form-control items" id="i_<?php echo $_smarty_tpl->tpl_vars['idi']->value++;?>
" name="desc[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" /> </td>
										<td><input type="number" class="form-control qty" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['qty'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['qty'];
}?>" name="qty[]"></td> 
										<td><input type="number" class="form-control item_price" name="amount[]" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['amount'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['amount'];
}?>"></td> 
										<td class="ltotal"><input type="number" class="form-control lvtotal" readonly="" name="total[]" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty'];
$_prefixVariable1=ob_get_clean();
echo smarty_modifier_replace($_prefixVariable1,'.',',');
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty'];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;
}?>"></td> 
									</tr>
								
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								<input type="hidden" id="rowcount" value="<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
">
							</tbody>
            </table>
					</div>
					<!-- /table-responsive -->
					<div class="col-md-12">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" id="item-add"><i
												class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
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
						<label for="add_discount"><a href="#" id="add_discount" class="btn btn-info pull-right" >
									<i class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
							</label>
						</div>	
					</div>	
					<br>
					<br>
					<hr>
							<textarea class="form-control" name="notes" id="notes" rows="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Terms'];?>
..."><?php echo $_smarty_tpl->tpl_vars['i']->value['notes'];?>
</textarea>
					<br>
        </div>
      </div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-right">
							<input type="hidden" name="iid" id="iid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                                                        <input type="hidden" name="ciid" id="ciid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoicenum'];?>
">
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
									<td id="sub_total" class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
							</tr>
					<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
									<td id="discount_amount_total" class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>
</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
									<td id="taxtotal" class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxamt'];?>
</td>
							</tr>
							<tr>
									<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
									<td name="total[]" id="total" class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
						<div class="form-group">
						<select class="form-control taxed selectpicker" name="taxed"> 
													<optgroup label="GST">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
?> 
														<?php if ($_smarty_tpl->tpl_vars['tax']->value['taxtype'] == ("GST")) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
" rate="<?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['tax']->value['id'] == ($_smarty_tpl->tpl_vars['item']->value['tax_id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['tax']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
 %</option>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
													</optgroup>
													<optgroup label="IGST">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
?> 
														<?php if ($_smarty_tpl->tpl_vars['tax']->value['taxtype'] == ("IGST")) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
" rate="<?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['tax']->value['id'] == ($_smarty_tpl->tpl_vars['item']->value['tax_id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['tax']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
 %</option>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
													</optgroup>
												</select>
												</div>
								<div class="form-group">
							<label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
							<select id="company" name="company" class="form-control" readonly>
								<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Company'];?>
...</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comp']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                <?php if ($_smarty_tpl->tpl_vars['d']->value['company_id'] == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
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
							<select id="cid" name="cid" class="form-control">
									<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['userid'] == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['i']->value['currency'] == ($_smarty_tpl->tpl_vars['currency']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
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
						<div class="form-group">
								<label for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
								<textarea id="address" readonly class="form-control" rows="5"></textarea>
						</div>
						
						<div class="form-group">
								<label for="cn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 #</label>
								<input type="text" class="form-control" id="cn" name="cn" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
">
								<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['invoice_number_help'];?>
</span>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['i']->value['r'] != '0') {?>
							<div class="form-group">
								<label for="repeat"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>
								<select class="form-control" name="repeat" id="repeat">
									<option value="week1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 week') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Week'];?>
</option>
									<option value="weeks2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
									<option value="month1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 month') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</option>
									<option value="months2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
									<option value="months3" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+3 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
									<option value="months6" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+6 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
									<option value="year1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 year') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Year'];?>
</option>
									<option value="years2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
									<option value="years3" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+3 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
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
							<input type="text" class="form-control" id="duedate" name="duedate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['duedate'];?>
">
						</div>
						
							<input type="hidden" id="discount_amount" name="discount_amount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['discount_value'];?>
">
							<input type="hidden" id="discount_type" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['discount_type'];?>
">
							
						
          
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
