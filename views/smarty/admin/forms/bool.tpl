[{block name="d3_d3importer_views_admin_tpl_forms_bool"}]
    <td class="edittext">
        <input type="hidden" name="[{$oElement->getFormName()}]" value="0" [{$readonly}]>
        <label for="[{$oElement->id}]">
            [{oxmultilang ident=$oElement->translationIdent}]
        </label>
        [{oxinputhelp ident=$oElement->translationHelpIdent}]
    </td>
    <td class="edittext">
        <input id="[{$oElement->id}]"
               type="checkbox"
               name="[{$oElement->getFormName()}]"
               value="1"[{if $oElement->value}] checked[{/if}]
                [{$readonly}]>
    </td>
[{/block}]
