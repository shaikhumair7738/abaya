<?php
/* Smarty version 3.1.30, created on 2017-07-28 17:17:58
  from "F:\wamp64\www\mbilling\ui\theme\ibilling\appearance_user_interface.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597b246e029413_35566588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04342b6bac939d2cdcf72183f21dea40667ff012' => 
    array (
      0 => 'F:\\wamp64\\www\\mbilling\\ui\\theme\\ibilling\\appearance_user_interface.tpl',
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
function content_597b246e029413_35566588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins" id="ui_settings">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</h5>


            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <td width="80%"><label for="config_animate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Page Loading Animation'];?>
 </label></td>
                        <td><input type="checkbox" <?php if (get_option('animate') == '1') {?>checked<?php }?> data-toggle="toggle"
                                   data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_animate">
                        </td>
                    </tr>

                    <tr>
                        <td width="80%"><label for="config_rtl"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable RTL'];?>
 </label></td>
                        <td><input type="checkbox" <?php if (get_option('rtl') == '1') {?>checked<?php }?> data-toggle="toggle"
                                   data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_rtl"></td>
                    </tr>


                    <tr>
                        <td width="80%"><label for="config_mininav"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fold Sidebar Default'];?>
 </label></td>
                        <td><input type="checkbox" <?php if (get_option('mininav') == '1') {?>checked<?php }?> data-toggle="toggle"
                                   data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_mininav">
                        </td>
                    </tr>

                    <tr>
                        <td width="80%"><label for="config_hide_footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hide Footer Copyright'];?>
 </label></td>
                        <td><input type="checkbox" <?php if (get_option('hide_footer') == '1') {?>checked<?php }?>
                                   data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                   id="config_hide_footer"></td>
                    </tr>


                    </tbody>
                </table>

                <hr>

                <div class="form-group">
                    <label for="contentAnimation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Content Animation'];?>
</label>
                    <select name="contentAnimation" id="contentAnimation" class="form-control">

                        <option value="" <?php if ($_smarty_tpl->tpl_vars['_c']->value['contentAnimation'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>

                        <?php echo $_smarty_tpl->tpl_vars['ca_options']->value;?>


                    </select>
                </div>


            </div>
        </div>
    </div>



</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
