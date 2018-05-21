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

<header class="header row row-center">
    <div class="col-6 col-lg-8 col-md-10 col-sm-12 col-sm-clear">
        <div class="row row-center">
            <div class="col-9 col-middle col-sm-7 col-sm-middle">
                AlterBooks
            </div>
            <div class="col-3 col-sm-5">
                <button class="modal-button button" id="header-button" data-modal-number="0">
                    вход
                </button>
            </div>
        </div>
    </div>
</header>

<main class="container">
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

                <div class="col-12 col-clear col-center">
                    <button class="registration__button button button_green">
                        регистрация
                    </button>
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
                        <button class="registration__button button">
                            авторизация
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'authentication.php';
?>

<script>
    let page_body = document.body;
    let modal_button = document.getElementsByClassName('modal-button');
    Array.prototype.forEach.call(modal_button, function(button){
        button.addEventListener('click', function (b) {
            let modal_number = button.getAttribute('data-modal-number');
            let modal = document.getElementById('modal-' + modal_number);
            page_body.setAttribute('data-status', 'modal-open');
            modal.setAttribute('data-status', 'modal-open');
        })
    });

    let modal_close_button = document.getElementsByClassName('authentication__close');
    Array.prototype.forEach.call(modal_close_button, function(button){
        button.addEventListener('click', function (b) {
            let modal_number = button.getAttribute('data-modal-number');
            let modal = document.getElementById('modal-' + modal_number);
            page_body.setAttribute('data-status', 'modal-close');
            modal.setAttribute('data-status', 'modal-close');
        })
    });

    let forget_password = document.getElementsByClassName('authentication__forget');
    Array.prototype.forEach.call(forget_password, function(button){
        button.addEventListener('click', function (b) {
            let authentication = button.parentNode.parentNode.parentNode.parentNode;
            let re_password = authentication.nextSibling.nextSibling;
            authentication.setAttribute('data-status', 'close');
            re_password.setAttribute('data-status', 'open');
        });
    });

    let back_forget_password = document.getElementsByClassName('authentication__back');
    Array.prototype.forEach.call(back_forget_password, function(button){
        button.addEventListener('click', function (b) {
            let re_password = button.parentNode.parentNode.parentNode;
            let authentication = re_password.previousSibling.previousSibling;
            re_password.setAttribute('data-status', 'close');
            authentication.setAttribute('data-status', 'open');
        });
    });

    let send_mail = document.getElementsByClassName('authentication__button_send');
    Array.prototype.forEach.call(send_mail, function(button){
        button.addEventListener('click', function (b) {
            let send = button.parentNode.parentNode.parentNode;
            send.setAttribute('data-status', 'correct');
            let usual = send.previousSibling.previousSibling;
            let time = document.getElementById('authentication__correct-message');

            let seconds = 5;
            time.innerHTML = seconds;
            seconds--;
            let time_id = setInterval(function () {
                time.innerHTML = seconds;
                seconds--;
            }, 1000);

            setTimeout(function () {
                usual.parentNode.parentNode.setAttribute('data-status', 'modal-close');
                page_body.setAttribute('data-status', 'modal-close');
                usual.setAttribute('data-status', 'open');
                send.setAttribute('data-status', 'close');
                clearInterval(time_id);
            }, 5000);
        });
    });
</script>
</body>
</html>