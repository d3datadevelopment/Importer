[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{oxscript include="js/libs/jquery.min.js"}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]

<style type="text/css">
    #pathToMove {
        width: 99%;
    }
</style>
[{include file="d3_d3importer_views_admin_tpl_errormessages.tpl"}]

[{capture name="doNotShow"}]
<script type="text/javascript">
    [{capture name="javaScript"}]
    [{if $updatelist == 1}]
    UpdateList('[{$oxid}]');
    [{/if}]
    function UpdateList(sID) {
        var oSearch = parent.list.document.getElementById("search");
        oSearch.oxid.value = sID;
        oSearch.submit();
    }
    var jQueryNoConflict= $.noConflict();
    jQueryNoConflict('#picturesActionAfterImport').live('change', function(e) {
        var pathToMove = jQueryNoConflict('#pathToMove');
        pathToMove.attr('disabled', 'disabled');
        if(e.target.options[e.target.selectedIndex].value === 'move') {
            pathToMove.removeAttr('disabled');
        }
    });

    function startUp() {
        var pathToMove = jQueryNoConflict('#pathToMove');
        pathToMove.attr('disabled',
            'disabled');
        jQueryNoConflict('#picturesActionAfterImport option:selected').each(function () {
            if (jQueryNoConflict(this).val() === 'move') {
                pathToMove.removeAttr('disabled');
            }
        });
    }
    startUp();
    [{/capture}]
</script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

[{assign var="iError" value=$oView->getConfigFailure()}]
[{if $iError}]
    [{block name="d3_d3importer_views_admin_tpl_d3_picture_main_failure"}]
        <tr>
            <td valign="top" colspan="2">
                <div class="errorbox">[{oxmultilang ident="D3_PICTURE_FAILCONFIG_$iError"}]</div>
            </td>
        </tr>
    [{/block}]
[{else}]
    <form name="myedit" id="myedit" enctype="multipart/form-data" action="[{$oViewConf->getSelfLink()}]" method="post">
        <div>
            [{$oViewConf->getHiddenSid()}]
            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
            <input type="hidden" name="fnc" value="">
            <input type="hidden" name="oxid" value="[{$oxid}]">
            <input type="hidden" name="editval[d3importconfig__oxid]" value="[{$oxid}]">
        </div>
        <table cellspacing="0" cellpadding="0" border="0" width="98%">
            [{if $isfailupload}]
                <tr>
                    <td valign="top" colspan="2">
                        <div class="errorbox">[{oxmultilang ident="D3_IMPORTER_FAILUPLOAD_$isfailupload"}]</div>
                    </td>
                </tr>
            [{/if}]

            [{if $oxid === "-1"}]
                <tr>
                    <td>
                        <div class="messagebox">
                            [{oxmultilang ident="D3_PICTURE_IMPORT_LOAD_PROFILE"}]
                        </div>
                    </td>
                </tr>
            [{else}]
                [{block name="d3_d3importer_views_admin_tpl_d3_picture_main_items"}]
                    [{foreach name="picture" from=$aProfile.aXMLPictureParams item="aActualField" key="key"}]
                        [{if is_array($aActualField)}]
                            <tr>
                                <td style="border: 1px #7A7A7A solid; padding:10px; border-right: 0;">
                                    [{oxmultilang ident="D3_PICTURE_IMPORTFIELD"}]
                                </td>
                                <td
                                        style="border: 1px #7A7A7A solid; padding:10px; border-right: 0; border-left: 0;">
                                    <select name="xmlpictureval[[{$key}]][IMPORTFIELD]" [{$readonly}]>
                                        <option value="">[{oxmultilang ident="D3_PICTURE_NOASSIGN"}]</option>
                                        [{foreach from=$importfieldlist key="realname" item="showname"}]
                                            <option value="[{$realname}]"
                                                    [{if $aActualField.IMPORTFIELD == $realname}]SELECTED[{/if}]>[{$showname}]</option>
                                        [{/foreach}]
                                    </select>
                                </td>
                                <td style="border: 1px #7A7A7A solid; padding:10px; border-right: 0; border-left: 0;">
                                    <h1>=&gt;</h1>
                                </td>
                                <td style="border: 1px #7A7A7A solid; padding:10px; border-left: 0;">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td class="edittext">
                                                <label>
                                                    <input type="checkbox"
                                                           name="xmlpictureval[[{$key}]][IMAGEFIELDS][oxthumb]"
                                                           value="1"
                                                            [{$readonly}]
                                                            [{if $aActualField.IMAGEFIELDS.oxthumb}]checked[{/if}]>
                                                    [{$imagefieldlist->oxthumb->fldshowname}]
                                                </label>
                                                <label>
                                                    <input type="checkbox"
                                                           name="xmlpictureval[[{$key}]][IMAGEFIELDS][oxicon]"
                                                            [{$readonly}]
                                                           value="1"
                                                            [{if $aActualField.IMAGEFIELDS.oxicon}]checked[{/if}]>
                                                    [{$imagefieldlist->oxicon->fldshowname}]
                                                </label>
                                            </td>
                                        </tr>
                                        [{if $imagefieldlist->oxzoom1}]
                                            <tr>
                                                <td class="edittext">
                                                    [{section name="picRow" start=1 loop=$iPicCount+1 step=1}]
                                                        [{assign var="iIndex" value=$smarty.section.picRow.index}]
                                                        [{assign var='sFieldName' value="oxzoom$iIndex"}]
                                                        <label>
                                                            <input type="checkbox"
                                                                   name="xmlpictureval[[{$key}]][IMAGEFIELDS][[{$sFieldName}]]"
                                                                    [{$readonly}]
                                                                   value="1"
                                                                    [{if $aActualField.IMAGEFIELDS.$sFieldName}]checked[{/if}]>
                                                            [{oxmultilang ident="D3_PICTURE_IMPORTFIELD_OXZOOM"}] [{$iIndex}]
                                                        </label>
                                                        [{if $iIndex % 6 == 0}]<br>[{/if}]
                                                    [{/section}]
                                                </td>
                                            </tr>
                                        [{/if}]
                                        <tr>
                                            <td class="edittext">
                                                [{section name="picRow" start=1 loop=$iPicCount+1 step=1}]
                                                    [{assign var="iIndex" value=$smarty.section.picRow.index}]
                                                    [{assign var='sFieldName' value="oxpic$iIndex"}]
                                                    <label>
                                                        <input type="checkbox"
                                                               name="xmlpictureval[[{$key}]][IMAGEFIELDS][[{$sFieldName}]]"
                                                                [{$readonly}]
                                                               value="1"
                                                                [{if $aActualField.IMAGEFIELDS.$sFieldName}]checked[{/if}]>
                                                        [{oxmultilang ident="D3_PICTURE_IMPORTFIELD_OXPIC"}] [{$iIndex}]
                                                    </label>
                                                    [{if $iIndex % 6 == 0}]<br>[{/if}]
                                                [{/section}]
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">&nbsp;</td>
                            </tr>
                            [{assign var="sNextKey" value=$key+1}]
                        [{/if}]
                    [{/foreach}]
                    <tr>
                        <td style="border: 1px #7A7A7A solid; padding:10px; border-right: 0;">
                            [{oxmultilang ident="D3_PICTURE_IMPORTFIELD"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; padding:10px; border-right: 0; border-left: 0;">
                            <select name="xmlpictureval[[{$sNextKey}]][IMPORTFIELD]" [{$readonly}]>
                                <option value="">[{oxmultilang ident="D3_PICTURE_NOASSIGN"}]</option>
                                [{foreach from=$importfieldlist key="realname" item="showname"}]
                                    <option value="[{$realname}]">[{$showname}]</option>
                                [{/foreach}]
                            </select>
                        </td>
                        <td style="border: 1px #7A7A7A solid; padding:10px; border-right: 0; border-left: 0;">
                            <h1>=&gt;</h1>
                        </td>
                        <td style="border: 1px #7A7A7A solid; padding:10px; border-left: 0;">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td class="edittext">
                                        <label>
                                            <input type="checkbox"
                                                    [{$readonly}]
                                                   name="xmlpictureval[[{$sNextKey}]][IMAGEFIELDS][oxthumb]"
                                                   value="1">
                                            [{$imagefieldlist->oxthumb->fldshowname}]
                                        </label>
                                        <label>
                                            <input type="checkbox"
                                                    [{$readonly}]
                                                   name="xmlpictureval[[{$sNextKey}]][IMAGEFIELDS][oxicon]"
                                                   value="1">
                                            [{$imagefieldlist->oxicon->fldshowname}]
                                        </label>
                                    </td>
                                </tr>
                                [{if $imagefieldlist->oxzoom1}]
                                    <tr>
                                        <td class="edittext">
                                            [{section name="picRow" start=1 loop=$iPicCount+1 step=1}]
                                                [{assign var="iIndex" value=$smarty.section.picRow.index}]
                                                [{assign var='sFieldName' value="oxzoom$iIndex"}]
                                                <label>
                                                    <input type="checkbox"
                                                            [{$readonly}]
                                                           name="xmlpictureval[[{$sNextKey}]][IMAGEFIELDS][[{$sFieldName}]]"
                                                           value="1">
                                                    [{oxmultilang ident="D3_PICTURE_IMPORTFIELD_OXZOOM"}] [{$iIndex}]
                                                </label>
                                                [{if $iIndex % 6 == 0}]<br>[{/if}]
                                            [{/section}]
                                        </td>
                                    </tr>
                                [{/if}]
                                <tr>
                                    <td class="edittext">
                                        [{section name="picRow" start=1 loop=$iPicCount+1 step=1}]
                                            [{assign var="iIndex" value=$smarty.section.picRow.index}]
                                            [{assign var='sFieldName' value="oxpic$iIndex"}]
                                            <label>
                                                <input type="checkbox"
                                                        [{$readonly}]
                                                       name="xmlpictureval[[{$sNextKey}]][IMAGEFIELDS][[{$sFieldName}]]"
                                                       value="1">
                                                [{oxmultilang ident="D3_PICTURE_IMPORTFIELD_OXPIC"}] [{$iIndex}]
                                            </label>
                                            [{if $iIndex % 6 == 0}]<br>[{/if}]
                                        [{/section}]
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                [{/block}]
                [{block name="d3_d3importer_views_admin_tpl_d3_picture_main_settings"}]
                    [{assign var='aPictureSettings' value=$edit->getDefaultPictureSettings()}]
                    <tr>
                        <td class="edittext"
                            valign="top"
                            style="border: 1px #7A7A7A solid; padding:5px 10px 10px; border-right: 0; border-bottom:0;">
                            [{oxmultilang ident="D3_IMPORTER_PICTURE_PICSPERTICK"}]
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_PICSPERTICK_HELP"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; border-left:0; padding:5px 10px 10px;border-bottom:0;"
                            colspan="3">
                            <label>
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT"}]
                                <input name="aPictureSettings[iMaxPictureCount]"
                                        [{$readonly}]
                                       value="[{$aPictureSettings.iMaxPictureCount|default:50}]">
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT_2"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT_HELP"}]
                            <label>
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT"}]
                                <input id="aPictureSettings[iMaxImportCount]"
                                       name="aPictureSettings[iMaxImportCount]"
                                        [{$readonly}]
                                       value="[{$aPictureSettings.iMaxImportCount|default:5}]">
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT_2"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT_HELP"}]

                        </td>
                    </tr>
                    <tr>
                        <td class="edittext"
                            valign="top"
                            style="border: 1px #7A7A7A solid; padding:5px 10px 10px; border-right: 0; border-bottom:0;">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_OVERRIDEEXTERNPICTURES"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_OVERRIDEEXTERNPICTURES_HELP"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; border-left:0; padding:5px 10px 10px;border-bottom:0;" colspan="3">
                            [{assign var="iOverrideExternPictures" value=$aProfile.aPictureSettings.iOverrideExternPictures}]
                            [{if $iOverrideExternPictures == ""}]
                                [{assign var="iOverrideExternPictures" value=$aPictureSettings.iOverrideExternPictures}]
                            [{/if}]
                            <input type="hidden"
                                    [{$readonly}]
                                   name="aPictureSettings[iOverrideExternPictures]"
                                   value="0">
                            <label>
                                <input type="checkbox"
                                        [{$readonly}]
                                       name="aPictureSettings[iOverrideExternPictures]"
                                        [{if $iOverrideExternPictures}]
                                            checked
                                        [{/if}]
                                       value="1">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext"
                            valign="top"
                            style="border: 1px #7A7A7A solid; padding:5px 10px 10px; border-right: 0;border-bottom:0;">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_BLDELETEMASTERPICTURE"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_BLDELETEMASTERPICTURE_HELP"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; border-left:0; padding:5px 10px 10px;border-bottom:0;" colspan="3">

                            [{assign var="blDeleteMasterPicture" value=$aProfile.aPictureSettings.blDeleteMasterPicture}]
                            [{if $blDeleteMasterPicture == ""}]
                                [{assign var="blDeleteMasterPicture" value=$aPictureSettings.blDeleteMasterPicture}]
                            [{/if}]
                            <input type="hidden"
                                    [{$readonly}]
                                   name="aPictureSettings[blDeleteMasterPicture]"
                                   value="0">
                            <label>
                                <input type="checkbox"
                                        [{$readonly}]
                                       name="aPictureSettings[blDeleteMasterPicture]"
                                        [{if $blDeleteMasterPicture}]
                                            checked
                                        [{/if}]
                                       value="1">
                            </label>
                        </td>
                    </tr>
                    [{assign var='disabledInDemo' value=""}]
                    [{if $isImporterDemoMode}]
                        [{assign var='disabledInDemo' value="disabled=\"disabled\""}]
                    [{/if}]
                    <tr>
                        <td class="edittext"
                            valign="top"
                            style="border: 1px #7A7A7A solid; padding:5px 10px 10px; border-right: 0;border-bottom:0;">
                            <label for="picturesActionAfterImport">
                                [{oxmultilang ident="D3_IMPORTER_CONFIG_PATHTOMOVE"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_PATHTOMOVE_HELP"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; border-left:0; padding:5px 10px 10px;border-bottom:0;" colspan="3">
                            [{assign var="picturesActionAfterImport" value=$aProfile.aPictureSettings.picturesActionAfterImport}]
                            [{if $picturesActionAfterImport == ""}]
                                [{assign var="picturesActionAfterImport" value=$aPictureSettings.picturesActionAfterImport}]
                            [{/if}]
                                <select [{$readonly}] [{$disabledInDemo}]
                                        name="aPictureSettings[picturesActionAfterImport]"
                                        id="picturesActionAfterImport"
                                        id="picturesActionAfterImport"
                                >
                                    <option value="">-</option>
                                    <option value="delete" [{if $picturesActionAfterImport === "delete"}] selected[{/if}]>[{oxmultilang ident="D3_IMPORTER_CONFIG_PICTURESACTIONAFTERIMPORT_DELETE"}]</option>
                                    <option value="move" [{if $picturesActionAfterImport === "move"}] selected[{/if}]>[{oxmultilang ident="D3_IMPORTER_CONFIG_PICTURESACTIONAFTERIMPORT_MOVE"}]</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext"
                            valign="top"
                            style="border: 1px #7A7A7A solid; padding:5px 10px 10px; border-right: 0;border-top:0;">
                            <label for="picturesActionAfterImport">
                                [{oxmultilang ident="D3_IMPORTER_CONFIG_FOLDER"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_FOLDER_HELP"}]
                        </td>
                        <td style="border: 1px #7A7A7A solid; border-left:0; padding:5px 10px 10px;border-top:0;" colspan="3">
                            [{assign var="pathToMove" value=$aProfile.aPictureSettings.pathToMove}]
                            [{if $pathToMove == ""}]
                                [{assign var="pathToMove" value=$aPictureSettings.pathToMove}]
                            [{/if}]
                            <label>
                                <input type="text"
                                       [{$readonly}] [{$disabledInDemo}]
                                       name="aPictureSettings[pathToMove]"
                                       id="pathToMove"
                                       value="[{$pathToMove}]"
                                >
                            </label>
                        </td>
                    </tr>
                [{/block}]
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="4">
                    <span class="d3modcfg_btn fixed icon status_ok">
                        <input type="submit" name="saveImportProfile" value="[{oxmultilang ident="GENERAL_SAVE"}]"
                               onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                        <span></span>
                    </span>
                    </td>
                </tr>
            [{/if}]
        </table>
    </form>
[{/if}]
[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
