<?php
/* Smarty version 3.1.30, created on 2022-01-27 16:37:58
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/ajax.contact-edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61f27d0e2d4a53_54372408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0e5feccacb5b0c640e5cbd0f7846ac812dd166' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/ajax.contact-edit.tpl',
      1 => 1510832842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f27d0e2d4a53_54372408 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-horizontal" id="rform">

    <div class="form-group"><label class="col-lg-2 control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</label>

        <div class="col-lg-10"><input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</label>

        <div class="col-lg-10"><input type="text" id="company" name="company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="edit_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

        <div class="col-lg-10"><input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

        <div class="col-lg-10"><input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

        <div class="col-lg-10"><input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

        <div class="col-lg-10"><input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

        <div class="col-lg-10"><input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

        <div class="col-lg-10"><input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

        <div class="col-lg-10">

            <select name="country" id="country" class="form-control">
                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

            </select>

        </div>
    </div>


    <div class="form-group"><label class="col-lg-2 control-label" for="group"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </label>

        <div class="col-lg-10">

            <select class="form-control" name="group" id="group">
                <option value="0" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>

        </div>
    </div>

    <div class="form-group"><label class="col-md-2 control-label" for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>

        <div class="col-lg-10">
            <select id="currency" name="currency" class="form-control">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                            <?php if (($_smarty_tpl->tpl_vars['d']->value['currency']) == ($_smarty_tpl->tpl_vars['currency']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                    <?php
}
} else {
?>

                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_c']->value['home_currency'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </select>
        </div>
    </div>
		
		<div class="form-group"><label class="col-lg-2 control-label" for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
 </label>

        <div class="col-lg-10"><input type="text" id="gst" name="gst" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['gst_no'];?>
">

        </div>
    </div><div class="form-group"><label class="col-lg-2 control-label" for="zip">PAN </label>

        <div class="col-lg-10"><input type="text" id="pan" name="pan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['pan'];?>
">

        </div>
    </div>
		
    <div class="form-group"><label class="col-lg-2 control-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 </label>

        <div class="col-lg-10">
            <input type="password" id="password" name="password" class="form-control">

            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>

        </div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
?>
        <div class="form-group"><label class="col-lg-2 control-label" for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
            <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                <div class="col-lg-10">
                    <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                </div>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                <div class="col-lg-10">
                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                <div class="col-lg-10">
                    <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
" <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) == $_smarty_tpl->tpl_vars['fo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>


            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                <div class="col-lg-10">
                    <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"><?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?></textarea>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>

            <?php } else { ?>
            <?php }?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="form-group"><label class="col-lg-2 control-label" for="tags"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>

        <div class="col-lg-10">

            
            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['dtags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
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
        <div class="col-lg-offset-2 col-lg-10">

            <button class="btn btn-primary" type="submit" id="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>
    </div>
    <input type="hidden" name="fcid" id="fcid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
</form><?php }
}
