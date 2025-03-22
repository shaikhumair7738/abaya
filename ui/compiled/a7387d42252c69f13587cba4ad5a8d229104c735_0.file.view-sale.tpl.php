<?php
/* Smarty version 3.1.30, created on 2022-03-12 16:49:59
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/view-sale.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_622c81dfa77244_68040830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7387d42252c69f13587cba4ad5a8d229104c735' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/sales/view-sale.tpl',
      1 => 1647082626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622c81dfa77244_68040830 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Detail View <b><?php echo SaleID($_smarty_tpl->tpl_vars['sale']->value['id']);?>
</b></h3>
</div>
<div class="modal-body">
	<div class="row">
        <div class="col-md-4">
            <p><b>Customer :</b> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
/summary/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['customer']->value['account'];?>
 (<?php echo $_smarty_tpl->tpl_vars['customer']->value['company'];?>
) </a> </p>
        </div>
        <div class="col-md-4">
            <p><b>Agent :</b> <?php echo $_smarty_tpl->tpl_vars['agent']->value['fullname'];?>
 </p>
        </div>
        <div class="col-md-4">
            <p>
            <b>Domain :</b> 
                <?php if ($_smarty_tpl->tpl_vars['sale']->value['domain'] == NULL) {?>
                     -
                <?php } else { ?>
                    <a href="http://<?php echo clean_url($_smarty_tpl->tpl_vars['sale']->value['domain']);?>
" target="_blank"><?php echo clean_url($_smarty_tpl->tpl_vars['sale']->value['domain']);?>
</a> 
                    <a target="_blank" class="btn-xs btn-warning" href="https://www.whois.com/whois/<?php echo clean_url($_smarty_tpl->tpl_vars['sale']->value['domain']);?>
">WhoIs</a>
                <?php }?>

            </p>
            
        </div> 
        <div class="col-md-4">
            <p><b>Service :</b> <?php echo $_smarty_tpl->tpl_vars['service']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['sale']->value['service_type'];?>
)</p>
        </div>        
        <div class="col-md-4">
            <p><b>Duration :</b> <?php echo $_smarty_tpl->tpl_vars['sale']->value['duration'];?>
 <?php echo $_smarty_tpl->tpl_vars['sale']->value['duration_type'];?>
 </p>
        </div> 
        <div class="col-md-4">
            <p><b>Amount :</b> <?php echo $_smarty_tpl->tpl_vars['sale']->value['amount'];?>
 </p>
        </div> 
        <div class="col-md-4">
            <p><b>Registration Date :</b><?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['sale']->value['ragister_date']));?>
</p>
        </div>
        <div class="col-md-4">
            <p><b>Updated Date :</b> <?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['sale']->value['update_date']));?>
 </p>
        </div>
        <div class="col-md-4">
            <p><b>Expiry Date :</b> <?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['sale']->value['expire_date']));?>
 </p>
        </div>                                                     
		<div class="col-md-12">
            <p><b>Note :</b> <?php echo $_smarty_tpl->tpl_vars['sale']->value['note'];?>
 </p>       
		</div>
        <div class="col-md-12">
            <hr>
            <h3>All Bills</h3>        
            <div style="overflow-x: auto;">
                <table id="sale-transaction" class="table table-bordered table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>service</th>
                            <th>Type</th>
                            <!--<th>Domain</th>-->
                            <th>Duration</th>
                            <th>Amount</th>
                            <th>Updated Date</th>
                            <th>Expiry Date</th>                            
                                                       
                            <!--<th>Notes</th>-->
                            <th>Proforma</th>
                            <th>Invoice</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('i', 1);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sale_transaction']->value, 'tran');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tran']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('s_data', json_decode($_smarty_tpl->tpl_vars['tran']->value['sale_data'],true));
?>
                        <?php $_smarty_tpl->_assignInScope('proforma', get_type_by_id_multi('sys_performa','sale_trans_code',$_smarty_tpl->tpl_vars['tran']->value['sale_trans_code'],'id,status,invoicenum'));
?>
                        <?php $_smarty_tpl->_assignInScope('invoice', get_type_by_id_multi('sys_invoices','sale_trans_code',$_smarty_tpl->tpl_vars['tran']->value['sale_trans_code'],'id,status'));
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                                <td><?php echo get_type_by_id('sys_items','id',$_smarty_tpl->tpl_vars['s_data']->value['service_id'],'name');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['s_data']->value['service_type'];?>
</td>
                                <!--<td><?php echo $_smarty_tpl->tpl_vars['s_data']->value['domain'];?>
</td>-->
                                <td><?php echo $_smarty_tpl->tpl_vars['s_data']->value['duration'];?>
 <?php echo $_smarty_tpl->tpl_vars['s_data']->value['duration_type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['s_data']->value['amount'];?>
</td>
                                <td><?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['s_data']->value['update_date']));?>
</td>
                                <td><?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['s_data']->value['expire_date']));?>
</td>        
                                
                                <!--<td><?php echo $_smarty_tpl->tpl_vars['s_data']->value['note'];?>
</td>-->
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value['id'] == '') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['proforma']->value['id'] == '') {?>
                                            Not generated 
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['proforma']->value['status'];?>

                                        <?php }?> 
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/performa-view/<?php echo $_smarty_tpl->tpl_vars['proforma']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['proforma']->value['invoicenum'];?>
</a>
                                    <?php }?>       
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value['id'] == '') {?>
                                        Not generated 
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['invoice']->value['status'];?>

                                    <?php }?> 
                                </td>
                                <td>
                                <?php if ($_smarty_tpl->tpl_vars['invoice']->value['id'] == '') {?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/performa-view/<?php echo $_smarty_tpl->tpl_vars['proforma']->value['id'];?>
" target="_blank">View Proforma</a>
                                <?php } else { ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
" target="_blank">View Invoice</a>
                                <?php }?>
                                <a onclick="return confirm_box();" class="btn btn-xs btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sales/delete-bill/<?php echo $_smarty_tpl->tpl_vars['tran']->value['sale_trans_code'];?>
">Delete Bill</a>
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


        <div class="col-md-12">
            <hr>
            <h3>All Logs</h3>        
            <div style="overflow-x: auto;">
                <table id="sale-logs" class="table table-bordered table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>action</th>
                            <th>timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('x', 1);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sale_logs']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['x']->value++;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['action'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['timestamp'];?>
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
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn">Close</button>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('#sale-transaction').DataTable();
    $('#sale-logs').DataTable();
} );

function confirm_box() 
{
    if (confirm("Proforma & invoice of this bill will be deleted permanently.\r\nAre you sure?") == true) 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}
<?php echo '</script'; ?>
><?php }
}
