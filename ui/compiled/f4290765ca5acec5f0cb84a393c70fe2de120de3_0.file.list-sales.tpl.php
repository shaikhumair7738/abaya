<?php
/* Smarty version 3.1.30, created on 2022-02-25 18:00:41
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/list-sales.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6218cbf18df0b2_23982500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4290765ca5acec5f0cb84a393c70fe2de120de3' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/list-sales.tpl',
      1 => 1645792233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6218cbf18df0b2_23982500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body" id="sale-from-body">
                    <div class="row">	
                    <div class="col-md-2">
                        <label>Sale ID</label>
                            <input type="text" name="sale_id" class="form-control">
                        </div>                        			
                        <div class="col-md-2">
                        <label>Customer</label>
                        <select name="customer_id" class="form-control select2">
                            <option value="">--Select--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custs']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['account'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            
                        </select>
                        </div>
                        <div class="col-md-2">
                        <label>Service</label>
                        <select name="service_id" class="form-control select2">
                            <option value="">--Select--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                             
                        </select>
                        </div>   
                        <div class="col-md-2">
                            <label>Domain</label>
                            <input type="text" name="domain" class="form-control" placeholder="Enter Domain Name">
                        </div> 
                        <div class="col-md-2">
                        <label>Type</label>    
                        <select name="service_type" class="form-control select2">
                            <option value="">--Select--</option>  
                            <option value="onetime">Onetime</option>
                            <option value="recurring">Recurring</option>
                        </select>
                        </div> 
                        <div class="col-md-2">
                        <label>Agent</label>    
                        <select name="agent_id" class="form-control select2">
                            <option value="">--Select--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agents']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['fullname'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        </div>                                                                               						
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Date Filter Type</label>
                            <select name="date_coloumn" class="form-control select2">
                                <option value="">--Select--</option>
                                <option value="ragister_date">Register Date</option>        
                                <option value="update_date">Update Date</option>
                                <option value="expire_date">Expiry Date</option>                   
                            </select>
                        </div>                        
                        <div class="col-md-2">
                            <label id="from_label">From</label>
                            <input type="date" name="from" class="form-control">
                        </div> 
                        <div class="col-md-2">
                            <label id="to_label">From</label>
                            <input type="date" name="to" class="form-control">
                        </div>  
                        <div class="col-md-2">
                        <label>Status</label>    
                        <select name="is_terminated" class="form-control select2">
                            <option value="">All</option>
                            <option value="yes">Terminated</option>
                        </select>
                        </div>                                                                      
                        <div class="col-md-2">
                            <label style="visibility:hidden">---</label>
                            <button class="btn btn-primary btn-block" onclick="load_sales_data();"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>			
                        <div class="col-md-2">
                            <label style="visibility:hidden">---</label>
                            <button class="btn btn-danger btn-block" onclick="reset_form();"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                        </div>                        
                    </div>    
			</div>
		</div>
	</div>
</div>


<div class="row" id="application_ajaxrender">

	<div class="col-md-12">

		<div class="panel panel-default">

			<div class="panel-body">
               <!--<p><span style="background:red;color:red">RED</span> - Expired</p>
               <p><span style="background:orange;color:orange">Orange</span> - 7 Days Remaining</p>
               <p><span style="background:yellow;color:yellow">Yellow</span> - 15 Days Remaining</p>-->
               <div style="overflow-x: auto;">
                <table class="table table-bordered table-striped dt-responsive nowrap" width="100%" id="sales-list-table">

                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Sale ID</th>
                                <th>Agent</th>
                                <th>Customer</th>
                                <th>service</th>
                                <th>Domain</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Exp. Date</th>
                                <th>Remaining</th>
                                <th>Reg. Date</th>
                                <th>Upd. Date</th>                        
                                <th>Type</th>
                                <th>Total Bills</th>
                                <th>Status</th>
                                <th class="text-right" data-sort-ignore="true">Manage</th>
                            </tr>
                        </thead>
                    </table>
                </div>
			</div>

		</div>

	</div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 

<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function load_sales_data(){
        $("#sales-list-table").dataTable().fnDestroy();
		$('#sales-list-table').DataTable({
    		dom: 'lBfrtip',
    		buttons: [
    		    {
                    extend: 'csvHtml5',
                    filename: 'sales-report', 
                    text: 'Export',
                    className: 'btn-sm btn-secondary btn-data-export',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                    }                    
                }
            ],
    		"lengthMenu": [[5, 10, 25, 50, 500, 1000], [5, 10, 25, 50, 500, 1000]],
            initComplete : function() {
                $('.dataTables_filter').hide();
            },
            "pageLength": 10,
            'responsive': true,
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
             'url':'https://bills.makinfotech.in/?ng=sales/list-ajax-sales/',
            "data": function ( search_param ) {
                search_param.agent_id      = $('select[name="agent_id"]').val();
                search_param.customer_id   = $('select[name="customer_id"]').val();
                search_param.service_id    = $('select[name="service_id"]').val();
                search_param.domain        = $('input[name="domain"]').val();
                search_param.date_coloumn  = $('select[name="date_coloumn"]').val();
                search_param.from          = $('input[name="from"]').val();
                search_param.to            = $('input[name="to"]').val();
                search_param.service_type  = $('select[name="service_type"]').val();
                search_param.sale_id       = $('input[name="sale_id"]').val();
                search_param.is_terminated = $('select[name="is_terminated"]').val();
            }             
            },
            "order": [[ 1, "desc" ]],
            'columns': [
                { data: 'sr' },
                { data: 'id' },
                { data: 'agent_id' },
            	{ data: 'customer_id' },
            	{ data: 'service_id' },
            	{ data: 'domain' },
            	{ data: 'duration' },
                { data: 'amount' },
                { data: 'expire_date' },
                { data: 'remaining' },
            	{ data: 'ragister_date' },
            	{ data: 'update_date' },	
                { data: 'service_type' },
                { data: 'total_bills' },
                { data: 'status' },
            	{ data: 'action' },
            ],
            "columnDefs": [
                { "orderable": false, "targets": 0 },
                { "orderable": false, "targets": 2 },
                { "orderable": false, "targets": 3 },
                { "orderable": false, "targets": 4 },
                { "orderable": false, "targets": 5 },
                { "orderable": false, "targets": 6 },
                { "orderable": false, "targets": 9 },
                { "orderable": false, "targets": 13 },
                { "orderable": false, "targets": 14 },
                { "orderable": false, "targets": 15 },
            ]            
		}); 
    } 

function reset_form()
{
    $('.select2').val('').trigger('change.select2');
    $("#sale-from-body input").val("");
    load_sales_data();
} 

$('select[name="date_coloumn"]').on('change', function() {
      var value = $('select[name="date_coloumn"] option:selected').val();
      var value = value.split("_");
      var value = value[0] ? value[0] : '';
      $('#from_label').html(value  + ' From');
      $('#to_label').html(value + ' To');
});

$(document).ready(function(){     
    load_sales_data();
    $('.select2').select2();
}); 

    function edit_sale_modal(id) {
		var _url = $("#_url").val();
		var $modal = $('#ajax-modal');
		$('body').modalmanager('loading');
		$modal.load(_url + 'sales/edit-sale-modal/' + id, '', function() {
			$modal.modal();
		});
    }
    
    $("body").on('click', '#edit_sale', function (e) {
        e.preventDefault();
        $('#ajax-modal').block({ message:block_msg });
        var _url = $("#_url").val();
        $.post(_url + 'sales/edit-post/', $( "#edit-sale-form" ).serialize())
            .done(function (data) {
                if ($.isNumeric(data)) {
                    $("#emsgbody-success").html('Sale Updated Successfully');
                    $("#emsg-success").show("slow");
                    $("#emsg").hide();
                    $('#ajax-modal').unblock();
                    setTimeout(function() { $('.close').click(); reset_form(); }, 2000);
                }
                else {
                    $('#ajax-modal').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });


    function generate_bill_modal(id) {
		var _url = $("#_url").val();
		var $modal = $('#ajax-modal');
		$('body').modalmanager('loading');
		$modal.load(_url + 'sales/generate-bill-modal/' + id, '', function() {
			$modal.modal();
		});
    } 


    $("body").on('click', '#generate_bill', function (e) {
        e.preventDefault();
        $('#ajax-modal').block({ message:block_msg });
        var _url = $("#_url").val();
        $.post(_url + 'sales/generate-bill/', $( "#generate-bill-form" ).serialize())
            .done(function (data) {
                if ($.isNumeric(data)) {
                    $("#emsgbody-success").html('Proforma Generated Successfully');
                    $("#emsg-success").show("slow");
                    $("#emsg").hide();
                    $('#ajax-modal').unblock();
                    setTimeout(function() { 
                        $('.close').click(); reset_form(); 
                    }, 2500);
                    setTimeout(function() {     
                        window.open(
                        _url + "invoices/performa-view/" + data,
                        '_blank'
                        ); 
                    }, 4000);
                }
                else {
                    $('#ajax-modal').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    }); 


    function view_sale_modal(id)
    {
		var _url = $("#_url").val();
		var $modal = $('#ajax-modal');
		$('body').modalmanager('loading');
		$modal.load(_url + 'sales/view-sale-modal/' + id, '', function() {
			$modal.modal();
		});
    }  
    
    function terminate_sale_modal(id)
    {
		var _url = $("#_url").val();
		var $modal = $('#ajax-modal');
		$('body').modalmanager('loading');
		$modal.load(_url + 'sales/terminate-sale-modal/' + id, '', function() {
			$modal.modal();
		});
    }  
    
    $("body").on('click', '#terminate_sale', function (e) {
        e.preventDefault();
        $('#ajax-modal').block({ message:block_msg });
        var _url = $("#_url").val();
        $.post(_url + 'sales/terminate-sale-post/', $( "#terminate-sale-form" ).serialize())
            .done(function (data) {
                if ($.isNumeric(data)) {
                    $("#emsgbody-success").html('Sale Terminated Successfully');
                    $("#emsg-success").show("slow");
                    $("#emsg").hide();
                    $('#ajax-modal').unblock();
                    setTimeout(function() { $('.close').click(); reset_form(); }, 2000);
                }
                else {
                    $('#ajax-modal').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });    
<?php echo '</script'; ?>
>
<style>
#sale-from-body label {
    margin-top: 10px;
    text-transform:capitalize;
}
</style>
<?php }
}
