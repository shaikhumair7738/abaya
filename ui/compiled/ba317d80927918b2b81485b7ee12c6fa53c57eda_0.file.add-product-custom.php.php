<?php
/* Smarty version 3.1.30, created on 2022-04-29 16:44:16
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/add-product-custom.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626bc888e9a956_35679563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba317d80927918b2b81485b7ee12c6fa53c57eda' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/add-product-custom.php',
      1 => 1651230807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_626bc888e9a956_35679563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="wrapper wrapper-content">
	<div class="row">

		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>rwerwe
						<?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
 <?php }?>


					</h5>
					<div class="ibox-tools">
						<?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Products'];?>
</a>

						<?php }?> <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Service') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-list" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Services'];?>
</a>
						<?php }?>


					</div>
				</div>
				<div class="ibox-content" id="ibox_form">
					<div class="alert alert-danger" id="emsg">
						<span id="emsgbody"></span>
					</div>

					<form class="form-horizontal" id="rform">


                    <div class="form-group">
						<label class="col-lg-2 control-label" for="name">Service Type</label>
						<div class="col-lg-10">
					         <select name="service_type" class="form-control" id="service_type">
                                 <option value="">--Select--</option>
                                 <option value="onetime">Onetime</option>
                                 <option value="recurring">Recurring</option>
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
							<label class="col-lg-2 control-label" for="sales_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</label>

							<div class="col-lg-10">
								<input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "
								 data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">

							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="item_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>

							<div class="col-lg-10">
								<input type="text" id="item_number" value="<?php echo $_smarty_tpl->tpl_vars['nxt']->value;?>
" name="item_number" class="form-control" autocomplete="off">

							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>

							<div class="col-lg-10">
								<textarea id="description" class="form-control" rows="3"></textarea>

							</div>
						</div>


						<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">



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
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
