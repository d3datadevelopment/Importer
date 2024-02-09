[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="@d3importer/admin/errormessages.tpl"}]

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

<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
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
        [{include file="@d3importer/admin/d3_importer_inc_nav.tpl" colspan="2"}]
        [{if $maxcsvline}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_selectlist_head"}]
                <tr>
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_IMPORTTYPE"}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_IMPORTTYPEINFO_HELP"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <select name="xmlval[IMPORTTYPE]" [{$readonly}]>
                            <option value="import"
                                    [{if $aProfile.IMPORTTYPE == "import"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_SELECTLIST_IMPORTTYPE1"}]</option>
                            <option value="clearbefore"
                                    [{if $aProfile.IMPORTTYPE == "clearbefore"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_SELECTLIST_IMPORTTYPE2"}]</option>
                        </select>
                    </td>
                </tr>
            [{/block}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_selectlist_items"}]
                [{assign var="count" value=1}]

                [{foreach name="colum" from=$aProfile.IMPORTCOLUM item="colum"}]
                    [{if $colum.NAME !== ''}]
                        <tr>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-bottom: 0">
                                [{oxmultilang ident="D3_IMPORTER_SELECTLIST_NAME"}]&nbsp;[{$count}]
                            </td>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-bottom: 0">
                                <select name="xmlval[IMPORTCOLUM][[{$count}]][NAME]" [{$readonly}]>
                                    <option value="">[{oxmultilang ident="D3_IMPORTER_SELECTLIST_NOASSIGN"}]</option>
                                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                        <option value="[{$key}]"
                                                [{if $colum.NAME == $key && $colum.NAME != ""}]selected[{/if}]>
                                            [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                        </option>
                                    [{/foreach}]
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                                [{oxmultilang ident="D3_IMPORTER_SELECTLIST_ALTNAME"}]
                            </td>
                            <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                                <input type="text" size="30" name="xmlval[IMPORTCOLUM][[{$count}]][ALTNAME]"
                                       value="[{$colum.ALTNAME}]" [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                                [{oxmultilang ident="D3_IMPORTER_SELECTLIST_VALUE"}]&nbsp;[{$count}]&nbsp;
                            </td>
                            <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                                <select name="xmlval[IMPORTCOLUM][[{$count}]][VALUE]" [{$readonly}]>
                                    <option value="">[{oxmultilang ident="D3_IMPORTER_SELECTLIST_NOASSIGN"}]</option>
                                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                        <option value="[{$key}]"
                                                [{if $colum.VALUE == $key && $colum.VALUE != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                    [{/foreach}]
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                                [{oxmultilang ident="D3_IMPORTER_SELECTLIST_SEPARATOR"}]
                            </td>
                            <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                                <input type="text" size="3" name="xmlval[IMPORTCOLUM][[{$count}]][SEPARATOR]"
                                       [{if $colum.SEPARATOR == '"'}]value='[{$colum.SEPARATOR}]'
                                       [{else}]value="[{$colum.SEPARATOR}]"[{/if}] [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-top: 0">
                                [{oxmultilang ident="D3_IMPORTER_SELECTLIST_PRICESEPARATOR"}]
                            </td>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-top: 0">
                                <input type="text" size="3" name="xmlval[IMPORTCOLUM][[{$count}]][SEPARATOR_PRICE]"
                                       [{if $colum.SEPARATOR_PRICE == '"'}]value='[{$colum.SEPARATOR_PRICE}]'
                                       [{else}]value="[{$colum.SEPARATOR_PRICE}]"[{/if}] [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" colspan="2">&nbsp;</td>
                        </tr>
                        [{assign var="count" value=$count+1}]
                    [{/if}]
                [{/foreach}]
                <tr>
                    <td class="edittext" colspan="2" style="padding:5px;">
                        <strong>[{oxmultilang ident="D3_IMPORTER_SELECTLIST_INFOTEXT"}]</strong>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-bottom: 0">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_NAME"}]&nbsp;[{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_TITLE_HELP"}]
                    </td>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-bottom: 0">
                        <select name="xmlval[IMPORTCOLUM][[{$count}]][NAME]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_SELECTLIST_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_ALTNAME"}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_ALTTITLE_HELP"}]
                    </td>
                    <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                        <input type="text"
                               size="30"
                               name="xmlval[IMPORTCOLUM][[{$count}]][ALTNAME]"
                               value="Auswahl"
                               [{$readonly}]>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_VALUE"}]&nbsp;[{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_SELECTFIELDS_HELP"}]
                    </td>
                    <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                        <select name="xmlval[IMPORTCOLUM][[{$count}]][VALUE]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_SELECTLIST_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_SEPARATOR"}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_SEPARATOR_HELP"}]
                    </td>
                    <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                        &nbsp;<input type="text"
                                     size="3"
                                     name="xmlval[IMPORTCOLUM][[{$count}]][SEPARATOR]"
                                     [{$readonly}]>&nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-top: 0">
                        [{oxmultilang ident="D3_IMPORTER_SELECTLIST_PRICESEPARATOR"}]
                        [{oxinputhelp ident="D3_IMPORTER_SELECTLIST_PRICESEPARATOR_HELP"}]
                    </td>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-top: 0">
                        <input type="text"
                               size="3"
                               name="xmlval[IMPORTCOLUM][[{$count}]][SEPARATOR_PRICE]"
                               [{$readonly}]>&nbsp;
                    </td>
                </tr>
            [{/block}]
            <tr>
                <td class="edittext" colspan="2" style="text-align:center"><br>
                    <span class="d3modcfg_btn fixed icon status_ok">
                        <input type="submit" class="edittext" name="saveImportProfile"
                               value="[{oxmultilang ident="GENERAL_SAVE"}]"
                               onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                        <span></span>
                    </span>
                    <br>
                </td>
            </tr>
        [{/if}]
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
