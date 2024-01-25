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
        [{include file="@d3importer/admin/d3_importer_inc_nav.tpl" colspan="2"}]
        [{if $maxcsvline}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_category_base"}]
                <tr>
                    <td class="edittext">
                        [{oxmultilang ident="D3_IMPORTER_CATEGORY_IMPORTTYPE"}]
                        [{oxinputhelp ident="D3_IMPORTER_CATEGORY_IMPORTTYPEINFO_HELP"}]
                    </td>
                    <td class="edittext">
                        <select name="xmlval[IMPORTTYPE]" [{$readonly}]>
                            <option value="import"
                                    [{if $aProfile.IMPORTTYPE == "import"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_CATEGORY_IMPORTTYPE1"}]</option>
                            <option value="clearbefore"
                                    [{if $aProfile.IMPORTTYPE == "clearbefore"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_CATEGORY_IMPORTTYPE2"}]</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext">
                        [{oxmultilang ident="D3_IMPORTER_CATEGORY_ASSIGN"}]
                        [{oxinputhelp ident="D3_IMPORTER_CATEGORY_ASSIGNINFO_HELP"}]
                    </td>
                    <td class="edittext">
                        [{assign var="aCatIndentificationFields" value=$edit->getCategorieIndentificationFields()}]
                        <select name="xmlval[ASSIGNIDENT]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_CATEGORY_NOASSIGN"}]</option>
                            [{foreach from=$aCatIndentificationFields item="field"}]
                                [{assign var="ident" value="GENERAL_ARTICLE_`$field`"|oxupper}]
                                <option value="[{$field}]" [{if $aProfile.ASSIGNIDENT == $field}]selected[{/if}]>
                                    [{oxmultilang|oxtruncate:25:"..":true noerror=true alternative=$field ident=$ident}]
                                    ([{$field}])
                                </option>
                            [{/foreach}]
                        </select>
                        [{oxmultilang ident="D3_IMPORTER_CATEGORY_ASSIGN_NEEDED"}]
                    </td>
                </tr>
                <tr>
                    <td class="edittext" colspan="2">&nbsp;</td>
                </tr>
            [{/block}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_category_items"}]
                [{assign var="count" value=0}]
                [{foreach name="colum" from=$aProfile.IMPORTCOLUM item="colum" key="iIndex"}]
                    [{if "" !== $colum}]
                        [{assign var="count" value=$count+1}]
                        <tr>
                            <td class="edittext"
                                width="140"
                                style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-bottom: 0">
                                [{oxmultilang ident="D3_IMPORTER_CATEGORY_IMPORTCOLUM"}] [{$count}]
                            </td>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-bottom: 0">
                                <select name="xmlval[IMPORTCOLUM][[{$count}]]" [{$readonly}]>
                                    <option value="">[{oxmultilang ident="D3_IMPORTER_CATEGORY_NOASSIGN"}]</option>
                                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                        <option value="[{$key}]"
                                                [{if $colum == $key && $colum != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                    [{/foreach}]
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="edittext"
                                width="140"
                                style="border: 1px #7A7A7A solid; padding:5px; border-right: 0; border-top: 0">
                                [{oxmultilang ident="D3_IMPORTER_CATEGORY_COLSEP"}]
                            </td>
                            <td class="edittext"
                                style="border: 1px #7A7A7A solid; padding:5px; border-left: 0; border-top: 0">
                                <input type="text"
                                       size="3"
                                       maxlength="10"
                                       name="xmlval[COLUMSEPARATOR][[{$count}]]"
                                       value="[{$aProfile.COLUMSEPARATOR.$iIndex}]" [{$readonly}]><span
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" colspan="2">&nbsp;</td>
                        </tr>
                    [{/if}]
                [{/foreach}]
                [{assign var="count" value=$count+1}]
                <tr>
                    <td class="edittext"
                        width="140"
                        style="border:1px #7A7A7A solid; padding:5px; border-bottom:0; border-right:0">
                        [{oxmultilang ident="D3_IMPORTER_CATEGORY_IMPORTCOLUM"}] [{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_CATEGORY_IMPORTCOLUMINFO_HELP"}]
                    </td>
                    <td class="edittext" style="border:1px #7A7A7A solid; padding:5px; border-bottom:0; border-left:0">
                        <select name="xmlval[IMPORTCOLUM][[{$count}]]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_CATEGORY_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext"
                        width="140"
                        style="border:1px #7A7A7A solid; padding:5px; border-right:0; border-top:0">
                        [{oxmultilang ident="D3_IMPORTER_CATEGORY_COLSEP"}]
                        [{oxinputhelp ident="D3_IMPORTER_MAIN_COLSEPDESCRIPTION_HELP"}]
                    </td>
                    <td class="edittext" style="border:1px #7A7A7A solid; padding:5px; border-left:0; border-top:0">
                        <input type="text"
                               size="3"
                               maxlength="10"
                               name="xmlval[COLUMSEPARATOR][[{$count}]]"
                               value="" [{$readonly}]>
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
                </td>
            </tr>
        [{/if}]
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
