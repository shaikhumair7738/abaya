<?php
/* Smarty version 3.1.30, created on 2022-01-19 18:12:12
  from "/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/change-password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61e80724d3f488_61853619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f0bd2e1be915235b83a51b7119d424f8b3344b' => 
    array (
      0 => '/home1/makinfotech/bills.makinfotech.in/ui/theme/ibilling/change-password.tpl',
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
function content_61e80724d3f488_61853619 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password-post">
                    <div class="form-group">
                        <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Current Password'];?>
</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="npass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Password'];?>
</label>
                        <input type="password" class="form-control" id="npass" name="npass">
                    </div>
                    <div class="form-group">
                        <label for="cnpass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm New Password'];?>
</label>
                        <input type="password" class="form-control" id="cnpass" name="cnpass">
                    </div>




                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>

            </div>
        </div>



    </div>



</div>




<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
