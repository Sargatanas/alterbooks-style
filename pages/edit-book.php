<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Edit book profile
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Cropper -->
    <link rel="stylesheet" href="/pages/edit/cropper/docs/css/cropper.css">
    <link rel="stylesheet" href="/pages/edit/cropper/docs/css/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body" data-status="modal-close">

<?php
include "common/header.php";
?>

<main class="container body__main">
    <div class="row row-center">
        <div class="edit col-12">
            <div class="edit-block">
                <div class="edit-block-header">
                    <hr class="edit-block-header__hr">
                    <div class="edit-block-header__title">
                        информация&nbsp;о&nbsp;книге
                    </div>
                    <hr class="edit-block-header__hr">
                </div>
                <form class="edit-block__main"
                      onsubmit="return false"
                      enctype="multipart/form-data">

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_title">
                            Название
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_input"
                                   type="text"
                                   id="change_title"
                                   name="change_title"
                                   maxlength="50">
                        </div>
                        <div class="edit-block-element__size">
                            15 / 30
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_text">
                            Текст книги
                        </label>
                        <div class="edit-block-element__content">
                            <input type="file"
                                   id="change_text"
                                   name="change_text">
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_status">
                            Статус
                        </label>
                        <select class="edit-block-element__content edit-block-element__content_select"
                                id="change_status">
                            <option>
                                чистовик (видят все)
                            </option>
                            <option>
                                черновик (видите только вы)
                            </option>
                        </select>
                    </div>

                    <div class="edit-block-element">
                        <div class="edit-block-element__title">
                            Жанры
                        </div>
                        <div class="edit-block-element__content">
                            <div class="edit-block-element__content_checkbox">
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-1"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-1"
                                               name="genres"
                                               value="science_fantasy">
                                        <span class="checkbox-animation">
                                        <span class="checkbox-animation__button"></span>
                                        <span class="checkbox-animation__icon"></span>
                                        <span class="checkbox-animation__ripple"></span>
                                    </span>
                                        <span class="checkbox__content">
                                        научная фантастика
                                    </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-2"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-2"
                                               name="genres"
                                               value="fantasy">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            фэнтези
                                        </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-3"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-3"
                                               name="genres"
                                               value="mystic">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            мистика
                                        </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-4"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-4"
                                               name="genres"
                                               value="horror">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            хоррор
                                        </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-5"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-5"
                                               name="genres"
                                               value="detective">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            детектив
                                        </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-6"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-6"
                                               name="genres"
                                               value="classic">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            классика
                                        </span>
                                    </label>
                                </div>
                                <div class="edit-block-element__checkbox">
                                    <label for="genre-7"
                                           class="col-xs-12 checkbox">
                                        <input type="checkbox"
                                               class="checkbox__field"
                                               id="genre-7"
                                               name="genres"
                                               value="modern-prose">
                                        <span class="checkbox-animation">
                                            <span class="checkbox-animation__button"></span>
                                            <span class="checkbox-animation__icon"></span>
                                            <span class="checkbox-animation__ripple"></span>
                                        </span>
                                        <span class="checkbox__content">
                                            современная проза
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edit-block-element edit-block-element_wide">
                        <div class="edit-block-header">
                            <hr class="edit-block-header__hr">
                            <label class="edit-block-header__title"
                                   for="date">
                                описание&nbsp;книги
                            </label>
                            <hr class="edit-block-header__hr">
                        </div>
                        <div class="edit-block-element__content edit-block-element__content_wide">
                            <textarea class="edit-block-element__content_date"
                                      type="date"
                                      id="date"
                                      name="date"
                                      placeholder="Введите описание"></textarea>
                        </div>
                    </div>

                    <?php include "edit/cropper/docs/cropper-cover.php" ?>

                    <input  class="edit-block-element__button button button_green"
                            type="submit"
                            value="сохранить">
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include "common/footer.php";
?>

<?php
include 'authentication.php';
?>

<script src="/js/auth.js"></script>

<!-- Cropper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://fengyuanchen.github.io/js/common.js"></script>
<script src="/pages/edit/cropper/docs/js/cropper.js"></script>
<script src="/pages/edit/cropper/docs/js/main.js"></script>

<script>
    let input = document.getElementsByClassName('edit-block-element__content_input');
    Array.prototype.forEach.call(input, function(field){
        let size = field.parentNode.nextSibling.nextSibling;
        size.innerHTML = field.value.length + ' / ' + field.getAttribute('maxlength');
        field.oninput = function () {
          size.innerHTML = field.value.length + ' / ' + field.getAttribute('maxlength');
        };
    });

    // Cropper
    let cropper_button_change = document.getElementById('cropper-change');
    let cropper_change = cropper_button_change.previousSibling.previousSibling;

    cropper_button_change.addEventListener('click', function () {
        if (cropper_change.getAttribute('data-status') === 'open') {
            cropper_change.setAttribute('data-status', 'close');
            cropper_button_change.innerHTML = 'изменить';
        } else {
            cropper_change.setAttribute('data-status', 'open');
            cropper_button_change.innerHTML = 'готово';
        }
    });

    window.onload = cropperMain(23 / 34);

</script>

</body>
</html>