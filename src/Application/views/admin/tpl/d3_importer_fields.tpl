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
    function ChangeLine(iLine) {
        var oFormEdit = document.getElementById("myedit");
        oFormEdit.line.value = iLine;
        oFormEdit.fnc.value = '';
        oFormEdit.submit();
    }
[{oxscript add="
    var checkboxes = jQuery(\"#d3ImporterTableFields input:checkbox\");
    jQuery(\"#check-all\").click(function () {
        jQuery(checkboxes).attr('checked', $(this).attr('checked'));
    });
"}]
    //-->
</script>
<style type="text/css">
    <!--
    select{
        max-width: 375px;
    }
    -->
</style>

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
        <input type="hidden" name="fnc" value="save">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="line" value="[{$actcsvline}]">
    </div>
    <table border="0" width="98%" style="border-collapse: collapse" id="d3ImporterTableFields">
        [{include file="d3_importer_inc_nav.tpl" colspan="2"}]
        [{block name="d3_d3importer_views_admin_tpl_d3_importer_fields"}]
            <tr>
                <td valign="top" class="edittext" colspan="2">
                    [{oxmultilang ident="D3_IMPORTER_FIELDS_XXXX"}]
                    [{oxinputhelp ident="D3_IMPORTER_FIELDS_XXXX_HELP"}]<br><br>
                </td>
            </tr>
            <tr>
                <td valign="top" class="edittext">
                    <table cellspacing="0" cellpadding="0" style="border-right: 1px solid #7A7A7A;">
                        <tr>
                            <td valign="top" class="edittext" colspan="3">
                                <label><input id="check-all" type="checkbox">[{oxmultilang ident="D3_IMPORTER_FIELDS_CHECKALL"}]</label>
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_COLUM"}]
                            </td>
                            <td class="edittext" style="text-align: center; max-width: 30%;">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_COLUMASSIGN"}]
                            </td>
                            <td class="edittext">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_UPDATE"}]
                                [{oxinputhelp ident="D3_IMPORTER_FIELDS_INFOTEXT_HELP"}]
                            </td>
                        </tr>
                        [{assign var="keys" value="0"}]
                        [{assign var="color" value="1"}]
                        [{assign var=blShowRow2 value=false}]
                        [{* Wenn wir bei der Haelfe der CSV-Spalten sind, kommt Spalte 2 der Tabelle *}]
                        [{math equation="total / 2" total=$aCSVLines|@count assign="total"}]

                    [{foreach name="csvline" from=$aCSVLines item="name" key="key"}]
                    <tr>
                        <td class="edittext" style="[{if $color}]background-color:#F0F0F0;[{/if}]">
                            [{$smarty.foreach.csvline.iteration}] - [{$oView->getColumName($smarty.foreach.csvline.iteration)}]
                        </td>
                        <td class="edittext" style="[{if $color}]background-color:#F0F0F0;[{/if}]">
                            &quot;[{$name|strip_tags|truncate:70:"&nbsp;...":false}]&quot;:<br>
                            <select name="import[[{$key}]]" class="editinput" [{$readonly}]>
                                <option value="">--</option>
                                [{foreach from=$aFieldList item="field"}]
                                    <option value="[{$field->fldname}]"
                                        [{if isset($aProfile.fields.$key) && $aProfile.fields.$key == $field->fldname}]selected[{/if}]>[{$field->fldshowname}] ([{$field->fldname}])
                                    </option>
                                [{/foreach}]
                            </select>
                        </td>
                        <td class="edittext"
                            style="vertical-align: middle; text-align:center;[{if $color}]background-color:#F0F0F0;[{/if}]">
                            <input type="checkbox"
                                   name="update[[{$key}]]"
                                   value="1"
                                [{$readonly}]
                                   [{if $aProfile.update.$key}]checked[{/if}]
                                   class="edittext"></td>
                    </tr>

                        [{if $color}]
                            [{assign var="color" value=0}]
                        [{else}]
                            [{assign var="color" value=1}]
                        [{/if}]

                        [{if !$blShowRow2 && $smarty.foreach.csvline.iteration >= $total}]
                        [{assign var=blShowRow2 value=true}]
                        [{assign var="color" value="1"}]
                    </table>
                </td>
                <!-- Anfang rechte Seite -->
                <td valign="top" class="edittext">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top" class="edittext" colspan="3">
                                &nbsp;
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_COLUM"}]
                            </td>
                            <td class="edittext" style="text-align: center; max-width: 30%;">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_COLUMASSIGN"}]
                            </td>
                            <td class="edittext">
                                [{oxmultilang ident="D3_IMPORTER_FIELDS_UPDATE"}]
                                [{oxinputhelp ident="D3_IMPORTER_FIELDS_INFOTEXT_HELP"}]
                            </td>
                        </tr>
                        [{/if}]
                        [{/foreach}]
                    </table>
                </td>
            </tr>
        [{/block}]
        <tr>
            <td class="edittext" colspan="2" style="padding:5px;">
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
