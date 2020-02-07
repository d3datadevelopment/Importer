<div class="container text-left">
    [{if $showScanArea}]
        <div class="row border p-2">
            <legend class="lead">
                [{oxmultilang ident="D3_IMPORTER_PICTURE_IMPORT_STEP1"}]
            </legend>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-check">
                            <input type="hidden" name="downloadExternPictures" value="0"/>
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="downloadExternPictures"
                                   value="1"
                                   name="downloadExternPictures" [{$readonly}]>
                            <label class="form-check-label" for="downloadExternPictures">
                                [{oxmultilang ident="D3_PICTURE_EXTPICTURE_START"}]
                            </label>
                            [{oxinputhelp ident="HELP_D3_PICTURE_EXTPICTURE_START"}]
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary" name="scanPictureDir"
                                onClick="document.myedit.fnc.value='scanPictureDir'" [{$readonly}]>
                            [{oxmultilang ident="D3_PICTURE_SCANDIR_START"}]
                        </button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    [{/if}]

    <div class="form-group row border [{if $showScanArea}]border-top-0[{/if}] p-2">
        <legend class="lead">
            [{oxmultilang ident="D3_IMPORTER_PICTURE_IMPORT_STEP2"}]
        </legend>
        <div class="col-md-8">
            <button type="submit" class="btn btn-primary btn-green [{if false == $showStartButton}]disabled[{/if}]" name="doImport"
                    onClick="document.myedit.fnc.value='doImport'" [{$readonly}][{if false == $showStartButton}] disabled[{/if}]>
                [{oxmultilang ident="D3_PICTURE_IMPORT_START"}]
            </button>
        </div>
    </div>
</div>

