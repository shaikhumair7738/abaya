<?php
/* Smarty version 3.1.30, created on 2022-07-25 18:30:00
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/product-modal-list-ps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62de93d00c0a48_49659551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dee3cc126847095c3b81902d037d551720acd8c0' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/product-modal-list-ps.tpl',
      1 => 1658753994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de93d00c0a48_49659551 (Smarty_Internal_Template $_smarty_tpl) {
?>
 

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.datatable').DataTable( {
            "pageLength": 5000,
            "bLengthChange" : false,
            "bInfo" : false,
            "paging": false
        });

        get_list('fabric');
    });


    function get_list(val)
    {
        if(val == 'fabric')
        {
            $('.m_fabric').show();
            $('.m_stone__size').hide();
            $('.m_handwork_materials').hide();
            $('.m_others').hide();
        }
        else if(val == 'stone__size')
        {
            $('.m_fabric').hide();
            $('.m_stone__size').show();
            $('.m_handwork_materials').hide();
            $('.m_others').hide();
        }
        else if(val == 'handwork_materials')
        {
            $('.m_fabric').hide();
            $('.m_stone__size').hide();
            $('.m_handwork_materials').show();
            $('.m_others').hide();
        }
        else if(val == 'others')
        {
            $('.m_fabric').hide();
            $('.m_stone__size').hide();
            $('.m_handwork_materials').hide();
            $('.m_others').show();
        }                
    }    
<?php echo '</script'; ?>
>
<div class="modal-header">
<button type="button" class="close close_buttons_cls" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3>Add Product</h3>
    </div>
<div class="modal-body select_products_body">
<div class="modal_heights">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#Readymade">Readymade</a></li>
          <li><a data-toggle="tab" href="#Customized">Customized</a></li>
        </ul>
      
        <div class="tab-content">
          <div id="Readymade" class="tab-pane fade in active">
                <table class="table table-striped datatable" id="items_table1">
                        <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="20%">Item Image</th>
                                <th width="20%">Item Name</th>
                                <th width="30%">Description</th>
                                <th width="10%">Price</th>
                                <th width="10%">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_readymade']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?> 
                            <tr>
                                <td>
                                    <input type="checkbox" class="si" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['item_number'];?>
">
                                    <input type="hidden" class="pid" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                    <input type="hidden" class="pimg" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['product_image'];?>
">
                                </td>
                                <td>
                                    <!--<?php echo $_smarty_tpl->tpl_vars['ds']->value['item_number'];?>
--> 
                                    <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['product_image'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('thumb', make_thumb($_smarty_tpl->tpl_vars['ds']->value['product_image'],'storage/thumb','50'));
?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" width="50px" height="50px">
                                    <?php } else { ?>
                                    -
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                <td class="price"><?php echo $_smarty_tpl->tpl_vars['ds']->value['sales_price'];?>
</td>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('stock', json_decode(product_stock_info($_smarty_tpl->tpl_vars['ds']->value['id']),true));
?>
                                    <?php echo $_smarty_tpl->tpl_vars['stock']->value['current_stock_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['product_stock_type'];?>
 
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
          <div id="Customized" class="tab-pane fade">

    <?php $_smarty_tpl->_assignInScope('itemCategory', get_item_categories());
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemCategory']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('cat_val', str_replace('&','',$_smarty_tpl->tpl_vars['cat']->value['value']));
?>
    <div class="radio-button margintop_20">
        <input id="<?php echo $_smarty_tpl->tpl_vars['cat_val']->value;?>
" type="radio" name="product_category" value="<?php echo $_smarty_tpl->tpl_vars['cat_val']->value;?>
" onchange="get_list(this.value);" <?php if ($_smarty_tpl->tpl_vars['cat_val']->value == 'fabric') {?>checked<?php }?>> 
        <label for="<?php echo $_smarty_tpl->tpl_vars['cat_val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</label> 
    </div>    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<!--<div class="radio-button margintop_20">
				<input id="mfabric" type="radio" name="product_category" value="fabric" onchange="get_list(this.value);" checked> 
				<label for="mfabric">Fabric</label> 
</div>
<div class="radio-button margintop_20">
				<input id="mstone__size" type="radio" name="product_category" value="stone_&_size" onchange="get_list(this.value);"> <label for="mstone__size">Stone Color & Size</label>
</div>-->
                
                <table class="table table-striped datatable" id="items_table2">
                        <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="20%">Item Image</th>
                                <th width="20%">Item Name</th>
                                <th width="30%">Description</th>
                                <th width="10%">Price</th>
                                <th width="10%">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_customize']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?> 
                            <tr class="m_<?php echo str_replace('&','',$_smarty_tpl->tpl_vars['ds']->value['product_category']);?>
">
                                <td>
                                    <input type="checkbox" class="si" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['item_number'];?>
">
                                    <input type="hidden" class="pid" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                    <input type="hidden" class="pimg" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['product_image'];?>
">
                                </td>
                                <td>
                                    <!--<?php echo $_smarty_tpl->tpl_vars['ds']->value['item_number'];?>
--> 
                                    <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['product_image'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('thumb', make_thumb($_smarty_tpl->tpl_vars['ds']->value['product_image'],'storage/thumb','50'));
?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" width="50px" height="50px">
                                    <?php } else { ?>
                                    -
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                <td class="price"><?php echo $_smarty_tpl->tpl_vars['ds']->value['sales_price'];?>
</td>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('stock', json_decode(product_stock_info($_smarty_tpl->tpl_vars['ds']->value['id']),true));
?>
                                    <?php echo $_smarty_tpl->tpl_vars['stock']->value['current_stock_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['product_stock_type'];?>
 
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
    <button class="btn btn-primary update">Select</button>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('.table tr').css('cursor', 'pointer').click(function() {
            var checkBoxes = $(this).find('input:checkbox')
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
            $(this).toggleClass("checked-p");
        });
    })
<?php echo '</script'; ?>
>
<style>
tr.checked-p {
    color: #000;
    font-weight: 700;
}

input.si {
    pointer-events: none;
}
</style><?php }
}
