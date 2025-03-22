<?php
/* Smarty version 3.1.30, created on 2023-10-24 21:36:10
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/list-design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537eb7231dd75_99587600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7015887bbf033da4cc3a4db61c74427d5c8f0411' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/manage/list-design.tpl',
      1 => 1693827397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6537eb7231dd75_99587600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>List Design</h5>
                <div class="ibox-tools">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
manage/add-design" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus"></i> Add Design</a>
                </div>
            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="project-list mt-md">
                    <div id="progressbar">
                    </div>

                    <div id="application_ajaxrender1">
                    <table id="" class="display datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Silai Price</th>    
                                <th>Image</th>
                                <th>QRCode</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php $_smarty_tpl->_assignInScope('x', 1);
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                                <td><?php echo $_smarty_tpl->tpl_vars['x']->value++;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['price'];?>
</td>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('images', json_decode($_smarty_tpl->tpl_vars['ds']->value['image'],true));
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                       <?php $_smarty_tpl->_assignInScope('thumb', make_thumb($_smarty_tpl->tpl_vars['img']->value,'storage/thumb','50'));
?>
                                        <!--<img data-img="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" width="50px" height="50px" class="img-popup">-->
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">View</a>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </td>

                                <td>
                                    <?php $_smarty_tpl->_assignInScope('imagetext', (('').("D-")).($_smarty_tpl->tpl_vars['ds']->value['id']));
?>
                                    <?php $_smarty_tpl->_assignInScope('qrimage', qrcode_generate($_smarty_tpl->tpl_vars['imagetext']->value));
?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
qrcode/fetch&search=<?php echo basename($_smarty_tpl->tpl_vars['qrimage']->value);?>
">View</a>
                                    
                                </td>

                                <!--<td>
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['description'] == '') {?>
                                    -
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>

                                <?php }?>                                     
                                </td>-->
                                <td class="project-actions">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
manage/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-success btn-xs"><i class="fa fa-bar-chart"></i> History</a>
                                    <a href="#" class="btn btn-primary btn-xs cedit" id="e<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="pid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> Delete </a>
                                </td>                                    
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
    
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.datatable').DataTable();
    });

    $('#search1').click(function(){
        const url = $('#_url').val();
        const prodyct_type = $('select[name="product_type"]').val();
        window.location.href = url + "ps/p-list/&product_type=" + prodyct_type;
    });
<?php echo '</script'; ?>
>

<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
"> <?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
