[{block name="d3_d3importer_views_admin_tpl_forms_textarea"}]
    <td class="edittext">
        <label for="[{$oElement->id}]">
            [{oxmultilang ident=$oElement->translationIdent}]
        </label>
        [{oxinputhelp ident=$oElement->translationHelpIdent}]
    </td>
    <td class="edittext">
    <textarea id="[{$oElement->id}]"
              name="[{$oElement->getFormName()}]"
              cols="35"
              rows="5" [{$readonly}]>[{$oElement->value}]</textarea>
    </td>
[{/block}]
