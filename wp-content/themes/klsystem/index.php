<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>./style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>./assets/css/normalize.css" />
<!--    <link rel="stylesheet" href="--><?php //echo get_stylesheet_directory_uri() ?><!--./assets/css/bootstrap.min.css"/>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">-->
    <title>KL System</title>
    <?php wp_head() ?>
</head>
<body>
    <header id="header" class="header">
        <div class="navbar">
            <div class="container__header">
                <div class="navbar-wrap">
                    <div class="logo navbar__logo">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/logo.svg" alt="logo">
                    </div>
                    <div class="navbar__info">
                        <a class="navbar__email" href="mailto:mail@klsys.ru">mail@klsys.ru</a>
                    </div>
                    <div class="navbar__info">
                        <a class="navbar__phone" href="tel:+74996001442">+7 499 600-14-42</a>
                    </div>
                    <div class="navbar__telegram">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/telegram.svg" alt="telegram">
                        </a>
                    </div>
                    <button class="menu-button">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/menu.svg" alt="">
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
                <a href="#" class="menu__link">IT Аутсорсинг</a>
                <a href="#" class="menu__link">Zabbix</a>
                <a href="#" class="menu__link">Продукты 1С</a>
                <a href="#" class="menu__link">WtWare</a>
                <a href="#" class="menu__link">IP телефония</a>
                <a href="#" class="menu__link">Сайты</a>
                <a href="#" class="menu__link">Сети</a>
                <a href="#" class="menu__link">Видеонаблюдение</a>
            </nav>
        </div>
    </section>
    <section class="it_outsource">
        <div class="container">
            <h1><a href="#" class="it_outsource__links">Разрабатываем</a> и <a href="#" class="it_outsource__links">обслуживаем</a>
                веб сайты, занимаемся <a href="#" class="it_outsource__links">дизайном</a>,
                <a href="#" class="it_outsource__links">продвижением</a>, <a href="#" class="it_outsource__links">1С</a>
                <br>и <a href="#" class="it_outsource__links">видеонаблюдением</a></h1>

            <button class="request">
                Оставить заявку
            </button>
            <h2 class="service">
                IT Аутсорсинг
            </h2>
            <p class="service-description">
                Эффективное управление ИТ-инфраструктурой, поддержание всех
                ее компонентов в актуальном и работоспособном состоянии требуют
                наличия в штате полноценной службы высококлассных
                ИТ-специалистов. Для многих компаний это становится источником
                высоких затрат — от необходимости обеспечить рабочее место
                до постоянных расходов на повышение квалифииации.
            </p>
            <div class="service-cells">
                <div class="cell">
                    <span class="cell__header">Обслуживание</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.</span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">Аудит</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                    </span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">Аутстаффинг</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может.
                    </span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">1 линия техподдержки</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                    </span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">IT Дикректор</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                    </span>
                    <a href="#" class="cell__more">Подробнее... </a>
                </div>
            </div>
        </div>
    </section>
    <div class="barcode">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode.png" alt="">
    </div>
    <section class="zabbix section-info">
        <div class="container">
            <div class="section-heading">
                <span class="section-heading__main">
                    Zabbix
                </span>
                <span class="section-heading__sub">
                    / Системы мониторинга /
                </span>
            </div>
            <div class="section-description">
                Zabbix - универсальное рееорпоративного уровня <br>
                для мониторинга миллионов метрик с десятков тысяч серверов,<br>
                виртуальных машин и сетевых устройств в режиме реального времени.<br>
            </div>
            <div class="features">
                <div class="features__item">
                    <span class="features__item__header">
                        Сбор метрики с устройств
                    </span>
                    <span class="features__item__desc">
                        Мониторинг любой IT
                        инфраструктуры, облачных
                        ресурсов, сервисов,
                        приложений
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Определение гибких порогов
                    </span>
                    <span class="features__item__desc">
                        Автоматическое
                        обнаружение состояний
                        проблем во входящем
                        потоке метрик. Отсутствие
                        необходимости постоянно
                        следить за входящими
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Оповещения при проблемах
                    </span>
                    <span class="features__item__desc">
                        Оповещение ответственных
                        персон о событиях
                        с использованием разных
                        каналов
                    </span>
                </div>
            </div>
            <div class="details-button green-on-white">
                Подробнее
            </div>
        </div>
    </section>
    <div class="barcode dark-bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode-white.png" alt="">
    </div>
    <section class="products_1c section-info">
        <div class="container">
            <div class="section-heading">
                <span class="section-heading__main">
                    Продукты 1С
                </span>
            </div>
            <div class="section-description">
                1С это самая популярная многопользовательская система для комплексной
                автоматизации бизнеса. Обеспечим комплексное сопровождение
                Вашей программы и научим использовать100% функционала системы,
                начиная от поддержки корректной работы программы и заканчивая
                гибкой настройкой всех операций учета под вашу компанию.
            </div>
            <div class="service-cells">
                <div class="cell">
                    <span class="cell__header">Внедрение</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.</span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">Поддержка</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                    </span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
                <div class="cell">
                    <span class="cell__header">Кастомизация</span>
                    <span class="cell__description">
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может и нет.
                        Каждый охотник желает
                        знать, где сидит фазан, а
                        может.
                    </span>
                    <a href="#" class="cell__more">Подробнее...</a>
                </div>
            </div>
        </div>
    </section>

    <div class="barcode">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode.png" alt="">
    </div>

    <section class="wtware section-info">
        <div class="container">
            <div class="section-heading">
                <span class="section-heading__main">
                    WtWare
                </span>
                <span class="section-heading__sub">
                    / ТОНКИЕ КЛИЕНТЫ /
                </span>
            </div>
            <div class="section-description">
                Готовый комплект программного обеспечения, которое
                позволяет создавать из компьютеров тонкие клиенты
                для подключения к серверу по протоколу RDP. Компьютер
                может быть любым, подойдет старый маломощный системный
                блок и миниатюрный новый компьютер в корпусе mini-ITX,
                который можно закрепить на задней крышке монитора.
            </div>
            <div class="features">
                <div class="features__item">
                    <span class="features__item__header">
                        Загружается по сети
                    </span>
                    <span class="features__item__desc">
                        Подключите новый компьютер к сети,
                        укажите в БИОСе загрузку по сети
                        — и тонкий клиент готов к работе
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Просто настроить
                    </span>
                    <span class="features__item__desc">
                        В дистрибутив WTware включены службы для загрузки по сети.
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Работает с Server 2019
                    </span>
                    <span class="features__item__desc">
                        Работает на Windows Server от 2000 до 2019,
                        Hyper-V VDI, удаленное управление Windows,
                        xrdp на Linux, Mac Terminal Server.
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Поставил и забыл
                    </span>
                    <span class="features__item__desc">
                        Принес коробку, подключил провод, нажал кнопку.
                    </span>
                </div>
            </div>
            <div class="details-button green-on-white">
                Подробнее
            </div>
        </div>
    </section>

    <div class="barcode dark-bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode-white.png" alt="">
    </div>

    <section class="ip_telephone section-info">
        <div class="container">
            <div class="section-heading">
                <span class="section-heading__main">
                    IP телефония
                </span>
            </div>
            <div class="section-description">
                Требуется телефон в офис?
                <br><br>
                Хотите сократить расходы на связь? Не знаете, как организовать работу
                удаленных сотрудников? IP-телефония - это современный гибкий сервис,
                который решает большое число бизнес-задач.
            </div>
            <div class="features">
                <div class="features__item">
                    <span class="features__item__header">
                        Всегда на связи
                    </span>
                    <span class="features__item__desc">
                        IP-телефония позволяет быть на
                        связи всегда и для всех благодаря
                        многоканальным номерам
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Все вместе
                    </span>
                    <span class="features__item__desc">
                        Конференции связи с несколькими людьми одновременно
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Четкий звук
                    </span>
                    <span class="features__item__desc">
                        Защищает от помех, качественно передает голос
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Помнит все
                    </span>
                    <span class="features__item__desc">
                        Ведет статистику разговоров, может осуществлять запись звонков
                    </span>
                </div>
            </div>
            <div class="details-button green-on-white">
                Подробнее
            </div>
        </div>
    </section>

    <div class="barcode">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode.png" alt="">
    </div>

    <section class="sites section-info">
        <div class="container">
            <div class="section-heading">
                <span class="section-heading__main">
                    Сайты
                </span>
            </div>
            <div class="section-description">
                С каждым годом объем электронной торговли
                растет темпами, которые недоступны традиционной
                экономике. Осознанный подход к разработке интернет-магазина
                позволяет добиться максимума отдачи от каждого реализованного проекта.
            </div>
            <div class="features">
                <div class="features__item">
                    <span class="features__item__header">
                        Обслуживание
                    </span>
                    <span class="features__item__desc">
                        Мониторинг любой IT
                        инфраструктуры, облачных
                        ресурсов, сервисов,
                        приложений
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Создание
                    </span>
                    <span class="features__item__desc">
                        Автоматическое
                        обнаружение состояний
                        проблем во входящем
                        потоке метрик. Отсутствие
                        необходимости
                    </span>
                </div>
                <div class="features__item">
                    <span class="features__item__header">
                        Продвижение
                    </span>
                    <span class="features__item__desc">
                        Оповещение ответственных персон о событияхс использованием разных каналов
                    </span>
                </div>
            </div>
            <div class="details-button green-on-white">
                Подробнее
            </div>
        </div>
    </section>

    <div class="barcode dark-bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/barcode-white.png" alt="">
    </div>

    <section id="network">
        <div class="container">

        </div>
    </section>

    <sesction id="videosystem">
        <div class="container">

        </div>
    </sesction>

    <footer id="footer" class="footer">
        <div class="container">

        </div>
    </footer>
<?php wp_footer() ?>
</body>

</html>