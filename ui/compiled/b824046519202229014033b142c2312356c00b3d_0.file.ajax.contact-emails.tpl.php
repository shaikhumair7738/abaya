<?php
/* Smarty version 3.1.30, created on 2017-06-14 21:01:01
  from "/home3/webtesti/public_html/mbilling/ui/theme/ibilling/ajax.contact-emails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594156b5d64d12_90192010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b824046519202229014033b142c2312356c00b3d' => 
    array (
      0 => '/home3/webtesti/public_html/mbilling/ui/theme/ibilling/ajax.contact-emails.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594156b5d64d12_90192010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="mail-box">


    <div class="mail-body">

        <form class="form-horizontal" method="get">
            <div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
:</label>

                <div class="col-sm-10"><input type="text" id="toemail" name="toemail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
" disabled></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
:</label>

                <div class="col-sm-10"><input type="text" id="subject" name="subject" class="form-control" value=""></div>
            </div>
        </form>

    </div>

    <div class="mail-text">

        <textarea id="content"  class="form-control sysedit" name="content"></textarea>

        <div class="clearfix"></div>
    </div>
    <div class="mail-body text-right">

        <button type="submit" id="send_email"  class="btn btn-sm btn-primary"><i class="fa fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>
    </div>
    <div class="clearfix"></div>



</div>

<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>


        <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>

    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['e']->value, 'is');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['is']->value) {
?>
        <tr>


            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['subject'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['date'];?>
</td>

        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </tbody>
</table><?php }
}
