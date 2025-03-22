<?php
/* Smarty version 3.1.30, created on 2019-07-19 16:56:53
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/list-domain-n-hosting.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d31a8fd9f40e4_72112403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a9273abd7a7dca8392fc61b0579e5cbc242260' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/list-domain-n-hosting.tpl',
      1 => 1563533308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5d31a8fd9f40e4_72112403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<?php if ($_smarty_tpl->tpl_vars['_c']->value['contact_set_view_mode'] == 'search') {?>



    <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                    </div>

                    <div class="panel-body">

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

                        <table class="table table-bordered table-hover sys_table footable"  data-filter="#foo_filter" data-page-size="50">

                            <thead>

                            <tr>

                                <th>#</th>

                                <th data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>

                                <th>Domain Name</th>

                                <th>Domain price</th>

                                <th>Domain Reg. Date</th>

                                <th>Domain Expiry Date</th>
																 <th>Hosting price</th>
                                <th>Hosting Reg. Date</th>
                                <th>Hosting Expiry Date</th>

                                <th class="text-right" data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                            </tr>

                            </thead>

                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>

                                <tr>

                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>

                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['domain_name'];?>
</td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['domain_price'];?>
</td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['d_reg_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['d_expiry_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['hosting_price'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['h_reg_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['h_expiry_date'];?>
</td>

                                    <td class="text-right">
                                        <a href="delete/crm-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                    </td>

                                </tr>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </tbody>

                            <tfoot>

                            <tr>

                                <td colspan="6">

                                    <ul class="pagination">

                                    </ul>

                                </td>

                            </tr>

                            </tfoot>

                        </table>

                    </div>

                </div>

            </div>

    </div>

    <?php } else { ?>

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-body">

                    <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">

                        <div class="form-group">

                            <div class="col-md-8">

                                <div class="input-group">

                                    <div class="input-group-addon">

                                        <span class="fa fa-search"></span>

                                    </div>

                                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search by Name'];?>
..."/>

                                    <div class="input-group-btn">

                                        <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">



                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/add/" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Add New Domain and Hosting</a>



                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    <div class="row">

        <?php if (($_smarty_tpl->tpl_vars['_c']->value['contact_set_view_mode']) == 'tbl') {?>

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                        <table class="table table-bordered table-hover sys_table">

                            <thead>

                             <tr>

                                <th>#</th>

                                <th data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>

                                <th>Domain Name</th>
                                <th>Service</th>
                                <th>Plan & Package</th>
                                <th>Amount</th>
                                <th>Expiry Date</th>

                                <th class="text-right" data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                            </tr>

                            </thead>

                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
   <tr>

                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>

                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo get_type_by_id('crm_accounts','id',$_smarty_tpl->tpl_vars['ds']->value['account'],'account');?>
</a> </td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['domain_name'];?>
</td>
                                    <td><?php echo get_type_by_id('sys_items','id',$_smarty_tpl->tpl_vars['ds']->value['service'],'name');?>
</td>

                                    <td>
																		<?php if ($_smarty_tpl->tpl_vars['ds']->value['service'] == 1 || $_smarty_tpl->tpl_vars['ds']->value['service'] == 2 || $_smarty_tpl->tpl_vars['ds']->value['service'] == 3) {?>
																		
																			<?php echo $_smarty_tpl->tpl_vars['ds']->value['d_h_plan_yearly'];?>

																			
																			<?php if ($_smarty_tpl->tpl_vars['ds']->value['d_h_plan_yearly'] == 1) {?>
																				Year
																			<?php } else { ?>
																				Years
																			<?php }?>
																			
																		<?php } else { ?>
																		
																			<?php echo $_smarty_tpl->tpl_vars['ds']->value['service_plan_monthly'];?>

																			
																			<?php if ($_smarty_tpl->tpl_vars['ds']->value['service_plan_monthly'] == 12) {?>
																				Year
																			<?php } else { ?>
																				<?php if ($_smarty_tpl->tpl_vars['ds']->value['service_plan_monthly'] == 1) {?>
																					Month
																				<?php } else { ?>
																					Months
																				<?php }?>
																			<?php }?>
																			
																		<?php }?>
																		</td>
																		
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['expiry_date'];?>
</td>

                                    <td class="text-right">
																		 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/generate-proforma/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Generate Proforma</a>
																		 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                        <a href="delete/domain-n-hosting/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete_domain" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                    </td>

                                </tr>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        <?php }?>

    </div>

    <div class="row">

			<div class="col-md-12">

				<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


			</div>

    </div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
