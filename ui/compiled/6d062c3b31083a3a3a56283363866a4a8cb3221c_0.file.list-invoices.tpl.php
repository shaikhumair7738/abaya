<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:34:58
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/list-invoices.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537cf0a775a60_53879005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d062c3b31083a3a3a56283363866a4a8cb3221c' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/list-invoices.tpl',
      1 => 1692797787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6537cf0a775a60_53879005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    
        
            
                
            
            
            
        
    


<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : 
                        <?php if (!empty($_smarty_tpl->tpl_vars['inv_count']->value)) {?>     
                            <?php echo $_smarty_tpl->tpl_vars['inv_count']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['total_invoice']->value;?>

                        <?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->roleid == 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['view_type']->value != 'filter') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back'];?>
</a>
                    <?php }?>
                    
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Invoice'];?>
</a>
                    <?php }?>

                </div>
            </div>
            <div class="ibox-content">

                <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter1') {?>
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
<div class="table-responsive tb"> 
                <table id="invoice-datatable" class="table table-bordered table-hover" <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter1') {?> data-filter="#foo_filter" data-page-size="50" <?php }?>>
                    <thead>
                    <tr>
                        <th>Invoice No</th>
                        <!--<th>Sale ID</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>-->
                        <th>Customer</th>
                        <!--<th>Email</th>-->
                        <th>Phone</th>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['roleid'] != '1') {?>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php }?>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                        <th>Delivery date</th>
                        <th>
                            Payment Status
                        </th>
                        <th>
                            Invoice Status
                        </th>                        
                        <th>Created By</th>
                        <th>Updated At</th>
                        <th>Created At</th>
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
                            <!--<td><?php echo SaleID($_smarty_tpl->tpl_vars['ds']->value['sale_id']);?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['customer']->value['company'];?>
</a> </td>-->
                            <td><?php echo $_smarty_tpl->tpl_vars['customer']->value['account'];?>
</td>
                            <!--<td><?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</td>-->
                            <td><?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
</td>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['roleid'] != '1') {?>
                            <td class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['ds']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['ds']->value['subtotal'];?>
</td>
                            <?php }?>

                            <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['date']);?>
"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                            <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']);?>
"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
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
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] == '0') {?>
                                    <span class="label label-success"><i class="fa fa-dot-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label-success"><i class="fa fa-repeat"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                                <?php }?>
                            </td>-->
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['delivery_status'];?>
</td>
                            <td><?php echo get_type_by_id('sys_users','id',$_smarty_tpl->tpl_vars['ds']->value['created_by'],'fullname');?>
</td>
                            <td><?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['updated_at'])) {?> <?php echo date('Y-m-d H:i A',$_smarty_tpl->tpl_vars['ds']->value['updated_at']);?>
 <?php }?></td>
                            <td><?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['created_at'])) {?> <?php echo date('Y-m-d H:i A',$_smarty_tpl->tpl_vars['ds']->value['created_at']);?>
 <?php }?></td>
                            <td class="text-right">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['roleid'] != '1') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
																<?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                                                <?php }?>
                                <?php if (empty($_smarty_tpl->tpl_vars['ds']->value['sale_trans_code'])) {?>                                
                                <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                <?php }?>
                            <?php } else { ?>
                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview-tailor/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> View bill</a>
                            <?php }?>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </tbody>

                    <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter1') {?>
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
?>


<style>
    .tb th {
    font-size: 12px;
}
</style>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('#invoice-datatable').DataTable({
            "order": [[10, "desc"]]
        });
    });
<?php echo '</script'; ?>
><?php }
}
