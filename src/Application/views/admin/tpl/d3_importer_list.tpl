[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]
[{assign var="where" value=$oView->getListFilter()}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<script type="text/javascript">
    <!--
    window.onload = function () {
        top.reloadEditFrame();
        [{if $updatelist == 1}]
        top.oxid.admin.updateList('[{$oxid}]');
        [{/if}]
    };
    //-->
</script>

<div id="liste">
    <form name="search" id="search" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{include file="_formparams.tpl" cl=$oViewConf->getActiveClassName() lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="" language=$actlang editlanguage=$actlang}]
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <colgroup>
                <col width="89%">
                <col width="2%">
            </colgroup>
            [{block name="d3_d3importer_views_admin_tpl_d3_importer_list_header"}]
                <tr class="listitem">
                    <td valign="top" class="listfilter first" height="20" colspan="2">
                        <div class="r1">
                            <div class="b1">
                                <div class="find">
                                    <select name="changelang"
                                            onChange="top.oxid.admin.changeLanguage();">
                                        [{foreach from=$languages item=lang}]
                                            <option value="[{$lang->id}]"
                                                    [{if $lang->selected}]SELECTED[{/if}]>[{$lang->name}]</option>
                                        [{/foreach}]
                                    </select>
                                    <input class="listedit"
                                           type="submit"
                                           name="submitit"
                                           value="[{oxmultilang ident="GENERAL_SEARCH"}]">
                                </div>
                                <input class="listedit"
                                       type="text"
                                       size="60"
                                       maxlength="128"
                                       name="where[d3importconfig][oxtitle]"
                                       value="[{$where.d3importconfig.oxtitle}]">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="listheader first"
                        height="15"
                        colspan="2">
                        &nbsp;<a href="Javascript:document.search.sort.value='oxtitle';document.search.submit();"
                                 class="listheader">[{oxmultilang ident="GENERAL_DESCRIPTION"}]</a>
                    </td>
                </tr>
            [{/block}]

            [{block name="d3_d3importer_views_admin_tpl_d3_importer_items"}]
                [{assign var="blWhite" value=""}]
                [{assign var="_cnt" value=0}]
                [{foreach from=$mylist item=listitem}]
                    [{assign var="_cnt" value=$_cnt+1}]
                    <tr id="row.[{$_cnt}]">
                        [{if $listitem->blacklist == 1}]
                            [{assign var="listclass" value=listitem3}]
                        [{else}]
                            [{assign var="listclass" value="listitem`$blWhite`"}]
                        [{/if}]
                        [{if $listitem->getId() == $oxid}]
                            [{assign var="listclass" value=listitem4}]
                        [{/if}]
                        <td valign="top" class="[{$listclass}]" height="15">
                            <div class="listitemfloating">
                                &nbsp;<a
                                        href="Javascript:top.oxid.admin.editThis('[{$listitem->d3importconfig__oxid->value}]');"
                                        class="[{$listclass}]">[{$listitem->d3importconfig__oxtitle->value}]</a>
                            </div>
                        </td>
                        <td class="[{$listclass}]">
                            [{if !$listitem->isinternal}]
                                [{if $readonly == ""}]
                                    <a href="Javascript:top.oxid.admin.deleteThis('[{$listitem->d3importconfig__oxid->value}]');"
                                       class="delete"
                                       id="del.[{$_cnt}]"
                                       title="" [{include file="help.tpl" helpid=item_delete}]></a>
                                [{/if}]
                            [{/if}]
                        </td>
                    </tr>
                    [{if $blWhite == "2"}]
                        [{assign var="blWhite" value=""}]
                    [{else}]
                        [{assign var="blWhite" value="2"}]
                    [{/if}]
                [{/foreach}]
            [{/block}]
            [{include file="pagenavisnippet.tpl" colspan="2"}]
        </table>
    </form>
</div>

[{include file="pagetabsnippet.tpl"}]

[{capture name="emptyCapture"}]
    <script type="text/javascript">
        [{capture name="d3JavaScript"}]
        if (parent.parent) {
            parent.parent.sShopTitle = "[{$actshopobj->oxshops__oxname->value}]";
            parent.parent.sMenuItem = "[{oxmultilang ident="D3_IMPORTER_MENUITEM"}]";
            parent.parent.sMenuSubItem = "[{oxmultilang ident="D3_IMPORTER_LIST_MENUSUBITEM"}]";
            parent.parent.sWorkArea = "[{$_act}]";
            parent.parent.setTitle();
        }
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.d3JavaScript}]
[{include file="bottomitem.tpl"}]
