[{block name="d3_d3importer_views_admin_tpl_forms_choice"}]
    <td class="edittext">
        <label for="[{$oElement->id}]">
            [{oxmultilang ident=$oElement->translationIdent}]
        </label>
        [{oxinputhelp ident=$oElement->translationHelpIdent}]
    </td>
    <td class="edittext">
        <select name="[{$oElement->getFormName()}]" id="[{$oElement->id}]" [{$readonly}]>
            [{foreach from=$oElement->choices item="sChoice" key="choiceIdent"}]
                <option value="[{$choiceIdent}]" [{if $oElement->value == $choiceIdent}]selected[{/if}]>
                    [{assign var="ident" value="`$oElement->translationIdent`_`$sChoice`"|strtoupper}]
                    [{oxmultilang|oxtruncate:32:"..":true noerror=true alternative=$ident ident=$ident}] -
                    ([{$sChoice|default:"empty"|strip_tags|truncate:70:"&nbsp;...":false}])
                </option>
            [{/foreach}]
        </select>
    </td>
[{/block}]
