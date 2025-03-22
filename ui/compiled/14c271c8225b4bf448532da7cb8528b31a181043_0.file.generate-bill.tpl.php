<?php
/* Smarty version 3.1.30, created on 2022-02-18 16:15:07
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/generate-bill.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_620f78b358dc55_82276427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c271c8225b4bf448532da7cb8528b31a181043' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/generate-bill.tpl',
      1 => 1645181018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620f78b358dc55_82276427 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>
<link href="ui/lib/dp/dist/datepicker.min.css" rel="stylesheet">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Generate Bill For <b><?php echo SaleID($_smarty_tpl->tpl_vars['sale']->value['id']);?>
</b></h3>
</div>
<div class="modal-body">
	<!--<div class="wrapper wrapper-content">-->
	<div class="row">
		<div class="col-md-12">
			<div class="">
				<div class="" id="">
					<div class="alert alert-danger" id="emsg" style="display:none;">
						<span id="emsgbody"></span>
					</div>
					<div class="alert alert-success" id="emsg-success" style="display:none;">
						<span id="emsgbody-success"></span>
					</div>
					<form class="form-horizontal" id="generate-bill-form">
						<div class="row">
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
" name="sale_id">

							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label" for="service_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>

										<small class="red">*</small>
									</label>
									<div class="col-lg-8">
										<select id="rental_service" name="service_id" class="form-control" required>
											<option value="">Select Services</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sale']->value['service_id'] == $_smarty_tpl->tpl_vars['service']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label" for="duration">Select Plan
										<small class="red">*</small>
									</label>
									<div class="col-lg-8">
										<select id="duration" name="duration" class="form-control" required>
											<option value="">Plan & Packages</option>
											<option value="1_month" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '1_month') {?>selected="selected" <?php }?>>1 Month</option>
											<option value="3_month" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '3_month') {?>selected="selected" <?php }?>>3 Months</option>
											<option value="6_month" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '6_month') {?>selected="selected" <?php }?>>6 Months</option>
											<option value="1_year" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '1_year') {?>selected="selected" <?php }?>>1 Year</option>
											<option value="2_year" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '2_year') {?>selected="selected" <?php }?>>2 Year</option>
											<option value="3_year" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '3_year') {?>selected="selected" <?php }?>>3 Year</option>
											<option value="4_year" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '4_year') {?>selected="selected" <?php }?>>4 Year</option>
											<option value="5_year" <?php if ($_smarty_tpl->tpl_vars['dur']->value == '5_year') {?>selected="selected" <?php }?>>5 Year</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label">Qty / Amt
										<small class="red">*</small>
									</label>
									<div class="col-lg-4">
										<input placeholder="Quantity" type="number" name="qty" class="form-control" value="1">
									</div>
									<div class="col-lg-4">
										<input placeholder="Amount" type="number" name="amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['amount'];?>
">
									</div>									
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label">
										Total Amount :
									</label>
                                    <div class="total-amt" style="padding-top: 4px;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['sale']->value['amount'];?>
</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="note">Description</label>
									<div class="col-md-10">
										<textarea id="notes" name="description" class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="update_date">Update/Bill Genr. Date
										<small class="red">*</small>
									</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="update_date" name="update_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
										 value="<?php echo date('Y-m-d');?>
" readonly>
									</div>
								</div>
							</div>							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--</div>-->
</div>
<div class="modal-footer">
	<button id="generate_bill" class="btn btn-primary">Generate</button>

	<button type="button" data-dismiss="modal" class="btn">Close</button>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/redactor/redactor.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/redactor/redactor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	jQuery(document).ready(function($) {
		$(".select2").select2();

		$('#notes').redactor({
			minHeight: 200, // pixels
			plugins: ['fontcolor']
		});

		$('body').on('keyup', '#generate-bill-form input[name="qty"], #generate-bill-form input[name="amount"]', function(){
             const amount = $('#generate-bill-form input[name="amount"]').val();
			 const qty    = $('#generate-bill-form input[name="qty"]').val();
			 console.log(amount);
			 console.log(qty);
			 $('#generate-bill-form .total-amt').html(qty*amount);
		});
	});
<?php echo '</script'; ?>
><?php }
}
