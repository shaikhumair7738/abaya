<?php
/* Smarty version 3.1.30, created on 2023-10-24 19:31:19
  from "/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6537ce2f21d5f1_86405892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '548af4c9a2900e3b1b8d1fde2a8535b6f22b9086' => 
    array (
      0 => '/home2/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/footer.tpl',
      1 => 1692703335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537ce2f21d5f1_86405892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplfooter']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div style="display: none;" class="pop-outer text-right">
        <div class="pop-inner">
            <button class="close-popup btn btn-danger">X</button>
            <img src="" width="100%">
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $(document).ready(function (){
            $('body').on('click', '.img-popup', function (){
                $('.pop-outer img').attr("src", $(this).attr("data-img"));
                $(".pop-outer").fadeIn("slow");       
            });
            $(".close-popup").click(function (){
                $(".pop-outer").fadeOut("slow");
            });
        });
    <?php echo '</script'; ?>
>
    <style>
        .pop-outer {
            background-color: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .pop-inner {
            background-color: #fff;
            width: 500px;
            height: auto;
            padding: 10px;
            margin: 5% auto;
        }

        img.img-popup {
            cursor: pointer;
        }        
    </style>    <?php }
}
