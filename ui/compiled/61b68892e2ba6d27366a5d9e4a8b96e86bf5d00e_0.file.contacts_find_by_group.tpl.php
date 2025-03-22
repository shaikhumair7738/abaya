<?php
/* Smarty version 3.1.30, created on 2020-01-06 10:37:30
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/contacts_find_by_group.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e12c092acd981_64238174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b68892e2ba6d27366a5d9e4a8b96e86bf5d00e' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/contacts_find_by_group.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5e12c092acd981_64238174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">



        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/group_email/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
/" class="btn btn-primary mb-md"><i class="fa fa-paper-plane"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>
</a>
                    <br>

                    <table class="table table-bordered table-hover sys_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>

                            <tr>

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['company'];?>
</td>

                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>


                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['phone'];?>

                                </td>
                                <td class="text-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
