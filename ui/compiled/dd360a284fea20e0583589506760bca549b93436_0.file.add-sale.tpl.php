<?php
/* Smarty version 3.1.30, created on 2022-04-04 15:30:17
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/sales/add-sale.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_624ac1b1e04b58_11656044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd360a284fea20e0583589506760bca549b93436' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/sales/add-sale.tpl',
      1 => 1649066343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_624ac1b1e04b58_11656044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-md-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Add Sale</h5>
				</div>
				<div class="ibox-content" id="ibox_form">
					<div class="alert alert-danger" id="emsg">
						<span id="emsgbody"></span>
					</div>
					<form class="form-horizontal" id="rform">
						<div class="row">
            <div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label class="col-md-4 control-label" for="agent_id">Agent <small class="red">*</small></label>
									<div class="col-lg-8">
										<select id="agent_id" name="agent_id" class="form-control select2" required>
											<option value="">Select Agent...</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agent']->value, 'ag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ag']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['ag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ag']->value['fullname'];?>
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
 <small class="red">*</small></label>
									<div class="col-lg-8">
										<select id="customer_id" name="customer_id" class="form-control select2" required>
											<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 / <?php echo $_smarty_tpl->tpl_vars['cs']->value['company'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?> / <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
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
"><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
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
									<label class="col-md-4 control-label" for="duration">Select Plan <small class="red">*</small></label>
									<div class="col-lg-8">
										<select id="duration" name="duration" class="form-control" required>
											<option value="">Plan & Packages</option>			
											<option value="1_month">1 Month</option>
                      <option value="3_month">3 Months</option>
                      <option value="6_month">6 Months</option>                     
                      <option value="1_year">1 Year</option>
                      <option value="2_year">2 Year</option>
                      <option value="3_year">3 Year</option>
                      <option value="4_year">4 Year</option>
                      <option value="5_year">5 Year</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label" for="domain_name">Domain Name										
									</label>
									<div class="col-lg-5">
										<input type="text" id="domain_name" name="domain_name" class="form-control" autofocus>
									</div>
									<div class="col-lg-3">
									   <button type="button" class="btn btn-warning btn-block" onclick="checkWhoIs();">WhoIs</button>
									</div>									
								</div>
							</div>              
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label class="col-md-4 control-label" for="amount">Amount <small class="red">*</small></label>
									<div class="col-lg-8">
										<input type="number" id="amount" name="amount" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12" id="ren_service_registered">
								<div class="form-group">
									<label class="col-md-4 control-label" for="register_date">Registration Date <small class="red">*</small></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="register_date" name="register_date" datepicker data-date-format="yyyy-mm-dd"
										 data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
									</div>
								</div>
							</div>
							<!--<div class="col-md-6 col-sm-12" id="ren_service_renewal">
								<div class="form-group">
									<label class="col-md-4 control-label" for="update_date">Update Date <small class="red">*</small></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="update_date" name="update_date" datepicker data-date-format="yyyy-mm-dd"
										 data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
									</div>
								</div>
							</div>-->
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="note">Note</label>
									<div class="col-md-10">
										<textarea name="note" class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>                            
						</div>
						<div class="row">
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
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	jQuery(document).ready(function($) {
		$(".select2").select2();
	});

	function checkWhoIs()
	{
		const domain = $('#domain_name').val();
		if(domain == '' || domain == 'undefined')
		{
            alert('Domain name cannot be empty!');
		}
		else
		{
			window.open( 'https://www.whois.com/whois/' + domain, '_blank');
		}
		
	}
<?php echo '</script'; ?>
><?php }
}
