<?php
/* Smarty version 3.1.30, created on 2022-05-05 17:51:27
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/email-templates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6273c147d4b7a4_37189125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208d84961f86b62fb9be9f3874b3490ed4f4f886' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/email-templates.tpl',
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
function content_6273c147d4b7a4_37189125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col-lg-12 animated fadeInRight">
        <div class="mail-box-header">


            <h2>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>

            </h2>

        </div>
        <div class="mail-box" id="application_ajaxrender">

            <table class="table table-hover table-mail">
                <tbody>


              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                  <tr class="read">

                      <td><a  class="ve" id="f<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['tplname']);?>
</a>  </td>
                      <td><a  class="ve" id="s<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a></td>
                      <td class=""></td>
                      <td class="text-right">
                              <?php if ($_smarty_tpl->tpl_vars['ds']->value['send'] == 'Yes') {?>
                          <span class="label label-success pull-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
 </span>
                                  <?php } else { ?>
                                  <span class="label label-danger pull-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
 </span>
                              <?php }?>

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
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
