<?php
/* Smarty version 3.1.30, created on 2022-05-05 17:10:57
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/pl-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6273b7c9e2c545_92778920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fe082e2e0a8fc40bdde87f0d82424bece3eabc' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/pl-list.tpl',
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
function content_6273b7c9e2c545_92778920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default" id="uploading_inside">
                <div class="panel-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugin_upload/" class="dropzone" id="upload_container">

                        <div class="dz-message">
                           <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_drop_help'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_upload_help'];?>
</span>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

<div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/get_plugin/">
            <div class="form-group">
                <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Install from URL'];?>
: </label>
                <input type="text" class="form-control" id="pl_url" name="pl_url" placeholder="Enter Plugin URL...">
            </div>




            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Install</button>
        </form>


    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</h5>

            </div>
            <div class="ibox-content">

                <div class="project-list mt-md">
                    <div id="progressbar">
                    </div>

                    <div id="application_ajaxrender"><table class="table table-hover">
                            <tbody>
                            <?php echo $_smarty_tpl->tpl_vars['pl_html']->value;?>

                            </tbody>
                        </table></div>


                </div>
            </div>
        </div>
    </div>
</div>


<input type="hidden" id="_msg_unzipping" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unzipping'];?>
 ...">
<input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
