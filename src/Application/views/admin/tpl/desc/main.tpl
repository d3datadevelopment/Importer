[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="box"}]

<script type="text/javascript">
    <!--
    function editThis(sID) {
        var oTransfer = top.basefrm.edit.document.getElementById("transfer");
        oTransfer.oxid.value = sID;
        oTransfer.cl.value = top.basefrm.list.sDefClass;

        //forcing edit frame to reload after submit
        top.forceReloadingEditFrame();

        var oSearch = top.basefrm.list.document.getElementById("search");
        oSearch.oxid.value = sID;
        oSearch.actedit.value = 0;
        oSearch.submit();
    }
    //-->
</script>
[{assign var="readonly" value=""}]
[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="oxidCopy" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="fnc" value="save">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="editval[d3importerdesc__oxid]" value="[{$oxid}]">
    <table cellspacing="0" cellpadding="0" border="0" style="width:98%;">
        <tr>
            <td class="edittext" width="200">
                [{oxmultilang ident="D3IMPORTERDESC_OXISDISABLED"}]
            </td>
            <td class="edittext">
                <input type="hidden" name="editval[d3importerdesc__oxisdisabled]" value="1">
                <input class="edittext" type="checkbox" name="editval[d3importerdesc__oxisdisabled]"
                       value='0'
                       [{if $edit->d3importerdesc__oxisdisabled->value == 0}]checked[{/if}] [{$readonly}]>
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXISDISABLED"}]
            </td>
            <td valign="top" rowspan="7">
                <p style="padding:0 10px;">
                    [{oxmultilang ident="HELP_D3IMPORTERDESC"}]
                </p>
            </td>
        </tr>
        <tr>
            <td class="edittext" width="200">
                [{oxmultilang ident="D3IMPORTERDESC_OXISPIC"}]
            </td>
            <td class="edittext">
                <input type="hidden" name="editval[d3importerdesc__oxispic]" value="0">
                <input class="edittext" type="checkbox" name="editval[d3importerdesc__oxispic]"
                       value='1'
                       [{if $edit->d3importerdesc__oxispic->value == 1}]checked[{/if}] [{$readonly}]>
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXISPIC"}]
            </td>
        </tr>

        <tr>
            <td class="edittext">
                [{oxmultilang ident="D3IMPORTERDESC_OXFIELD"}]&nbsp;
            </td>
            <td class="edittext">
                <input type="text" class="editinput" size="32"
                       maxlength="[{$edit->d3importerdesc__oxfield->fldmax_length}]"
                       name="editval[d3importerdesc__oxfield]"
                       value="[{$edit->d3importerdesc__oxfield->value}]">
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXFIELD"}]
            </td>
        </tr>
        <tr>
            <td class="edittext">
                [{oxmultilang ident="D3IMPORTERDESC_OXDESC"}]&nbsp;
            </td>
            <td class="edittext">
                <input type="text" class="editinput" size="32"
                       maxlength="[{$edit->d3importerdesc__oxdesc->fldmax_length}]"
                       name="editval[d3importerdesc__oxdesc]"
                       value="[{$edit->d3importerdesc__oxdesc->value}]">
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXDESC"}]
            </td>
        </tr>
        <tr>
            <td class="edittext">
                [{oxmultilang ident="D3IMPORTERDESC_OXDESC_1"}]&nbsp;
            </td>
            <td class="edittext">
                <input type="text" class="editinput" size="32"
                       maxlength="[{$edit->d3importerdesc__oxdesc_1->fldmax_length}]"
                       name="editval[d3importerdesc__oxdesc_1]"
                       value="[{$edit->d3importerdesc__oxdesc_1->value}]">
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXDESC_1"}]
            </td>
        </tr>
        <tr>
            <td class="edittext">
                [{oxmultilang ident="D3IMPORTERDESC_OXORDER"}]&nbsp;
            </td>
            <td class="edittext">
                <input type="text" class="editinput" size="32"
                       maxlength="[{$edit->d3importerdesc__oxorder->fldmax_length}]"
                       name="editval[d3importerdesc__oxorder]"
                       value="[{$edit->d3importerdesc__oxorder->value}]">
                [{oxinputhelp ident="HELP_D3IMPORTERDESC_OXORDER"}]
            </td>
        </tr>
        <tr>
            <td class="edittext"></td>
            <td class="edittext" colspan="2"><br><br>
                <input type="submit" class="edittext" name="save"
                       value="[{oxmultilang ident="ARTICLE_MAIN_SAVE"}]" [{$readonly}]>
            </td>
        </tr>
    </table>
</form>

[{include file="d3_cfg_mod_bottom.tpl"}]

[{include file="bottomitem.tpl"}]
