<?php
/* Smarty version 3.1.30, created on 2017-10-11 17:20:55
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\account-edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de059f04ebd7_71872341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2ffdf1a29458578d79d1c7b60175c94f2b696d2' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\account-edit.tpl',
      1 => 1507722594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_59de059f04ebd7_71872341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="widget-1 col-md-6 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Account'];?>
</h3>
      </div>
      <div class="panel-body">
        <form role="form" name="accadd" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit-post">
					<div class="ibox-content">
						<?php if ($_smarty_tpl->tpl_vars['d']->value->company_logo != '') {?>
						<img class="logo"  src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/<?php echo $_smarty_tpl->tpl_vars['d']->value->company_logo;?>
" alt="Logo">
							<br><br>
						<?php }?>	
						<div class="form-group">
								<label for="file">Upload New Logo</label>
								<input type="file" id="file" name="file">
						</div>
					</div>
					<div class="form-group">
							<label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
*</label>
							<input type="text" class="form-control" id="account" name="account" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
">
					</div>
					<div class="form-group">
							<label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
							<input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->description;?>
">
					</div>
					<div class="form-group">
							<label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Person'];?>
</label>
							<input type="text" class="form-control" id="contact_person" name="contact_person" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_person;?>
">
					</div>
					<div class="form-group">
							<label for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
							<input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_phone;?>
">
					</div>
					<div class="form-group">
							<label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->email;?>
">
					</div>
					<div class="form-group">
							<label for="caddress"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
							<textarea class="form-control" id="address" name="address" rows="3"><?php echo $_smarty_tpl->tpl_vars['d']->value->address;?>
</textarea>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type address as you want to print in invoice'];?>
.</span>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You can use html tag'];?>
</span>
					</div>
					<div class="form-group">
						<label class="control-label" for="pan"><?php echo $_smarty_tpl->tpl_vars['_L']->value['pan'];?>
</label>
						<input type="text" id="pan" name="pan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->pan;?>
">
					</div>
					<div class="form-group">
						<label class="control-label" for="gst"><?php echo $_smarty_tpl->tpl_vars['_L']->value['gst'];?>
</label>
						<input type="text" id="gst" name="gst" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->gstin;?>
">
					</div>
						
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
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
