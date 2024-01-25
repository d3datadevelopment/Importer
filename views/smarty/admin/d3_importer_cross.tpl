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
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="line" value="[{$actcsvline}]">
    </div>
    <table border="0" width="98%" style="border-collapse: collapse">
        <colgroup>
            <col width="25%">
            <col width="75%">
        </colgroup>
        [{include file="@d3importer/admin/d3_importer_inc_nav.tpl"}]
        [{if $maxcsvline}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_cross"}]
                <tr>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-right:0; border-bottom:0">
                        [{oxmultilang ident="D3_IMPORTER_CROSS_IMPORTTYPE"}]
                        [{oxinputhelp ident="D3_IMPORTER_CROSS_IMPORTTYPEINFO_HELP"}]
                    </td>
                    <td class="edittext"
                        style="border:1px #7A7A7A solid; padding:5px; border-left:0; border-bottom:0">
                        <select name="xmlval[IMPORTTYPE_CROSS]" [{$readonly}]>
                            <option value="import" [{if $aProfile.IMPORTTYPE_CROSS == "import"}]SELECTED[{/if}]>
                                [{oxmultilang ident="D3_IMPORTER_CROSS_IMPORTTYPE1"}]
                            </option>
                            <option value="clearbefore" [{if $aProfile.IMPORTTYPE_CROSS == "clearbefore"}]SELECTED[{/if}]>
                                [{oxmultilang ident="D3_IMPORTER_CROSS_IMPORTTYPE2"}]
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" width="140" style="border-left: 1px #7A7A7A solid; padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_CROSS_IMPORTCOLUM"}] [{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_CROSS_IMPORTCOLUMINFO_HELP"}]
                    </td>
                    <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                        <select name="xmlval[IMPORTCOLUM_CROSS]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_CROSS_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]"
                                        [{if $aProfile.IMPORTCOLUM_CROSS == $key && $aProfile.IMPORTCOLUM_CROSS != ""}]selected[{/if}]>
                                    [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                </option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border: 1px #7A7A7A solid; padding:5px; border-right:0; border-top:0">
                        [{oxmultilang ident="D3_IMPORTER_CROSS_COLSEP"}]
                        [{oxinputhelp ident="D3_IMPORTER_MAIN_COLSEPDESCRIPTION_HELP"}]
                    </td>
                    <td class="edittext"
                        style="border:1px #7A7A7A solid; padding:5px; border-left:0; border-top:0">
                        <input type="text" size="3" maxlength="10" name="xmlval[COLUMSEPARATOR_CROSS]"
                               value="[{$aProfile.COLUMSEPARATOR_CROSS}]" [{$readonly}]>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td class="edittext"
                        style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-bottom: 0">
                        [{oxmultilang ident="D3_IMPORTER_ACC_IMPORTTYPE"}]
                        [{oxinputhelp ident="D3_IMPORTER_ACC_IMPORTTYPEINFO_HELP"}]
                    </td>
                    <td class="edittext"
                        style="border: 1px #7A7A7A solid;  padding:5px; border-left:0; border-bottom:0">
                        <select name="xmlval[IMPORTTYPE_ACC]" [{$readonly}]>
                            <option value="import" [{if $aProfile.IMPORTTYPE_ACC == "import"}]SELECTED[{/if}]>
                                [{oxmultilang ident="D3_IMPORTER_ACC_IMPORTTYPE1"}]
                            </option>
                            <option value="clearbefore" [{if $aProfile.IMPORTTYPE_ACC == "clearbefore"}]SELECTED[{/if}]>
                                [{oxmultilang ident="D3_IMPORTER_ACC_IMPORTTYPE2"}]
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border-left: 1px #7A7A7A solid; padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_ACC_IMPORTCOLUM"}] [{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_ACC_IMPORTCOLUMINFO_HELP"}]
                    </td>
                    <td class="edittext" style="border-right: 1px #7A7A7A solid; padding:5px;">
                        <select name="xmlval[IMPORTCOLUM_ACC]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_ACC_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]"
                                        [{if $aProfile.IMPORTCOLUM_ACC == $key && $aProfile.IMPORTCOLUM_ACC != ""}]selected[{/if}]>
                                    [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                </option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="border:1px #7A7A7A solid; padding:5px; border-right:0; border-top:0">
                        [{oxmultilang ident="D3_IMPORTER_ACC_COLSEP"}]
                        [{oxinputhelp ident="D3_IMPORTER_MAIN_COLSEPDESCRIPTION_HELP"}]
                    </td>
                    <td class="edittext"
                        style="border:1px #7A7A7A solid; padding:5px; border-left:0; border-top:0">
                        <input type="text" size="3" maxlength="10" name="xmlval[COLUMSEPARATOR_ACC]"
                               value="[{$aProfile.COLUMSEPARATOR_ACC}]" [{$readonly}]>
                    </td>
                </tr>
            [{/block}]
            <tr>
                <td class="edittext"></td>
                <td class="edittext"><br>
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
