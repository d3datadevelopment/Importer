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
        [{include file="d3_importer_inc_nav.tpl" colspan="2"}]
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_attrib_head"}]
            <tr>
                <td class="edittext" style="padding:5px;">
                    [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTTYPE"}]
                    [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTTYPEINFO_HELP"}]
                </td>
                <td class="edittext" style="padding:5px;">
                    <select name="xmlval[IMPORTTYPE]" [{$readonly}]>
                        <option value="import"
                                [{if $aProfile.IMPORTTYPE == "import"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTTYPE1"}]</option>
                        <option value="clearbefore"
                                [{if $aProfile.IMPORTTYPE == "clearbefore"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTTYPE2"}]</option>
                    </select>
                </td>
            </tr>
        [{/block}]
        [{assign var="count" value=1}]
        [{if is_string($aProfile.IMPORTCOLUM)}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_attrib_oldvalues"}]
                <tr>
                    <td class="extension_warning" style="padding:5px;" colspan="2">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_DELETE_OLDSETTINGS_INFO"}]
                        <br>
                        <button type="submit"
                                value="delete"
                                name="deleteOldSettings"
                                class="d3modcfg_btn fixed icon status_failed"
                                onClick="if(confirm('[{oxmultilang ident="D3_IMPORTER_ATTRIB_DELETE_OLDSETTINGS_QUESTION"}]')) {document.myedit.fnc.value='saveImportProfile';
                                        }else {return false;
                                        }" [{$readonly}]
                                style="color:white;font-weight: bold;padding: 0 3px 0 23px;height:22px;line-height: 1; cursor:pointer;float: none;display: inline;">
                            [{oxmultilang ident="D3_IMPORTER_ATTRIB_DELETE_OLDSETTINGS_BUTTON"}]
                            <span></span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM"}] [{$count}]
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTCOLUMINFO_HELP"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <select name="xmlval[IMPORTCOLUM]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_ATTRIB_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]"
                                        [{if $aProfile.IMPORTCOLUM == $key && $aProfile.IMPORTCOLUM != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_COLSEP1"}]
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_COLSEPDESCRIPTION1_HELP"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <input type="text"
                               class="editinput"
                               size="3"
                               maxlength="10"
                               name="xmlval[COLUMSEPARATOR1]"
                               value="[{$aProfile.COLUMSEPARATOR1}]" [{$readonly}]>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_COLSEP2"}]
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_COLSEPDESCRIPTION2_HELP"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <input type="text"
                               class="editinput"
                               size="3"
                               maxlength="10"
                               name="xmlval[COLUMSEPARATOR2]"
                               value="[{$aProfile.COLUMSEPARATOR2}]" [{$readonly}]>
                    </td>
                </tr>
            [{/block}]
        [{else}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_attrib_values"}]
                <tr>
                    <th class="edittext" style="border-top:1px solid #808080;padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_LEGEND"}]
                    </th>
                    <td class="edittext" style="border-top:1px solid #808080;padding:5px;">
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_ATTRIBUTE_ASSIGN_HELP"}]
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_ATTRIBUTE_ASSIGN"}]
                        <br>
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_VALUE_HELP"}]
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_VALUE"}]
                        <br>
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_NAME_HELP"}]
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_NAME"}]
                        <br>
                        [{oxinputhelp ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_LANGUAGE_HELP"}]
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_LANGUAGE"}]
                    </td>
                </tr>
                [{foreach name="colum" from=$aProfile.IMPORTCOLUM item="colum"}]
                    <tr>
                        <th class="edittext"
                            style="padding:5px; border:1px solid #808080;border-right: 0 none; border-bottom: 0 none;">
                            [{$count}]. [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_ATTRIBUTE_ASSIGN"}]
                        </th>
                        <td class="edittext"
                            style="padding:5px; border:1px solid #808080;border-left: 0 none; border-bottom: 0 none;">
                            [{foreach from=$edit->getLanguages() item="aLanguageName" key="sLanguageIdent"}]
                                <fieldset>
                                    <legend>
                                        [{$aLanguageName.translation}]
                                        [{if $aLanguageName.active}]
                                            [{oxmultilang ident="D3_IMPORTER_ATTRIB_LANGUAGE_ACTIVE"}]
                                        [{else}]
                                            [{oxmultilang ident="D3_IMPORTER_ATTRIB_LANGUAGE_INACTIVE"}]
                                        [{/if}]
                                    </legend>
                                    <table width="98%">
                                        <tr>
                                            <td>[{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_NAME"}]</td>
                                            <td class="edittext">
                                                <label>
                                                    <select name="xmlval[IMPORTCOLUM][[{$count}]][NAME][[{$sLanguageIdent}]]"
                                                            [{$readonly}]>
                                                        <option value="">[{oxmultilang ident="D3_IMPORTER_ATTRIB_NOASSIGN"}]</option>
                                                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                                            <option value="[{$key}]"
                                                                    [{if isset($colum.NAME.$sLanguageIdent) && $colum.NAME.$sLanguageIdent !== '' && $key == $colum.NAME.$sLanguageIdent}] selected[{/if}]>
                                                                [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                                            </option>
                                                        [{/foreach}]
                                                    </select>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>[{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_VALUE"}]</td>
                                            <td class="edittext">
                                                <label>
                                                    <select name="xmlval[IMPORTCOLUM][[{$count}]][VALUE][[{$sLanguageIdent}]]"
                                                            [{$readonly}]>
                                                        <option value="">[{oxmultilang ident="D3_IMPORTER_ATTRIB_NOASSIGN"}]</option>
                                                        [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                                            <option value="[{$key}]"
                                                                    [{if isset($colum.VALUE.$sLanguageIdent) && $colum.VALUE.$sLanguageIdent !== '' && $key == $colum.VALUE.$sLanguageIdent}] selected[{/if}]>
                                                                [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                                            </option>
                                                        [{/foreach}]
                                                    </select>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            [{/foreach}]
                            [{assign var="count" value=$count+1}]
                        </td>
                    </tr>
                [{/foreach}]
                [{if false == empty($aProfile.IMPORTCOLUM)}]
                    <tr>
                        <td class="edittext" colspan="2" style="border-top:1px solid #808080;">&nbsp;</td>
                    </tr>
                [{/if}]
                <tr>
                    <th class="edittext"
                        style="padding:5px; border:1px solid #808080;border-right: 0 none;white-space: nowrap">
                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_NEW_ATTRIBUTE_ASSIGN"}]
                    </th>
                    <td class="edittext" style="padding:5px; border:1px solid #808080;border-left: 0 none;">
                        [{foreach from=$edit->getLanguages() item="aLanguageName" key="sLanguageIdent"}]
                            <fieldset>
                                <legend>
                                    [{$aLanguageName.translation}]
                                    [{if $aLanguageName.active}]
                                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_LANGUAGE_ACTIVE"}]
                                    [{else}]
                                        [{oxmultilang ident="D3_IMPORTER_ATTRIB_LANGUAGE_INACTIVE"}]
                                    [{/if}]
                                </legend>
                                <table width="98%">
                                    <tr>
                                        <td>
                                            [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_NAME"}]
                                        </td>
                                        <td class="edittext">
                                            <label>
                                                <select name="xmlval[IMPORTCOLUM][[{$count}]][NAME][[{$sLanguageIdent}]]"
                                                        [{$readonly}]>
                                                    <option value="">[{oxmultilang ident="D3_IMPORTER_ATTRIB_NOASSIGN"}]</option>
                                                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                                        <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                                    [{/foreach}]
                                                </select>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            [{oxmultilang ident="D3_IMPORTER_ATTRIB_IMPORTCOLUM_VALUE"}]
                                        </td>
                                        <td class="edittext">
                                            <label>
                                                <select name="xmlval[IMPORTCOLUM][[{$count}]][VALUE][[{$sLanguageIdent}]]"
                                                        [{$readonly}]>
                                                    <option value="">[{oxmultilang ident="D3_IMPORTER_ATTRIB_NOASSIGN"}]</option>
                                                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                                        <option value="[{$key}]">[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                                                    [{/foreach}]
                                                </select>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        [{/foreach}]
                    </td>
                </tr>
                <tr>
                    <td class="edittext" colspan="2">&nbsp;</td>
                </tr>
            [{/block}]
        [{/if}]
        <tr>
            <td class="edittext" colspan="2">
                <p class="d3modcfg_btn fixed icon status_ok">
                    <input type="submit" class="edittext" name="saveImportProfile"
                           value="[{oxmultilang ident="GENERAL_SAVE"}]"
                           onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                    <span></span>
                </p>
            </td>
        </tr>
        <tr>
            <td class="edittext" colspan="2">&nbsp;</td>
        </tr>
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
