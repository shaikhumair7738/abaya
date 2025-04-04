
{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Edit TAX']}</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="{$_url}settings/edit-tax-post/">
                    <div class="form-group">
                        <label for="taxname">{$_L['Name']}</label>
                        <input type="text" class="form-control" id="taxname" name="taxname" value="{$d['name']}">
                    </div>
										<div class="form-group">
                        <label for="taxname">{$_L['Type']}</label>
                        <select class="form-control" id="taxtype" name="taxtype" required>
													<option value="">Select Type</option>
													<option value="GST" {if ($d['taxtype']) eq ('GST')}selected{/if}>GST</option>
													<option value="IGST" {if ($d['taxtype']) eq ('IGST')}selected{/if}>IGST</option>
													{*<option value="UGST" {if ($d['taxtype']) eq ('UGST')}selected{/if}>UGST</option>*}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taxrate">{$_L['Rate']}</label>
                        <input type="text" class="form-control amount" id="taxrate" name="taxrate" data-a-sign="{$_c['currency_code']} "  data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-d-group="2" value="{if $ib_money_format_apply}{{$d['rate']}}{else}{$d['rate'] + 0}{/if}">
                    </div>

<input type="hidden" id="tid" name="tid" value="{$d['id']}">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button> | {$_L['Or']} <a href="{$_url}tax/list/"> {$_L['Back To The List']}</a>
                </form>

            </div>
        </div>



    </div>



</div>



{include file="sections/footer.tpl"}
