[{if $blEOF}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{else}]
    [{assign var="params" value=$oViewConf->getSelfLink()|oxaddparams:"cl="|cat:$oViewConf->getActiveClassName()|cat:"&fnc=doimport&fpos=`$iFilePos`&lpos=`$iLinePos`&oxid=`$oxid`"}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign
    meta_refresh_sec="1"
    meta_refresh_url=$params
    box="box"
    }]
[{/if}]

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
        [{if $iFailImport}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_ticker_failure"}]
                <tr>
                    <td valign="top" class="edittext" colspan="2">
                        <div class="errorbox">[{oxmultilang ident="D3_IMPORTER_FAILIMPORT_$iFailImport"}]</div>
                    </td>
                </tr>
            [{/block}]
        [{else}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_ticker_success"}]
                <tr>
                    <td valign="top" class="edittext">
                        <div style="text-align: center;">
                            <h3>[{oxmultilang ident="D3_IMPORTER_IMPORT_INFO1"}]
                                : [{$iLinePos}] [{oxmultilang ident="D3_IMPORTER_IMPORT_INFO2"}] [{$aProfileMain.FILEROWS}]
                                .</h3>
                            [{if $blEOF}]
                                <h3>[{oxmultilang ident="D3_IMPORTER_IMPORT_IMPORTEND"}]</h3>
                                <h3>
                                    [{oxmultilang ident="D3_IMPORTER_IMPORT_STATISTICHEAD"}]<br>
                                    [{oxmultilang ident="D3_IMPORTER_IMPORT_STATISTIC1"}] [{$oView->getStatisticData('imported')}]
                                    <br>
                                    [{oxmultilang ident="D3_IMPORTER_IMPORT_STATISTIC2"}] [{$oView->getStatisticData('updated')}]
                                </h3>
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
