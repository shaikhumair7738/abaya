<?php
/* Smarty version 3.1.30, created on 2017-06-13 07:27:27
  from "/home3/webtesti/public_html/mbilling/ui/theme/ibilling/update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593fcc1f99ff70_46147974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f057b79e6f8fb4c9fa7ce031a8d9e5f433826733' => 
    array (
      0 => '/home3/webtesti/public_html/mbilling/ui/theme/ibilling/update.tpl',
      1 => 1474971070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593fcc1f99ff70_46147974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>iBilling Update</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl'] == '1') {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>
    <style type="text/css">
        body {

            background-color: #FAFAFA;
            overflow-x: visible;
        }
        .paper {
            margin: 50px auto;

            border: 2px solid #DDD;
            background-color: #FFF;
            position: relative;
            width: 600px;
        }
    </style>
</head>

<body class="fixed-nav">

<div class="paper">
    <section class="panel">
        <div class="panel-body">
            <div class="invoice">
                <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>
                <header class="clearfix">
                    <div class="row">
                        <div class="col-sm-8 mt-md">

                            <h4 class="h4 m-none text-dark text-bold">iBilling Update</h4>
                            <p><span  id="countmsg">Please Wait...</span> Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard/">Click Here.</a> </p>
                        </div>
                        <div class="col-sm-4 text-right mt-md mb-md">
                            <h4>Latest Build: <?php echo $_smarty_tpl->tpl_vars['latest_build']->value;?>
</h4>

                        </div>
                    </div>
                </header>

                <div class="bill-info">
                    <div class="row">

                        <div class="col-md-12">
                            <textarea class="form-control" id="resp" rows="10"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</textarea>
                        </div>
                    </div>
                </div>



            </div>




        </div>
    </section>

</div>

<!-- Mainly scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var count = 20;
        var countdown = setInterval(function(){
            $("#countmsg").html("Redirecting in " + count + " seconds!");

            if (count == 0) {
                clearInterval(countdown);
                window.open('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard/', "_self");

            }
            count--;
        }, 1000);
    });
<?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        <?php if (isset($_smarty_tpl->tpl_vars['xjq']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

    });

<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
