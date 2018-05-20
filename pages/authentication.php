<div class="authentication" id="modal-0" data-status="modal-close">
    <div class="authentication__window">
        <div class="authentication-enter" data-status="open">
            <div class="authentication-title">
                авторизация
            </div>
            <div class="row row-center">
                <div class="authentication-element col-12 col-clear" data-status="">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/user_grey.svg')"></div>
                    <input class="registration-element__field"
                           type="text"
                           id="a-login"
                           name="a-login"
                           placeholder="логин"
                           required autofocus>
                    <div class="registration-element__error">
                        такого логина не существует
                    </div>
                </div>

                <div class="authentication-element col-12 col-clear" data-status="">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/lock-closed_grey.svg')"></div>
                    <input class="registration-element__field registration-element__field_logo"
                           type="password"
                           id="a-password"
                           name="a-password"
                           placeholder="пароль"
                           required>
                    <div class="registration-element__error">
                        некорректный пароль
                    </div>
                </div>

                <div class="col-12 col-clear">
                    <div class="row row-between">
                        <div class="authentication__checkbox">
                            <label for="checkbox-1" class="col-xs-12 checkbox">
                                <input type="checkbox" class="checkbox__field" id="checkbox-1" name="checkbox-1">
                                <span class="checkbox-animation">
                                <span class="checkbox-animation__button"></span>
                                <span class="checkbox-animation__icon"></span>
                                <span class="checkbox-animation__ripple"></span>
                            </span>
                                <span class="checkbox__content">
                                запомнить меня
                            </span>
                            </label>
                        </div>
                        <a class="authentication__forget">
                            забыли пароль?
                        </a>
                    </div>
                </div>

                <div class="col-12 col-clear col-center">
                    <button class="authentication__button authentication__button_small button button_green">
                        войти
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
                            нет&nbsp;аккаунта?
                        </div>
                        <hr class="block-content-header__hr">
                    </div>
                    <div class="authentication-more block-content-main">
                        <button class="authentication__button button">
                            регистрация
                        </button>
                    </div>
                </div>

                <div class="authentication__close" data-modal-number="0"></div>
            </div>
        </div>


        <div class="authentication-re-password" data-status="close">
            <div class="authentication-title">
                забыли пароль?
            </div>
            <div class="row row-center">
                <div class="authentication-element col-12 col-clear" data-status="">
                    <div class="registration-element__logo"
                         style="background-image: url('/css/img/icons/user_grey.svg')"></div>
                    <input class="registration-element__field"
                           type="text"
                           id="re-login"
                           name="re-login"
                           placeholder="логин"
                           required autofocus>
                    <div class="registration-element__error">
                        такого логина не существует
                    </div>
                </div>

                <div class="col-12 col-clear col-center">
                    <button class="authentication__button button button_green">
                        восстановить
                    </button>
                </div>

                <div class="col-12 col-clear col-center">
                    <div class="authentication__back">
                        назад
                    </div>
                </div>

                <div class="block-content col-12 col-clear">
                    <div class="registration__hr block-content-header block-content-header_center">
                        <hr class="block-content-header__hr">
                        <div class="registration__separator block-content-header__title">
                            нет&nbsp;аккаунта?
                        </div>
                        <hr class="block-content-header__hr">
                    </div>
                    <div class="authentication-more block-content-main">
                        <button class="authentication__button button">
                            регистрация
                        </button>
                    </div>
                </div>

                <div class="authentication__close" data-modal-number="0"></div>
            </div>
        </div>
    </div>
</div>