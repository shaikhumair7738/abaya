<?php
/* Smarty version 3.1.30, created on 2019-09-26 16:54:27
  from "/home4/makentin/public_html/bill/ui/theme/ibilling/list-tax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d8c9febec34f8_31660818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '616992eb92bbf08fc38f2355c5ff9d0e79b6ff4c' => 
    array (
      0 => '/home4/makentin/public_html/bill/ui/theme/ibilling/list-tax.tpl',
      1 => 1501517216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5d8c9febec34f8_31660818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
 </h5>
    </div>
    <div class="ibox-content">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax/" id="item_add" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Tax'];?>
 </a>
      <div class="table-responsive">
				<table class="table table-bordered table-hover sys_table">
            <thead>
            <tr>
                <th width="70%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax Rate'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
								<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                <tr id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['rate']+0;?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Per'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['taxtype'];?>
 </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit-tax/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs edit"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
 </a>
                        <button type="button" id="t<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-xs cdelete"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </button>
                    </td>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </tbody>
        </table>
<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

			</div>
    </div>
</div>
<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
