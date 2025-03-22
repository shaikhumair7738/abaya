<?php
/* Smarty version 3.1.30, created on 2021-03-11 14:29:24
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/add-quote.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6049dbecbe1e27_35047516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529999cc835b15170233d91141bc4d1d23e9e3b9' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/add-quote.tpl',
      1 => 1502108278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6049dbecbe1e27_35047516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
					<h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_alias'];?>
</h5>
			</div>
			<div class="ibox-content" id="ibox_form">
				<form id="invform" method="post" parsley-validate novalidate>
					<div class="ibox-content">
						<div class="row">
							<div class="alert alert-danger" id="emsg">
									<span id="emsgbody"></span>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
									<input type="text" class="form-control" name="subject" id="subject" required>
								</div>
								<hr>
							</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-horizontal">
										<div class="form-group">
											<label for="cid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
											<div class="col-sm-8">
												<select id="cid" name="cid" class="form-control" required>
													<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
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
										</div>
										<?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>

										
										<div class="form-group">
											<label for="invoicenum"
														 class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>
											<div class="col-sm-4">
													<input type="text" class="form-control" id="invoicenum" name="invoicenum">
											</div>
										</div>
										<div class="form-group">
											<label for="cn"class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #</label>
											<div class="col-sm-8">
													<input type="text" class="form-control" id="cn" name="cn">
													<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_number_help'];?>
</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-horizontal">
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>
											<div class="col-sm-8">
													<input type="text" class="form-control" id="idate" name="idate" datepicker
																 data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
											</div>
										</div>
										<div class="form-group">
											<label for="edate" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>
											<div class="col-sm-8">
													<input type="text" class="form-control" id="edate" name="edate" datepicker
																 data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo ib_after_1_month();?>
">
											</div>
										</div>
										<div class="form-group">
											<label for="stage"
														 class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>
											<div class="col-sm-8">
													<select class="form-control" name="stage" id="stage">
															<option value="Draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
															<option value="Delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
															<option value="Accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
															<option value="Lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
															<option value="Dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
													</select>
											</div>
										</div>
										<div class="form-group">
											<label for="inputPassword3"
														 class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
											<div class="col-sm-8">
													<textarea id="address" readonly class="form-control" rows="5"></textarea>
											</div>
										</div>
										
									</div>
								</div>
							</div>
								<div class="row">
										<div class="col-md-12">
												<hr>
												<div class="form-group">
														<label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label>
														<textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"></textarea>
														<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
</span>
												</div>
												<hr>
													<input type="hidden" id="discount_amount" name="discount_amount" value="">
													<input type="hidden" id="discount_type" name="discount_type" value="p">
										</div>
								</div>
								<div class="table-responsive m-t">
									<table class="table invoice-table" id="invoice_items">
										<thead>
											<tr>
												<th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
												<th width="29%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
												<th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
												<th width="18%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
												<th width="18%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
												<th width="15%">Tax</th>
											</tr>
										</thead>
										<tbody>
											<tr> 
												<td><span id="codei_0" name="i_code[]"></span></td> 
												<td><select class="required form-control items" id="i_0" name="desc[]" required 												data-parsley-errors-container="#proerrors">
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
												<td class="ltotal"><input type="number" class="form-control lvtotal" name="total[]" readonly></td> 
												<td>
													<select class="form-control" name="taxed[]">
														<?php echo getTax_opt();?>

													</select>
												</td>
											</tr>
										</tbody>
									</table>
									<hr>
								</div>
								<!-- /table-responsive -->
								<button type="button" class="btn btn-primary" id="blank-add"><i
														class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
								<button type="button" class="btn btn-danger" id="item-remove"><i
														class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
								<table class="table invoice-total">
										<tbody>
										<tr>
												<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
												<td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
														data-a-sep="" data-d-group="2">0.00
												</td>
										</tr>
										
										<tr>
												<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
												<td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
														data-a-sep="" data-d-group="2">0.00
												</td>
										</tr>
										<tr>
												<td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
												<td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
														data-a-sep="" data-d-group="2">0.00
												</td>
										</tr>
										</tbody>
								</table>
								<hr>
								<div class="form-group">
										<label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label>
										<textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"></textarea>
										<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
</span>
								</div>
								<div class="text-right">
										<input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
										<input type="hidden" id="taxed_type" name="taxed_type" value="individual">
										<button class="btn btn-primary" id="submit"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
								</div>
						</div>
				</form>
			</div>
		</div>
	</div>

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
