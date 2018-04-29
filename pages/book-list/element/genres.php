<?php
function genres($n) {
    echo '
        <div class="book-list-genres__title">
            список&nbsp;жанров
            <hr class="book-list-genres__hr">
        </div>
        <form class="book-list-genres__content" onchange="showGenres('.$n.')">
            <input type="checkbox" id="genre-1-'.$n.'" name="genre-'.$n.'" value="документалистика" checked>
            <label class="book-list-genres__element" for="genre-1-'.$n.'">
                документалистика
            </label>
            <input type="checkbox" id="genre-2-'.$n.'" name="genre-'.$n.'" value="мистика">
            <label class="book-list-genres__element" for="genre-2-'.$n.'">
                мистика
            </label>
            <input type="checkbox" id="genre-3-'.$n.'" name="genre-'.$n.'" value="о жизни">
            <label class="book-list-genres__element" for="genre-3-'.$n.'">
                о жизни
            </label>
            <input type="checkbox" id="genre-4-'.$n.'" name="genre-'.$n.'" value="приключения" checked>
            <label class="book-list-genres__element" for="genre-4-'.$n.'">
                приключения
            </label>
            <input type="checkbox" id="genre-5-'.$n.'" name="genre-'.$n.'" value="роман">
            <label class="book-list-genres__element" for="genre-5-'.$n.'">
                роман
            </label>
            <input type="checkbox" id="genre-6-'.$n.'" name="genre-'.$n.'" value="учебник">
            <label class="book-list-genres__element" for="genre-6-'.$n.'">
                учебник
            </label>
            <input type="checkbox" id="genre-7-'.$n.'" name="genre-'.$n.'" value="жанр 1">
            <label class="book-list-genres__element" for="genre-7-'.$n.'">
                жанр 1
            </label>
            <input type="checkbox" id="genre-8-'.$n.'" name="genre-'.$n.'" value="жанр 2">
            <label class="book-list-genres__element" for="genre-8-'.$n.'">
                жанр 2
            </label>
            <input type="checkbox" id="genre-9-'.$n.'" name="genre-'.$n.'" value="жанр 3">
            <label class="book-list-genres__element" for="genre-9-'.$n.'">
                жанр 3
            </label>
            <input type="checkbox" id="genre-10-'.$n.'" name="genre-'.$n.'" value="жанр 4">
            <label class="book-list-genres__element" for="genre-10-'.$n.'">
                жанр 4
            </label>
            <input type="checkbox" id="genre-11-'.$n.'" name="genre-'.$n.'" value="жанр 5">
            <label class="book-list-genres__element" for="genre-11-'.$n.'">
                жанр 5
            </label>
            <input type="checkbox" id="genre-12-'.$n.'" name="genre-'.$n.'" value="жанр 6">
            <label class="book-list-genres__element" for="genre-12-'.$n.'">
                жанр 6
            </label>
            <input type="checkbox" id="genre-13-'.$n.'" name="genre-'.$n.'" value="жанр 7">
            <label class="book-list-genres__element" for="genre-13-'.$n.'">
                жанр 7
            </label>
            <input type="checkbox" id="genre-14-'.$n.'" name="genre-'.$n.'" value="жанр 8">
            <label class="book-list-genres__element" for="genre-14-'.$n.'">
                жанр 8
            </label>
            <input type="checkbox" id="genre-15-'.$n.'" name="genre-'.$n.'" value="жанр 9">
            <label class="book-list-genres__element" for="genre-15-'.$n.'">
                жанр 9
            </label>
            <input type="checkbox" id="genre-16-'.$n.'" name="genre-'.$n.'" value="жанр 10">
            <label class="book-list-genres__element" for="genre-16-'.$n.'">
                жанр 10
            </label>
            <input type="checkbox" id="genre-17-'.$n.'" name="genre-'.$n.'" value="жанр 11">
            <label class="book-list-genres__element" for="genre-17-'.$n.'">
                жанр 11
            </label>
            <input type="checkbox" id="genre-18-'.$n.'" name="genre-'.$n.'" value="жанр 12">
            <label class="book-list-genres__element" for="genre-18-'.$n.'">
                жанр 12
            </label>
        </form>
        <div class="book-list-genres__stripe"></div>
        <div class="book-list-genres__more">
            больше жанров
        </div>
    ';
}

