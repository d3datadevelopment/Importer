[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="d3_d3importer_views_admin_tpl_errormessages.tpl"}]

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
<form name="myedit" id="myedit" enctype="multipart/form-data" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="fnc" value="doimport">
        <input type="hidden" name="oxid" value="[{$oxid}]">
    </div>
    <table cellspacing="0" cellpadding="0" border="0" width="98%">
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_import"}]
            <tr>
                <td valign="top" class="edittext">
                <span class="d3modcfg_btn fixed icon status_ok">
                    <input type="submit" class="edittext" name="doImport"
                           value="[{oxmultilang ident="D3_IMPORTER_IMPORT_START"}]"
                           onClick="document.myedit.fnc.value='doImport'" [{$readonly}]>
                    <span></span>
                </span>
                </td>
            </tr>
        [{/block}]
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
