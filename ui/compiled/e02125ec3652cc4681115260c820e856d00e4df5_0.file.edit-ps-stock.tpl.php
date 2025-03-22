<?php
/* Smarty version 3.1.30, created on 2022-05-02 17:15:00
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps-stock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626fc43cd73da9_18773463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e02125ec3652cc4681115260c820e856d00e4df5' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/edit-ps-stock.tpl',
      1 => 1651491897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626fc43cd73da9_18773463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Stock</h3>
</div>
<div class="modal-body">
	<form class="form-horizontal" role="form" id="edit_form_stock" method="post">
		<div class="form-group">
			<label class="col-lg-2 control-label" for="product_stock">Stock</label>
			<div class="col-lg-10">
				<input type="number" name="product_stock" class="form-control" value="" autocomplete="off" placeholder="e.g : 10">
			</div>
		</div>

		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
