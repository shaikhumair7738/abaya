<?php
/* Smarty version 3.1.30, created on 2022-05-25 12:42:19
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/account-add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_628dd6d37fd2a1_45651375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb39ed1c96cc233d08c2c008975fe8eb467cdb15' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/account-add.tpl',
      1 => 1519797966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_628dd6d37fd2a1_45651375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
$(document).on('change','#file,#stamp' , function(){ CheckFileName(); });	
function CheckFileName() {     
   var fileName = document.getElementById("file").value;		
	 var ext=fileName.split(".")[1].toUpperCase();  
	 if (fileName == "") {           
	 alert("Browse to upload a valid Image File");         
   return false;      
	 }     
   else if (ext == "PNG" || ext == "JPEG" || ext == "JPG" || ext == "GIF")          
	 return true;      
	 else {          
	 alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with png, jpeg, gif extensions");						document.getElementById("file").value=null;      
	 return false;     
   }   
	 return true;  
	 }
	 <?php echo '</script'; ?>
>
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
								<label class="control-label" for="bank_name">Bank Name</label>
								<input type="text" id="bank_name" name="bank_name" class="form-control">
						</div>
						<div class="form-group">
								<label class="control-label" for="account_number">Account Number</label>
								<input type="text" id="account_number" name="account_number" class="form-control">
						</div>
						<div class="form-group">
								<label class="control-label" for="account_type">Account Type</label>
								<input type="text" id="account_type" name="account_type" class="form-control">
						</div>
						<div class="form-group">
								<label class="control-label" for="ifsc_code">IFSC Code</label>
								<input type="text" id="ifsc_code" name="ifsc_code" class="form-control">
						</div>
						<div class="form-group">
									<label for="file">Upload Logo</label>
									<input type="file" id="file" name="file" accept="image/x-png,image/gif,image/jpeg" onchange="CheckFileName();">
						</div>
						<!--<div class="form-group">
									<label for="file">Upload Stamp</label>
									<input type="file" id="stamp" name="stamp" accept="image/x-png,image/gif,image/jpeg" onchange="CheckFileName();">
						</div>-->
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
