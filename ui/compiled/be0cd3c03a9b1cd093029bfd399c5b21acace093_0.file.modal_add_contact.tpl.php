<?php
/* Smarty version 3.1.30, created on 2017-07-28 17:28:51
  from "F:\wamp64\www\mbilling\ui\theme\ibilling\modal_add_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597b26fb422765_12485865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0cd3c03a9b1cd093029bfd399c5b21acace093' => 
    array (
      0 => 'F:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\modal_add_contact.tpl',
      1 => 1499256940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b26fb422765_12485865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Contact'];?>
</h3>
</div>
<div class="modal-body">

    <form class="form-horizontal" id="rform">

        <div class="form-group"><label class="col-lg-2 control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>

            <div class="col-lg-10"><input type="text" id="account" name="account" class="form-control" >

            </div>
        </div>

        <div class="form-group"><label class="col-lg-2 control-label" for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</label>

            <div class="col-lg-10"><input type="text" id="company" name="company" class="form-control">

            </div>
        </div>
        
        <div class="form-group"><label class="col-lg-2 control-label" for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

            <div class="col-lg-10"><input type="text" id="email" name="email" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

            <div class="col-lg-10"><input type="text" id="phone" name="phone" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="m_address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

            <div class="col-lg-10"><input type="text" id="m_address" name="m_address" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

            <div class="col-lg-10"><input type="text" id="city" name="city" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

            <div class="col-lg-10"><input type="text" id="state" name="state" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

            <div class="col-lg-10"><input type="text" id="zip" name="zip" class="form-control" >

            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

            <div class="col-lg-10">

                <select name="country" class="country" id="country" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                </select>

            </div>
        </div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="gst"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
</label>
					<div class="col-lg-10">
						<input type="text" id="gst" name="gst" class="form-control">
					</div>
				</div>

    </form>

</div>
<div class="modal-footer">

    <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</button>
    <button class="btn btn-primary contact_submit" type="submit" id="contact_submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</button>
</div><?php }
}
