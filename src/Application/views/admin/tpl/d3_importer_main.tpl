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
    //-->
</script>

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

<form name="myedit" id="myedit" enctype="multipart/form-data" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="editval[d3importconfig__oxid]" value="[{$oxid}]">

    [{if $hasReachedProfileLimit}]
        <div class="extension_warning">
            [{oxmultilang ident="D3_IMPORTER_NOTICE_PROFILELIMITREACHED"}]
        </div>
    [{/if}]

    <table border="0" width="98%" style="border-collapse: collapse">

        [{if $isfailupload}]
            <tr>
                <td valign="top" class="edittext" colspan="2">
                    <div class="errorbox">[{oxmultilang ident="D3_IMPORTER_FAILUPLOAD_$isfailupload"}]</div>
                </td>
            </tr>
        [{/if}]
        <tr>
            <td style="vertical-align: top">
                <table>
                    [{block name="d3_d3importer_views_admin_tpl_d3_importer_main_leftside"}]
                        [{if $oxid != "-1"}]
                            <tr>
                                <td class="edittext" width="70" nowrap>
                                    [{oxmultilang ident="D3_IMPORTER_MAIN_OXID"}]
                                </td>
                                <td class="edittext">
                                    [{$edit->getId()}]
                                </td>
                            </tr>
                        [{/if}]
                        <tr>
                            <td class="edittext" width="70" nowrap>
                                [{oxmultilang ident="D3_IMPORTER_MAIN_DESCRIPTION"}]
                            </td>
                            <td class="edittext">
                                <input type="text"
                                       size="45"
                                       maxlength="[{$edit->d3importconfig__oxtitle->fldmax_length}]"
                                       name="editval[d3importconfig__oxtitle]"
                                       value="[{$edit->d3importconfig__oxtitle->value}]" [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" width="100" nowrap>
                                [{oxmultilang ident="D3_IMPORTER_MAIN_IMPORTFILE"}]
                            </td>
                            <td class="edittext">
                                <select name="xmlval[FILE]" [{$readonly}]>
                                    <option value="">[{oxmultilang ident="D3_IMPORTER_MAIN_NOFILE"}]</option>
                                    [{foreach from=$aImportedFiles item="file"}]
                                        <option value="[{$file}]"
                                                [{if $file == rawurldecode($aProfile.FILE)}]SELECTED[{/if}]>[{$file}]</option>
                                    [{/foreach}]
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" width="70" valign="top" nowrap>
                                [{oxmultilang ident="D3_IMPORTER_MAIN_NEWFILE"}]
                                [{oxinputhelp ident="D3_IMPORTER_MAIN_ALLOWEXT_MAXFILESIZE_HELP"}]
                            </td>
                            <td class="edittext">
                                <input type="file"
                                       size="40"
                                       maxlength="255"
                                       name="newuploadfile" [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" width="70" nowrap>
                                [{oxmultilang ident="D3_IMPORTER_MAIN_COLSEP"}]
                                [{oxinputhelp ident="D3_IMPORTER_MAIN_COLSEPDESCRIPTION_HELP"}]
                            </td>
                            <td class="edittext">
                                <input type="text" size="3" maxlength="10"
                                       name="xmlval[FILESEPARATOR]"
                                       value="[{$aProfile.FILESEPARATOR}]" [{$readonly}]>
                            </td>
                        </tr>
                        <tr>
                            <td class="edittext" width="70" nowrap>
                                [{oxmultilang ident="D3_IMPORTER_MAIN_TEXTSEP"}]
                                [{oxinputhelp ident="D3_IMPORTER_MAIN_TEXTSEPDESCRIPTION_HELP"}]
                            </td>
                            <td class="edittext">
                                <input type="text" size="3" maxlength="10"
                                       name="xmlval[TEXTSEPARATOR]"
                                       value=[{if $aProfile.TEXTSEPARATOR == '"'}]'[{$aProfile.TEXTSEPARATOR}]'[{else}]
                                "[{$aProfile.TEXTSEPARATOR}]"[{/if}] [{$readonly}]>
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
                </table>
            </td>
            <!-- Anfang rechte Seite -->
            <td valign="top" class="edittext" align="left" width="50%">
                [{if $oxid != "-1" && !$isfailupload}]
                    [{if $aFileInfo && rawurldecode($aProfile.FILE)}]
                        <table cellspacing="0" cellpadding="0" border="0">
                            [{block name="d3_d3importer_views_admin_tpl_d3_importer_main_rightside"}]
                                <tr>
                                    <td class="edittext">
                                    <span style="font-weight: bold">
                                        [{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_HEAD"}]:
                                    </span><br><br>
                                        <table cellpadding="2" style="border: 1px solid black; padding: 5px">
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_NAME"}]
                                                    :
                                                </td>
                                                <td class="edittext">
                                                    <a class="edittext"
                                                       style="text-decoration:underline; color: blue"
                                                       href="[{$oViewConf->getBaseDir()}]import/[{$aFileInfo.name}]"
                                                       target="_blank">[{$aFileInfo.name}]</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_SIZE"}]
                                                    :
                                                </td>
                                                <td class="edittext">[{$aFileInfo.size|replace:".":","}]</td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_CHANGE"}]
                                                    :
                                                </td>
                                                <td class="edittext">[{$aFileInfo.modify|date_format:"%d.%m.%Y %H:%M:%S"}]</td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_READ"}]
                                                    :
                                                </td>
                                                <td class="edittext">
                                                    [{if $aFileInfo.is_read}]
                                                        <span style="color:green">ja</span>
                                                    [{else}]
                                                        <span style="color:red">nein</span>
                                                    [{/if}]
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_WRITE"}]
                                                    :
                                                </td>
                                                <td class="edittext">
                                                    [{if $aFileInfo.is_write}]
                                                        <span style="color:green">ja</span>
                                                    [{else}]
                                                        <span style="color:red">nein</span>
                                                    [{/if}]
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">&nbsp;</td>
                                            </tr>
                                            [{if $aFileInfo.is_csv}]
                                                <tr>
                                                    <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_CSV"}]
                                                        :
                                                    </td>
                                                    <td class="edittext"><span style="color:green">ja</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_ROWS"}]
                                                        :
                                                    </td>
                                                    <td class="edittext">[{$aFileInfo.lines}]</td>
                                                </tr>
                                                <tr>
                                                    <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_COLUMS"}]
                                                        :
                                                    </td>
                                                    <td class="edittext">[{$aFileInfo.colums}] (bei Seperator
                                                        "[{$aFileInfo.seperator}]")
                                                    </td>
                                                </tr>
                                            [{else}]
                                                <tr>
                                                    <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_CSV"}]
                                                        :
                                                    </td>
                                                    <td class="edittext"><span style="color:red">unbekannt</span></td>
                                                </tr>
                                            [{/if}]
                                            <tr>
                                                <td class="edittext">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_RIGHTS"}]
                                                    :
                                                </td>
                                                <td class="edittext">[{$aFileInfo.permission}]</td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_OWNER"}]
                                                    :
                                                </td>
                                                <td class="edittext">[{$aFileInfo.owner.name}] ([{$aFileInfo.owner.uid}]
                                                    )
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="edittext">[{oxmultilang ident="D3_IMPORTER_MAIN_FIFELINFO_GROUP"}]
                                                    :
                                                </td>
                                                <td class="edittext">[{$aFileInfo.group.name}] ([{$aFileInfo.group.uid}]
                                                    )
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            [{/block}]
                        </table>
                    [{/if}]
                [{/if}]
            </td>
        </tr>
    </table>
</form>

[{if $oxid != "-1"}]
    <form name="export" id="export" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
        <input type="hidden" name="fnc" value="exportConfig">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="sProfileName" value="[{$edit->d3importconfig__oxtitle->value}]">
        <span class="d3modcfg_btn fixed icon action_download">
            <input type="submit" value="[{oxmultilang ident="D3_IMPORTER_EXPORTCONFIG"}]">
            <span></span>
        </span>
    </form>
[{/if}]

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
