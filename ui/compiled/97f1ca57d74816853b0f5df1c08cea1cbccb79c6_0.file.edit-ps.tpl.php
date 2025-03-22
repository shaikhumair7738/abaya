<?php
/* Smarty version 3.1.30, created on 2022-07-25 16:44:17
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62de7b091a9fe8_01533601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f1ca57d74816853b0f5df1c08cea1cbccb79c6' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps.tpl',
      1 => 1658747650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de7b091a9fe8_01533601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Edit</h3>
</div>
<div class="modal-body">
	<form class="form-horizontal" role="form" id="edit_form" method="post">
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_type">Product Type</label>
			<div class="col-lg-10">
				<input name="product_type" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['product_type'];?>
" readonly>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['d']->value['product_type'] == 'customize') {?>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_category">Product Category</label>
			<div class="col-lg-10">
				<!--<select name="product_category" class="form-control">
					<option value="fabric" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_category'] == 'fabric') {?> selected <?php }?>>Fabric</option>
					<option value="stone_&_size" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_category'] == 'stone_&_size') {?> selected <?php }?>>Stone & Size</option>
				</select>-->

				<?php $_smarty_tpl->_assignInScope('itemCategory', get_item_categories());
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemCategory']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
				<div class="radio-button">
					<input type="radio" name="product_category" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['value'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_category'] == $_smarty_tpl->tpl_vars['cat']->value['value']) {?> checked <?php }?>/> 
					<label for="<?php echo $_smarty_tpl->tpl_vars['cat']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</label> 
				</div>				
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<!--<div class="radio-button">
				<input type="radio" name="product_category" value="fabric" id="fabric" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_category'] == 'fabric') {?> checked <?php }?>/> 
				<label for="fabric">Fabric</label> </div>
<div class="radio-button">
				<input type="radio" name="product_category" value="stone_&_size" id="stone_&_size" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_category'] == 'stone_&_size') {?> checked <?php }?> /> <label for="stone_&_size">Stone Color & Size</label></div>-->

			</div>
		</div>
		<?php }?>
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" name="name" id="name">
			</div>
		</div>
		<div class="form-group" style="display:none;">
			<label for="rate" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="item_number" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['item_number'];?>
" id="item_number">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="purchase_price">Purchase price</label>
			<div class="col-lg-10">
				<input type="text" id="purchase_price" name="purchase_price" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_price'];?>
" class="form-control" autocomplete="off">
			</div>
		</div>
		<div class="form-group">
			<label for="rate" class="col-sm-2 control-label">Sale Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="sales_price" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['sales_price'];?>
" id="price">

			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_stock">Stock</label>
			<div class="col-lg-7">
				<input type="text" name="product_stock" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['product_stock'];?>
" autocomplete="off" placeholder="e.g : 10" readonly>
			</div>
			<div class="col-lg-3">
					<select name="product_stock_type" class="form-control">
						<option value="qty" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_stock_type'] == 'qty') {?> selected <?php }?>>Qty</option>
						<option value="meter" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_stock_type'] == 'meter') {?> selected <?php }?>>Meter</option>
						<option value="packet" <?php if ($_smarty_tpl->tpl_vars['d']->value['product_stock_type'] == 'packet') {?> selected <?php }?>>Packet</option>
					</select>				
				<!--<input type="text" name="product_stock_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['product_stock_type'];?>
" class="form-control" autocomplete="off" placeholder="e.g : kg, meter, packet">-->
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_image">Product Image</label>
			<div class="col-lg-9">
				<input type="file" id="product_image" name="product_image" class="form-control" autocomplete="off" accept="image/*">
			</div>
			<div class="col-lg-1"><img width="100%" src="<?php echo $_smarty_tpl->tpl_vars['d']->value['product_image'];?>
"></div>
		</div>
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
			<div class="col-sm-10">
				<textarea id="description" name="description" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['d']->value['description'];?>
</textarea>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
	</form>
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
	<button id="update" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</button>
</div><?php }
}
