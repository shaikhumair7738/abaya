<div id="ajax-modal" class="modal container fade-scale" tabindex="-1" style="display: none;"></div>
</div>

{if $tpl_footer}
    {if $_c['hide_footer']}

        {else}
        <div class="footer">
            <div>
                <strong>{$_L['Copyright']}</strong> &copy; {$_c['CompanyName']}
            </div>
        </div>
    {/if}
{/if}

</div>

<div id="right-sidebar">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-3">

            <li class="active"><a data-toggle="tab" href="#tab-1">
                    {$_L['Notes']}
                </a></li>
            {*<li><a data-toggle="tab" href="#tab-2">*}
                    {*{$_L['Team']}*}
                {*</a></li>*}
            <li class=""><a data-toggle="tab" href="#tab-3">
                    <i class="fa fa-gear"></i>
                </a></li>
        </ul>

        <div class="tab-content">


            <div id="tab-1" class="tab-pane active">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-file-text-o"></i> {$_L['Quick Notes']}</h3>

                </div>

                <div style="padding: 10px">

                    <form class="form-horizontal push-10-t push-10" method="post" onsubmit="return false;">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="ib_admin_notes" name="ib_admin_notes" rows="10">{$user->notes}</textarea>
                                    <label for="ib_admin_notes">{$_L['Whats on your mind']}</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-success" type="submit" id="ib_admin_notes_save"><i class="fa fa-check"></i> {$_L['Save']}</button>
                            </div>
                        </div>
                    </form>
                    </div>




            </div>

            {*<div id="tab-2" class="tab-pane">*}

                {*<div class="sidebar-title">*}
                    {*<h3> <i class="fa fa-cube"></i> Latest projects</h3>*}
                    {*<small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>*}
                {*</div>*}

                {*<ul class="sidebar-list">*}
                    {**}
                    {*<li>*}
                        {*<a href="#">*}
                            {*<div class="small pull-right m-t-xs">x</div>*}
                            {*<h4>x</h4>*}
                            {*x*}

                            {*<div class="small">x</div>*}
                            {*<div class="progress progress-mini">*}
                                {*<div style="width: 29%;" class="progress-bar progress-bar-warning"></div>*}
                            {*</div>*}
                            {*<div class="small text-muted m-t-xs">x</div>*}
                        {*</a>*}
                    {*</li>*}

                {*</ul>*}

            {*</div>*}

            <div id="tab-3" class="tab-pane">

                <div class="sidebar-title">
                    <h3><i class="fa fa-gears"></i> {$_L['Settings']}</h3>

                </div>

                <div class="setings-item">
                    <h4>Theme Color</h4>

                    <ul id="ib_theme_color" class="ib_theme_color">

                        <li><a href="{$_url}settings/set_color/light/"><span class="light"></span></a></li>
                        <li><a href="{$_url}settings/set_color/blue/"><span class="blue"></span></a></li>
                        <li><a href="{$_url}settings/set_color/dark/"><span class="dark"></span></a></li>
                    </ul>


                </div>
                <div class="setings-item">
                    <span>
                        {$_L['Fold Sidebar Default']}
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="r_fold_sidebar" {if get_option('mininav') eq '1'}checked{/if} class="onoffswitch-checkbox" id="r_fold_sidebar">
                            <label class="onoffswitch-label" for="r_fold_sidebar">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



</div>

</div>
</section>
<!-- BEGIN PRELOADER -->
{if ($_c['animate']) eq '1'}
    <div class="loader-overlay">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
{/if}
<input type="hidden" id="_url" name="_url" value="{$_url}">
<input type="hidden" id="_df" name="_df" value="{$_c['df']}">
<input type="hidden" id="_lan" name="_lan" value="{$_c['language']}">
<!-- END PRELOADER -->
<!-- Mainly scripts -->

<script>
    var _L = [];


    var base_url = '{$base_url}';

    {if ($_c['animate']) eq '1'}
    var config_animate = 'Yes';
    {else}
    var config_animate = 'No';
    {/if}
    {$jsvar}
</script>
<script src="{$_theme}/js/bootstrap.min.js"></script>
<script src="{$_theme}/js/jquery.metisMenu.js"></script>
<script src="{$_theme}/js/jquery.slimscroll.min.js"></script>

{if $_c['language'] neq 'en-us'}

    <script src="{$app_url}ui/lib/moment/moment-with-locales.min.js"></script>

    <script>
        moment.locale('{$_c['momentLocale']}');
    </script>

    {else}

    <script src="{$app_url}ui/lib/moment/moment.min.js"></script>

{/if}


<script src="{$app_url}ui/lib/blockui.js"></script>
<script src="{$app_url}ui/lib/app.js"></script>
<script src="{$app_url}ui/lib/toggle/bootstrap-toggle.min.js"></script>
{if ($_c['animate']) eq '1'}
    <script src="{$_theme}/js/pace.min.js"></script>
{/if}

<!--datatable-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

<script src="{$_theme}/lib/progress.js"></script>
<script src="{$_theme}/lib/bootbox.min.js"></script>
<!-- iCheck -->
<script src="{$_theme}/lib/icheck/icheck.min.js"></script>
<script src="{$_theme}/js/theme.js"></script>
<script src="{$app_url}ui/lib/dp/dist/datepicker.min.js"></script>
<script src="{$_theme}/js/custom.js"></script>
{if isset($xfooter)}
    {$xfooter}
{/if}
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        matForms();



        {if isset($xjq)}
        {$xjq}
        {/if}

    });

</script>
	

</body>

</html>
