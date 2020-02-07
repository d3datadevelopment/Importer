[{if $oxid != "-1" && !$isfailupload && $dirinfo}]
    <div class="container text-left">
        <div class="row border border-bottom-0 p-2">
            <legend class="lead">
                [{oxmultilang ident ="D3_PICTURE_IMPORT_INFO_1"}]
            </legend>
            <div class="col-md-8">
                <div class="row p-2">
                    <div class="col-md-4">[{oxmultilang ident ="D3_PICTURE_IMPORT_INFO_2"}]</div>
                    <div class="col-md-4">[{$dirinfo.sumfiles}]</div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4">[{oxmultilang ident ="D3_PICTURE_IMPORT_INFO_3"}]</div>
                    <div class="col-md-4">[{$dirinfo.finishedfiles}]</div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4">[{oxmultilang ident ="D3_PICTURE_IMPORT_INFO_4"}]</div>
                    <div class="col-md-4">[{$dirinfo.importedfiles}]</div>
                </div>
            </div>
        </div>
        <div class="row border border-top-0 p-2">
            <div class="col">
                [{if !$dirinfo.sumfiles}]
                    [{oxmultilang ident ="D3_PICTURE_IMPORT_NOTICE_1"}]
                [{elseif $dirinfo.sumfiles && $dirinfo.sumfiles == $dirinfo.finishedfiles}]
                    [{oxmultilang ident ="D3_PICTURE_IMPORT_NOTICE_2"}]
                [{elseif $dirinfo.finishedfiles}]
                    [{oxmultilang ident ="D3_PICTURE_IMPORT_NOTICE_3"}]
                [{elseif $dirinfo.sumfiles}]
                    [{oxmultilang ident ="D3_PICTURE_IMPORT_NOTICE_4"}]
                [{/if}]
            </div>
        </div>
    </div>
[{/if}]
