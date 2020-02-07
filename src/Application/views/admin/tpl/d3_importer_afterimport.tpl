[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="d3_d3importer_views_admin_tpl_errormessages.tpl"}]

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
    <input type="hidden" name="fnc" value="doafterimport">
    <input type="hidden" name="action" value="">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    [{block name="d3_d3importer_views_admin_tpl_d3_importer_afterimport"}]
        <strong>[{$oView->getStatisticData('profile')}]</strong>
        [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_PREINFO0"}]
        <br>
        <br>
        <strong>[{$oView->getStatisticData('notimported_all')}]</strong>
        [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_PREINFO1"}] ([{$oView->getStatisticData('notimported_main')}] [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_MAINARTICLE"}]  + [{$oView->getStatisticData('notimported_variants')}] [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_VARIANTS"}]) [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_PREINFO2"}]
        <br>
        [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_PREINFO3"}]
        <br>
        <br>
        <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_TICKER"}]
                    <input type="text"
                           class="editinput"
                           size="5"
                           maxlength="10"
                           name="afterimportticker"
                           value="100"
                            [{$readonly}]>
                </td>
            </tr>
            <tr>
                <td class="edittext"><br>
                    <span class="d3modcfg_btn fixed icon status_attention">
                    <input type="submit" class="edittext" name="inactive"
                           value="[{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_DOINACTIVE"}]"
                           onClick="document.myedit.action.value='inactive'" [{$readonly}]>
                    <span></span>
                </span>
                </td>
            </tr>
            <tr>
                <td class="edittext"><br>
                    <span class="d3modcfg_btn fixed icon status_failed">
                    <input type="submit" class="edittext" name="delete"
                           value="[{oxmultilang ident="D3_IMPORTER_AFTERIMPORT_DODELETE"}]"
                           onClick="document.myedit.action.value='delete'" [{$readonly}]>
                    <span></span>
                </span>
                </td>
            </tr>
        </table>
    [{/block}]
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
