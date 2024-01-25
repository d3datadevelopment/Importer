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
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_variants_head"}]
                <tr style="background-color: #f9f9f9;">
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_VARIANTS_IMPORTTYPE"}]
                        [{oxinputhelp ident="D3_IMPORTER_VARIANTS_IMPORTTYPEINFO"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <select name="xmlval[IMPORTTYPE]" [{$readonly}]>
                            <option value="import"
                                    [{if $aProfile.IMPORTTYPE == "import"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_VARIANTS_IMPORTTYPE1"}]</option>
                            <option value="clearbefore"
                                    [{if $aProfile.IMPORTTYPE == "clearbefore"}]SELECTED[{/if}]>[{oxmultilang ident="D3_IMPORTER_VARIANTS_IMPORTTYPE2"}]</option>
                        </select>
                    </td>
                </tr>
                <tr style="background-color: #eee;">
                    <td class="edittext" style="padding:5px;">
                        [{oxmultilang ident="D3_IMPORTER_VARIANTS_IMPORTCOLUM"}]
                        [{oxinputhelp ident="D3_IMPORTER_VARIANTS_IMPORTCOLUMINFO"}]
                    </td>
                    <td class="edittext" style="padding:5px;">
                        <select name="xmlval[IMPORTCOLUM]" [{$readonly}]>
                            <option value="">[{oxmultilang ident="D3_IMPORTER_VARIANTS_NOASSIGN"}]</option>
                            [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                <option value="[{$key}]"
                                        [{if $aProfile.IMPORTCOLUM == $key && $aProfile.IMPORTCOLUM != ""}]selected[{/if}]>[{$name|strip_tags|truncate:70:"&nbsp;...":false}]</option>
                            [{/foreach}]
                        </select>
                    </td>
                </tr>
            [{/block}]
            <tr>
                <td class="edittext" colspan="2" style="height:1px; border: 1px #7A7A7A solid; border-bottom: 0"></td>
            </tr>
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_variants_items"}]
                [{foreach from=$aFieldList item="oField" name="fields"}]
                    [{assign var='sColor' value='#f9f9f9'}]
                    [{if $smarty.foreach.fields.iteration % 2 == 0}]
                        [{assign var='sColor' value='#eee'}]
                    [{/if}]
                    <tr style="background-color: [{$sColor}];">
                        <td class="edittext" style="padding:5px; border-left:1px #7A7A7A solid;">
                            [{$oField->fldshowname}]
                        </td>
                        <td class="edittext" style="padding:5px; border-right:1px #7A7A7A solid;">
                            <select name="xmlval[FIELD][[{$oField->fldname}]]" [{$readonly}]>
                                <option value="">[{oxmultilang ident="D3_IMPORTER_VARIANTS_NOASSIGN"}]</option>
                                [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                                    [{assign var="select" value=false}]
                                    [{foreach from=$aProfile.FIELD item="sFieldvalue" key="sFieldname"}]
                                        [{if $sFieldname == $oField->fldname}][{assign var="selectfield" value=$sFieldvalue}][{/if}]
                                    [{/foreach}]
                                    <option value="[{$key}]"
                                            [{if $selectfield == $key && $selectfield != ""}]selected[{/if}]>
                                        [{$name|strip_tags|truncate:70:"&nbsp;...":false}]
                                    </option>
                                [{/foreach}]
                            </select>
                        </td>
                    </tr>
                [{/foreach}]
            [{/block}]
            <tr>
                <td class="edittext" colspan="2" style="height:1px; border: 1px #7A7A7A solid; border-top: 0"></td>
            </tr>
            <tr>
                <td class="edittext" colspan="2">
                    <br>
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
