<?php
/* Smarty version 3.1.30, created on 2017-06-30 14:43:11
  from "/home3/webtesti/public_html/mbilling/ui/theme/ibilling/ajax.contact-activity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59561627e4fed8_38939198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1bac7d6cefabc4c3258cb81ad19eaccbf96dbda' => 
    array (
      0 => '/home3/webtesti/public_html/mbilling/ui/theme/ibilling/ajax.contact-activity.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59561627e4fed8_38939198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="activity-post mb-xlg">
    <form method="get" action="/">
        <textarea name="message-text" id="msg" data-plugin-textarea-autosize="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Activity'];?>
..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 100px;"></textarea>
        <input type="hidden" id="activity-type" value="">

    </form>
    <div class="compose-box-footer">
        <ul class="compose-toolbar">
            <li class="clickable"><a href="#"><i class="fa fa-envelope-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-phone"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-send-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-life-ring"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-credit-card"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-location-arrow"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-reply"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-tasks"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-truck"></i></a></li>
        </ul>
        <ul class="compose-btn">
            <li>

                <a class="btn btn-primary btn-xs" id="acf-post"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Post'];?>
</a>
            </li>
        </ul>
    </div>
</section>
<div class="mt-lg"> </div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ac']->value, 'acs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['acs']->value) {
?>
    <div class="timeline-item">
        <div class="row">
            <div class="col-xs-3 date">
                <i class="<?php echo $_smarty_tpl->tpl_vars['acs']->value['icon'];?>
"></i>
                <span class="sdate"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],$_smarty_tpl->tpl_vars['acs']->value['stime']);?>
</span>
                <br>
                <small class="text-navy"><span class="mmnt"><?php echo $_smarty_tpl->tpl_vars['acs']->value['stime'];?>
</span></small>
            </div>
            <div class="col-xs-9 content no-top-border">
                <p class="m-b-xs"><strong><?php echo $_smarty_tpl->tpl_vars['acs']->value['oname'];?>
</strong></p>

                <p><?php echo $_smarty_tpl->tpl_vars['acs']->value['msg'];?>
</p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/activity-delete/<?php echo $_smarty_tpl->tpl_vars['acs']->value['cid'];?>
/<?php echo $_smarty_tpl->tpl_vars['acs']->value['id'];?>
" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a> </p>

            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
