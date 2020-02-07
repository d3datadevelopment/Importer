[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]
[{assign var="where" value=$oView->getListFilter()}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]
<style>
    #liste td.listheader{
        padding:3px 0;
        text-transform:none;
    }
    #liste {
        padding : 0;
    }
</style>

<script type="text/javascript">
    <!--
    window.onload = function () {
        top.reloadEditFrame();
        [{if $updatelist == 1}]
        top.oxid.admin.updateList('[{$oxid}]');
        [{/if}]
    }
    //-->
</script>

<div id="liste">
    <form name="search" id="search" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{include file="_formparams.tpl" cl=$oViewConf->getActiveClassName() lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="" language=$actlang editlanguage=$actlang}]
        <table cellspacing="0" cellpadding="0" border="0" width="100%" align="center">
            <colgroup>
                <col width="3%">
                <col width="3%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="10%">
                <col width="2%">
            </colgroup>
            <tr>
                <td>
                    <div class="r1">
                        <div class="b1">&nbsp;</div>
                    </div>
                </td>
                <td>
                    <div class="r1">
                        <div class="b1">&nbsp;</div>
                    </div>
                </td>
                <td>
                    <input type="text" maxlength="128" name="where[d3importerdesc][oxfield]"
                           value="[{$where.d3importerdesc.oxfield}]">
                </td>
                <td>
                    <input type="text" maxlength="128" name="where[d3importerdesc][oxdesc]"
                           value="[{$where.d3importerdesc.oxdesc}]">
                </td>
                <td>
                    <input type="text" maxlength="128" name="where[d3importerdesc][oxorder]"
                           value="[{$where.d3importerdesc.oxorder}]">
                </td>
                <td>
                    <input type="submit" name="submitit" value="[{oxmultilang ident="GENERAL_SEARCH"}]"
                           onClick="Javascript:document.search.lstrt.value=0;">
                </td>
                <td>
                    <div class="r1">
                        <div class="b1">&nbsp;</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="listheader" height="15" width="30" align="center">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxisdisabled', 'asc');document.search.submit();">
                        [{oxmultilang ident="GENERAL_ACTIVTITLE"}]
                    </a>
                </td>
                <td class="listheader" align="center">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxispic', 'desc');document.search.submit();">
                        [{oxmultilang ident="D3IMPORTERDESC_OXISPIC"}]
                    </a>
                </td>
                <td class="listheader">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxfield', 'asc');document.search.submit();">
                        [{oxmultilang ident="D3IMPORTERDESC_OXFIELD"}]
                    </a>
                </td>
                <td class="listheader">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxdesc', 'asc');document.search.submit();">
                        [{oxmultilang ident="D3IMPORTERDESC_OXDESC"}]
                    </a>
                </td>
                <td class="listheader">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxdesc_1', 'asc');document.search.submit();">
                        [{oxmultilang ident="D3IMPORTERDESC_OXDESC_1"}]
                    </a>
                </td>
                <td class="listheader" colspan="2">
                    <a href="Javascript:top.oxid.admin.setSorting(document.search, 'd3importerdesc', 'oxorder', 'asc');document.search.submit();">
                        [{oxmultilang ident="D3IMPORTERDESC_OXORDER"}]
                    </a>
                </td>
            </tr>

            [{assign var="blWhite" value=""}]
            [{assign var="_cnt" value=0}]
            [{foreach from=$mylist item="listitem"}]
                [{assign var="_cnt" value=$_cnt+1}]
                <tr id="row.[{$_cnt}]">
                    [{assign var="listclass" value="listitem"|cat:$blWhite}]
                    [{if $listitem->d3importerdesc__oxid->value == $oxid}]
                        [{assign var="listclass" value="listitem4"}]
                    [{/if}]
                    <td valign="top"
                        class="[{$listclass}][{if $listitem->d3importerdesc__oxisdisabled->value == 0}] active[{/if}]"
                        height="15">
                        <div class="listitemfloating">
                            <a href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="[{$listclass}]">&nbsp</a></div>
                    </td>
                    <td valign="top"
                        class="[{$listclass}][{if $listitem->d3importerdesc__oxispic->value == 1}] active[{/if}]"
                        height="15">
                        <div class="listitemfloating">&nbsp</div>
                    </td>
                    <td valign="top" class="[{$listclass}]">
                        <div class="listitemfloating">
                            <a href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="[{$listclass}]">
                                [{$listitem->d3importerdesc__oxfield->value}]
                            </a>
                        </div>
                    </td>
                    <td valign="top" class="[{$listclass}]">
                        <div class="listitemfloating">
                            <a href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="[{$listclass}]">
                                [{$listitem->d3importerdesc__oxdesc->value}]
                            </a>
                        </div>
                    </td>
                    <td valign="top" class="[{$listclass}]">
                        <div class="listitemfloating">
                            <a href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="[{$listclass}]">
                                [{$listitem->d3importerdesc__oxdesc_1->value}]
                            </a>
                        </div>
                    </td>
                    <td valign="top" class="[{$listclass}]">
                        <div class="listitemfloating">
                            <a href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="[{$listclass}]">
                                [{$listitem->d3importerdesc__oxorder->value}]
                            </a>
                        </div>
                    </td>
                    <td class="[{$listclass}]">
                        [{if !$readonly}]
                            <a href="Javascript:top.oxid.admin.deleteThis('[{$listitem->d3importerdesc__oxid->value}]');"
                               class="delete" id="del.[{$_cnt}]"
                               title="" [{include file="help.tpl" helpid="item_delete"}]></a>
                        [{/if}]
                    </td>
                </tr>
                [{if $blWhite == "2"}]
                    [{assign var="blWhite" value=""}]
                [{else}]
                    [{assign var="blWhite" value="2"}]
                [{/if}]
            [{/foreach}]
            [{include file="pagenavisnippet.tpl" colspan="7"}]
        </table>
    </form>
</div>

<script type="text/javascript">
    if (parent.parent) {
        parent.parent.sShopTitle = "[{$actshopobj->oxshops__oxname->getRawValue()|oxaddslashes}]";
        parent.parent.sMenuItem = "[{oxmultilang ident="d3mxdesc"}]";
        parent.parent.sMenuSubItem = "[{oxmultilang ident="D3_D3IMPORTERDESC_MENUSUBITEM"}]";
        parent.parent.sWorkArea = "[{$_act}]";
        parent.parent.setTitle();
    }
</script>
<div>
    [{include file="bottomitem.tpl"}]
