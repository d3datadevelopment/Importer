[{if $d3ModConfigErrorMessage}]
    [{block name="d3_d3importer_views_admin_tpl_errormessages_moduleerror"}]
        <div class="extension_error">
            [{$d3ModConfigErrorMessage}]
        </div>
    [{/block}]
[{/if}]

[{if $isfailconfig}]
    [{block name="d3_d3importer_views_admin_tpl_errormessages_configerror"}]
        <div class="extension_error">
            [{oxmultilang ident="D3_IMPORTER_FAILCONFIG_"|cat:$isfailconfig}]
        </div>
    [{/block}]
[{/if}]

[{if $aImporterErrors && count($aImporterErrors) > 0}]
    [{block name="d3_d3importer_views_admin_tpl_errormessages_importerrors"}]
        <div class="extension_error">
            [{foreach from=$aImporterErrors item="sErrorMessage"}]
                <p>[{$sErrorMessage}]</p>
            [{/foreach}]
        </div>
    [{/block}]
[{/if}]

[{if $isImporterDemoMode}]
    [{block name="d3_d3importer_views_admin_tpl_errormessages_demomode"}]
        <div class="extension_warning">
            [{oxmultilang ident="D3_IMPORTER_IMPORT_TESTLICENCE_NOTICE"}]
        </div>
    [{/block}]
[{/if}]
