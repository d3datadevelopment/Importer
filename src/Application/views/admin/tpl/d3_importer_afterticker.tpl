[{if $oView->isEOF()}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]
[{else}]
    [{assign var="params" value=$oViewConf->getSelfLink()|oxaddparams:"cl="|cat:$oViewConf->getActiveClassName()|cat:"&fnc=doafterimport&action=`$sAction`&round=`$iRound`&oxid=`$oxid`"}]
    [{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign

    meta_refresh_sec="0"
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
        [{if $oView->isFailImport()}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_ticket_failure"}]
                <tr>
                    <td valign="top" class="edittext" colspan="2">
                        <div class="errorbox">[{oxmultilang ident="D3_IMPORTER_FAILIMPORT_$iFailImport"}]</div>
                    </td>
                </tr>
            [{/block}]
        [{else}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_success"}]
                <tr>
                    <td valign="top" class="edittext">
                        <div style="text-align: center;">
                            <h3>[{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_INFO1"}] : [{$iActPos}] [{oxmultilang
                                ident="D3_IMPORTER_AFTERIMPORT_INFO2"}] [{$iAllPos}].</h3>
                            [{if $oView->isEOF()}]
                                <h3>[{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_IMPORTEND"}]</h3>
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
