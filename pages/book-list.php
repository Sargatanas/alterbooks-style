<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Book-list
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body">

<header class="header row row-center">
    <div class="col-12 col-center col-middle">
        He-e-e-e-e-ea-a-a-a-ader
    </div>
</header>

<main class="container">
    <div class="row row-center">
        <div class="book-list-aside col-3 col-clear col-lg-0">
            <div class="book-list-genres" data-status="close">
                <?php
                include 'book-list/element/genres.php';
                genres(1);
                ?>
            </div>
        </div>
        <div class="book-list-main col-8 col-clear col-lg-10 col-md-11 col-sm-12">
            <div class="row">
                <div class="col-12 col-clear">
                    <form class="book-list-search" onsubmit="return false">
                        <input class="book-list-search__input" id="book-search" type="text"
                               placeholder="название произведения">
                        <input class="book-list-search__button" type="submit" value="">
                        <div class="book-list-search-variants">
                            <a class="book-list-search-variants__element" href="">
                                вариа-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-а-ант 1
                            </a>
                            <a class="book-list-search-variants__element" href="">
                                вариант 2
                            </a>
                            <a class="book-list-search-variants__element" href="">
                                вариант 3
                            </a>
                            <a class="book-list-search-variants__element" href="">
                                вариант 4
                            </a>
                            <a class="book-list-search-variants__element" href="">
                                вариант 5
                            </a>
                        </div>
                    </form>
                </div>

                <div class="book-list-sort col-12 col-clear">
                    <div class="book-list-sort__title">
                        сортировать
                    </div>
                    <form class="book-list-sort__content">
                        <input type="radio" id="sort-date" name="sort" value="date" checked>
                        <label class="book-list-sort__element" for="sort-date">
                            по новизне
                        </label>
                        <input type="radio" id="sort-rating" name="sort" value="rating">
                        <label class="book-list-sort__element" for="sort-rating">
                            по рейтингу
                        </label>
                        <input type="radio" id="sort-size" name="sort" value="size">
                        <label class="book-list-sort__element" for="sort-size">
                            по объему
                        </label>
                    </form>
                </div>

                <div class="col-0 col-lg-12 col-lg-clear">
                    <div class="book-list-genres book-list-genres_mini" data-status="close">
                    <?php
                    genres(2);
                    ?>
                </div>
            </div>

            <?php
            include 'book-list/element/rating.php';
            include 'book-list/element/base.php';
            include 'book-list/element/base.php';
            ?>
        </div>
    </div>
</main>

<script>
    let genres_more = document.getElementsByClassName('book-list-genres__more');

    Array.prototype.forEach.call(genres_more, function(more){
        more.addEventListener('click', function (m) {
            let parent = more.parentNode;
            let block = more.previousElementSibling;

            if (parent.getAttribute('data-status') === 'close') {
                parent.style.maxHeight = 'none';
                parent.style.overflow = 'visible';
                parent.style.marginBottom = '50px';
                parent.setAttribute('data-status', 'open');

                block.style.display = 'none';

                more.style.bottom = '-25px';
                more.style.top = 'auto';
                more.innerHTML = 'свернуть';
            } else {
                if (document.documentElement.clientWidth <= 1023) {
                    parent.style.maxHeight = '150px';
                    more.style.top = '110px';
                    block.style.top = '110px';
                } else {
                    parent.style.maxHeight = '625px';
                    more.style.top = '590px';
                    block.style.top = '590px';
                }
                parent.style.overflow = 'hidden';
                parent.style.marginBottom = '20px';

                block.style.display = 'block';

                more.style.bottom = 'auto';
                more.innerHTML = 'больше жанров';

                parent.setAttribute('data-status', 'close');
            }
        })
    });

    function showGenres(n) {
        let genres = document.getElementsByName('genre-'+ n);
        let genres_checked = [];
        Array.prototype.forEach.call(genres, function (genre) {
            if (genre.checked && (genres_checked.indexOf(genre.value) === -1)) {
                genres_checked.push(genre.value);
            }
        });
        let m = n === 1 ? 2 : 1;
        let genres_other = document.getElementsByName('genre-'+ m);
        Array.prototype.forEach.call(genres_other, function (genre) {
            genre.checked = genres_checked.indexOf(genre.value) !== -1;
        });
    }

    let descriptions = document.getElementsByClassName('book-list-element-description__more');
    Array.prototype.forEach.call(descriptions, function(more){
        more.addEventListener('click', function (m) {
            let parent = more.parentNode;
            console.log('yes');
            if (parent.getAttribute('data-status') === 'close') {
                more.innerHTML = 'свернуть';
                parent.setAttribute('data-status', 'open');
            } else {
                more.innerHTML = 'читать далее';
                parent.setAttribute('data-status', 'close');
            }
        });
    });
</script>
</body>
</html>