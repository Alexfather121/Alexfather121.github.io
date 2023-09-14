<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<!----------------------------------------MAIN--------------------------------------------------->
    <div class="main">

<!----------------------------------------CONTACTS--------------------------------------------------->

        <div class="contacts-cover">
            <div class="our__contacts">
                <div class="our__contacts__wrap">
                    <h1 class="our__contacts__h1">Наши контакты:</h1>
                    <div class="address">
                        <h2 class="address__h1">Адрес:</h1>
                        <p>
                            <div class="adress__description">
                                Минская область, Минский район, Щомыслицкий с/с, р-н д. Озерцо, ул. Меньковский тракт, дом 14, офис 313
                            </div>
                        </p>
                    </div>
                    
                    <div class="mail">
                        <h2 class="mail__h1">Почта:</h1>
                            <p>
                                <div class="mail__description">
                                    info@lagerlogistik.by
                                </div>
                            </p>
                    </div>
                    <div class="phone">
                        <h2 class="phone__h1">Телефон:</h1>
                            <p>
                                <div class="phone__description">
                                    <p>+375(25) 701-98-38</p>
                                    <p>+375(29) 509-41-38</p>
                                </div>
                            </p>
                    </div>
                </div>
            </div>
            <div class="our__contacts__frame">
                <iframe class="our__contacts__frame-window" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad6405afeecabf8432f6cbf22e38fd576a4553a81ef2bdf8795edcec37d3247ae&amp;source=constructor" frameborder="0"></iframe>
            </div>
        </div>

<!----------------------------------------CALLBACK--------------------------------------------------->

        <div class="callback-cover">

            <div class="callback-cover__input">
                <h1 class="callback__h1">Заказать обратный звонок</h1>
                <p>
                    <span>Отправьте заявку и наши специалисты свяжутся 
                        с Вами в ближайшее время!</span>
                </p>
                <form action="#">
                    <input class="form__input" type="text" placeholder="Ваше имя"><br>
                    <input class="form__input" type="phone" placeholder="+375 (__)-___-__-__"><br>
                    <input class="form__input" type="text" placeholder="Выберите услугу"><br>
                    <button type="submit" class="form__btn">Отправить</button>
                </form>
            </div>
            <div class="callback-cover__block"></div>

        </div>

<!----------------------------------------FOOTER--------------------------------------------------->
<?php get_footer(); ?>

