<?php
/* Smarty version 3.1.30, created on 2022-01-22 15:28:58
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/list-domain-n-hosting.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61ebd562daf064_77781603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a7b8f7bf56d7c3a0719c0fc10169d4770b7e26' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/list-domain-n-hosting.tpl',
      1 => 1580267237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61ebd562daf064_77781603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-body">

                    <!-- <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
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

                    </form> -->
										<div class="col-md-8">
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
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
domain_n_hosting/add/" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Add New Domain and Hosting</a>
										</div>
                </div>
            </div>

        </div>

    </div>


    <div class="row" id="application_ajaxrender">

        <?php if (($_smarty_tpl->tpl_vars['_c']->value['contact_set_view_mode']) == 'tbl') {?>

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                        <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">

                            <thead>

                             <tr>

                                <th>#</th>

                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>

                                <th >Domain Name</th>
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
                                     <p href="" class="btn btn-warning btn-xs" onclick="sendReminder(<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
)"><i class="fa fa-bell"></i> Send</p>
                                     <p href="" class="btn btn-info btn-xs" onclick="renewal(<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
)"><i class="fa fa-repeat"></i> Renew</p>
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
		
		<!-- <div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div> -->
<?php echo '<script'; ?>
>

  function sendReminder(id){
      var _url = $("#_url").val();
      var $modal = $('#ajax-modal');
      console.log('Click');
      console.log(id);
      $('body').modalmanager('loading');
      $modal.load( _url + 'domain_n_hosting/send_reminder_/' + id, '', function(){
          $modal.modal();
          $('.sysedit').summernote({
          });
      });
  }

  function renewal(id){
      var _url = $("#_url").val();
      var $modal = $('#ajax-modal');
      console.log('Click');
      console.log(id);
      $('body').modalmanager('loading');
      $modal.load( _url + 'domain_n_hosting/renewal/' + id, '', function(){
          $modal.modal();
          $('.sysedit').summernote({
          });
      });
  }

  $(document).ready(function () {
    var _url = $("#_url").val();
    var $modal = $('#ajax-modal');
    var sysrender = $('#application_ajaxrender');

    $modal.on('click', '#send', function(){
          $modal.modal('loading');
          /* var attach_pdf = 'No';
          if($("#attach_pdf").prop('checked') == true){
              attach_pdf = 'Yes';
          } */
          var _url = $("#_url").val();
          $.post(_url + 'domain_n_hosting/send_email', {
              message: $('.sysedit').code(),
              subject: $('#subject').val(),
              toname: $('#toname').val(),
              toemail: $('#toemail').val(),
              ccemail: $('#ccemail').val(),
              bccemail: $('#bccemail').val()
          }).done(function (data) {
              var _url = $("#_url").val();
              $modal.modal('loading').find('.modal-body').prepend(data);
          });
      });

    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
