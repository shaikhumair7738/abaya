<?php
/* Smarty version 3.1.30, created on 2017-08-07 12:58:20
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\quote-edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598816947fdb00_77052594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd4f5c329c995128d3b3e34e77a377215bcdc69' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\quote-edit.tpl',
      1 => 1502090891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_598816947fdb00_77052594 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\wamp64\\www\\mbilling\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>
          <?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_alias'];?>

        </h5>
      </div>
      <div class="ibox-content" id="ibox_form">
        <form id="invform" method="post" parsley-validate novalidate>
          <div class="ibox-content">
            <div class="row">
              <div class="alert alert-danger" id="emsg">
                <span id="emsgbody"></span>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                  <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
" required>
                </div>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label for="cid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                    <div class="col-sm-8">
                      <select id="cid" name="cid" class="form-control" required>
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['userid'] == $_smarty_tpl->tpl_vars['cs']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                      </select>
                      <span class="help-block"><a href="#"
                        id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>
                    </div>
                  </div>
                  <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>

                  
                  <div class="form-group">
                    <label for="invoicenum"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cn"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="cn" name="cn" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
">
                      <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_number_help'];?>
</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail3"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="idate" name="idate" datepicker
                        data-date-format="yyyy-mm-dd" data-auto-close="true"
                        value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="edate"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edate" name="edate" datepicker
                        data-date-format="yyyy-mm-dd" data-auto-close="true"
                        value="<?php echo $_smarty_tpl->tpl_vars['d']->value['validuntil'];?>
">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="stage"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="stage" id="stage">
                      <option value="Draft" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Draft') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                      <option value="Delivered" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Delivered') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                      <option value="Accepted" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Accepted') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                      <option value="Lost" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Lost') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                      <option value="Dead" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Dead') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                      </select>
                    </div>
                  </div>
									<div class="form-group">
                    <label for="inputPassword3"
                      class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                    <div class="col-sm-8">
                      <textarea id="address" readonly class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <hr>
                <div class="form-group">
                  <label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label>
                  <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>
</textarea>
                  <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
</span>
                </div>
                <hr>
									<input type="hidden" id="discount_amount" name="discount_amount" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_value'];?>
">
									<input type="hidden" id="discount_type" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_type'];?>
">
              </div>
            </div>
            <div class="table-responsive m-t">
              <table class="table invoice-table" id="invoice_items">
                <thead>
                  <tr>
                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                    <th width="29%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                    <th width="18%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                    <th width="18%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                    <th width="15%">Tax</th>
                  </tr>
                </thead>
                <tbody><?php $_smarty_tpl->_assignInScope('idi', 0);
?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                  <tr>
                    <td><span id="codei_0" name="i_code[]"><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</span></td>
                    <td><select class="required form-control items" id="i_<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
" name="desc[]" required 												data-parsley-errors-container="#proerrors<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
">
													<option value="">Select Product</option>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['id'] == ($_smarty_tpl->tpl_vars['item']->value['itemid'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</option>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</select><span id="proerrors<?php echo $_smarty_tpl->tpl_vars['idi']->value++;?>
"></span></td>
                    <td><input type="number" class="form-control qty" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['qty'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['qty'];
}?>" name="qty[]"></td>
                    <td><input type="number" class="form-control item_price" name="amount[]" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['amount'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['amount'];
}?>"></td>
                    <td class="ltotal"><input type="number" class="form-control lvtotal" name="total[]" readonly="" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['total'];
$_prefixVariable1=ob_get_clean();
echo smarty_modifier_replace($_prefixVariable1,'.',',');
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['total'];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;
}?>"></td>
                    <td>
											<select class="form-control" name="taxed[]">
												<optgroup label="GST">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'tax');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
?> 
														<?php if ($_smarty_tpl->tpl_vars['tax']->value['taxtype'] == ("GST")) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tax']->value['id'] == ($_smarty_tpl->tpl_vars['item']->value['tax_id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['tax']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
 %</option>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
												</optgroup>
												<optgroup label="IGST">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'tax');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
?> 
														<?php if ($_smarty_tpl->tpl_vars['tax']->value['taxtype'] == ("IGST")) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tax']->value['id'] == ($_smarty_tpl->tpl_vars['item']->value['tax_id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['tax']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['tax']->value['rate'];?>
 %</option>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
												</optgroup>
											</select>
										</td>
                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									<input type="hidden" id="rowcount" value="<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
">
                </tbody>
              </table>
            </div>
            <!-- /table-responsive -->
            <button type="button" class="btn btn-primary" id="blank-add"><i
              class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
            
            <button type="button" class="btn btn-danger" id="item-remove"><i
              class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
            <table class="table invoice-total">
              <tbody>
                <tr>
                  <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                  <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>

                  </td>
                </tr>
                
                <tr>
                  <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 Amount:</strong></td>
                  <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxamt'];?>

                  </td>
                </tr>
                <tr>
                  <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
 :</strong></td>
                  <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>

                  </td>
                </tr>
              </tbody>
            </table>
            <hr>
            <div class="form-group">
              <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label>
              <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>
</textarea>
              <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
</span>
            </div>
            <div class="text-right">
              <input type="hidden" id="qid" name="qid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
              <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
              <input type="hidden" id="taxed_type" name="taxed_type" value="individual">
              <button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
              <button class="btn btn-primary" id="submit"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>

              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
<input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
<input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
<input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
<input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
<input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
