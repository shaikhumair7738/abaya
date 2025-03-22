<?php
/* Smarty version 3.1.30, created on 2017-08-03 17:36:34
  from "F:\wamp64\www\mbilling\ui\theme\ibilling\add-ps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598311ca5893b0_11236805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c50d287d169a34518c72ba3d656bc8f193cd997' => 
    array (
      0 => 'F:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\add-ps.tpl',
      1 => 1501761986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_598311ca5893b0_11236805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>

                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>

                        <?php }?>
                    </h5>
                    <div class="ibox-tools">
                       <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Products'];?>
</a>

                       <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Service') {?>
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
					<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
					<div class="row">
					<div class="col-md-6 col-sm-12">
                        <div class="form-group">
						<label class="col-lg-3 control-label" for="category"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                            <div class="col-lg-9">
							<select id="category" name="category" class="form-control">
							   <option value="">---Select Category---</option>
							   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorylist']->value, 'clist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clist']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['clist']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clist']->value['name'];?>
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
						<label class="col-lg-3 control-label" for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <div class="col-lg-9"><input type="text" id="name" name="name" class="form-control" autocomplete="off">
                            </div>
                        </div>
						<div class="form-group">
						<label class="col-lg-3 control-label" for="height"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
</label>
                            <div class="col-lg-9"><input type="number" id="height" name="height" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
						<label class="col-lg-3 control-label" for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
</label>
                            <div class="col-lg-9"><input type="number" id="width" name="width" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
						<label class="col-lg-4 control-label" for="colorcoated">
						<input type="checkbox" id="colorcoated" name="colorcoated" value="off"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Color Coated'];?>
</label>
                            <div class="col-lg-8"><input type="text" id="color" name="color" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Color'];?>
" disabled>
                            </div>
                        </div>
                        <div class="form-group">
						<label class="col-lg-4 control-label" for="item_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bundle Number'];?>
</label>
                            <div class="col-lg-8"><input type="number" id="item_number" value="1" name="item_number" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
						<label class="col-lg-3 control-label" for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                            <div class="col-lg-9">
							<select id="company" name="company" class="form-control">
								<option value="">---Select Company---</option>
							   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companylist']->value, 'comlist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comlist']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['comlist']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['comlist']->value['company_name'];?>
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
						<label class="col-lg-3 control-label" for="weight"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weight'];?>
</label>
                            <div class="col-lg-9">
							<input type="number" id="weight" value="" name="weight" class="form-control" autocomplete="off">
                            </div>
                        </div>
						<div class="form-group">
						<label class="col-lg-3 control-label" for="thickness"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Thickness'];?>
</label>
                            <div class="col-lg-9"><input type="number" id="thickness" value="" name="thickness" class="form-control" autocomplete="off">
                            </div>
                        </div>
						<div class="form-group">
						<label class="col-lg-3 control-label" for="hsnsac"><?php echo $_smarty_tpl->tpl_vars['_L']->value['HSNSAC'];?>
</label>
                            <div class="col-lg-9"><input type="text" id="hsnsac" name="hsnsac" class="form-control" autocomplete="off">
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="sales_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
</label>
                            <div class="col-lg-9"><input type="number" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </div>
                    </div>
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
