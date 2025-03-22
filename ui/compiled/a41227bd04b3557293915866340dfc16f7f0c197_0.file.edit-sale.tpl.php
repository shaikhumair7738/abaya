<?php
/* Smarty version 3.1.30, created on 2022-02-18 17:27:45
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/edit-sale.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_620f89b982ca99_03392380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41227bd04b3557293915866340dfc16f7f0c197' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/edit-sale.tpl',
      1 => 1645185463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620f89b982ca99_03392380 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>
<link href="ui/lib/dp/dist/datepicker.min.css" rel="stylesheet">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Edit Sale</h3>
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
					<form class="form-horizontal" id="edit-sale-form">
						<div class="row">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
" name="sale_id">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label class="col-md-4 control-label" for="agent_id">Agent
										<small class="red">*</small>
									</label>
									<div class="col-md-8">
										<select id="agent_id" name="agent_id" class="form-control select2" required>
											<option value="">Select Agent...</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agent']->value, 'ag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ag']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['ag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sale']->value['agent_id'] == $_smarty_tpl->tpl_vars['ag']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ag']->value['fullname'];?>
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
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label class="col-md-4 control-label" for="customer_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>

										<small class="red">*</small>
									</label>
									<div class="col-md-8">
										<select id="customer_id" name="customer_id" class="form-control select2" required>
											<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sale']->value['customer_id'] == $_smarty_tpl->tpl_vars['cs']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 -- <?php echo $_smarty_tpl->tpl_vars['cs']->value['company'];?>
 -- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];?>
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
									<label class="col-md-4 control-label" for="domain_name">Domain Name
									</label>
									<div class="col-lg-8">
										<input type="text" id="domain_name" name="domain_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['domain'];?>
">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label" for="amount">Amount
										<small class="red">*</small>
									</label>
									<div class="col-lg-8">
										<input type="number" id="amount" name="amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['amount'];?>
">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12" id="ren_service_registered">
								<div class="form-group">
									<label class="col-md-4 control-label" for="register_date">Registration Date
										<small class="red">*</small>
									</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="register_date" name="register_date" datepicker data-date-format="yyyy-mm-dd"
										 data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['ragister_date'];?>
">
									</div>
								</div>
							</div>
							<!--<div class="col-md-6 col-sm-12" id="ren_service_renewal">
								<div class="form-group">
									<label class="col-md-4 control-label" for="update_date">Update Date
										<small class="red">*</small>
									</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="update_date" name="update_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
										 value="<?php echo $_smarty_tpl->tpl_vars['sale']->value['update_date'];?>
">
									</div>
								</div>
							</div>-->
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="note">Note</label>
									<div class="col-md-10">
										<textarea name="note" class="form-control" rows="5"><?php echo $_smarty_tpl->tpl_vars['sale']->value['note'];?>
</textarea>
									</div>
								</div>
							</div>
						</div>
						<!--<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-offset-2 col-lg-10">
											<button class="md-btn md-btn-primary waves-effect waves-light" type="submit" id="submit_sale">
												<i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button> |
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sales/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Cancel'];?>
</a>
										</div>
									</div>
								</div>
							</div>-->
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--</div>-->
</div>
<div class="modal-footer">
	<button id="edit_sale" class="btn btn-primary">Update</button>

	<button type="button" data-dismiss="modal" class="btn">Close</button>
</div>

<?php echo '<script'; ?>
>
	jQuery(document).ready(function($) {
		$(".select2").select2();
	});
<?php echo '</script'; ?>
><?php }
}
