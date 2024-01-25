[{block name="d3_d3importer_views_admin_tpl_forms_text"}]
    <td class="edittext">
        <label for="[{$oElement->id}]">
            [{oxmultilang ident=$oElement->translationIdent}]
        </label>
        [{oxinputhelp ident=$oElement->translationHelpIdent}]
    </td>
    <td class="edittext">
        <input id="[{$oElement->id}]"
               type="text"
               name="[{$oElement->getFormName()}]"
               value="[{$oElement->value}]" [{$readonly}]>
    </td>
[{/block}]
