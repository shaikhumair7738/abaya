<?php
/* Smarty version 3.1.30, created on 2022-05-05 14:47:14
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/list-proforma.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6273961a98e9b2_74772828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '374f6643a7fed6c7e64e0bb82ec3338b3d90449b' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/list-proforma.tpl',
      1 => 1649219904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6273961a98e9b2_74772828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    
        
            
                
            
            
            
        
    


<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
					<div class="ibox-title">
						<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
								<h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : <?php echo $_smarty_tpl->tpl_vars['total_invoice']->value;?>
</h5>
						<?php } else { ?>
								<h5><?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
. <?php if ($_smarty_tpl->tpl_vars['paginator']->value['found'] > 0) {
echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
.<?php }?></h5>
						<?php }?>
						<div class="ibox-tools">
								<?php if ($_smarty_tpl->tpl_vars['view_type']->value != 'filter') {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-proforma/filter/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</a>
								<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-proforma/" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back'];?>
</a>
								<?php }?>
								
								<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Proforma</a>

						</div>
					</div>
					<div class="ibox-content">

							<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
									<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
											<div class="form-group">
													<div class="col-md-12">
															<div class="input-group">
																	<div class="input-group-addon">
																		<span class="fa fa-search"></span>
																	</div>
																	<input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

															</div>
													</div>

											</div>
									</form>
							<?php }?>
<div class="table-responsive"> 
							<table class="table table-bordered table-hover sys_table footable" <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?> data-filter="#foo_filter" data-page-size="50" <?php }?>>
									<thead>
									<tr>
											<th>Proforma No</th>
											<th>Sale ID</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
										                        <th>Customer</th>
                        <th>Email</th>
                        <th>Phone</th>	
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
											<th>Proforma Date</th>
											<!--<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>-->
											<th>
													<?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

											</th>
											<!--<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>-->
											<th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
									</tr>
									</thead>
									<tbody>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
									<?php $_smarty_tpl->_assignInScope('customer', get_type_by_id_multi('crm_accounts','id',$_smarty_tpl->tpl_vars['ds']->value['userid'],'phone,email,account,company'));
?>
											<tr>
													<td  data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];?>
 <?php }?></a> </td>
													<td><?php echo SaleID($_smarty_tpl->tpl_vars['ds']->value['sale_id']);?>
</td>
													<td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['customer']->value['company'];?>
</a> </td>
													<td><?php echo $_smarty_tpl->tpl_vars['customer']->value['account'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
</td>
													<td class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['ds']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['ds']->value['subtotal'];?>
</td>
													<td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['date']);?>
"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
													<!--<td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']);?>
"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>-->
													<td>
															<?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
																	<span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
															<?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
																	<span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
															<?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
																	<span class="label label-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
															<?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
																	<span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
															<?php } else { ?>
																	<?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

															<?php }?>



													</td>
													<!--<td>
														<?php if ($_smarty_tpl->tpl_vars['ds']->value['invoice_status'] == '1') {?>
															<span class="label label-success"><i class="fa fa-dot-circle-o"></i> Generated</span>
														<?php } else { ?>
															<span class="label label-warning"><i class="fa fa-repeat"></i> Pending</span>
														<?php }?>
													</td>-->
													<td class="text-right">
															<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/performa-view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
															<?php if ($_smarty_tpl->tpl_vars['ds']->value['invoice_status'] == 0) {?>
															<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/proforma-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
															<?php }?>

															<?php if (empty($_smarty_tpl->tpl_vars['ds']->value['sale_trans_code'])) {?>
															<a href="#" class="btn btn-danger btn-xs cdelete_proforma" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
															<?php }?>
													</td>
											</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


									</tbody>

									<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
											<tfoot>
											<tr>
													<td colspan="8">
															<ul class="pagination">
															</ul>
													</td>
											</tr>
											</tfoot>
									<?php }?>

							</table>
							</div>
							<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

					</div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
