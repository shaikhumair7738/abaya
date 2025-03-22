<?php
/* Smarty version 3.1.30, created on 2022-06-09 18:27:38
  from "/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62a1ee424850f0_47161975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '136a42a62848851f35a3e0f8e91228bdd0e12334' => 
    array (
      0 => '/home3/mbillsin/public_html/alabaya/ui/theme/ibilling/sections/footer.tpl',
      1 => 1654779451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1ee424850f0_47161975 (Smarty_Internal_Template $_smarty_tpl) {
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
