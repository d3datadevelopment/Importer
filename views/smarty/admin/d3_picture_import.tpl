[{if $dirinfo.sumfiles && $dirinfo.sumfiles > $dirinfo.finishedfiles}]
    [{assign var='showStartButton' value=true}]
[{/if}]

[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="@d3importer/admin/bootstrap.tpl"}]
[{include file="@d3importer/admin/errormessages.tpl"}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<script type="text/javascript">
    <!--
    [{if $updatelist == 1}]
    UpdateList('[{$oxid}]');
    [{/if}]
    function UpdateList(sID) {
        var oSearch = parent.list.document.getElementById("search");
        oSearch.oxid.value = sID;
        oSearch.submit();
    }
    //-->
</script>

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
    </div>
</form>

<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="[{$oxid}]">
    </div>
    <table cellspacing="0" cellpadding="0" border="0" width="98%">

        [{assign var="iError" value=$oView->getConfigFailure()}]
        [{if $iError}]
            [{block name="d3_d3importer_views_admin_tpl_d3_picture_import_failure"}]
                <tr>
                    <td valign="top" class="edittext" colspan="2">
                        <div class="errorbox">[{oxmultilang ident="D3_PICTURE_FAILCONFIG_$iError"}]</div>
                    </td>
                </tr>
            [{/block}]
        [{/if}]
        <tr>
        [{block name="d3_d3importer_views_admin_tpl_d3_picture_import_options"}]
            <td valign="top" class="edittext" width="50%">
                [{include file="@d3importer/admin/options/picture/import.tpl" showStartButton=$showStartButton|default:false showScanArea=true}]
            </td>
        [{/block}]
        [{block name="d3_d3importer_views_admin_tpl_d3_picture_import_results"}]
            <td valign="top" class="edittext" align="left" width="50%">
                [{include file="@d3importer/admin/options/picture/results.tpl"}]
            </td>
        [{/block}]
        </tr>
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
