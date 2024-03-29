<?php
function reviewSelf($object) {
    echo
'<div class="review-element" data-status="close" data-auth="true" id="review-self">
    <div class="review-rating" data-rating = "'.$object["rating"].'">
        <div class="review-rating__header">
            '.$object["rating"].'.0
        </div>
        <div class="review-rating-stars">';


    for ($i = 1; $i <= $object["rating"]; $i++) {
        echo
        '<svg class="review-rating__star review-rating__star_active">
                <polygon id="star" points="11,0 14.23,6.55  21.46,7.6  16.23,12.7 17.47,19.9 11,16.5 4.53,19.9 6.77,12.7 0.54,7.6 7.77,6.55"></polygon>
            </svg>';
    }
    for ($i = $object["rating"] + 1; $i <= 10; $i++) {
        echo
        '<svg class="review-rating__star">
                <polygon id="star" points="11,0 14.23,6.55  21.46,7.6  16.23,12.7 17.47,19.9 11,16.5 4.53,19.9 6.77,12.7 0.54,7.6 7.77,6.55"></polygon>
            </svg>';
    }


    echo
    '</div>
    </div>
    <div class="review-element__body row row-center">
        <div class="review__main col-12">
            <div class="row">
                <div class="review__info-box col-12">
                    <div class="review__date">
                            04.04.2018
                    </div>
                    <div class="review__icon review__icon_edit"></div>
                    <div class="review__icon review__icon_delete"></div>
                    <button class="review__button button" id="review-reestablish">
                        восстановить
                    </button>
                </div>
                <div class="review-title col-12 col-clear">'
                    .$object["header"].
                   '<div class="review-title__shield"></div>
                </div>
                <div class="review-text col-12 col-clear" data-status="close" id="review-text">'
                    .$object["content"].
                   '<div class="review-text__block" id="review-text-block"></div>
                    <button class="review-text__more" id="review-text-more">
                        читать далее
                    </button>
                </div>
                <div class="review-grade col-12 col-clear">
                    <button class="review-grade__button" disabled>
                        &minus;
                    </button>
                    <div class="review-grade__value">'
                        .$object["grade"].
                   '</div>
                    <button class="review-grade__button" disabled>
                        &plus;
                    </button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="review-element__hr">
    </div>';
}
