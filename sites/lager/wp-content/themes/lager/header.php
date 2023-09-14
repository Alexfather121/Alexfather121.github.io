<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>


    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Лагер Логистик</title>
</head>
<body>
<!----------------------------------------HEADER--------------------------------------------------->
    <header class="header">
        <div class="header-cover cover">
            <div class="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/main_logo.svg" alt=""></a></div>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__link"><a href="#">Главная</a></li>
                    <li class="menu__link"><a href="#">Фулфилмент</a></li>
                    <li class="menu__link"><a href="#">Ответственное хранение</a></li>
                    <li class="menu__link"><a href="#">О нас</a></li>
                    <li class="menu__link"><a href="#">Контакты</a></li>
                </ul>
                <div class="header__burger">
					<span></span>
				</div>
            </nav>
            <div class="header__phones">
                <a href="tel:+375257019838">+375 (25) 701-98-38</a>
                <br>
                <a href="tel:+375295094138">+375 (29) 509-41-38</a>
            </div>
            <div class="header__instagram"><a href="https://www.instagram.com"><img src="<?php bloginfo('template_url'); ?>/assets/img/main_inst_logo.svg" alt=""></a></div>
        </div>
    </header>