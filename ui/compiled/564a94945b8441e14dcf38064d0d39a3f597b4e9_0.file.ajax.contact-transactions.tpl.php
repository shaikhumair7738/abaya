<?php
/* Smarty version 3.1.30, created on 2017-07-31 16:44:09
  from "C:\wamp64\www\mbilling\ui\theme\ibilling\ajax.contact-transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f1101811d88_42924779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '564a94945b8441e14dcf38064d0d39a3f597b4e9' => 
    array (
      0 => 'C:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\ajax.contact-transactions.tpl',
      1 => 1474954870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f1101811d88_42924779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="no-more-tables">
    <table class="table table-bordered sys_table">
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tr']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
            <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>

                <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['dr'];?>
</td>

                <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>

                <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousand_separator_placement'];?>
"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['bal'] < 0) {?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['bal'];?>
</span></td>

                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    </div>
<?php }
}
