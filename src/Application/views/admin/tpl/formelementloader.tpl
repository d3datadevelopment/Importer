<table>
    <tr>
        <td>
            [{block name="d3_d3importer_views_admin_tpl_formelementloader"}]
                [{foreach from=$aElements item="aGroup" key="sMultilangLegend"}]
                    <fieldset style="margin-bottom: 10px;">
                        <legend style="font-weight: bold;">[{oxmultilang ident=$sMultilangLegend}]</legend>
                        <table cellspacing="0">
                            [{foreach from=$aGroup item="oElement" key="sMultilangLegend" name="formElements"}]
                                [{assign var='sColor' value='#f9f9f9'}]
                                [{if $smarty.foreach.formElements.iteration % 2 == 0}]
                                    [{assign var='sColor' value='#eee'}]
                                [{/if}]
                                <tr style="background-color: [{$sColor}];">
                                    [{include file="d3_d3importer_views_admin_tpl_forms_`$oElement->type`.tpl" oElement=$oElement}]
                                </tr>
                            [{/foreach}]
                        </table>
                    </fieldset>
                [{/foreach}]
            [{/block}]
        </td>
    </tr>
    <tr>
        <td>
            <br/>
            <span class="d3modcfg_btn fixed icon status_ok">
                <input type="submit" class="edittext" name="saveImportProfile"
                       value="[{oxmultilang ident="GENERAL_SAVE"}]"
                       onClick="document.myedit.fnc.value='saveImportProfile'" [{$readonly}]>
                <span></span>
            </span>
            <br/>
            <br/>
        </td>
    </tr>
</table>
