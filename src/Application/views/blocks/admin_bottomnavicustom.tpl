[{if $bottom_buttons->d3importer_new }]
    <li><a [{if !$firstitem}]class="firstitem"[{assign var="firstitem" value="1"}][{/if}] id="btn.new" href="#"
           onClick="top.oxid.admin.editThis( -1 );return false"
           target="edit">[{ oxmultilang ident="D3_TOOLTIPS_NEWIMPORTPROFIL" }]</a> |
    </li>
[{/if}]

[{$smarty.block.parent}]
