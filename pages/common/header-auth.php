<header class="header">
    <div class="header-main">
        <div class="header-main__area">
            <a class="header-project-name"
               href="/index.php"></a>
            <div class="header-main-buttons" data-auth="true">
                <a class="header-main-buttons__element button-registration" href="/pages/registration.php">
                    регистрация
                </a>

                <div class="header-main-buttons__element button-authentication modal-button"
                     id="button-authentication"
                     data-modal-number="0">
                    вход
                </div>


                <input class="header-main-buttons__element_user-active" type="checkbox" id="user">
                <label class="header-main-buttons__element header-main-buttons__element_user button-user"
                     for="user"
                     title="sargatanaaaaaaaaaaaaaaas94@mail.ru">
                    sargatanaaaaaaaaaaaaaaas94@mail.ru
                </label>

                <div class="header-user" >
                    <div class="header-user__title">
                        <div class="header-user__avatar" 
                             style="background-image: url('/css/img/avatar.png')"></div>
                        <div class="header-user-namespace">
                            <div class="header-user-namespace__name">
                                Пермякова Ксения
                            </div>
                            <div class="header-user-namespace__nickname">
                                FamilyCross
                            </div>
                        </div>
                    </div>
                    <div class="header-user-main">
                        <a class="header-user-main-element"
                           href="/pages/user.php">
                            <div class="header-user-main-element__logo header-user-main-element__logo_home"></div>
                            <div class="header-user-main-element__text">
                                мой профиль
                            </div>
                        </a>
                        <hr class="header-user-main__hr">
                        <a class="header-user-main-element header-user-main-element_disabled" title="находится в разработке">
                            <div class="header-user-main-element__logo header-user-main-element__logo_library"></div>
                            <div class="header-user-main-element__text header-user-main-element__text">
                                моя библиотека
                            </div>
                        </a>
                        <button class="header-user-main__button button">
                            выйти
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="header-navigation">
        <a class="header-navigation__element header-navigation__element_disabled">
            ТОПы
        </a>
        <div class="header-navigation__hr"></div>
        <a class="header-navigation__element"
           href="/pages/book-list.php">
            Список книг
        </a>
        <div class="header-navigation__hr"></div>
        <a class="header-navigation__element header-navigation__element_disabled">
            Блог
        </a>
    </nav>
</header>