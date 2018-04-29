<?php
function rating($n) {
    $rating = $n;

    if ($rating <= 2) {
        $rating_style = "book-list-element-rating-stars__fill_red";
    } elseif ($rating <= 3.5) {
        $rating_style = "book-list-element-rating-stars__fill_yellow";
    } else {
        $rating_style = "book-list-element-rating-stars__fill_green";
    }

    $rating_width = $rating * 100 / 5;

    echo '
            <div class="book-list-element-rating-stars">
                <div class="book-list-element-rating-stars__fill ' . $rating_style . '"
                     style="width: ' . $rating_width . '%"></div>
                <div class="book-list-element-rating-stars__form"></div>
            </div>
            <div class="book-list-element-rating__number">
                (' . $rating . ')
            </div>
    ';
}



