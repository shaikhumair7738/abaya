<?php
/* Smarty version 3.1.30, created on 2017-07-28 17:01:50
  from "F:\wamp64\www\mbilling\ui\theme\ibilling\settings_roles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597b20a67fb013_73646140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f525e2f346a7c4e8f1937a77c60dd2a93bb1db9b' => 
    array (
      0 => 'F:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\settings_roles.tpl',
      1 => 1474954870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_597b20a67fb013_73646140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</h5>

            </div>
            <div class="ibox-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_role/" class="btn btn-success" id="add_new_group"><i class="fa fa-plus"></i> New Role</a>
                <hr>



                <div class="table-responsive">
                    <table class="table table-bordered roles no-margin">
                        <thead>
                        <tr>
                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                            <tr data-id="1">
                                <td><?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
</td>
                                <td class="text-right">

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
/" class="btn btn-inverse btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid118"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
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

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
