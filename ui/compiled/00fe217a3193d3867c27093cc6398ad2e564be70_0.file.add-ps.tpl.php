<?php
/* Smarty version 3.1.30, created on 2023-10-25 17:31:53
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/add-ps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_653903b1e05d95_44418411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00fe217a3193d3867c27093cc6398ad2e564be70' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/add-ps.tpl',
      1 => 1696337353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_653903b1e05d95_44418411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>
                  Add Product
               </h5>
               <div class="ibox-tools">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list" class="btn btn-primary btn-xs">List Products</a>
               </div>
            </div>
            <div class="ibox-content" id="ibox_form">
               <div class="alert alert-danger" id="emsg">
                  <span id="emsgbody"></span>
               </div>
               <form class="form-horizontal" id="rform">
                  <div class="form-group margbtm_5">
                     <label class="col-lg-2 control-label" for="product_type">Product Type</label>
                     <div class="col-lg-10">
                        <!--<select name="product_type" class="form-control" onchange="get_category(this.value);">
                           <option value="readymade">Readymade</option>
                           <option value="customize">Customize</option>
                        </select>-->

                     <div class="radio-button">
                         <input type="radio" name="product_type" onchange="get_category(this.value);" value="readymade" id="readymade" checked/>
                         <label for="readymade">Readymade</label>
                     </div>


                    <div class="radio-button">
                        <input type="radio" name="product_type" onchange="get_category(this.value);" value="customize" id="customize"/> 
                        <label for="customize">Customize</label>  
                    </div>
                    
                     </div>
                  </div>

                  <div class="form-group product_category margbtm_5"></div>	
                  
        		<div class="form-group">
        			<label class="col-lg-2 control-label" for="vendor_id">Vendor</label>
        			<div class="col-lg-10">
        				<select id="vendorId" name="vendor_id" class="form-control">
        				    <option value="">--Select--</option>
        				    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendorList']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        				        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['account'];?>
</option>
        				    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        				</select>
        			</div>
        		</div>                  
				  
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                     <div class="col-lg-10">
                        <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="purchase_price">Purchase price</label>
                     <div class="col-lg-10">
                        <input type="text" id="purchase_price" name="purchase_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "
                           data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="sales_price">Sale price</label>
                     <div class="col-lg-10">
                        <input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "
                           data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="product_stock">Stock</label>
                     <div class="col-lg-7">
                        <input type="number" name="product_stock" class="form-control" autocomplete="off" placeholder="e.g : 10">
                     </div>
                     <div class="col-lg-3">
                        <select name="product_stock_type" class="form-control">
                            <option value="qty">Qty</option>
                            <option value="meter">Meter</option>
                            <option value="packet">Packet</option>
                        </select>
                        <!--<input type="text" name="product_stock_type" class="form-control" autocomplete="off" placeholder="e.g : kg, meter, packet">-->
                     </div>					 
                  </div>
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="product_image">Product Image</label>
                     <div class="col-lg-9">
                        <input type="file" id="product_image" name="product_image" class="form-control" autocomplete="off" accept="image/*">
                     </div>
                     <div class="col-lg-1">
                         <img class="img-popup" id="ready_img" src="" width="100%" />
                         <input name="ready_img" type="hidden" value="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                     <div class="col-lg-10">
                        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                     </div>
                  </div>
                  <div class="form-group" style="display:none;">
                     <label class="col-lg-2 control-label" for="item_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>
                     <div class="col-lg-10">
                        <input type="text" id="item_number" value="<?php echo $_smarty_tpl->tpl_vars['nxt']->value;?>
" name="item_number" class="form-control" autocomplete="off">
                     </div>
                  </div>
                  <input type="hidden" id="type" name="type" value="Product">
                  <div class="form-group">
                     <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php echo '<script'; ?>
>
function get_category(val)
{
	if(val == 'customize')
	{
		/*$('.product_category').html('<label class="col-lg-2 control-label" for="product_category">Product Category</label> <div class="col-lg-10"><!--<select name="product_category" class="form-control"> <option value="fabric">Fabric</option> <option value="stone_&_size">Stone Color & Size</option> </select>--><div class="radio-button"><input type="radio" name="product_category" value="fabric" id="fabric" checked/> <label for="fabric">Fabric</label></div> <div class="radio-button"><input type="radio" name="product_category" value="stone_&_size" id="stone_&_size"/> <label for="stone_&_size">Stone Color & Size</label></div> </div>');*/
        $('.product_category').html('<label class="col-lg-2 control-label" for="product_category">Product Category</label><div class="col-lg-10"><?php $_smarty_tpl->_assignInScope('itemCategory', get_item_categories());
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemCategory']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?><div class="radio-button"><input type="radio" name="product_category" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value["value"];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cat']->value["value"];?>
"><label for="<?php echo $_smarty_tpl->tpl_vars['cat']->value["value"];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value["name"];?>
</label></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  </div>');  
        
        $('#purchase_price').val('');
        $('#sales_price').val('');
        $('#ready_img').attr('src', '');
        $('input[name="ready_img"]').val('');        
        
        $("#vendorId").prop("disabled", false);

	}
	else
	{
        $('.product_category').html('<label class="col-lg-2 control-label" for="design_id">Select Design</label><div class="col-lg-10"> <select id="design_id" name="design_id" class="form-control"><option value="">--Select design--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_designs(), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select></div>');
        $('#design_id').select2();
        
        // Reset the select element to its default option (first option in this case)
        $("#vendorId").val($("#vendorId option:first").val());
        
        // Disable the select element
        $("#vendorId").prop("disabled", true);        
    }

}

$(document).ready(function(){
        get_category('');
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
