<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Registration
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body" data-status="modal-close">

<?php
include "common/header.php"
?>

<main class="container body__main">
    <div class="row row-center">
        <div class="registration re-password col-8 col-clear col-md-10 col-md-clear" data-status="modal-close">
            <div class="row row-center">
                <div class="registration__title col-12 col-clear col-center">
                    введите новый пароль
                </div>

                <div class="registration-element col-12 col-clear" data-status="">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/lock-closed_grey.svg')"></div>
                    <input class="registration-element__field registration-element__field_logo"
                           type="password"
                           id="password"
                           name="password"
                           placeholder="пароль"
                           required autofocus
                           value="sargatanas@mail">
                    <div class="registration-element__star">*</div>
                </div>

                <div class="registration-element col-12 col-clear" data-status="correct">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/lock-closed_grey.svg')"></div>
                    <input class="registration-element__field registration-element__field_logo"
                           type="password"
                           id="re-password"
                           name="re-password"
                           placeholder="повторите пароль"
                           required
                           value="sargatanas@mail">
                    <div class="registration-element__flag"></div>
                    <div class="registration-element__error">
                        пароли не совпадают
                    </div>
                    <div class="registration-element__star">*</div>
                </div>

                <div class="re-password__button col-12 col-clear col-center">
                    <button class="registration__button button button_green">
                        изменить пароль
                    </button>
                </div>

                <div class="re-password__correct">
                    Ваш пароль успешно изменен!
                </div>

                <div class="re-password__authentication col-12 col-clear col-center">
                    <button class="registration__button button">
                        авторизация
                    </button>
                </div>
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
</body>
</html>