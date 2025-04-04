
<p>

    <strong>{$_L['Full Name']}: </strong> {$d['account']} <br>
   {if ($d['company']) neq ''}
       <strong>{$_L['Company Name']}: </strong> {$d['company']} <br>
   {/if}
    <strong>{$_L['Email']}: </strong> {if ($d['email']) neq ''} {$d['email']} {else} N/A {/if} <br>
    <strong>{$_L['Phone']}: </strong> {if ($d['phone']) neq ''} {$d['phone']} {else} N/A {/if} <br>
    <strong>{$_L['Address']}: </strong> {if ($d['address']) neq ''} {$d['address']} {else} N/A {/if} <br>
    <strong>{$_L['City']}: </strong> {if ($d['city']) neq ''} {$d['city']} {else} N/A {/if} <br>
    <strong>{$_L['State Region']}: </strong> {if ($d['state']) neq ''} {$d['state']} {else} N/A {/if} <br>
    <strong>{$_L['ZIP Postal Code']}: </strong> {if ($d['zip']) neq ''} {$d['zip']} {else} N/A {/if} <br>
    <strong>{$_L['Country']}: </strong> {if ($d['country']) neq ''} {$d['country']} {else} N/A {/if} <br>
    <strong>{$_L['Tags']}: </strong> {if ($d['tags']) neq ''} {$d['tags']} {else} N/A {/if} <br>
    <strong>{$_L['Group']}: </strong> {if ($d['gname']) neq ''} {$d['gname']} {else} N/A {/if} <br>
    <strong>{$_L['gst']}: </strong> {if ($d['gst_no']) neq ''} {$d['gst_no']} {else} N/A {/if} <br>    		<strong>PAN</strong>{if ($d['pan']) neq ''} {$d['pan']} {else} N/A {/if}<br>

    {foreach $cf as $c}

        <strong>{$c['fieldname']}: </strong> {if get_custom_field_value($c['id'],$d['id']) neq ''} {get_custom_field_value($c['id'],$d['id'])} {else} N/A {/if} <br>

    {/foreach}

</p>

<hr>


<table class="table table-hover margin bottom invoice-total">
    <thead>
    <tr>

        <th colspan="3">{$_L['Accounting Summary']}</th>

    </tr>
    </thead>
    <tbody>
    <tr>

        <td> {$_L['Total Income']}
        </td>
        <td class="text-center"><span class="label label-primary amount" data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-a-pad="{$_c['currency_decimal_digits']}" data-p-sign="{$_c['currency_symbol_position']}" data-a-sign="{$_c['currency_code']} " data-d-group="{$_c['thousand_separator_placement']}">{$ti}</span></td>

    </tr>
    <tr>

        <td> {$_L['Total Expense']}
        </td>
        <td class="text-center"><span class="label label-danger amount" data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-a-pad="{$_c['currency_decimal_digits']}" data-p-sign="{$_c['currency_symbol_position']}" data-a-sign="{$_c['currency_code']} " data-d-group="{$_c['thousand_separator_placement']}">{$te}</span></td>


    </tr>



    </tbody>
</table>

<table class="table invoice-total">
    <tbody>

    <tr>
        <td><strong>{$happened} :</strong></td>
        <td><strong><span class="label label-{$css_class} amount" data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-a-pad="{$_c['currency_decimal_digits']}" data-p-sign="{$_c['currency_symbol_position']}" data-a-sign="{$_c['currency_code']} " data-d-group="{$_c['thousand_separator_placement']}" style="font-size: 11px;">{$d_amount}</span></strong></td>
    </tr>
    </tbody>
</table>