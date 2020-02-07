[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]

<script type="text/javascript">
    <!--
    [{if $updatelist == 1}]
    UpdateList('[{$oxid}]');
    [{/if}]
    function UpdateList(sID) {
        var oSearch = parent.list.document.getElementById("search");
        oSearch.oxid.value = sID;
        oSearch.fnc.value = '';
        oSearch.submit();
    }
    function _groupExp(el) {
        var _cur = el.parentNode;
        if (_cur.className === "exp") {
            _cur.className = "";
        } else {
            _cur.className = "exp";
        }
    }
    var sOldSettingElem = '';
    //-->
</script>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="actshop" value="[{$oViewConf->getActiveShopId()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="fnc" value="save">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">

        [{include file="d3_cfg_mod_active.tpl"}]
    </div>

    [{if $oView->getValueStatus() == 'error'}]
        <hr>
        <strong>[{oxmultilang ident="D3_CFG_MOD_GENERAL_NOCONFIG_DESC"}]</strong>
        <br>
        <br>
        <span class="d3modcfg_btn fixed icon status_attention">
            <input type="submit" value="[{oxmultilang ident="D3_CFG_MOD_GENERAL_NOCONFIG_BTN"}]">
            <span></span>
        </span>
    [{else}]
        [{block name="d3_d3importer_views_admin_tpl_basesettings__main"}]
            <table width="98%" class="listTable">
                [{block name="d3_d3importer_views_admin_tpl_basesetings__settings"}]
                    <tr>
                        <th colspan="2">[{oxmultilang ident="D3_IMPORTER_MAIN_MAINSETTINGS"}]</th>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="aArticleIndentificationFields">[{oxmultilang ident="D3_IMPORTER_MAIN_ARTICLEINDENTIFICATIONFIELDS"}]</label>
                            [{oxinputhelp ident="D3_IMPORTER_MAIN_ARTICLEINDENTIFICATIONFIELDS_HELP"}]
                        </td>
                        <td>
                            [{assign var='aFields' value=$oView->getArticleFields()}]
                            <input type="hidden" name="value[aArticleIndentificationFields]" value="">
                            <select id="aArticleIndentificationFields"
                                    name="value[aArticleIndentificationFields][]"
                                    size="10" multiple
                                    style="width: 250px;" [{$readonly}]>
                                [{foreach from=$aFields item=aField}]
                                    [{assign var="ident" value="GENERAL_ARTICLE_"|cat:$aField->title}]
                                    [{assign var="ident" value=$ident|oxupper }]
                                    <option value="[{$aField->title}]" [{if $aField->selected == 1}] selected[{/if}]>
                                        [{$aField->title}]
                                    </option>
                                [{/foreach}]
                            </select>
                        </td>
                    </tr>
                    [{assign var='aDefaultBooleanSettings' value=$edit->getValue('aDefaultBooleanSettings')}]
                    <tr>
                        <td valign="top">
                            <label for="aDefaultBooleanSettingsaTrueSettings">
                                [{oxmultilang ident="D3_IMPORTER_CONFIG_ATRUESETTINGS"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_ATRUESETTINGS_HELP"}]
                        </td>
                        <td>
                            [{if is_array($aDefaultBooleanSettings) && is_array($aDefaultBooleanSettings.aTrueSettings)}]
                                [{assign var="sTrueSettings" value="\n"|implode:$aDefaultBooleanSettings.aTrueSettings}]
                            [{/if}]
                            [{*2014-05-06 KH: textarea-element must be in one line*}]
                            <textarea name="value[aDefaultBooleanSettings][aTrueSettings]"
                                      id="aDefaultBooleanSettingsaTrueSettings"
                                      cols="60"
                                      rows="5">[{$sTrueSettings}]</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="aDefaultBooleanSettingsaFalseSettings">
                                [{oxmultilang ident="D3_IMPORTER_CONFIG_AFALSESETTINGS"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_AFALSESETTINGS_HELP"}]
                        </td>
                        <td>
                            [{if is_array($aDefaultBooleanSettings) && is_array($aDefaultBooleanSettings.aFalseSettings)}]
                                [{assign var="sFalseSettings" value="\n"|implode:$aDefaultBooleanSettings.aFalseSettings}]
                            [{/if}]
                            [{*2014-05-06 KH: textarea-element must be in one line*}]
                            <textarea name="value[aDefaultBooleanSettings][aFalseSettings]"
                                      id="aDefaultBooleanSettingsaFalseSettings"
                                      cols="60"
                                      rows="5">[{$sFalseSettings}]</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            [{oxmultilang ident="D3_IMPORTER_PICTURE_PICSPERTICK"}]
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_PICSPERTICK_HELP"}]
                        </td>
                        <td>
                            [{assign var='aPictureSettings' value=$edit->getValue('aPictureSettings')}]
                            <label>
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT"}]
                                <input name="value[aPictureSettings][iMaxPictureCount]"
                                       value="[{$aPictureSettings.iMaxPictureCount|default:50}]">
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT_2"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_MAXPICTURECOUNT_HELP"}]
                            <label>
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT"}]
                                <input name="value[aPictureSettings][iMaxImportCount]"
                                       value="[{$aPictureSettings.iMaxImportCount|default:5}]">
                                [{oxmultilang ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT_2"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_PICTURE_MAXIMPORTCOUNT_HELP"}]
                        </td>
                    </tr>
                    [{assign var='aArticleSettings' value=$edit->getValue('aArticleSettings')}]
                    <tr>
                        <td valign="top" class="edittext">
                            <label for="aArticleSettings">
                                [{oxmultilang ident="D3_IMPORTER_CONFIG_AARTICLESETTINGS"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_AARTICLESETTINGS_HELP"}]
                        </td>
                        <td class="edittext">
                            [{if is_array($aArticleSettings)}]
                                [{assign var="sArticleSettings" value="\n"|implode:$aArticleSettings}]
                            [{/if}]
                            <textarea id="aArticleSettings"
                                      rows="5"
                                      cols="60"
                                      name="value[aArticleSettings]">[{$sArticleSettings}]</textarea>
                        </td>
                    </tr>
                    [{assign var='aDefaultImportConfig' value=$edit->getValue('aDefaultImportConfig')}]
                    <tr>
                        <td valign="top">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_IMPORTTICKER"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_IMPORTTICKER_HELP"}]
                        </td>
                        <td>
                            <label>
                                <input name="value[aDefaultImportConfig][iLinesPerRun]"
                                       value="[{$aDefaultImportConfig.iLinesPerRun|default:100}]">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_FILEHEADERCOUNT"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_FILEHEADERCOUNT_HELP"}]
                        </td>
                        <td>
                            <label>
                                <input name="value[aDefaultImportConfig][iNotImportetNubersOfFileHeader]"
                                       value="[{$aDefaultImportConfig.iNotImportetNubersOfFileHeader|default:0}]">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="aCategorieIndentificationFields">
                                [{oxmultilang ident="D3_IMPORTER_MAIN_CATEGORIE_INDENTIFICATIONFIELDS"}]
                            </label>
                            [{oxinputhelp ident="D3_IMPORTER_MAIN_CATEGORIE_INDENTIFICATIONFIELDS_HELP"}]
                        </td>
                        <td>
                            [{assign var='aFields' value=$oView->getCategorieFields()}]
                            <input type="hidden" name="value[aCategorieIndentificationFields]" value="">
                            <select id="aCategorieIndentificationFields"
                                    name="value[aCategorieIndentificationFields][]"
                                    size="10" multiple
                                    style="width: 250px;" [{$readonly}]>
                                [{foreach from=$aFields item=aField}]
                                    <option value="[{$aField->title}]" [{if $aField->selected == 1}] selected[{/if}]>
                                        [{$aField->title}]
                                    </option>
                                [{/foreach}]
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_OVERRIDEEXTERNPICTURES"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_OVERRIDEEXTERNPICTURES_HELP"}]
                        </td>
                        <td>
                            <input type="hidden"
                                   name="value[aPictureSettings][iOverrideExternPictures]"
                                   value="0">
                            <label>
                                <input type="checkbox"
                                       name="value[aPictureSettings][iOverrideExternPictures]"
                                        [{if $aPictureSettings.iOverrideExternPictures}]
                                            checked
                                        [{/if}]
                                       value="1">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            [{oxmultilang ident="D3_IMPORTER_CONFIG_BLDELETEMASTERPICTURE"}]
                            [{oxinputhelp ident="D3_IMPORTER_CONFIG_BLDELETEMASTERPICTURE_HELP"}]
                        </td>
                        <td>
                            <input type="hidden"
                                   name="value[aPictureSettings][blDeleteMasterPicture]"
                                   value="0">
                            <label>
                                <input type="checkbox"
                                       name="value[aPictureSettings][blDeleteMasterPicture]"
                                        [{if $aPictureSettings.blDeleteMasterPicture}]
                                            checked
                                        [{/if}]
                                       value="1">
                            </label>
                        </td>
                    </tr>
                [{/block}]
            </table>
        [{/block}]
        <div>
            <span class="d3modcfg_btn icon status_ok">
                <input type="submit" name="save" value="[{oxmultilang ident="D3_CFG_MOD_GENERAL_SAVE"}]">
                <span></span>
            </span>
            <br>
            <br>
        </div>
    [{/if}]
</form>

[{include file="d3_cfg_mod_inc.tpl"}]

[{capture name="emptyCapture"}]
    <script type="text/javascript">
        [{capture name="d3JavaScript"}]
        if (parent.parent) {
            parent.parent.sShopTitle = "[{$actshopobj->oxshops__oxname->getRawValue()|oxaddslashes}]";
            parent.parent.sMenuItem = "[{oxmultilang ident="d3mximporter"}]";
            parent.parent.sMenuSubItem = "[{oxmultilang ident="d3tbclimporter_cfg_main"}]";
            parent.parent.sWorkArea = "[{$_act}]";
            parent.parent.setTitle();
        }
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.d3JavaScript}]
[{include file="bottomitem.tpl"}]
