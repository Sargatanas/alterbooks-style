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
        <div class="registration col-8 col-clear col-md-10 col-md-clear">
            <div class="row row-center">
                <div class="registration__title col-12 col-clear col-center">
                    регистрация
                </div>

                <div class="registration-element col-12 col-clear" data-status="correct">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/user_grey.svg')"></div>
                    <input class="registration-element__field"
                           type="text"
                           id="login"
                           name="login"
                           placeholder="электронная почта / логин"
                           required autofocus
                           value="sargatanas@mail.ru">
                    <div class="registration-element__flag"></div>
                    <div class="registration-element__error">
                        пользователь с таким логином существует
                    </div>
                    <div class="registration-element__star">*</div>
                </div>

                <div class="registration-element col-12 col-clear" data-status="">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/lock-closed_grey.svg')"></div>
                    <input class="registration-element__field registration-element__field_logo"
                           type="password"
                           id="password"
                           name="password"
                           placeholder="пароль"
                           required
                           value="sargatanas@mail">
                    <div class="registration-element__star">*</div>
                </div>

                <div class="registration-element col-12 col-clear" data-status="error">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/lock-closed_grey.svg')"></div>
                    <input class="registration-element__field registration-element__field_logo"
                           type="password"
                           id="re-password"
                           name="re-password"
                           placeholder="повторите пароль"
                           required
                           value="sargatanas@mail.ru">
                    <div class="registration-element__flag"></div>
                    <div class="registration-element__error">
                        пароли не совпадают
                    </div>
                    <div class="registration-element__star">*</div>
                </div>

                <div class="registration-element col-12 col-clear">
                    <input class="registration-element__field"
                           type="text"
                           id="surname"
                           name="surname"
                           placeholder="фамилия">
                </div>

                <div class="registration-element col-12 col-clear">
                    <input class="registration-element__field"
                           type="text"
                           id="name"
                           name="name"
                           placeholder="имя">
                </div>
                <div class="registration-element col-12 col-clear">
                    <input class="registration-element__field"
                           type="text"
                           id="nickname"
                           name="nickname"
                           placeholder="псевдоним">
                </div>

                <div class="registration-element registration-element_agreement col-12 col-clear">
                    <div class="authentication__checkbox">
                        <label for="checkbox-1" class="col-xs-12 checkbox">
                            <input type="checkbox" class="checkbox__field" id="checkbox-1" name="checkbox-1">
                            <span class="checkbox-animation">
                                    <span class="checkbox-animation__button"></span>
                                    <span class="checkbox-animation__icon"></span>
                                    <span class="checkbox-animation__ripple"></span>
                            </span>
                            <span class="checkbox__content">
                                я согласен с
                                <a class="registration-agreement__href">
                                    пользовательским соглашением
                                </a>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="col-12 col-clear col-center">
                    <button class="registration__button registration__button_disabled button button_green" id="registration-button">
                        регистрация
                    </button>
                </div>

                <div class="block-content col-12 col-clear">
                    <div class="registration__hr block-content-header block-content-header_center">
                        <hr class="block-content-header__hr">
                        <div class="registration__separator block-content-header__title">
                            или
                        </div>
                        <hr class="block-content-header__hr">
                    </div>
                    <div class="registration-more block-content-main">
                        <div class="registration-more__element"
                             style="background-image: url('/css/img/social/vk.svg')"></div>
                        <div class="registration-more__element"
                             style="background-image: url('/css/img/social/facebook.svg')"></div>
                        <div class="registration-more__element"
                             style="background-image: url('/css/img/social/twitter.svg')"></div>
                        <div class="registration-more__element"
                             style="background-image: url('/css/img/social/google.svg')"></div>
                    </div>
                </div>

                <div class="block-content col-12 col-clear">
                    <div class="registration__hr block-content-header block-content-header_center">
                        <hr class="block-content-header__hr">
                        <div class="registration__separator block-content-header__title">
                            уже&nbsp;зарегистрированы?
                        </div>
                        <hr class="block-content-header__hr">
                    </div>
                    <div class="registration-more block-content-main">
                        <button class="registration-more__button registration__button button">
                            авторизация
                        </button>
                    </div>
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

<script>
    let checkbox = document.getElementById('checkbox-1');
    let button = document.getElementById('registration-button');

    checkbox.addEventListener('click', function (c) {
        button.classList.toggle('registration__button_disabled');
    });
</script>
</body>
</html>