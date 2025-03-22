<?php
/* Smarty version 3.1.30, created on 2017-10-11 17:26:12
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\account-add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de06dc767546_79441000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1a054575f4ea258a12265582db1a4ccbc3f312' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\account-add.tpl',
      1 => 1507722968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_59de06dc767546_79441000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-md-6">
    <div class="ibox float-e-margins">
			<div class="ibox-title">
					<h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_Company'];?>
</h5>
			</div>
			<div class="ibox-content">
				<form role="form" name="accadd" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-post">
						<div class="form-group">
								<label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
*</label>
								<input type="text" class="form-control" id="account" name="account">
						</div>
						<div class="form-group">
								<label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
								<input type="text" class="form-control" id="description" name="description">
						</div>
						<div class="form-group">
								<label for="balance"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial Balance'];?>
</label>
								<input type="text" class="form-control amount" id="balance" name="balance" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
						</div>
						
						<div class="form-group">
								<label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Person'];?>
</label>
								<input type="text" class="form-control" id="contact_person" name="contact_person">
						</div>
						<div class="form-group">
								<label for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
								<input type="text" class="form-control" id="contact_phone" name="contact_phone">
						</div>
						<div class="form-group">
								<label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
								<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
                <label for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
								<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type address as you want to print in invoice'];?>
</span>
								<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You can use html tag'];?>
</span>
						</div>
						<div class="form-group">
								<label class="control-label" for="pan"><?php echo $_smarty_tpl->tpl_vars['_L']->value['pan'];?>
</label>
								<input type="text" id="pan" name="pan" class="form-control">
						</div>
						<div class="form-group">
								<label class="control-label" for="gst"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
</label>
								<input type="text" id="gst" name="gst" class="form-control">
						</div>
						<div class="form-group">
									<label for="file">Upload Logo</label>
									<input type="file" id="file" name="file">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
				</form>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
