<ul class="nav" id="side-menu">

    <li class="nav-header">
        <div class="dropdown profile-element"> <span>
{*
                {if $user['img'] eq 'gravatar'}
                    <img style="width=100%" src="http://www.gravatar.com/avatar/{($user['username'])|md5}?s=200" class="img-circle" alt="{$user['fullname']}">
                                {elseif $user['img'] eq ''}
                                    <img src="{$app_url}ui/lib/imgs/default-user-avatar.png"  class="img-circle" style="max-width: 64px;" alt="">
                                {else}
                                    <img src="{$user['img']}" class="img-circle" style="max-width: 64px;" alt="{$user['fullname']}">
                {/if}
								*}
                             </span>
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{$user['fullname']}</strong>
                             </span> <span class="text-muted text-xs block">{$_L['My Account']} <b class="caret"></b></span> </span> </a>
            <ul class="dropdown-menu animated fadeIn m-t-xs">
                <li><a href="{$_url}settings/users-edit/{$user['id']}/">{$_L['Edit Profile']}</a></li>
                <li><a href="{$_url}settings/change-password/">{$_L['Change Password']}</a></li>

                <li class="divider"></li>
                <li><a href="{$_url}logout/">{$_L['Logout']}</a></li>
            </ul>
        </div>
    </li>

    {$admin_extra_nav[0]}

    <!--{if has_access($user->roleid,'reports')}
        
    {/if}-->

    <li {if $_application_menu eq 'dashboard'}class="active"{/if}><a href="{$_url}{$_c['redirect_url']}/"><i class="fa fa-tachometer"></i> <span class="nav-label">{$_L['Dashboard']}</span></a></li>

    <li {if $_application_menu eq 'timesheet'}class="active"{/if}>
        <a href="{$_url}timesheet"><i class="fa fa-clock-o"></i><span class="nav-label">Timesheet</span></a>
    </li>




    {$admin_extra_nav[1]}

    {if has_access($user->roleid,'customers')}
    <li class="{if $_application_menu eq 'contacts'}active{/if}">
        <a href="#"><i class="icon-users"></i> <span class="nav-label">Contacts</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{$_url}contacts/add/">Add Contact</a></li>

            <li><a href="{$_url}contacts/list/">List Contacts</a></li>
            <li><a href="{$_url}contacts/add-category-employee/">Add Category</a></li>
            <li><a href="{$_url}contacts/category-employee-list/">List Category</a></li>
            <!--<li><a href="{$_url}contacts/groups/">{$_L['Groups']}</a></li>-->
            {foreach $sub_menu_admin['crm'] as $sm_crm}

                {$sm_crm}


            {/foreach}
        </ul>
    </li>
    {/if}
    <!--{*<li {if $_application_menu eq 'contacts'}class="active"{/if}><a href="{$_url}contacts/list/customers/"><i class="icon-users"></i> <span class="nav-label">{$_L['Customers']}</span></a></li>*}
    {if has_access($user->roleid,'companies','view')}
    <li class="{if $_application_menu eq 'accounts'}active{/if}">
				<a href="#"><i class="fa fa-building-o"></i> <span class="nav-label">{$_L['Companies']}</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
						<li><a href="{$_url}accounts/add/">New Company</a></li>

						<li><a href="{$_url}accounts/list/">List Company</a></li>
						<li><a href="{$_url}accounts/balances/">Company_Balances</a></li>

				</ul>
		</li> 
    {/if}-->


    {$admin_extra_nav[2]}
    {if has_access($user->roleid,'transactions')}
        {if $_c['accounting'] eq '1'}
            <li class="{if $_application_menu eq 'transactions'}active{/if}">
                <a href="#"><i class="fa fa-database"></i> <span class="nav-label">{$_L['Transactions']}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{$_url}transactions/deposit/">{$_L['New Deposit']}</a></li>
                    <li><a href="{$_url}transactions/expense/">{$_L['New Expense']}</a></li>
                    <!--<li><a href="{$_url}transactions/transfer/">{$_L['Transfer']}</a></li>-->
                    <li><a href="{$_url}transactions/list/">{$_L['View Transactions']}</a></li>
                    <!--<li><a href="{$_url}transactions/list-proforma/">View Proforma Transactions</a></li>-->
                    <!--<li><a href="{$_url}generate/balance-sheet/">{$_L['Balance Sheet']}</a></li>-->
                </ul>
            </li>
        {/if}
    {/if}
<!--<li class="{if $_application_menu eq 'domain_n_hosting'}active{/if}">
                <a href="#"><i class="icon-credit-card-1"></i> <span class="nav-label">Domain and Hosting</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    {if $_c['domain_n_hosting'] eq '1'}
                        <li><a href="{$_url}domain_n_hosting/list/">List Domain and Hosting</a></li>
                        <li><a href="{$_url}domain_n_hosting/add/">Add Domain and Hosting</a></li>
                    {/if}
                </ul>
            </li>-->

    {$admin_extra_nav[3]}
    {*<li {if $_application_menu eq 'tasks'}class="active"{/if}><a href="{$_url}tasks/me"><i class="fa fa-tasks"></i> <span class="nav-label">Tasks</span></a></li>*}

    {if has_access($user->roleid,'sales')}

        {if ($_c['invoicing'] eq '1') OR ($_c['quotes'] eq '1')}



            <li class="{if $_application_menu eq 'invoices'}active{/if}">
                <a href="#"><i class="icon-credit-card-1"></i> <span class="nav-label">{$_L['Sales']}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <!--<li><a href="{$_url}sales/add/">Add Sale</a></li>
                    <li><a href="{$_url}sales/list/">All Sales</a></li>-->
                    {if $_c['invoicing'] eq '1'}
                        <li><a href="{$_url}invoices/list/filter/">{$_L['Invoices']}</a></li>

                        {if $user->roleid eq 0}
                        <li><a href="{$_url}invoices/add/">{$_L['Add Invoice']}</a></li>
                        {/if}
                        <!--<li><a href="{$_url}invoices/list-proforma/filter/">Proforma</a></li>
                        
                        <li><a href="{$_url}invoices/list-recurring/">{$_L['Recurring Invoices']}</a></li>
                        <li><a href="{$_url}invoices/add/recurring/">{$_L['New Recurring Invoice']}</a></li>-->
                    {/if}

                    {if $_c['quotes'] eq '1'}
                        <!--<li><a href="{$_url}quotes/list/">{$_L['Quotes']}</a></li>
                        <li><a href="{$_url}quotes/new/">{$_L['Create New Quote']}</a></li>-->
                    {/if}
                    <!--<li><a href="{$_url}invoices/payments/">{$_L['Payments']}</a></li>-->
                </ul>
            </li>

        {/if}

    {/if}



    {if has_access($user->roleid,'calendar')}
        <!--<li {if $_application_menu eq 'calendar'}class="active"{/if}><a href="{$_url}calendar/events/"><i class="fa fa-calendar"></i> <span class="nav-label">{$_L['Calendar']}</span></a></li>-->
    {/if}



    {$admin_extra_nav[4]}

    {if has_access($user->roleid,'bank_n_cash')}
        {if $_c['accounting'] eq '1'}
            <!--<li class="{if $_application_menu eq 'accounts'}active{/if}">
                <a href="#"><i class="fa fa-university"></i> <span class="nav-label">{$_L['Bank n Cash']}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{$_url}accounts/add/">{$_L['New Account']}</a></li>

                    <li><a href="{$_url}accounts/list/">{$_L['List Accounts']}</a></li>
                    <li><a href="{$_url}accounts/balances/">{$_L['Account_Balances']}</a></li>

                </ul>
            </li>-->
        {/if}

    {/if}


    {$admin_extra_nav[5]}

    {if has_access($user->roleid,'products_n_services')}

    {if ($_c['invoicing'] eq '1') OR ($_c['quotes'] eq '1')}
        <li class="{if $_application_menu eq 'ps'}active{/if}">
            <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Manage Products</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{$_url}ps/p-new/">Add Product</a></li>
                <li><a href="{$_url}ps/p-list/">List Product</a></li>
                <!--<li><a href="{$_url}ps/s-list/">{$_L['Services']}</a></li>
                <li><a href="{$_url}ps/s-new/">{$_L['New Service']}</a></li>-->


            </ul>
        </li>
    {/if}

    {/if}

    {if has_access($user->roleid,'products_n_services')}
    <li class="{if $_application_menu eq 'manage'}active{/if}">
            <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Manage Design</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{$_url}manage/add-design/">Add Design</a></li>
                <li><a href="{$_url}manage/list-design/">List Design</a></li>
            </ul>
        </li>
        {/if}

    {$admin_extra_nav[6]}

    {if has_access($user->roleid,'reports')}

            {if $_c['accounting'] eq '1'}

            <li class="{if $_application_menu eq 'reports'}active{/if}">
            <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">{$_L['Reports']} </span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">


                <li><a href="{$_url}reports/statement/">{$_L['Account Statement']}</a></li>
                <li><a href="{$_url}reports/income/">{$_L['Income Reports']}</a></li>
                <li><a href="{$_url}reports/expense/">{$_L['Expense Reports']}</a></li>
                <li><a href="{$_url}reports/income-vs-expense/">{$_L['Income Vs Expense']}</a></li>

                <li><a href="{$_url}reports/by-date/">{$_L['Reports by Date']}</a></li>
                {*<li><a href="{$_url}reports/cats/">{$_L['Reports by Category']}</a></li>*}
                <li><a href="{$_url}transactions/list-income/">{$_L['All Income']}</a></li>
                <li><a href="{$_url}transactions/list-expense/">{$_L['All Expense']}</a></li>
                <li><a href="{$_url}transactions/list/">{$_L['All Transactions']}</a></li>
                <!--<li><a href="{$_url}reports/gst-reports/">GST Reports</a></li>-->


                {foreach $sub_menu_admin['reports'] as $sm_report}

                    {$sm_report}


                {/foreach}


            </ul>
            </li>

        {/if}

    {/if}

    {if has_access($user->roleid,'utilities')}

        <!--<li class="{if $_application_menu eq 'util'}active{/if}">
            <a href="#"><i class="icon-article"></i> <span class="nav-label">{$_L['Utilities']} </span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{$_url}util/activity/">{$_L['Activity Log']}</a></li>
                <li><a href="{$_url}util/sent-emails/">{$_L['Email Message Log']}</a></li>
                <li><a href="{$_url}util/dbstatus/">{$_L['Database Status']}</a></li>
                <li><a href="{$_url}util/cronlogs/">{$_L['CRON Log']}</a></li>
                <li><a href="{$_url}util/integrationcode/">{$_L['Integration Code']}</a></li>
                <li><a href="{$_url}util/sys_status/">{$_L['System Status']}</a></li>
            </ul>
        </li>-->

    {/if}


    {*<li class="{if $_application_menu eq 'my_account'}active{/if}">*}
        {*<a href="#"><i class="icon-user-1"></i> <span class="nav-label">{$_L['My Account']} </span><span class="fa arrow"></span></a>*}
        {*<ul class="nav nav-second-level">*}

            {*<li><a href="{$_url}settings/users-edit/{$user['id']}/">{$_L['Edit Profile']}</a></li>*}
            {*<li><a href="{$_url}settings/change-password/">{$_L['Change Password']}</a></li>*}
            {*<li><a href="{$_url}logout/">{$_L['Logout']}</a></li>*}



        {*</ul>*}
    {*</li>*}

    <!--{if has_access($user->roleid,'appearance')}

        <li class="{if $_application_menu eq 'appearance'}active{/if}" id="li_appearance">
            <a href="#"><i class="icon-params"></i> <span class="nav-label">{$_L['Appearance']} </span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">

                <li><a href="{$_url}appearance/ui/">{$_L['User Interface']}</a></li>
                <li><a href="{$_url}appearance/customize/">{$_L['Customize']}</a></li>

                {foreach $sub_menu_admin['appearance'] as $sm_appearance}

                    {$sm_appearance}


                {/foreach}

                <li><a href="{$_url}appearance/editor/">{$_L['Editor']}</a></li>

                <li><a href="{$_url}appearance/themes/">{$_L['Themes']}</a></li>

            </ul>
        </li>

{/if}-->

    <!--{if has_access($user->roleid,'plugins')}
        <li {if $_application_menu eq 'plugins'}class="active"{/if}><a href="{$_url}settings/plugins/"><i class="fa fa-plug"></i> <span class="nav-label">{$_L['Plugins']}</span></a></li>
        {/if}-->
    {if has_access($user->roleid,'settings')}
    <li class="{if $_application_menu eq 'settings'}active{/if}" id="li_settings">
            <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">{$_L['Settings']} </span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <!--<li><a href="{$_url}settings/app/">{$_L['General Settings']}</a></li>-->
                <li><a href="{$_url}settings/users/">{$_L['Staff']}</a></li>
                <li><a href="{$_url}settings/roles/">{$_L['Roles']}</a></li>
                {*<li><a href="{$_url}settings/plugins/">{$_L['Plugins']}</a></li>*}
                <!--<li><a href="{$_url}settings/localisation/">{$_L['Localisation']}</a></li>
                <li><a href="{$_url}settings/currencies/">{$_L['Currencies']}</a></li>

                <li><a href="{$_url}settings/pg/">{$_L['Payment Gateways']}</a></li>-->

                {if $_c['accounting'] eq '1'}
                    <li><a href="{$_url}settings/expense-categories/">{$_L['Expense Categories']}</a></li>
                    <li><a href="{$_url}settings/income-categories/">{$_L['Income Categories']}</a></li>
                    <li><a href="{$_url}settings/tags/">{$_L['Manage Tags']}</a></li>
                    <!--<li><a href="{$_url}settings/pmethods/">{$_L['Payment Methods']}</a></li>
                    <li><a href="{$_url}tax/list/">Taxes</a></li>-->
                {/if}


                <!--<li><a href="{$_url}settings/emls/">{$_L['Email Settings']}</a></li>-->
                <!--<li><a href="{$_url}settings/email-templates/">{$_L['Email Templates']}</a></li>-->
                <li><a href="{$_url}settings/app/">App Config</a></li>
                <!--<li><a href="{$_url}settings/customfields/">{$_L['Custom Contact Fields']}</a></li>
                <li><a href="{$_url}settings/automation/">{$_L['Automation Settings']}</a></li>
                <li><a href="{$_url}settings/api/">{$_L['API Access']}</a></li>
                {foreach $sub_menu_admin['settings'] as $sm_settings}

                    {$sm_settings}


                {/foreach}
                <li><a href="{$_url}settings/features/">{$_L['Choose Features']}</a></li>
                <li><a href="{$_url}settings/about/">{$_L['About']}</a></li>-->
            </ul>
            </li>
    {/if}




</ul>