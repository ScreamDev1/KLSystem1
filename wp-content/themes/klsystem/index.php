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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/logo.png" alt="logo">
                    </div>
                    <div class="navbar__info">
                        <a class="navbar__email" href="mailto:mail@klsys.ru">mail@klsys.ru</a>
                    </div>
                    <div class="navbar__info">
                        <a class="navbar__phone" href="tel:+74996001442">+7 499 600-14-42</a>
                    </div>
                    <div class="navbar__telegram">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/telegram.png" alt="telegram">
                        </a>
                    </div>
                    <button class="menu-button">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/images/menu.png" alt="">
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
    <section id="zabbix">
        <div class="container">

        </div>
    </section>

    <section id="1c_products">
        <div class="container">

        </div>
    </section>

    <section id="wtware">
        <div class="container">

        </div>
    </section>

    <section id="ip_telephone">
        <div class="container">

        </div>
    </section>

    <section id="sites">
        <div class="container">

        </div>
    </section>

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