<?php
/* Smarty version 3.1.30, created on 2017-06-13 17:20:53
  from "/home3/webtesti/public_html/mbilling/ui/theme/ibilling/modal_add_company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593fd19d0d1321_03757568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e940a3771c2bd5acf9d51bed8f92419663f3f6' => 
    array (
      0 => '/home3/webtesti/public_html/mbilling/ui/theme/ibilling/modal_add_company.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593fd19d0d1321_03757568 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>
        <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>

        <?php }?>
    </h3>
</div>
<div class="modal-body">

    <form class="form-horizontal" id="ib_modal_form">

        <div class="form-group"><label class="col-lg-4 control-label" for="company_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
<small class="red">*</small></label>

            <div class="col-lg-8"><input type="text" id="company_name" name="company_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['company_name'];?>
">

            </div>


        </div>


        <div class="form-group"><label class="col-lg-4 control-label" for="url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL'];?>
</label>

            <div class="col-lg-8"><input type="text" id="url" name="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
">

            </div>


        </div>


        <div class="form-group"><label class="col-lg-4 control-label" for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

            <div class="col-lg-8"><input type="text" id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
">

            </div>


        </div>


        <div class="form-group"><label class="col-lg-4 control-label" for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

            <div class="col-lg-8"><input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
">

            </div>


        </div>


        <div class="form-group"><label class="col-lg-4 control-label" for="logo_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo URL'];?>
</label>

            <div class="col-lg-8"><input type="text" id="logo_url" name="logo_url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['logo_url'];?>
">

            </div>


        </div>








        

            

            


        



        <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">
        <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">
    </form>

</div>
<div class="modal-footer">



    <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</button>
    <button class="btn btn-primary modal_submit" type="submit" id="modal_submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
</div><?php }
}
