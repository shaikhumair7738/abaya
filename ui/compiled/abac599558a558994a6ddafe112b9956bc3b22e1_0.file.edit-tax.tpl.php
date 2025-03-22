<?php
/* Smarty version 3.1.30, created on 2017-11-20 14:40:26
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/edit-tax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a129c026a2be1_64696757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abac599558a558994a6ddafe112b9956bc3b22e1' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/edit-tax.tpl',
      1 => 1501524420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5a129c026a2be1_64696757 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit TAX'];?>
</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit-tax-post/">
                    <div class="form-group">
                        <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                        <input type="text" class="form-control" id="taxname" name="taxname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
">
                    </div>
										<div class="form-group">
                        <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                        <select class="form-control" id="taxtype" name="taxtype" required>
													<option value="">Select Type</option>
													<option value="GST" <?php if (($_smarty_tpl->tpl_vars['d']->value['taxtype']) == ('GST')) {?>selected<?php }?>>GST</option>
													<option value="IGST" <?php if (($_smarty_tpl->tpl_vars['d']->value['taxtype']) == ('IGST')) {?>selected<?php }?>>IGST</option>
													
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taxrate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</label>
                        <input type="text" class="form-control amount" id="taxrate" name="taxrate" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2" value="<?php if ($_smarty_tpl->tpl_vars['ib_money_format_apply']->value) {
ob_start();
echo $_smarty_tpl->tpl_vars['d']->value['rate'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;
} else {
echo $_smarty_tpl->tpl_vars['d']->value['rate']+0;
}?>">
                    </div>

<input type="hidden" id="tid" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
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
?>

<?php }
}
