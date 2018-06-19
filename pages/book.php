<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        Book-profile
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
        <div class="book col-12">
            <div class="row">
                <div class="book__aside col-4 col-md-0">
                    <div class="row row-center">
                        <div class="book__cover col-12"
                             style="background-image: url('/css/img/cover.png')"></div>
                        <div class="book-buttons col-12">
                            <div class="book-buttons__tab book-buttons__tab_3"></div>
                            <div class="row">
                                <button class="book-buttons__element button button_green col-12">
                                    <span>читать</span>
                                </button>
                                <button class="book-buttons__element button col-12">
                                    <span>в библиотеку</span>
                                </button>
                            </div>
                        </div>
                        <div class="book-download col-8 col-center">
                            <div class="row">
                                <div class="book-download__title col-12 col-clear col-center">
                                    Скачать
                                </div>
                                <button class="book-download__format button col-12 col-clear col-center">
                                    <span>txt</span>
                                </button>
                                <div class="book-download__size col-12 col-clear col-center">
                                    130Kb
                                </div>

                                <button class="book-download__format button col-12 col-clear col-center">
                                    <span>epub</span>
                                </button>
                                <div class="book-download__size col-12 col-clear col-center">
                                    1.01Mb
                                </div>

                                <button class="book-download__format button col-12 col-clear col-center">
                                    <span>fb2</span>
                                </button>
                                <div class="book-download__size col-12 col-clear col-center">
                                    301Kb
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book__main col-8 col-md-12">
                    <div class="row row-center">
                        <div class="book__title col-12 col-clear col-md-center">
                            Пиши, сокращай
                        </div>
                        <a class="book__author col-12 col-clear col-md-center" href="">
                            Максим Ильяхов
                        </a>
                        <div class="book__cover col-0 col-clear col-md-12"
                             style="background-image: url('/css/img/cover.png')"></div>
                        <div class="block-info col-12 col-clear col-md-11 col-md-center col-sm-12">
                            <div class="block-info-element">
                                <div class="block-info-element__main block-info-element__main_small">
                                    07.03.18
                                </div>
                                <div class="block-info-element__comment">
                                    дата публикации
                                </div>
                            </div>
                            <div class="block-info-element">
                                <div class="block-info-element__main">
                                    7.0
                                </div>
                                <div class="block-info-element__comment">
                                    рейтинг
                                </div>
                            </div>
                            <div class="block-info-element">
                                <div class="block-info-element__main">
                                    93
                                </div>
                                <div class="block-info-element__comment">
                                    добавили в библиотеку
                                </div>
                            </div>
                        </div>
                        <div class="book__description col-12 col-clear col-md-11 col-sm-12">
                            За две недели до сдачи макета я вдруг понял, что ОБЛОЖКУ-ТО МЫ ЗАБЫЛИ! Забыли напрочь:
                            не обсудили, не задали вопросов, не задумались, — ничего. Ни издательство, ни мы с
                            Людой понятия не имели, что должно быть на обложке. Только моя мама говорила, что череп
                            на обложке — плохо.
                            <br><br>
                            С первого дня у нас был черновой вариант — сначала с черепом, потом по совету мамы —
                            без. И где-то в глубине души я думал, что это и есть та самая, правильная обложка.
                            В стиле Главреда: смело, радикально, просто...
                        </div>
                        <hr class="hr col-md-11 col-sm-12">
                        <div class="book-genres col-12 col-clear col-md-11 col-sm-12">
                            <div class="row">
                                <div class="book-genres__title col-12 col-clear">
                                    жанры
                                </div>
                                <div class="book-genres-content col-12 col-clear">
                                    <a class="book-genres-content__element">документалистика</a>
                                    <a class="book-genres-content__element">учебник</a>
                                    <a class="book-genres-content__element">о жизни</a>
                                    <a class="book-genres-content__element">приключения</a>
                                    <a class="book-genres-content__element">мистика</a>
                                </div>
                            </div>
                        </div>
                        <div class="book-buttons col-0 col-clear col-md-12 col-md-11 col-sm-12">
                            <div class="row">
                                <button class="book-buttons__element button button_green col-md-5 col-sm-12">
                                    <span>читать</span>
                                </button>
                                <button class="book-buttons__element button col-md-5 col-sm-12">
                                    <span>в библиотеку</span>
                                </button>
                            </div>
                        </div>
                        <hr class="hr col-0 col-md-11 col-sm-12">
                        <div class="book-download col-0 col-clear col-md-12 col-md-11 col-sm-12">
                            <div class="row">
                                <div class="book-download__title col-12 col-clear">
                                    Скачать
                                </div>
                                <button class="book-download__format button">
                                    <span>txt</span>
                                </button>

                                <button class="book-download__format button">
                                    <span>epub</span>
                                </button>

                                <button class="book-download__format button">
                                    <span>fb2</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review block-content col-12">
                    <div class="block-content-header" id="review">
                        <div class="review__header block-content-header__title block-content-header__title_center">
                            Рецензии
                        </div>
                        <hr class="block-content-header__hr">
                    </div>
                    <div class="block-content-main">
                        <?php
                        include "review-list/new-review.php";
                        $review = [
                            'rating' => '8',
                            'header' => 'Книга о жизни',
                            'content' => 'Всем людям приходится писать: рабочая переписка, посты в соц сетях,
                                            объявления на Аvito, резюме, коммерческие предложения. В карьерном плане
                                            можно хорошо преуспеть, если научиться грамотно и интересно писать.
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!',
                            'grade' => '13'
                        ];
                        reviewSelf($review);

                        review([
                            'status' => 'open',
                            'rating' => '1',
                            'header' => 'Книга не о жизни',
                            'content' => 'Всем людям приходится писать: рабочая переписка, посты в соц сетях,
                                            объявления на Аvito, резюме, коммерческие предложения. В карьерном плане
                                            можно хорошо преуспеть, если научиться грамотно и интересно писать.',
                            'grade' => '-2'
                        ]);

                        review([
                            'status' => 'open',
                            'rating' => '7',
                            'header' => 'Книга... о жизни?',
                            'content' => 'Всем людям приходится писать: рабочая переписка, посты в соц сетях,
                                            объявления на Аvito, резюме, коммерческие предложения. В карьерном плане
                                            можно хорошо преуспеть, если научиться грамотно и интересно писать.
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!',
                            'grade' => '3'
                        ]);

                        review([
                            'status' => 'open',
                            'rating' => '5',
                            'header' => 'Книга не совсем о жизни',
                            'content' => 'Всем людям приходится писать: рабочая переписка, посты в соц сетях,
                                            объявления на Аvito, резюме, коммерческие предложения. В карьерном плане
                                            можно хорошо преуспеть, если научиться грамотно и интересно писать.
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!',
                            'grade' => '25'
                        ]);

                        review([
                            'status' => 'open',
                            'rating' => '10',
                            'header' => 'Книга о жизни',
                            'content' => 'Всем людям приходится писать: рабочая переписка, посты в соц сетях,
                                            объявления на Аvito, резюме, коммерческие предложения. В карьерном плане
                                            можно хорошо преуспеть, если научиться грамотно и интересно писать.
                                            <br>
                                            Контент-маркетинг перспективное направление в рекламном мире.
                                            Оно предполагает создание уникального и полезного материала.
                                            Поэтому ведение корпоративного блога или аккаунта в Instagram для
                                            многих компаний уже привычное дело. Созданием контента занимаются
                                            и SMM-менеджеры, и контент-маркетологи, и копирайтеры. Все хотят знать,
                                            как писать, чтобы их читали?!',
                            'grade' => '44'
                        ]);
                        ?>
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
<script src="/js/review-new.js"></script>

<script>
    let read_more = document.getElementsByClassName('review-text__more');

    Array.prototype.forEach.call(read_more, function(more){
        more.addEventListener('click', function (m) {
            let text = more.parentNode;
            let block = more.previousElementSibling;

            if (text.getAttribute('data-status') === 'close') {
                text.style.maxHeight = 'none';
                text.style.marginBottom = '40px';
                text.style.overflow = 'visible';

                block.style.display = 'none';

                more.style.top = 'auto';
                more.style.bottom = '-1.5em';
                more.innerHTML = 'свернуть';

                text.setAttribute('data-status', 'open');
            } else {
                text.style.maxHeight = '16.5em';
                text.style.marginBottom = '20px';
                text.style.overflow = 'hidden';

                block.style.display = 'block';

                more.style.top = 'calc(15em - 2px)';
                more.style.bottom = 'auto';
                more.innerHTML = 'читать далее';

                text.setAttribute('data-status', 'close');
            }
        })
    });
</script>
</body>
</html>