{include file="sections/header.tpl"}
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>{$_L['Sales Taxes']} </h5>
    </div>
    <div class="ibox-content">
<a href="{$_url}settings/add-tax/" id="item_add" class="btn btn-primary"><i class="fa fa-plus"></i> {$_L['Add Tax']} </a>
      <div class="table-responsive">
				<table class="table table-bordered table-hover sys_table">
            <thead>
            <tr>
                <th width="70%">{$_L['Name']}</th>
                <th>{$_L['Tax Rate']}</th>
                <th>{$_L['Type']}</th>
								<th>{$_L['Manage']}</th>
            </tr>
            </thead>
            <tbody>
            {foreach $d as $ds}
                <tr id="{$ds['id']}">
                    <td>{$ds['name']}</td>
                    <td>{$ds['rate'] + 0} {$_L['Per']}</td>
                    <td>{$ds['taxtype']} </td>
                    <td>
                        <a href="{$_url}settings/edit-tax/{$ds['id']}/" class="btn btn-info btn-xs edit"><i class="fa fa-pencil"></i> {$_L['Edit']} </a>
                        <button type="button" id="t{$ds['id']}" class="btn btn-danger btn-xs cdelete"><i class="fa fa-trash"></i> {$_L['Delete']} </button>
                    </td>

                </tr>
            {/foreach}

            </tbody>
        </table>
{$paginator['contents']}
			</div>
    </div>
</div>
<input type="hidden" id="_lan_are_you_sure" value="{$_L['are_you_sure']}">

{include file="sections/footer.tpl"}