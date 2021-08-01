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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dedst587_med' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'dedst587_med' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'P2XUQyUp' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'zn0mahJ[LSI@zR_#d,Nl,14AsqmA {ybvz?l-[4*?N22ShvIs1cBn9QAHhfM;RX}' );
define( 'SECURE_AUTH_KEY',  'VuLs^Kx:1SnVIH*G@$E2Xxbvgy6[B#wb?Hpq|E6=q}T(a/(r1a42p1[RKNTJ[6E%' );
define( 'LOGGED_IN_KEY',    '!Q@nIGWcL(Tj|sbO+&=aGTpNXX${e60!nL6 Zm7 gj Ap4wXm-|z1$}n5dY/=3Ve' );
define( 'NONCE_KEY',        '8N9Tfo(r/xkesq_u2x61.[X:ae7`~>+Ror?gj!+/$usPy-{TaS-yfxd[ZjxEA-&C' );
define( 'AUTH_SALT',        '.62DkE<|X2oAKrrOfT5!r<LQd[Bm1Uoc0%%Pu2%w%M9v^qvYo~gwOvTX<=?F1<U^' );
define( 'SECURE_AUTH_SALT', 'hW)WjJOl6}<m;r;r%e0H=!bj;ra&L|7?:,-om(O3Wdbe8hn#eicEev9(g>[vbj}[' );
define( 'LOGGED_IN_SALT',   'QAD-RK;o73ojcafx!4OZTOk~(bDDf(8o_`WCi2g.x1w0I,F#`*zE~l)Xc;~8Sm?5' );
define( 'NONCE_SALT',       ' F_@1#}Wk$:c=s0k]$1oUiduFs]8k=y+ }_4XaX}/nfJhIvWDCiCcnx`3r,/Z;p*' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WPCF7_VALIDATE_CONFIGURATION', false );



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
