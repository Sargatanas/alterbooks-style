<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Pages
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body" data-status="modal-close">

<?php
include "pages/common/header-auth.php"
?>

<main class="container">
    <div class="row row-center">
        <div class="col-6 col-md-8 col-sm-12">
            <div class="row">
                <a class="user-book__button button col-12" href="/pages/book.php">
                    <span>профиль книги</span>
                </a>
                <a class="user-book__button button col-12" href="/pages/user.php">
                    <span>профиль пользователя</span>
                </a>
                <a class="user-book__button button col-12" href="/pages/book-list.php">
                    <span>список книг</span>
                </a>
                <a class="user-book__button button col-12" href="/pages/registration.php">
                    <span>регистрация-авторизация</span>
                </a>
                <a class="user-book__button button col-12" href="/pages/change-password.php">
                    <span>сменить пароль</span>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
include 'pages/authentication.php';
?>

<script src="/js/auth.js"></script>
</body>
</html>