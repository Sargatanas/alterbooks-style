function cropperMain(aspect_ratio) {

    'use strict';

    let Cropper = window.Cropper;
    let URL = window.URL || window.webkitURL;
    let container = document.querySelector('.img-container');
    let image = container.getElementsByTagName('img').item(0);
    let download = document.getElementById('download');
    let actions = document.getElementById('actions');
    let dataX = document.getElementById('dataX');
    let dataY = document.getElementById('dataY');
    let dataHeight = document.getElementById('dataHeight');
    let dataWidth = document.getElementById('dataWidth');
    let dataRotate = document.getElementById('dataRotate');
    let dataScaleX = document.getElementById('dataScaleX');
    let dataScaleY = document.getElementById('dataScaleY');
    let options = {
        aspectRatio: aspect_ratio,
        preview: '.img-preview',
        ready: function (e) {
        },
        cropstart: function (e) {
        },
        cropmove: function (e) {
        },
        cropend: function (e) {
        },
        crop: function (e) {
            let data = e.detail;

            dataX.value = Math.round(data.x);
            dataY.value = Math.round(data.y);
            dataHeight.value = Math.round(data.height);
            dataWidth.value = Math.round(data.width);
            dataRotate.value = typeof data.rotate !== 'undefined' ? data.rotate : '';
            dataScaleX.value = typeof data.scaleX !== 'undefined' ? data.scaleX : '';
            dataScaleY.value = typeof data.scaleY !== 'undefined' ? data.scaleY : '';
        },
        zoom: function (e) {
        }
    };
    let cropper = new Cropper(image, options);
    let originalImageURL = image.src;
    let uploadedImageType = 'image/jpeg';
    let uploadedImageName = 'cropped.jpg';
    let uploadedImageURL;

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Buttons
    if (!document.createElement('canvas').getContext) {
        $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
    }

    if (typeof document.createElement('cropper').style.transition === 'undefined') {
        $('button[data-method="rotate"]').prop('disabled', true);
        $('button[data-method="scale"]').prop('disabled', true);
    }

    // Download
    if (typeof download.download === 'undefined') {
        download.className += ' disabled';
    }

    // Options
    actions.querySelector('.docs-toggles').onchange = function (event) {
        let e = event || window.event;
        let target = e.target || e.srcElement;
        let cropBoxData;
        let canvasData;
        let isCheckbox;
        let isRadio;

        if (!cropper) {
            return;
        }

        if (target.tagName.toLowerCase() === 'label') {
            target = target.querySelector('input');
        }

        isCheckbox = target.type === 'checkbox';
        isRadio = target.type === 'radio';

        if (isCheckbox || isRadio) {
            if (isCheckbox) {
                options[target.name] = target.checked;
                cropBoxData = cropper.getCropBoxData();
                canvasData = cropper.getCanvasData();

                options.ready = function () {
                    console.log('ready');
                    cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                };
            } else {
                options[target.name] = target.value;
                options.ready = function () {
                    console.log('ready');
                };
            }

            // Restart
            cropper.destroy();
            cropper = new Cropper(image, options);
        }
    };

    // Methods
    actions.querySelector('.docs-buttons').onclick = function (event) {
        let e = event || window.event;
        let target = e.target || e.srcElement;
        let cropped;
        let result;
        let input;
        let data;

        if (!cropper) {
            return;
        }

        while (target !== this) {
            if (target.getAttribute('data-method')) {
                break;
            }

            target = target.parentNode;
        }

        if (target === this || target.disabled || target.className.indexOf('disabled') > -1) {
            return;
        }

        data = {
            method: target.getAttribute('data-method'),
            target: target.getAttribute('data-target'),
            option: target.getAttribute('data-option') || undefined,
            secondOption: target.getAttribute('data-second-option') || undefined
        };

        cropped = cropper.cropped;

        if (data.method) {
            if (typeof data.target !== 'undefined') {
                input = document.querySelector(data.target);

                if (!target.hasAttribute('data-option') && data.target && input) {
                    try {
                        data.option = JSON.parse(input.value);
                    } catch (e) {
                        console.log(e.message);
                    }
                }
            }

            switch (data.method) {
                case 'rotate':
                    if (cropped && options.viewMode > 0) {
                        cropper.clear();
                    }

                    break;

                case 'getCroppedCanvas':
                    try {
                        data.option = JSON.parse(data.option);
                    } catch (e) {
                        console.log(e.message);
                    }

                    if (uploadedImageType === 'image/jpeg') {
                        if (!data.option) {
                            data.option = {};
                        }

                        data.option.fillColor = '#fff';
                    }

                    break;
            }

            result = cropper[data.method](data.option, data.secondOption);

            switch (data.method) {
                case 'rotate':
                    if (cropped && options.viewMode > 0) {
                        cropper.crop();
                    }

                    break;

                case 'scaleX':
                case 'scaleY':
                    target.setAttribute('data-option', -data.option);
                    break;

                case 'getCroppedCanvas':
                    if (result) {
                        // Bootstrap's Modal
                        $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                        if (!download.disabled) {
                            download.download = uploadedImageName;
                            download.href = result.toDataURL(uploadedImageType);
                        }
                    }

                    break;

                case 'destroy':
                    cropper = null;

                    if (uploadedImageURL) {
                        URL.revokeObjectURL(uploadedImageURL);
                        uploadedImageURL = '';
                        image.src = originalImageURL;
                    }

                    break;
            }

            if (typeof result === 'object' && result !== cropper && input) {
                try {
                    input.value = JSON.stringify(result);
                } catch (e) {
                    console.log(e.message);
                }
            }
        }
    };

    document.body.onkeydown = function (event) {
        let e = event || window.event;

        if (!cropper || this.scrollTop > 300) {
            return;
        }

        switch (e.keyCode) {
            case 37:
                e.preventDefault();
                cropper.move(-1, 0);
                break;

            case 38:
                e.preventDefault();
                cropper.move(0, -1);
                break;

            case 39:
                e.preventDefault();
                cropper.move(1, 0);
                break;

            case 40:
                e.preventDefault();
                cropper.move(0, 1);
                break;
        }
    };

    // Import image
    let inputImage = document.getElementById('inputImage');

    if (URL) {
        // Input
        inputImage.onchange = function changeImage() {
            let file;
            let files = this.files;

            if (cropper && files && files.length) {
                file = files[0];
                console.log('file: ', file);

                if (/^image\/\w+/.test(file.type)) {
                    uploadedImageType = file.type;
                    console.log('file.type: ', file.type);
                    uploadedImageName = file.name;
                    console.log('file.name: ', file.name);

                    console.log('uploadedImageURL: ', uploadedImageURL);
                    if (uploadedImageURL) {
                        URL.revokeObjectURL(uploadedImageURL);

                    }

                    image.src = uploadedImageURL = URL.createObjectURL(file);
                    console.log('image.src: ', image.src);


                    console.log('cropper: ', cropper);
                    cropper.destroy();

                    cropper = new Cropper(image, options);
                    console.log('cropper: ', cropper);
                    inputImage.value = null;
                } else {
                    window.alert('Please choose an image file.');
                }
            }
        };

        // Drop
        let dropArea = document.getElementById('drop-area');
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, function (e) {
                e.preventDefault();
                e.stopPropagation();
            }, false)
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, function (e) {
                dropArea.classList.add('highlight')
            }, false)
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, function (e) {
                dropArea.classList.remove('highlight')
            }, false)
        });

        dropArea.addEventListener('drop', function (e) {
            let dt = e.dataTransfer;
            let files = dt.files;
            files = [...files];

            files.forEach(function (file) {
                let url = '/css/img/cropper';
                let formData = new FormData();
                formData.append('file', file);

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                    .then(() => { /* Готово. Информируем пользователя */ })
                    .catch(() => { /* Ошибка. Информируем пользователя */ })
            });

            files.forEach(function (file) {
                if (/^image\/\w+/.test(file.type)) {
                    uploadedImageType = file.type;
                    uploadedImageName = file.name;

                    if (uploadedImageURL) {
                        URL.revokeObjectURL(uploadedImageURL);

                    }

                    image.src = uploadedImageURL = URL.createObjectURL(file);

                    cropper.destroy();

                    cropper = new Cropper(image, options);
                    inputImage.value = null;
                } else {
                    window.alert('Please choose an image file.');
                }
            });
        }, false);
    } else {
        inputImage.disabled = true;
        inputImage.parentNode.className += ' disabled';
    }
}