[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]
[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]
[{include file="@d3importer/admin/errormessages.tpl"}]
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
    //-->
</script>

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassname()}]">
        <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
    </div>
</form>
<form name="myedit" id="myedit" enctype="multipart/form-data" action="[{$oViewConf->getSelfLink()}]" method="post">
    <div>
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassname()}]">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="[{$oxid}]">
        <input type="hidden" name="line" value="[{$actcsvline}]">
        <table border="0" width="98%" style="border-collapse: collapse">
            [{include file="@d3importer/admin/d3_importer_inc_nav.tpl"}]
        </table>
        [{if $maxcsvline}]
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_mall"}]
                [{include file="@d3importer/admin/formelementloader.tpl"}]
            [{/block}]
        [{/if}]
    </div>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
