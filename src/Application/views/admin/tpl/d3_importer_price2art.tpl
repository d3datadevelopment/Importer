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
            <col width="25%">
            <col width="25%">
            <col width="25%">
        </colgroup>
        [{include file="d3_importer_inc_nav.tpl" colspan="4"}]
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_price2art_head"}]
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_PRICE2ART_IMPORTTYPE"}]
                    [{oxinputhelp ident="D3_IMPORTER_PRICE2ART_IMPORTTYPEINFO_HELP"}]
                </td>
                <td class="edittext" colspan="3">
                    <select name="xmlval[IMPORTTYPE]" [{$readonly}]>
                        <option value="import"
                                [{if $aProfile.IMPORTTYPE == "import"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_PRICE2ART_IMPORTTYPE1"}]</option>
                        <option value="clearbefore"
                                [{if $aProfile.IMPORTTYPE == "clearbefore"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_PRICE2ART_IMPORTTYPE2"}]</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext"
                    colspan="4"
                    style="height:1px; border: 1px #7A7A7A solid; border-bottom: 0"></td>
            </tr>
        [{/block}]
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_price2art_items"}]
            [{assign var="count" value=1}]
            [{foreach from=$aProfile.IMPORTCOLUM item="colum" name="prices"}]
                [{if $colum.PRICE != ''}]
                    <tr>
                        <td class="edittext" style="padding:5px;">
                            [{oxmultilang ident="D3_IMPORTER_PRICE2ART_PRICE"}]&nbsp;[{$count}]&nbsp;
                        </td>
                        <td class="edittext" style="padding:5px;">
                            <select name="xmlval[IMPORTCOLUM][[{$count}]][PRICE]" [{$readonly}]>
                                <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                                [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                    <option value="[{$key}]"
                                            [{if $colum.PRICE == $key && $colum.PRICE != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                [{/foreach}]
                            </select>
                        </td>
                        <td class="edittext" style="padding:5px;">
                            [{oxmultilang ident="D3_IMPORTER_PRICE2ART_PERCENTOPTION"}]&nbsp;
                        </td>
                        <td class="edittext" style="padding:5px;">
                            <input type="hidden" name="xmlval[IMPORTCOLUM][[{$count}]][PERCENTOPTION]" value="0" [{$readonly}]>
                            <input type="checkbox" name="xmlval[IMPORTCOLUM][[{$count}]][PERCENTOPTION]" value="1" [{if $colum.PERCENTOPTION}] checked[{/if}] [{$readonly}]>
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext" style="padding:5px;">
                            [{oxmultilang ident="D3_IMPORTER_PRICE2ART_AMOUNTFROM"}]&nbsp;
                        </td>
                        <td class="edittext" style="padding:5px;">
                            <select name="xmlval[IMPORTCOLUM][[{$count}]][FROM]" [{$readonly}]>
                                <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                                [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                    <option value="[{$key}]"
                                            [{if $colum.FROM == $key && $colum.FROM != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                [{/foreach}]
                            </select>
                        </td>
                        <td class="edittext" style="padding:5px;">
                            [{oxmultilang ident="D3_IMPORTER_PRICE2ART_AMOUNTTO"}]&nbsp;
                        </td>
                        <td class="edittext" style="padding:5px;">
                            <select name="xmlval[IMPORTCOLUM][[{$count}]][TO]" [{$readonly}]>
                                <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                                [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                    <option value="[{$key}]"
                                            [{if $colum.TO == $key && $colum.TO != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                [{/foreach}]
                            </select>
                        </td>
                    </tr>
                    [{assign var="count" value=$count+1}]
                    <tr>
                        <td class="edittext"
                            colspan="4"
                            style="height:1px; border: 1px #7A7A7A solid; border-top: 0"></td>
                    </tr>
                [{/if}]
            [{/foreach}]
            <tr>
                <td class="edittext" style="padding:5px;">
                    [{oxmultilang ident="D3_IMPORTER_PRICE2ART_PRICE"}]&nbsp;[{$count}]&nbsp;
                    [{oxinputhelp ident="HELP_D3_IMPORTER_PRICE2ART_PRICE"}]
                </td>
                <td class="edittext" style="padding:5px;">
                    <select name="xmlval[IMPORTCOLUM][[{$count}]][PRICE]" [{$readonly}]>
                        <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                            <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                        [{/foreach}]
                    </select>
                </td>
                <td class="edittext" style="padding:5px;">
                    [{oxmultilang ident="D3_IMPORTER_PRICE2ART_PERCENTOPTION"}]&nbsp;
                    [{oxinputhelp ident="HELP_D3_IMPORTER_PRICE2ART_PERCENTOPTION"}]
                </td>
                <td class="edittext" style="padding:5px;">
                    <input type="hidden" name="xmlval[IMPORTCOLUM][[{$count}]][PERCENTOPTION]" value="0" [{$readonly}]>
                    <input type="checkbox" name="xmlval[IMPORTCOLUM][[{$count}]][PERCENTOPTION]" value="1" [{$readonly}]>
                </td>
            </tr>
            <tr>
                <td class="edittext" style="padding:5px;">
                    [{oxmultilang ident="D3_IMPORTER_PRICE2ART_AMOUNTFROM"}]&nbsp;
                </td>
                <td class="edittext" style="padding:5px;">
                    <select name="xmlval[IMPORTCOLUM][[{$count}]][FROM]" [{$readonly}]>
                        <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                            <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                        [{/foreach}]
                    </select>
                </td>
                <td class="edittext" style="padding:5px;">
                    [{oxmultilang ident="D3_IMPORTER_PRICE2ART_AMOUNTTO"}]&nbsp;
                </td>
                <td class="edittext" style="padding:5px;">
                    <select name="xmlval[IMPORTCOLUM][[{$count}]][TO]" [{$readonly}]>
                        <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                            <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                        [{/foreach}]
                    </select>
                </td>
            </tr>
        [{/block}]

        <tr>
            <td class="edittext" colspan="4" style="height:1px; border: 1px #7A7A7A solid; border-top: 0"></td>
        </tr>
        <tr>
            <td class="edittext" colspan="4" style="text-align:center"><br>
                <span class="d3modcfg_btn fixed icon status_ok">
                    <input type="submit" class="edittext" name="saveImportProfile"
                           value="[{oxmultilang ident="GENERAL_SAVE"}]"
                           onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                    <span></span>
                </span>
            </td>
        </tr>
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
