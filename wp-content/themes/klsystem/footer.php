<footer id="footer" class="footer">
    <div class="container__header">
        <div class="footer-wrap">
            <div class="footer__item">
                <div class="footer__logo">
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <span class="footer__copywrite logo_caption">Digatal агентство полного цикла</span>
                <span class="footer__copywrite">© 2013-14, KLSystem</span>
            </div>
            <div class="footer__item">
                <a href="#" class="footer__link">IT Аутсорсинг</a>
                <a href="#" class="footer__link">Zabbix</a>
                <a href="#" class="footer__link">1C</a>
                <a href="#" class="footer__link">WtWare</a>
            </div>
            <div class="footer__item">
                <a href="#" class="footer__link">IP телефония</a>
                <a href="#" class="footer__link">Сайты</a>
                <a href="#" class="footer__link">Сети передачи данных</a>
                <a href="#" class="footer__link">Видеонаблюдение</a>
            </div>
            <div class="footer__item">
                <a href="tel:+74996001442" class="footer__link footer__link__bold">+7 499 600-14-42</a>
                <a href="mailto:mail@klsys.ru" class="footer__link footer__link__bold">mail@klsys.ru</a>
                <a href="#" class="footer__link footer__link__bold">О нас</a>
                <a href="#" class="footer__link footer__link__bold">Контакты</a>
            </div>
        </div>
    </div>
</footer>
<div class="form-wrapper">
    <div class="close-button" onclick="PopUpRequestHide()">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/close_button.svg" alt="">
    </div>
    <form action="#" class="request-form">
        <label for="name">Ваше имя</label><br>
        <input type="text" name="name"><br>
        <label for="telephone">Телефон</label><br>
        <input type="tel" name="telephone"><br>
        <label for="email">Почта</label><br>
        <input type="email" name="email"><br>
        <label for="message_text">Текст обращения</label><br>
        <textarea name="message_text" cols="36" rows="5"></textarea>
        <button type="submit" class="request">Отправить</button>
    </form>
</div>
<script src="/node_modules/simple-parallax-js/dist/simpleParallax.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/parallax.js"></script>-->
<?php wp_footer() ?>
</body>

</html>
