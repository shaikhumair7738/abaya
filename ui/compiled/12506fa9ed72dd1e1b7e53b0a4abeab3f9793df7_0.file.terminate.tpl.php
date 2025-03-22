<?php
/* Smarty version 3.1.30, created on 2022-02-25 17:00:09
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/terminate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6218bdc1b4b1a4_45121562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12506fa9ed72dd1e1b7e53b0a4abeab3f9793df7' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/terminate.tpl',
      1 => 1645788512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6218bdc1b4b1a4_45121562 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Terminate <b><?php echo SaleID($_smarty_tpl->tpl_vars['sale_id']->value);?>
</b></h3>
</div>
<div class="modal-body">
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
					<form class="form-horizontal" id="terminate-sale-form">
						<div class="row">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sale_id']->value;?>
" name="sale_id">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label class="col-md-2 control-label" for="reason">Reason</label>
									<div class="col-md-10">
										<textarea name="reason" class="form-control" rows="5"></textarea>
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
<div class="modal-footer">
	<button id="terminate_sale" class="btn btn-primary">Terminate</button>

	<button type="button" data-dismiss="modal" class="btn">Close</button>
</div><?php }
}
