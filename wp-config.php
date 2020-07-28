<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kl_system_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|as7z5nE4cTK^CiI!|HH2fwq+ohI|8IqroJ&[#lRVaUX#$C{;P~Uo(zDjgk_GG<E' );
define( 'SECURE_AUTH_KEY',  'p}td=d@rhPh %7KBQH+cb76!#g4D`A~2@Owc`Ra6O)[&dCR<tTPU0EON06I1`ieY' );
define( 'LOGGED_IN_KEY',    '2th,w))+TS~.#6N:B^DbuN}8|jT!oW{?vp1O-m>`_]C+:.{u7<ISE]mf]Os;&4(v' );
define( 'NONCE_KEY',        '|[XkbP@0rAZ#4HmD!3k-^rKns:G|G6xl+GKG;K.m8-BPPGgB!5t*k=~#yJ~1#P([' );
define( 'AUTH_SALT',        'tocUJ.;jc@{H(;6sp~Tj$14;w.~~s0TpksD{xHecz1=JCrF;8X+khYTbImB/#<:Y' );
define( 'SECURE_AUTH_SALT', '[.GV$%n6&`]cIHP[&?V[@8dV}-z=sZ]o(RP3$Eg^$26;1WmZif|cUIv4QmL=HF<_' );
define( 'LOGGED_IN_SALT',   'ut*iW<-d/]nE3eRP9nQ(&(<~bl1b`Fkj!#(W>4~|87i&)FFo.oDNUFcs5g&7YG5%' );
define( 'NONCE_SALT',       'Ok}d?M{;u>9sk8rV-%GITTnA_M&:;SH >~xa<oRY@9%L9+#N<Fq6,~B3Q!*$1vYA' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
