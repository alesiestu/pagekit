<ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
    <li class="uk-active"><a href="#">@trans('System')</a></li>
    <li><a href="#">@trans('PHP')</a></li>
    <li><a href="#">@trans('Database')</a></li>
    <li><a href="#">@trans('Permissions')</a></li>
</ul>

<ul id="tab-content" class="uk-switcher uk-margin">
    <li>

        <div class="uk-overflow-container">
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>@trans('Setting')</th>
                        <th>@trans('Value')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="uk-text-nowrap">@trans('Pagekit Version')</td>
                        <td>@info['version']</td>
                    </tr>
                    <tr>
                        <td class="uk-text-nowrap">@trans('Web Server')</td>
                        <td class="pk-table-text-break">@info['server']</td>
                    </tr>
                    <tr>
                        <td class="uk-text-nowrap">@trans('User Agent')</td>
                        <td class="pk-table-text-break">@info['useragent']</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </li>
    <li>

        <div class="uk-overflow-container">
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>@trans('Setting')</th>
                        <th>@trans('Value')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>@trans('Version')</td>
                        <td>@info['phpversion']</td>
                    </tr>
                    <tr>
                        <td>@trans('Handler')</td>
                        <td>@info['sapi_name']</td>
                    </tr>
                    <tr>
                        <td>@trans('Built On')</td>
                        <td class="pk-table-text-break">@info['php']</td>
                    </tr>
                    <tr>
                        <td>@trans('Extensions')</td>
                        <td class="pk-table-text-break">@info['extensions']</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </li>
    <li>

        <div class="uk-overflow-container">
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>@trans('Setting')</th>
                        <th>@trans('Value')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>@trans('Driver')</td>
                        <td>@info['dbdriver']</td>
                    </tr>
                    <tr>
                        <td>@trans('Version')</td>
                        <td>@info['dbversion']</td>
                    </tr>
                    <tr>
                        <td>@trans('Client')</td>
                        <td class="pk-table-text-break">@info['dbclient']</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </li>
    <li>

        <div class="uk-overflow-container">
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>@trans('Path')</th>
                        <th class="uk-text-center pk-table-width-100">@trans('Status')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (info['directories'] as directory => writable)
                    <tr>
                        <td>@directory</td>
                        <td class="uk-text-center@( writable ? ' uk-text-success' : ' uk-text-danger' )">@( writable ? trans('Writable') : trans('Unwritable') )</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </li>
</ul>