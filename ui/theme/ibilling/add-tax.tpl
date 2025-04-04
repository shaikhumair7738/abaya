{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Add TAX']}</h5>
            </div>
            <div class="ibox-content">
                <form role="form" name="accadd" method="post" action="{$_url}settings/add-tax-post/">
                    <div class="form-group">
                        <label for="taxname">{$_L['Name']}</label>
                        <input type="text" class="form-control" id="taxname" name="taxname">
                    </div>
										<div class="form-group">
                        <label for="taxname">{$_L['Type']}</label>
                        <select class="form-control" id="taxtype" name="taxtype" required>
													<option value="">Select Type</option>
													<option value="GST">GST</option>
													<option value="IGST">IGST</option>
													{*<option value="UGST">UGST</option>*}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taxrate">{$_L['Rate']}</label>
                        <input type="text" class="form-control" id="taxrate" name="taxrate">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button> | {$_L['Or']} <a href="{$_url}tax/list/"> {$_L['Back To The List']}</a>
                </form>
            </div>
        </div>
    </div>
</div>
{include file="sections/footer.tpl"}