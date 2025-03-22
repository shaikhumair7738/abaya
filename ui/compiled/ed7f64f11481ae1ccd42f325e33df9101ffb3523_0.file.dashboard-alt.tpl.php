<?php
/* Smarty version 3.1.30, created on 2022-06-27 14:45:10
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/dashboard-alt.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62b9751ee25923_14653240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7f64f11481ae1ccd42f325e33df9101ffb3523' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/dashboard-alt.tpl',
      1 => 1656321308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_62b9751ee25923_14653240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    
        
            
                
                    
                    
                
                
                    
                        
                        
                    
                    
                        
                        
                    
                    
                        
                        
                    
                
            
            
                
                    
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                
            
        
    

    

    




<div class="row">
    <div class="col-md-12" id="ib_graph"></div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg info-tile info-tile-alt tile-teal">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['ti']->value;?>
</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/" class="btn btn-success btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Deposit'];?>
</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="widget style1 red-bg info-tile info-tile-alt tile-danger">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['te']->value;?>
</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/" class="btn btn-warning btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Expense'];?>
</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg info-tile info-tile-alt tile-success">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['mi']->value;?>
</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 red-bg info-tile info-tile-alt tile-blue">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
 </span>
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['me']->value;?>
</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_assignInScope('inv', json_decode(invoice_count(),true));
?>
<div class="row">
    <div class="col-md-12" id="ib_graph"></div>

    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/">
        <div class="widget style1 blue-bg info-tile info-tile-alt tile-teal">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span>All Invoices</span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['total'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/delivered&count=<?php echo $_smarty_tpl->tpl_vars['inv']->value['delivered'];?>
">
        <div class="widget style1 navy-bg info-tile info-tile-alt tile-teal">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span>Delivered</span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['delivered'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>


    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/completed&count=<?php echo $_smarty_tpl->tpl_vars['inv']->value['completed'];?>
">
        <div class="widget style1 lazur-bg info-tile info-tile-alt tile-blue">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Completed </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['completed'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/processing&count=<?php echo $_smarty_tpl->tpl_vars['inv']->value['processing'];?>
">
        <div class="widget style1 yellow-bg info-tile info-tile-alt tile-success">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Processing </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['processing'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>    
    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/pending&count=<?php echo $_smarty_tpl->tpl_vars['inv']->value['pending'];?>
">
        <div class="widget style1 grey-bg info-tile info-tile-alt tile-danger">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Pending </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['pending'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/filter/overdue&count=<?php echo $_smarty_tpl->tpl_vars['inv']->value['overdue'];?>
">
        <div class="widget style1 red-bg info-tile info-tile-alt tile-danger">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-rupee fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Overdue </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['inv']->value['overdue'];?>
</h3>
                </div>
            </div>
        </div>
        </a>
    </div>    
</div>

    <div class="row" id="sort_3">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions'];?>
</a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income n Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="chart"></div>
                </div>
            </div>

        </div>
        <!-- Widget-5 end-->

    </div>
    <div class="row" id="sort_2">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-bullseye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Goal'];?>
</a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth n Account Balances'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <h3 class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</h3>
                        <div>
                            <span class="amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <span class="amount"><?php echo $_smarty_tpl->tpl_vars['_c']->value['networth_goal'];?>
</span>
                            <small class="pull-right"><span class="amount"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</span>%</small>
                        </div>


                        <div class="progress progress-small">
                            <div style="width: <?php echo $_smarty_tpl->tpl_vars['pgb']->value;?>
%;" class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['pgc']->value;?>
"></div>
                        </div>
                    </div>
                    
                    <div class="table-responsive"> 
                    <table class="table table-striped table-bordered" style="margin-top: 26px;">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ds']->value['balance'];?>
</span></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income vs Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="dchart"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Row end-->

<div class="row" id="sort_4">


    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a>
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                        <tr>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                            <td>
                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>


                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] == '0') {?>
                                    <span class="label label-success"><i class="fa fa-dot-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label-success"><i class="fa fa-repeat"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
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

    </div>


</div>





<!--<div class="row" id="renewal">


    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sales/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> Sales</a>
                <h5>Coming Renewal Sales</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive"> 
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Duration</th>
                        <th>Amount</th>
                        <th>Expiry Date</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->_assignInScope('sr', 1);
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['sr']->value++;?>
</td>
                            <td><?php echo get_type_by_id('crm_accounts','id',$_smarty_tpl->tpl_vars['record']->value['customer_id'],'account');?>
</td>
                            <td><?php echo get_type_by_id('sys_items','id',$_smarty_tpl->tpl_vars['record']->value['service_id'],'name');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['duration'];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value['duration_type'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['expire_date'];?>
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


</div>-->






    <div class="row" id="sort_3">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive"> 
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inc']->value, 'incs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['incs']->value) {
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['incs']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['incs']->value['amount'];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                    </table>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive"> 
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exp']->value, 'exps');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exps']->value) {
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['exps']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['exps']->value['amount'];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                    </table>
                    </div>
                </div>
            </div>

        </div>


    </div>



<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
