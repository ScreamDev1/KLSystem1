<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/normalize.css" />
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <title>KL System</title>
    <?php wp_head() ?>
</head>
<body>
<header id="header" class="header">
    <div class="dropdown-menu" id="myDIV">
        <div class="close-button" onclick="PopUpHide()">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/close_button.svg" alt="">
        </div>
        <ul class="left-content">
            <li><a href="/it-outsource/">IT Аутсорсинг</a></li>
            <li><a href="/zabbix/">Zabbix</a></li>
            <li><a href="/1c/">1C</a></li>
            <li><a href="/wtware/">WtWare</a></li>
            <li><a href="/ip-telephony/">IP телефония</a></li>
            <li><a href="/sites/">Сайты</a></li>
            <li><a href="/network/">Сети передачи данных</a></li>
            <li><a href="/video-surveillance/">Видеонаблюдение</a></li>
        </ul>
        <div class="right-content">
            <a href="/about-us/">О нас</a>
            <a href="/contacts/">Контакты</a>
            <button class="request" onclick="PopUpRequestShow()">Оставить заявку</button>
        </div>
    </div>
    <div class="navbar">
        <div class="container__header">
            <div class="navbar-wrap">
                <div class="logo navbar__logo">
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="navbar__info">
                    <a class="navbar__email" href="mailto:mail@klsys.ru">mail@klsys.ru</a>
                </div>
                <div class="navbar__info">
                    <a class="navbar__phone" href="tel:+74996001442">+7 499 600-14-42</a>
                </div>
                <div class="navbar__telegram">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/telegram.svg" alt="telegram">
                    </a>
                </div>
                <button class="menu-button" onclick="PopUpShow()">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</header>
<section class="menu-line">
    <div class="menu">
        <nav class="menu__nav">
            <?php $url = $_SERVER["REQUEST_URI"];?>
            <a href="/" class="menu__link <?if($url=='/') echo ' active'?>">Главная</a>
            <a href="/it-outsource/" class="menu__link <?if($url=='/it-outsource/') echo ' active'?>" >IT Аутсорсинг</a>
            <a href="/zabbix/" class="menu__link <?if($url=='/zabbix/') echo ' active'?>">Zabbix</a>
            <a href="/1c/" class="menu__link <?if($url=='/1c/') echo ' active'?>">Продукты 1С</a>
            <a href="/wtware/" class="menu__link <?if($url=='/wtware/') echo ' active'?>">WtWare</a>
            <a href="/ip-telephony/" class="menu__link <?if($url=='/ip-telephony/') echo ' active'?>">IP телефония</a>
            <a href="/sites/" class="menu__link <?if($url=='/sites/') echo ' active'?>">Сайты</a>
            <a href="/network/" class="menu__link <?if($url=='/network/') echo ' active'?>">Сети</a>
            <a href="/video-surveillance/" class="menu__link <?if($url=='/video-surveillance/') echo ' active'?>">Видеонаблюдение</a>
        </nav>
    </div>
</section>