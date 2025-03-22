<?php
/* Smarty version 3.1.30, created on 2022-08-02 16:23:27
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/add-design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62e90227b7ff15_34758353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb6b17fd3338eb89bda29db38d40ac42d9568b4' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/add-design.tpl',
      1 => 1659437149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_62e90227b7ff15_34758353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
      .fabric-fields, .stone-fields, .handwork-fields, .other-fields
      {
          padding-bottom:5px;
      }
</style>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>
                  Add Design
               </h5>
               <div class="ibox-tools">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
manage/list-design" class="btn btn-primary btn-xs">List Designs</a>
               </div>
            </div>
            <div class="ibox-content" id="ibox_form">
               <div class="alert alert-danger" id="emsg">
                  <span id="emsgbody"></span>
               </div>
               <form class="form-horizontal" id="rform">				  	  
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="name">Design Name</label>
                     <div class="col-lg-10">
                        <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="sales_price">Silai price</label>
                     <div class="col-lg-10">
                        <input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "
                           data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-2 control-label" for="design_images">Design Images</label>
                     <div class="col-lg-10">
                        <input type="file" id="design_images" name="design_images[]" class="form-control" autocomplete="off" accept="image/*">
                     </div>
                  </div> 
                  <div class="form-group hide">
                     <label class="col-lg-2 control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                     <div class="col-lg-10">
                        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                     </div>
                  </div>

                  <div class="form-group">
                              <label class="col-lg-2 control-label" for="description">Product Type</label>
                              <div class="col-lg-10">
                                    <select name="cloth_id" class="form-control select2">
                                          <option value="">--Select Product Type--</option>
                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cloths']->value, 'cloth');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cloth']->value) {
?>
                                          <option value="<?php echo $_smarty_tpl->tpl_vars['cloth']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cloth']->value['name'];?>
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
                        <label class="col-lg-2 control-label" for="fabrics">Fabric</label>
                        <div class="col-lg-10">
                              <div class="fabric-block">
                              <div class="fabric-fields">
                                    <div class="row">
                                    <div class="col-md-5">
                                          <select name="fabric_id[]" class="form-control select2">
                                          <option value="">--Select Fabric--</option>
                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabrics']->value, 'fabric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fabric']->value) {
?>
                                          <option value="<?php echo $_smarty_tpl->tpl_vars['fabric']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fabric']->value['name'];?>
</option>
                                          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                          </select>
                                    </div>
                                    <div class="col-md-5">
                                          <input type="number" class="form-control" name="fabric_qty[]" placeholder="Enter Qty" required>
                                    </div>
                                    <div class="col-md-2 change">
                                          <div class="btn btn-block btn-warning bg_greens" onclick="addFabric();"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </div>
                                    </div>
                              </div>
                              </div>
                        </div>
                        </div> 

                        <div class="form-group">
                              <label class="col-lg-2 control-label" for="stone_id">Stone Color & Size</label>
                              <div class="col-lg-10">
                                    <div class="stone-block">
                                          <div class="stone-fields">
                                          <div class="row">
                                                <div class="col-md-5">
                                                      <select name="stone_id[]" class="form-control select2">
                                                      <option value="">--Select Stone Color & Size--</option>
                                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stones']->value, 'stone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stone']->value) {
?>
                                                      <option value="<?php echo $_smarty_tpl->tpl_vars['stone']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['stone']->value['name'];?>
</option>
                                                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                      </select>
                                                </div>
                                                <div class="col-md-5">
                                                      <input type="number" class="form-control" name="stone_qty[]" placeholder="Enter Qty" required>
                                                </div>
                                                <div class="col-md-2 change">
                                                      <div class="btn btn-block btn-warning bg_greens" onclick="addStone();"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                                </div>
                                          </div>
                                          </div>
                                    </div>
                              </div>
                              </div> 
                              
                              
                              <div class="form-group">
                                    <label class="col-lg-2 control-label" for="handwork_id">Handwork Materials</label>
                                    <div class="col-lg-10">
                                        <div class="handwork-block">
                                            <div class="handwork-fields">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <select name="handwork_id[]" class="form-control select2">
                                                            <option value="">--Select Handwork Materials--</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['handwork_materials']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="number" class="form-control" name="handwork_qty[]" placeholder="Enter Qty" required>
                                                    </div>
                                                    <div class="col-md-2 change">
                                                        <div class="btn btn-block btn-warning bg_greens" onclick="addHandwork();">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="handwork_id">Others</label>
                                    <div class="col-lg-10">
                                        <div class="other-block">
                                            <div class="other-fields">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <select name="others_id[]" class="form-control select2">
                                                            <option value="">--Select Others--</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="number" class="form-control" name="others_qty[]" placeholder="Enter Qty" required>
                                                    </div>
                                                    <div class="col-md-2 change">
                                                        <div class="btn btn-block btn-warning bg_greens" onclick="addOthers();">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                


                  <div class="form-group">
                     <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php echo '<script'; ?>
>
      $(document).ready(function () {

      $(".progress").hide();

      $("#emsg").hide();

      $("#submit").click(function (event) {
      $('#ibox_form').block({ message: null });
      event.preventDefault(); 
      var formData = new FormData($('#rform')[0]);
      var _url = $("#_url").val();
      $.ajax({
            url: _url + 'manage/add-post/',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                  setTimeout(function () {
                  var sbutton = $("#submit");
                  var _url = $("#_url").val();
                  if ($.isNumeric(data)) {
                        location.reload();
                  }
                  else {
                        $('#ibox_form').unblock();
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                  }
                  }, 2000);
            },
            error: function () {
                  alert("error in ajax form submission");
            }
      });

      //return false;
      });
      });


function addFabric()
{
    var html = '<div class="fabric-fields"> <div class="row"><div class="col-md-5"><select name="fabric_id[]" class="form-control select2"><option value="">--Select Fabric--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabrics']->value, 'fabric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fabric']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['fabric']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['fabric']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select></div><div class="col-md-5"> <input type="number" class="form-control" name="fabric_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeFabric(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';    
    $(".fabric-block").append(html);
    $('.select2').select2();
}

function removeFabric(elem)
{
    $(elem).closest('.fabric-fields').remove();
}    

function addStone()
{
    var html = ' <div class="stone-fields"> <div class="row"> <div class="col-md-5"> <select name="stone_id[]" class="form-control select2"> <option value="">--Select Stone & Size--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stones']->value, 'stone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stone']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['stone']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['stone']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="stone_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeStone(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';    
    $(".stone-block").append(html);
    $('.select2').select2();
}

function removeStone(elem)
{
    $(elem).closest('.stone-fields').remove();
} 

function addHandwork() {
        var html = ' <div class="handwork-fields"> <div class="row"> <div class="col-md-5"> <select name="handwork_id[]" class="form-control select2"> <option value="">--Select Handwork Materials--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['handwork_materials']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="handwork_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeHandwork(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';
        $(".handwork-block").append(html);
        $('.select2').select2();
    }

    function removeHandwork(elem) {
        $(elem).closest('.handwork-fields').remove();
    }

    function addOthers() {
        var html = ' <div class="other-fields"> <div class="row"> <div class="col-md-5"> <select name="others_id[]" class="form-control select2"> <option value="">--Select Others--</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select> </div><div class="col-md-5"> <input type="number" class="form-control" name="others_qty[]" placeholder="Enter Qty" required> </div><div class="col-md-2"><div class="btn btn-block btn-danger" onclick="removeOthers(this);"><i class="fa fa-minus" aria-hidden="true"></i></div></div></div></div>';
        $(".other-block").append(html);
        $('.select2').select2();
    }

    function removeOthers(elem) {
        $(elem).closest('.other-fields').remove();
    }     
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
      $('.select2').select2();
<?php echo '</script'; ?>
>

<?php }
}
