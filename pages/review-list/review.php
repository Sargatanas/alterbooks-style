<?php
function review($object) {
    $logic = [true, false];
    $up = array_rand($logic);
    if ($up) {
        $down = array_rand($logic);
    } else {
        $down = true;
    }
    if ($object["auth"]) {
        $up = false;
        $down = false;
    }

    echo
'<div class="review-element" data-status="'.$object["status"].'" data-auth="false">
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
        <div class="review__aside col-2 col-lg-0">
              <div class="review__avatar"
                   style="background-image: url(/css/img/avatar.png)"></div>
              </div>
              <div class="review__main col-10 col-lg-12">
                  <div class="row">
                      <div class="review__avatar-box col-0 col-lg-2 col-sm-0">
                          <div class="review__avatar"
                               style="background-image: url(/css/img/avatar.png)"></div>
                      </div>
                    <div class="review__info-box col-12 col-clear col-lg-10 col-sm-12 col-sm-clear">
                        <div ',($object["auth"] ? 'class="review__info-box"' : 'class="row"'),'>',
                           (!$object["auth"] ?
                           '<a class="review__user-name col-12 col-clear" href="">
                               Пермякова Ксения Александровна
                            </a>'
                               : ''),
                           '<div class="review__date col-12 col-clear">
                                04.04.2018
                            </div>
                            <div class="review__icon review__icon_edit"></div>
                            <div class="review__icon review__icon_delete"></div>
                        </div>
                    </div>
                    <div class="review-title col-12 col-clear">'
                        .$object["header"].
                    '</div>
                    <div class="review-text col-12 col-clear" data-status="close">'
                        .$object["content"].
                        '<div class="review-text__block"></div>
                        <button class="review-text__more">читать далее</button>
                    </div>
                    <div class="review-grade col-12 col-clear">
                        <button class="review-grade__button"',(!$down? ' disabled' : ''),'>
                            &minus;
                        </button>
                        <div class="review-grade__value">'
                            .$object["grade"].
                        '</div>
                        <button class="review-grade__button"',(!$up ? ' disabled' : ''),'>
                            &plus;
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>';
}
