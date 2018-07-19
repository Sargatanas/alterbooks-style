<div class="edit-cropper-load__area"
     id="drop-area">
    <input class="edit-cropper-load__field"
           type="file"
           id="inputImage"
           name="file"
           accept="image/*"
           onchange="handleFiles(this.files)">
    <label class="edit-cropper-preview__button edit-block-element__button button"
           for="inputImage"
           title="выбрать файл">
        Выберите файл
    </label>
    <span class="edit-cropper-load__text">
        или перетащите файл сюда
    </span>
    <span class="edit-cropper-load__text edit-cropper-load__text_drop">
        положите файл тут
    </span>
</div>