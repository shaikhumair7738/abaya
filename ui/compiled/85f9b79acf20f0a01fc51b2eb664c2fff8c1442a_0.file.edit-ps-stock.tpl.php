<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:32:18
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps-stock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537ce6ab1c824_55125640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f9b79acf20f0a01fc51b2eb664c2fff8c1442a' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps-stock.tpl',
      1 => 1696332857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537ce6ab1c824_55125640 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Stock</h3>
</div>
<div class="modal-body">
	<form class="form-horizontal" role="form" id="edit_form_stock" method="post">
	    <?php if ($_smarty_tpl->tpl_vars['d']->value['product_type'] == 'customize') {?>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_stock">Vendor</label>
			<div class="col-lg-10">
				<select name="vendor_id" class="form-control">
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
			<label class="col-lg-2 control-label" for="product_stock">Purchase Price (per stock)</label>
			<div class="col-lg-10">
				<input type="number" name="purchase_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_price'];?>
">
			</div>
		</div>		
	    <?php }?>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_stock">Stock</label>
			<div class="col-lg-10">
				<input type="number" name="product_stock" class="form-control" value="" autocomplete="off" placeholder="e.g : 10">
			</div>
		</div>

		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
		<input type="hidden" name="product_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['product_type'];?>
">
	</form>
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
	<button id="update_stock" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</button>
</div><?php }
}
