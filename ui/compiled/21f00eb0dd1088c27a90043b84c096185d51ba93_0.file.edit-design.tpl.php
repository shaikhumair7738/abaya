<?php
/* Smarty version 3.1.30, created on 2022-08-02 17:46:10
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/edit-design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62e9158acd0728_29501806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f00eb0dd1088c27a90043b84c096185d51ba93' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/edit-design.tpl',
      1 => 1659442507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9158acd0728_29501806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
		.fabric-fields, .stone-fields
		{
			padding-bottom:5px;
		}
  </style>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Edit</h3>
</div>
<div class="modal-body">
	<form class="form-horizontal" role="form" id="edit_form" method="post">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
" name="name" id="name">
			</div>
		</div>
		<div class="form-group">
			<label for="rate" class="col-sm-2 control-label">Sale Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="sales_price" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['price'];?>
" id="price">

			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label" for="design_images">Product Image</label>
			<div class="col-lg-7">
				<input type="file" id="design_images" name="design_images[]" class="form-control" autocomplete="off" accept="image/*">
			</div>
			<div class="col-lg-1 text-right">
			<?php $_smarty_tpl->_assignInScope('images', json_decode($_smarty_tpl->tpl_vars['d']->value['image'],true));
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" width="50px" height="50px"></a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		</div>
		<div class="form-group hide">
			<label for="name" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
			<div class="col-sm-10">
				<textarea id="description" name="description" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['d']->value['description'];?>
</textarea>
			</div>
		</div>

		<div class="form-group">
				<label class="col-lg-2 control-label" for="description">Product Type</label>
				<div class="col-lg-10">
					  <select name="cloth_id" class="form-control select2">
							<option value="">--Select Product Type--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloths']->value, 'cloth');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cloth']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['cloth']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cloth']->value['id'] == $_smarty_tpl->tpl_vars['d']->value['cloth_id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cloth']->value['name'];?>
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
		  <label class="col-lg-2 control-label" for="fabrics">Fabric</label>
		  <div class="col-lg-10">
				<div class="fabric-block">
				<?php $_smarty_tpl->_assignInScope('x', 0);
?>
				<?php $_smarty_tpl->_assignInScope('inbuilt_fabrics', json_decode($_smarty_tpl->tpl_vars['d']->value['fabrics'],true));
?>
				<?php if (empty($_smarty_tpl->tpl_vars['inbuilt_fabrics']->value)) {?>

				<div class="fabric-fields">
					<div class="row">
					<div class="col-md-5">
						  <select name="fabric_id[]" class="form-control select2">
						  <option value="">--Select Fabric--</option>
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabrics']->value, 'fabric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fabric']->value) {
?>
						  <option value="<?php echo $_smarty_tpl->tpl_vars['fabric']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fabric']->value['name'];?>
</option>
						  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						  </select>
					</div>
					<div class="col-md-5">
						  <input type="number" class="form-control" name="fabric_qty[]" placeholder="Enter Qty" required>
					</div>
					<div class="col-md-2 change">
						  <div class="btn btn-block btn-warning bg_greens" onclick="addFabric();"><i class="fa fa-plus" aria-hidden="true"></i></div>
					</div>
					</div>
			  </div>				

				<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inbuilt_fabrics']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
				<div class="fabric-fields">
					  <div class="row">
					  <div class="col-md-5">
							<select name="fabric_id[]" class="form-control select2">
							<option value="">--Select Fabric--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabrics']->value, 'fabric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fabric']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['fabric']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['fabric_id'] == $_smarty_tpl->tpl_vars['fabric']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['fabric']->value['name'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select>
					  </div>
					  <div class="col-md-5">
							<input type="number" class="form-control" name="fabric_qty[]" placeholder="Enter Qty" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fabric_qty'];?>
" required>
					  </div>
					  <?php if ($_smarty_tpl->tpl_vars['x']->value == 0) {?>
					  <div class="col-md-2 change">
							<div class="btn btn-block btn-warning bg_greens" onclick="addFabric();"><i class="fa fa-plus" aria-hidden="true"></i></div>
					  </div>
					  <?php } else { ?>
					    <div class="col-md-2">
						   <div class="btn btn-block btn-danger" onclick="removeFabric(this);"><i class="fa fa-minus" aria-hidden="true"></i>
</div>
						</div>
					  <?php }?>
					  </div>
				</div>
				<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['x']->value++);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
				</div>
		  </div>
		  </div> 

		  <div class="form-group">
				<label class="col-lg-2 control-label" for="stone_id">Stone Color & Size</label>
				<div class="col-lg-10">
					  <div class="stone-block">
							<?php $_smarty_tpl->_assignInScope('x', 0);
?>
							<?php $_smarty_tpl->_assignInScope('inbuilt_stones', json_decode($_smarty_tpl->tpl_vars['d']->value['stones'],true));
?>
							<?php if (empty($_smarty_tpl->tpl_vars['inbuilt_stones']->value)) {?>

							<div class="stone-fields">
								<div class="row">
									  <div class="col-md-5">
											<select name="stone_id[]" class="form-control select2">
											<option value="">--Select Stone Color & Size--</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stones']->value, 'stone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stone']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['stone']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['stone']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											</select>
									  </div>
									  <div class="col-md-5">
											<input type="number" class="form-control" name="stone_qty[]" placeholder="Enter Qty" required>
									  </div>
									  <div class="col-md-2 change">
											<div class="btn btn-block btn-warning bg_greens" onclick="addStone();"><i class="fa fa-plus" aria-hidden="true"></i></div>
									  </div>
								</div>
								</div>							

							<?php } else { ?>
														
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inbuilt_stones']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>						  
							<div class="stone-fields">
							<div class="row">
								  <div class="col-md-5">
										<select name="stone_id[]" class="form-control select2">
										<option value="">--Select Stone Color & Size--</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stones']->value, 'stone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stone']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['stone']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['stone_id'] == $_smarty_tpl->tpl_vars['stone']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['stone']->value['name'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
								  </div>
								  <div class="col-md-5">
										<input type="number" class="form-control" name="stone_qty[]" placeholder="Enter Qty" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['stone_qty'];?>
" required>
								  </div>
								  
								  <?php if ($_smarty_tpl->tpl_vars['x']->value == 0) {?>
								  <div class="col-md-2 change">
										<div class="btn btn-block btn-warning bg_greens" onclick="addStone();"><i class="fa fa-plus" aria-hidden="true"></i>
</div>
								  </div>
								  <?php } else { ?>
									<div class="col-md-2">
										<div class="btn btn-block btn-danger" onclick="removeStone(this);"><i class="fa fa-minus" aria-hidden="true"></i></div>
									</div>
								  <?php }?>								  
							</div>
							</div>
							<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['x']->value++);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
							<?php }?>						
					  </div>
				</div>
				</div>


				<!--handwork-->



				<div class="form-group">
					<label class="col-lg-2 control-label" for="handwork_id">Handwork Materials</label>
					<div class="col-lg-10">
						<div class="handwork-block">

							<?php $_smarty_tpl->_assignInScope('x', 0);
?>
							<?php $_smarty_tpl->_assignInScope('inbuilt_handworks', json_decode($_smarty_tpl->tpl_vars['d']->value['handworks'],true));
?>
							<?php if (empty($_smarty_tpl->tpl_vars['inbuilt_handworks']->value)) {?>
							<div class="handwork-fields">
								<div class="row">
									<div class="col-md-5">
										<select name="handwork_id[]" class="form-control select2">
											<option value="">--Select Handwork Materials--</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['handwork_materials']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
									</div>
									<div class="col-md-5">
										<input type="number" class="form-control" name="handwork_qty[]" placeholder="Enter Qty" required>
									</div>
									<div class="col-md-2 change">
										<div class="btn btn-block btn-warning bg_greens" onclick="addHandwork();">
											<i class="fa fa-plus" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
							<?php } else { ?>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inbuilt_handworks']->value, 'row1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
?>

							<div class="handwork-fields">
								<div class="row">
									<div class="col-md-5">
										<select name="handwork_id[]" class="form-control select2">
											<option value="">--Select Handwork Materials--</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['handwork_materials']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row1']->value['handwork_id'] == $_smarty_tpl->tpl_vars['row']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
									</div>
									<div class="col-md-5">
										<input type="number" class="form-control" name="handwork_qty[]" placeholder="Enter Qty" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['handwork_qty'];?>
" required>
									</div>
									
									<?php if ($_smarty_tpl->tpl_vars['x']->value == 0) {?>
									<div class="col-md-2 change">
										  <div class="btn btn-block btn-warning bg_greens" onclick="addHandwork();"><i class="fa fa-plus" aria-hidden="true"></i>
                                     </div>
									</div>
									<?php } else { ?>
									  <div class="col-md-2">
										  <div class="btn btn-block btn-danger" onclick="removeHandwork(this);"><i class="fa fa-minus" aria-hidden="true"></i></div>
									  </div>
									<?php }?>									
								</div>
							</div>							

							<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['x']->value++);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



							<?php }?>

						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="col-lg-2 control-label" for="handwork_id">Others</label>
					<div class="col-lg-10">
						<div class="other-block">

							<?php $_smarty_tpl->_assignInScope('x', 0);
?>
							<?php $_smarty_tpl->_assignInScope('inbuilt_others', json_decode($_smarty_tpl->tpl_vars['d']->value['others'],true));
?>
							<?php if (empty($_smarty_tpl->tpl_vars['inbuilt_others']->value)) {?>

							<div class="other-fields">
								<div class="row">
									<div class="col-md-5">
										<select name="others_id[]" class="form-control select2">
											<option value="">--Select Others--</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
									</div>
									<div class="col-md-5">
										<input type="number" class="form-control" name="others_qty[]" placeholder="Enter Qty" required>
									</div>
									<div class="col-md-2 change">
										<div class="btn btn-block btn-warning bg_greens" onclick="addOthers();">
											<i class="fa fa-plus" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
							<?php } else { ?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inbuilt_others']->value, 'row1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
?>
								
								<div class="other-fields">
										<div class="row">
											<div class="col-md-5">
												<select name="others_id[]" class="form-control select2">
													<option value="">--Select Others--</option>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row1']->value['other_id'] == $_smarty_tpl->tpl_vars['row']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</select>
											</div>
											<div class="col-md-5">
												<input type="number" class="form-control" name="others_qty[]" placeholder="Enter Qty" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['other_qty'];?>
" required>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['x']->value == 0) {?>
											<div class="col-md-2 change">
												  <div class="btn btn-block btn-warning bg_greens" onclick="addOthers();"><i class="fa fa-plus" aria-hidden="true"></i>
											 </div>
											</div>
											<?php } else { ?>
											  <div class="col-md-2">
												  <div class="btn btn-block btn-danger" onclick="removeOthers(this);"><i class="fa fa-minus" aria-hidden="true"></i></div>
											  </div>
											<?php }?>
										</div>
									</div>

								<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['x']->value++);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php }?>


						</div>
					</div>
				</div>




				<!--handwork-->

		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
	</form>
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
	<button id="update" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</button>
</div>


<?php echo '<script'; ?>
>
    function addFabric()
    {
        var html = '<div class="fabric-fields"> <div class="row"><div class="col-md-5"><select name="fabric_id[]" class="form-control select2"><option value="">--Select Fabric--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabrics']->value, 'fabric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fabric']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['fabric']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['fabric']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select></div><div class="col-md-5"> <input type="number" class="form-control" name="fabric_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeFabric(this);">Remove</div></div></div></div>';    
        $(".fabric-block").append(html);
        $('.select2').select2();
    }
    
    function removeFabric(elem)
    {
        $(elem).closest('.fabric-fields').remove();
    }    
    
    function addStone()
    {
        var html = ' <div class="stone-fields"> <div class="row"> <div class="col-md-5"> <select name="stone_id[]" class="form-control select2"> <option value="">--Select Stone & Size--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stones']->value, 'stone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stone']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['stone']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['stone']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="stone_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeStone(this);">Remove</div></div></div></div>';    
        $(".stone-block").append(html);
        //$('.select2').select2();
    }
    
    function removeStone(elem)
    {
        $(elem).closest('.stone-fields').remove();
    }

function addHandwork() {
        var html = ' <div class="handwork-fields"> <div class="row"> <div class="col-md-5"> <select name="handwork_id[]" class="form-control select2"> <option value="">--Select Handwork Materials--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['handwork_materials']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="handwork_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeHandwork(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';
        $(".handwork-block").append(html);
        $('.select2').select2();
    }

    function removeHandwork(elem) {
        $(elem).closest('.handwork-fields').remove();
    }

    function addOthers() {
        var html = ' <div class="other-fields"> <div class="row"> <div class="col-md-5"> <select name="others_id[]" class="form-control select2"> <option value="">--Select Others--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="others_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeOthers(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';
        $(".other-block").append(html);
        $('.select2').select2();
    }

    function removeOthers(elem) {
        $(elem).closest('.other-fields').remove();
    }	 


    //$('.select2').select2();	
<?php echo '</script'; ?>
><?php }
}
