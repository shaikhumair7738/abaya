<?php
/* Smarty version 3.1.30, created on 2017-08-08 17:38:48
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\list-contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5989a9d043fbb2_06549375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cff36a6b3173d500759835112bf61859d7fa88c' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\list-contacts.tpl',
      1 => 1502194104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5989a9d043fbb2_06549375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php if ($_smarty_tpl->tpl_vars['_c']->value['contact_set_view_mode'] == 'search') {?>

    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                        <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover sys_table footable"  data-filter="#foo_filter" data-page-size="50">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                                <th class="text-right" data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                            <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['email']));?>
?s=32" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/theme/ibilling/img/contact_blank_32.png" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                        <?php } else { ?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-thumbnail img-responsive" style="max-height: 32px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
">
                                        <?php }?>
                                    </td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['company'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['phone'];?>
</td>
                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                        <a href="delete/crm-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
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
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination">
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <?php } else { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search by Name'];?>
..."/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/" class="btn btn-success btn-block"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Contact'];?>
</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter by Tags'];?>
</h3>
                    <ul class="tag-list" style="padding: 0">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/<?php echo $_smarty_tpl->tpl_vars['ts']->value['text'];?>
/"><i class="fa fa-tag"></i> <?php echo $_smarty_tpl->tpl_vars['ts']->value['text'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if (($_smarty_tpl->tpl_vars['_c']->value['contact_set_view_mode']) == 'tbl') {?>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover sys_table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
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
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                            <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['email']));?>
?s=32" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/theme/ibilling/img/contact_blank_32.png" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                        <?php } else { ?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-thumbnail img-responsive" style="max-height: 32px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
">
                                        <?php }?>

                                    </td>

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

                                        <a href="delete/crm-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
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


        <?php } else { ?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                <div class="col-md-3 sdiv">
                    <!-- CONTACT ITEM -->
                    <div class="panel panel-default">
                        <div class="panel-body profile">
                            <div class="profile-image">
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['email']));?>
?s=200" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/profile-icon.png" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
">
                                <?php }?>
                            </div>
                            <div class="profile-data">

                                <div class="profile-data-name"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</div>

                            </div>

                        </div>
                        <div class="panel-body">
                            <div class="contact-info">

                                <p><small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</small><br/><?php if ($_smarty_tpl->tpl_vars['ds']->value['email'] != '') {
echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['n_a'];?>
 <?php }?></p>

                                <p>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                    <a href="delete/crm-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <?php }?>

    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

        </div>
    </div>


<?php }?>



<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
