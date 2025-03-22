<?php
/* Smarty version 3.1.30, created on 2019-07-19 17:40:49
  from "/home4/arifkhan/public_html/bill/ui/theme/ibilling/domain-n-hosting-edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d31b34931c330_19620217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59d4c11ea0b5e0874c61b9525b4a55b3d9449df' => 
    array (
      0 => '/home4/arifkhan/public_html/bill/ui/theme/ibilling/domain-n-hosting-edit.tpl',
      1 => 1563538243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5d31b34931c330_19620217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-md-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Add Domain and Hosting</h5>
        </div>
        <div class="ibox-content" id="ibox_form">
          <div class="alert alert-danger" id="emsg">
            <span id="emsgbody"></span>
          </div>
          <form class="form-horizontal" id="rform">
            <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" >
						<div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                  <div class="col-lg-8">
                    <select id="cid" name="cid" class="form-control" required>
                      <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['account'] == $_smarty_tpl->tpl_vars['cs']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 </option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                  </div>
                </div>
							</div>
							<div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="service"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</label>
                  <div class="col-lg-8">
                    <select id="rental_service" name="service" class="form-control" required>
                      <option value="">Select Services</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['service'] == $_smarty_tpl->tpl_vars['service']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                  </div>
                </div>
							</div>
							<div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="domain_name">Domain Name<small class="red">*</small> </label>
                  <div class="col-lg-8"><input type="text" id="domain_name" name="domain_name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['domain_name'];?>
" class="form-control" autofocus>
                  </div>
                </div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['d']->value['service'] == '1' || $_smarty_tpl->tpl_vars['d']->value['service'] == '2' || $_smarty_tpl->tpl_vars['d']->value['service'] == '3') {?>
							<div class="col-md-6 col-sm-12" id="ren_domain_plan">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="plan">Select Plan</label>
                  <div class="col-lg-8">
										<select id="plan" name="domain_host_plan" class="form-control" required>
                      <option value="">Plan & Packages</option>
                      <option value="1" <?php if ($_smarty_tpl->tpl_vars['d']->value['d_h_plan_yearly'] == 1) {?> selected <?php }?>>1 Year</option>
											<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 2;
if ($_smarty_tpl->tpl_vars['i']->value <= 10) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['d_h_plan_yearly'] == $_smarty_tpl->tpl_vars['i']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 Years</option>
											<?php }
}
?>

                    </select>
                  </div>
                </div>
							</div>
							<?php } else { ?>
							<div class="col-md-6 col-sm-12" id="ren_service_plan">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="service_plan">Select Plan</label>
                  <div class="col-lg-8">
										<select id="service_plan" name="service_plan" class="form-control" required>
                      <option value="">Plan & Packages</option>
                      <option value="12" <?php if ($_smarty_tpl->tpl_vars['d']->value['service_plan_monthly'] == 12) {?> selected <?php }?>>1 Year</option>
                      <option value="6" <?php if ($_smarty_tpl->tpl_vars['d']->value['service_plan_monthly'] == 6) {?> selected <?php }?>>6 Months</option>
                      <option value="1" <?php if ($_smarty_tpl->tpl_vars['d']->value['service_plan_monthly'] == 1) {?> selected <?php }?>>1 Month</option>
                    </select>
                  </div>
                </div>
							</div>
							<?php }?>
							<div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="amount">Amount</label>
                  <div class="col-lg-8"><input type="number" id="amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['amount'];?>
" class="form-control">
                  </div>
                </div>
							</div>
							<div class="col-md-6 col-sm-12" id="ren_service_registered">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="register_date">Registration Date</label>
                  <div class="col-lg-8"><input type="text" class="form-control" id="register_date" name="register_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['register_date'];?>
">
                  </div>
                </div>
							</div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-md-offset-2 col-lg-10">
                    <button class="md-btn md-btn-primary waves-effect waves-light" type="edit_submit_domain" id="edit_submit_domain"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button> | <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Cancel'];?>
</a>
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
<input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
">
<input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
">
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
