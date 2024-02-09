[{block name="d3_d3importer_views_admin_tpl_d3_importer_inc_nav"}]
    [{assign var='sBaseStyle' value='style="padding:5px; border: 1px solid black"'}]
    <tr>
        <td class="edittext" colspan="[{$colspan|default:3}]"
            style="text-align: center; padding:[{$padding|default:"5px"}];">
            <div class="edittext" style="padding: 10px;">
                [{if $actcsvline > 1}]
                    <a [{$sBaseStyle}] href="Javascript:ChangeLine('1');">|&lt;</a>
                    <a [{$sBaseStyle}] href="Javascript:ChangeLine('[{$actcsvline-1}]');">&lt;</a>
                [{/if}]
                <a [{$sBaseStyle}]>[{oxmultilang ident = "D3_IMPORTER_ROW"}] [{$actcsvline}] [{oxmultilang ident = "D3_IMPORTER_ROW_OF"}] [{$maxcsvline}]</a>
                [{if $actcsvline < $maxcsvline}]
                    <a [{$sBaseStyle}] href="Javascript:ChangeLine('[{$actcsvline+1}]');">&gt;</a>
                    <a [{$sBaseStyle}] href="Javascript:ChangeLine('[{$maxcsvline}]');">&gt;|</a>
                [{/if}]
            </div>
        </td>
    </tr>
[{/block}]
