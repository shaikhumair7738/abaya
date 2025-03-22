<?php
/* Smarty version 3.1.30, created on 2017-10-23 11:24:16
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/add-tax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed840824e2c9_07499887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81c48da4eb0671ce2b11fd5f6de81b47115a7be1' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/add-tax.tpl',
      1 => 1501524408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_59ed840824e2c9_07499887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add TAX'];?>
</h5>
            </div>
            <div class="ibox-content">
                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax-post/">
                    <div class="form-group">
                        <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                        <input type="text" class="form-control" id="taxname" name="taxname">
                    </div>
										<div class="form-group">
                        <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                        <select class="form-control" id="taxtype" name="taxtype" required>
													<option value="">Select Type</option>
													<option value="GST">GST</option>
													<option value="IGST">IGST</option>
													
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taxrate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</label>
                        <input type="text" class="form-control" id="taxrate" name="taxrate">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
