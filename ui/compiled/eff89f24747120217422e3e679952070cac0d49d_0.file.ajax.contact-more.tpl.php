<?php
/* Smarty version 3.1.30, created on 2022-01-27 16:38:03
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/ajax.contact-more.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61f27d13e5fb98_63549284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff89f24747120217422e3e679952070cac0d49d' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/ajax.contact-more.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f27d13e5fb98_63549284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="croppic"></div>

<button type="button" id="cropContainerHeaderButton" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</button>
<button type="button" id="opt_gravatar" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Use Gravatar'];?>
</button>
<button type="button" id="no_image" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</button>
<div class="mt-lg"> </div>
<form class="form-horizontal">

    <div class="form-group"><label class="col-lg-2 control-label" for="picture"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Picture'];?>
</label>

        <div class="col-lg-10"><input type="text" id="picture" readonly name="picture" class="form-control picture"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
" autocomplete="off">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="facebook"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Facebook Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="facebook" name="facebook" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['facebook'];?>
" autocomplete="off">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="google"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Google Plus Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="google" name="google" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['google'];?>
" autocomplete="off">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="linkedin"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Linkedin Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="linkedin" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['linkedin'];?>
" class="form-control" autocomplete="off">

        </div>
    </div>


    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">

            <button class="btn btn-primary" type="submit" id="more_submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>
    </div>
</form><?php }
}
