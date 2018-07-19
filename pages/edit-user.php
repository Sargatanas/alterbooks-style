<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Edit user profile
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
include 'review-list/review.php';
include 'review-list/self-review.php';
?>

<main class="container body__main">
    <div class="row row-center">
        <div class="edit col-12">
            <div class="edit-block">
                <div class="edit-block-header">
                    <hr class="edit-block-header__hr">
                    <div class="edit-block-header__title">
                        информация&nbsp;о&nbsp;пользователе
                    </div>
                    <hr class="edit-block-header__hr">
                </div>
                <form class="edit-block__main"
                      onsubmit="return false"
                      enctype="multipart/form-data">

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_nickname">
                            Псевдоним
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_input"
                                   type="text"
                                   id="change_nickname"
                                   name="change_nickname"
                                   maxlength="30">
                        </div>
                        <div class="edit-block-element__size">
                            15 / 30
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_surname">
                            Фамилия
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_input"
                                   type="text"
                                   id="change_surname"
                                   name="change_surname"
                                   maxlength="30">
                        </div>
                        <div class="edit-block-element__size">
                            15 / 30
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_name">
                            Имя
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_input"
                                   type="text"
                                   id="change_name"
                                   name="change_name"
                                   maxlength="30">
                        </div>
                        <div class="edit-block-element__size">
                            15 / 30
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_patronymic">
                            Отчество
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_input"
                                   type="text"
                                   id="change_patronymic"
                                   name="change_patronymic"
                                   maxlength="30">
                        </div>
                        <div class="edit-block-element__size">
                            15 / 30
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_date">
                            Дата рождения
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_date"
                                   type="date"
                                   id="change_date"
                                   name="change_date">
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <div class="edit-block-element__title">
                            Пол
                        </div>
                        <div class="edit-block-element__content">
                            <div class="edit-block-element__content_radio">
                                <div class="radio-group__element">
                                    <label class="radio"
                                           for="change_sex_none">
                                        <input type="radio" class="radio__field"
                                               id="change_sex_none"
                                               name="change_sex"
                                               value="none"
                                               checked>
                                        <span class="radio-animation">
                                            <span class="radio-animation__button"></span>
                                        </span>
                                        <span class="radio__content">
                                            не&nbsp;указан
                                        </span>
                                    </label>
                                </div>
                                <div class="radio-group__element">
                                    <label class="radio"
                                           for="change_sex_male">
                                        <input type="radio" class="radio__field"
                                               id="change_sex_male"
                                               name="change_sex"
                                               value="male">
                                        <span class="radio-animation">
                                            <span class="radio-animation__button"></span>
                                        </span>
                                        <span class="radio__content">
                                            мужской
                                        </span>
                                    </label>
                                </div>
                                <div class="radio-group__element">
                                    <label class="radio"
                                           for="change_sex_female">
                                        <input type="radio" class="radio__field"
                                               id="change_sex_female"
                                               name="change_sex"
                                               value="female">
                                        <span class="radio-animation">
                                            <span class="radio-animation__button"></span>
                                        </span>
                                        <span class="radio__content">
                                            женский
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include "edit/cropper/docs/cropper.php" ?>

                    <div class="edit-block-element edit-block-element_wide">
                        <div class="edit-block-header">
                            <hr class="edit-block-header__hr">
                            <label class="edit-block-header__title"
                                   for="date">
                                о&nbsp;себе
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

                    <input  class="edit-block-element__button button"
                            type="submit"
                            value="сохранить">
                </form>
            </div>



            <div class="edit-block">
                <div class="edit-block-header">
                    <hr class="edit-block-header__hr">
                    <div class="edit-block-header__title">
                        данные&nbsp;профиля
                    </div>
                    <hr class="edit-block-header__hr">
                </div>
                <form class="edit-block__main"
                      onsubmit="return false">
                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_e-mail">
                            E-mail
                        </label>
                        <div class="edit-block-element__content">
                            <input type="text"
                                   id="change_e-mail"
                                   name="change_e-mail">
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_password">
                            Новый пароль
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_password"
                                   type="password"
                                   id="change_password"
                                   name="change_password">
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <label class="edit-block-element__title"
                               for="change_re-password">
                            Повтор пароля
                        </label>
                        <div class="edit-block-element__content">
                            <input class="edit-block-element__content_re-password"
                                   type="password"
                                   id="change_re-password"
                                   name="change_re-password"
                                   data-status="">
                            <div class="edit-block-element__flag"></div>
                        </div>
                    </div>

                    <div class="edit-block-element">
                        <div class="edit-block-element__title"></div>
                        <div class="edit-block-element__content edit-block-element__content_error">
                            Внимание! Изменение данных профиля приведет к&nbsp;изменению данных для&nbsp;входа на&nbsp;сайт.
                        </div>
                    </div>

                    <input  class="edit-block-element__button button"
                            type="submit"
                            value="изменить">
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

    let password = document.getElementsByClassName('edit-block-element__content_password');
    let re_password = document.getElementsByClassName('edit-block-element__content_re-password');

    let button_re_password = re_password[0].parentNode.parentNode;
    while (true) {
        if ((button_re_password.nodeType !== 3) && (button_re_password.classList.contains('button'))) {
            break;
        }
        button_re_password = button_re_password.nextSibling;
    }

    re_password[0].oninput = function () {
        if ((password[0].value === '') && (password[0].value === re_password[0].value)) {
            button_re_password.disabled = false;
        } else if ((password[0].value !== '') && (password[0].value === re_password[0].value)) {
            re_password[0].setAttribute('data-status', 'correct');
            button_re_password.disabled = false;
        } else {
            re_password[0].setAttribute('data-status', 'error');
            button_re_password.disabled = true;
        }
    };
    password[0].oninput = function () {
        if ((password[0].value === '') && (password[0].value === re_password[0].value)) {
            button_re_password.disabled = false;
        } else if ((password[0].value !== '') && (password[0].value === re_password[0].value)) {
            re_password[0].setAttribute('data-status', 'correct');
            button_re_password.disabled = false;
        } else {
            re_password[0].setAttribute('data-status', 'error');
            button_re_password.disabled = true;
        }
    };


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
</script>

</body>
</html>