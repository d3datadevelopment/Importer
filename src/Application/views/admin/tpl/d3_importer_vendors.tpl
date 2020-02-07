[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="d3_d3importer_views_admin_tpl_errormessages.tpl"}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]
<style type="text/css">
    <!--
    select {
        max-width : 375px;
    }
    -->
</style>

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
    function ChangeLine(iLine) {
        var oFormEdit = document.getElementById("myedit");
        oFormEdit.line.value = iLine;
        oFormEdit.fnc.value = '';
        oFormEdit.submit();
    }
    //-->
</script>

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>
<form name="myedit" id="myedit" enctype="multipart/form-data" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="line" value="[{$actcsvline}]">
    </div>

    <table border="0" width="98%" style="border-collapse: collapse">
        <colgroup>
            <col width="25%">
            <col width="75%">
        </colgroup>
        [{include file="d3_importer_inc_nav.tpl" colspan="2"}]
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_vendors"}]
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_VENDORS_IMPORTTYPE"}]
                    [{oxinputhelp ident="D3_IMPORTER_VENDORS_IMPORTTYPEINFO_HELP"}]
                </td>
                <td class="edittext">
                    <select name="xmlval[VENDOR][IMPORTTYPE]" [{$readonly}]>
                        <option value="import" [{if $aProfile.VENDOR.IMPORTTYPE == "import"}]SELECTED[{/if}]>
                            [{oxmultilang ident="D3_IMPORTER_VENDORS_IMPORTTYPE1"}]
                        </option>
                        <option value="assignonly" [{if $aProfile.VENDOR.IMPORTTYPE == "assignonly"}]SELECTED[{/if}]>
                            [{oxmultilang ident="D3_IMPORTER_VENDORS_IMPORTTYPE2"}]
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_VENDORS_ASSIGN"}]
                    [{oxinputhelp ident="D3_IMPORTER_VENDORS_ASSIGNINFO_HELP"}]
                </td>
                <td class="edittext">
                    <select name="xmlval[VENDOR][IMPORTCOLUM]" [{$readonly}]>
                        <option value="">[{oxmultilang ident="D3_IMPORTER_VENDORS_NOASSIGN"}]</option>
                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                            <option value="[{$key}]"
                                    [{if $aProfile.VENDOR.IMPORTCOLUM == $key && $aProfile.VENDOR.IMPORTCOLUM != ""}]selected[{/if}]>
                                [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                            </option>
                        [{/foreach}]
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext" colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_MANUFACTURER_IMPORTTYPE"}]
                    [{oxinputhelp ident="D3_IMPORTER_MANUFACTURER_IMPORTTYPEINFO_HELP"}]
                </td>
                <td class="edittext">
                    <select name="xmlval[MANUFACTURER][IMPORTTYPE]" [{$readonly}]>
                        <option value="import" [{if $aProfile.MANUFACTURER.IMPORTTYPE == "import"}]SELECTED[{/if}]>
                            [{oxmultilang ident="D3_IMPORTER_MANUFACTURER_IMPORTTYPE1"}]
                        </option>
                        <option value="assignonly"
                                [{if $aProfile.MANUFACTURER.IMPORTTYPE == "assignonly"}]SELECTED[{/if}]>
                            [{oxmultilang ident="D3_IMPORTER_MANUFACTURER_IMPORTTYPE2"}]
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_MANUFACTURER_ASSIGN"}]
                    [{oxinputhelp ident="D3_IMPORTER_MANUFACTURER_ASSIGNINFO_HELP"}]
                </td>
                <td class="edittext">
                    <select name="xmlval[MANUFACTURER][IMPORTCOLUM]" [{$readonly}]>
                        <option value="">[{oxmultilang ident="D3_IMPORTER_MANUFACTURER_NOASSIGN"}]</option>
                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                            <option value="[{$key}]"
                                    [{if $aProfile.MANUFACTURER.IMPORTCOLUM == $key && $aProfile.MANUFACTURER.IMPORTCOLUM != ""}]selected[{/if}]>
                                [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                            </option>
                        [{/foreach}]
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext" colspan="3">
                    <br>
                    <span class="d3modcfg_btn fixed icon status_ok">
                        <input type="submit" class="edittext" name="saveImportProfile"
                               value="[{oxmultilang ident="GENERAL_SAVE"}]"
                               onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                        <span></span>
                    </span>
                </td>
            </tr>
        [{/block}]
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
