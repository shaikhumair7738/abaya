<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:32:10
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537ce62a1ddd8_67228955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9632f588fdf4f2b25212bb48b479d10394b8598a' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/ps-list.tpl',
      1 => 1692703335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6537ce62a1ddd8_67228955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['List'];?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h5>
                <div class="ibox-tools">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
                </div>
            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="input-group">
                    <!--<select name="product_type" class="form-control">
                        <option value="readymade" <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'readymade') {?> selected <?php }?>>Readymade</option>
                        <option value="customize" <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'customize') {?> selected <?php }?>>Customize</option>
                    </select>
                    <span class="input-group-btn">
                        <button type="button" id="search1" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
                    </span>-->
                    <div class="radio-button">
					<input type="radio" name="product_type" onchange="psearch(this.value);" value="readymade" id="readymade" <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'readymade') {?> checked <?php }?>>
                    <label for="readymade"> Readymade</label>
					</div>
                    
					<div class="radio-button">
                    <input type="radio" name="product_type" onchange="psearch(this.value);" value="customize" id="customize" <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'customize') {?> checked <?php }?>>
                    <label for="customize"> Customize</label>  
                      </div>					
                </div>
                <input type="hidden" id="stype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <div class="project-list mt-md">
                    <div id="progressbar">
                    </div>

                    <div id="application_ajaxrender1">
                    <table id="" class="display datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Purchase Price</th>
                                <th>Sale Price</th>
                                <th>Stock</th>                                    
                                <!--<th>Type</th>-->
                                <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'customize') {?><th>Category</th> <?php }?>  
                                <th>Image</th>
                                <th>Desc</th>
                                <th>QRCode</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php $_smarty_tpl->_assignInScope('x', 1);
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                                <td><?php echo $_smarty_tpl->tpl_vars['x']->value++;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['purchase_price'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['sales_price'];?>
</td>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('stock', json_decode(product_stock_info($_smarty_tpl->tpl_vars['ds']->value['id']),true));
?>
                                    <?php echo $_smarty_tpl->tpl_vars['stock']->value['current_stock_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['product_stock_type'];?>

                                </td>
                                <!--<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['product_type'];?>
</td>-->
                                <?php if ($_smarty_tpl->tpl_vars['product_type']->value == 'customize') {?>
                                <td>          
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['product_category'] == '') {?>
                                    -
                                    <?php } else { ?>
                                    <?php echo str_replace('_',' ',$_smarty_tpl->tpl_vars['ds']->value['product_category']);?>

                                    <?php }?>                                    
                                </td>
                                <?php }?>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['product_image'] == '') {?>
                                    -
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('thumb', make_thumb($_smarty_tpl->tpl_vars['ds']->value['product_image'],'storage/thumb','50'));
?>
                                    <!--<img data-img="<?php echo $_smarty_tpl->tpl_vars['ds']->value['product_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" width="50px" height="50px" class="img-popup">-->
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ds']->value['product_image'];?>
">View</a>
                                    <?php }?>
                                </td>
                                <td>
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['description'] == '') {?>
                                    -
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>

                                <?php }?>                                     
                                </td>

                                <td>
                                   <?php $_smarty_tpl->_assignInScope('imagetext', (('').("P-")).($_smarty_tpl->tpl_vars['ds']->value['id']));
?>
                                   <?php $_smarty_tpl->_assignInScope('qrimage', qrcode_generate($_smarty_tpl->tpl_vars['imagetext']->value));
?>
                                   <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
qrcode/fetch&search=<?php echo basename($_smarty_tpl->tpl_vars['qrimage']->value);?>
">view</a>
                                   
                                </td>

                                <td class="project-actions">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-success btn-xs"><i class="fa fa-bar-chart"></i> Stock History</a>
                                   <a href="#" class="btn btn-warning btn-xs cedit_stock" id="e<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-plus"></i> Add Stock </a>
                                    <a href="#" class="btn btn-primary btn-xs cedit" id="e<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="pid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-filter="<?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
"><i class="fa fa-trash"></i> Delete </a>
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
</div>

<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
    
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.datatable').DataTable();
    });

    function psearch(val){
        //alert(val);
        const url = $('#_url').val();
        const prodyct_type = val; //$('select[name="product_type"]').val();
        window.location.href = url + "ps/p-list/&product_type=" + prodyct_type;
    }
<?php echo '</script'; ?>
>

<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
"> <?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
