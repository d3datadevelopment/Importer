[{if $dirinfo.sumfiles && $dirinfo.sumfiles > $dirinfo.finishedfiles}]
    [{assign var='showStartButton' value=true}]
[{/if}]
[{if $blEOD}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{else}]
    [{assign var="params" value=$oViewConf->getSelfLink()|oxaddparams:"cl="|cat:$oViewConf->getActiveClassName()|cat:"&fnc=doimport&d3cf=`$iCheckedFiles`&d3if=`$iImportedFiles`&oxid=`$oxid`"}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign

    meta_refresh_sec="1"
    meta_refresh_url=$params
    box="box"
    }]
[{/if}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="d3_importer_application_views_admin_tpl_bootstrap.tpl"}]

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
    <input type="hidden" name="line" value="[{$actcsvline}]">

    <table cellspacing="0" cellpadding="0" border="0" width="98%">

        [{assign var="iError" value=$oView->getConfigFailure()}]
        [{if $iError}]
            [{block name="d3_d3importer_views_admin_tpl_d3_picture_ticket_failure"}]
                <tr>
                    <td valign="top" class="edittext" colspan="2">
                        <div class="alert alert-danger">[{oxmultilang ident="D3_PICTURE_FAILCONFIG_$iError"}]</div>
                    </td>
                </tr>
            [{/block}]
            <tr>
                [{block name="d3_d3importer_views_admin_tpl_d3_picture_import_options"}]
                    <td valign="top" class="edittext" width="50%">
                        [{include file="d3_importer_application_views_admin_tpl_options_picture_import.tpl" showStartButton=$showStartButton|default:false showScanArea=true}]
                    </td>
                [{/block}]
                [{block name="d3_d3importer_views_admin_tpl_d3_picture_import_results"}]
                    <td valign="top" class="edittext" align="left" width="50%">
                        [{include file="d3_importer_application_views_admin_tpl_options_picture_results.tpl"}]
                    </td>
                [{/block}]
            </tr>
        [{else}]
            [{block name="d3_d3importer_views_admin_tpl_d3_picture_success"}]
                <tr>
                    <td valign="top" class="edittext">
                        <div style="text-align: center;">
                            <h3>[{oxmultilang ident="D3_PICTURE_IMPORT_INFO1"}]
                                : [{$iCheckedFiles}] [{oxmultilang ident="D3_PICTURE_IMPORT_INFO2"}] [{$iSumFiles}]
                                .</h3>

                            <h3>[{oxmultilang ident="D3_PICTURE_IMPORT_INFO3"}] : [{$iImportedFiles}]</h3>
                            [{if $blEOD}]
                                <h3>[{oxmultilang ident="D3_PICTURE_IMPORT_IMPORTEND"}]</h3>
                                [{include file="d3_importer_application_views_admin_tpl_options_picture_import.tpl" showStartButton=$showStartButton|default:false showScanArea=true}]
                            [{/if}]
                            [{assign var="Errorlist" value=$oView->getDisplayErrors()}]

                            [{if count($Errorlist)>0}]
                                <div class="errorbox inbox">
                                    [{foreach from=$Errorlist item="oEr" key="key"}]
                                        [{assign var="errortype" value=$oEr->sErrorType}]
                                        [{assign var="errortextident" value="D3_PICTURE_IMPORT_ERRORTYPE_$errortype"}]
                                        <p> [{$oEr->sText}] -> '[{oxmultilang ident=$errortextident}]'</p>
                                    [{/foreach}]
                                </div>
                            [{/if}]
                        </div>
                    </td>
                </tr>
            [{/block}]
        [{/if}]
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
