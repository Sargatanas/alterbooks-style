<div class="container">
    <div class="edit-block-header">
        <hr class="edit-block-header__hr">
        <div class="edit-block-header__title">
            аватар
        </div>
        <hr class="edit-block-header__hr">
    </div>

    <div class="edit-cropper-preview col-12 docs-preview"
         data-status="open">

        <div class="edit-cropper-preview__container">
            <div class="edit-cropper-preview__image img-preview"></div>
        </div>
    </div>

    <div class="edit-cropper"
         data-status="close">

        <div class="row">
            <div class="col-12 col-clear">
                <div class="img-container">
                    <img src="/css/img/cropper/picture.jpg"
                         id="cropperImage"
                         alt="Picture">
                </div>
            </div>
        </div>

        <div class="row" id="actions">
            <div class="edit-cropper-load col-12 col-clear docs-buttons">
                <?php
                @include 'cropper-upload.php';
                ?>

                <button  class="button"
                         style="display: none"
                         type="button"
                         data-method="getCroppedCanvas"
                         data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                    кадрировать
                </button>

                <div class="docs-data" style="display: none">
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataX">
                                X
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataX" placeholder="x">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                px
                            </span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataY">
                                Y
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataY" placeholder="y">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                px
                            </span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataWidth">
                                Width
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                px
                            </span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataHeight">
                                Height
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                px
                            </span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataRotate">
                                Rotate
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                deg
                            </span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                             <label class="input-group-text" for="dataScaleX">
                                 ScaleX
                             </label>
                        </span>
                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
                            <label class="input-group-text" for="dataScaleY">
                                ScaleY
                            </label>
                        </span>
                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                    </div>
                </div>

                <div class="col-md-3 docs-toggles" style="display: none">
                    <!-- <h3>Toggles:</h3> -->
                    <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="0.6764705882352941">
                            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 23 / 34">
                                23:34
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->
            </div><!-- /.docs-buttons -->
        </div>
    </div>

    <button class="edit-cropper-preview__button edit-block-element__button button"
            id="cropper-change">
        изменить
    </button>
</div>