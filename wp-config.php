<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ngs');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}M2{I_9s3`(^4MH{3VkBKOmR}{7QQ|#_}I<0xn:Z])Qi+^q7U+M/@ )YINpz4suC');
define('SECURE_AUTH_KEY',  '!_RW[3+L^-FPM}z]_di6/~5Bt8]tpN(I:RA6GELte>w_yEJVK7wt#FhKD6TRtVL6');
define('LOGGED_IN_KEY',    'S|U|@n6fucPB6#GLY:XN+Xe66x+dx+5F3nb~=+:28skVtESbef*#<v[E -<P|J&_');
define('NONCE_KEY',        'OXLv]w8#?[v*R|d+a(l]~1;/<QckQojB$edt/OI2!$|B@Fwzk1M)lA|wS`>:2Vsx');
define('AUTH_SALT',        '15IUeiHgvrP:%W+<^spj,Rlw8SkdoBeJTD_-|,XhOoRBiSVWw9|}Wp hG4`Y?i/~');
define('SECURE_AUTH_SALT', 'd!=$h]ry-u^0x4q<Nk$O`vI[)HRzv+|r6i7r,q^w-R<$$tG,!&Y3C^xiA@&dAEdI');
define('LOGGED_IN_SALT',   'b*&|p/gbm;}aaxTyxdh-3td%Y$-?n#4>ppI#ST75[lH)):]cR`Fnxq,oVK!hN7G=');
define('NONCE_SALT',       '0-N2E+/~!*qPVMpv~B8!auFb,*bJi9v!R:hkI0(J|b-sM&K>dLtKvg%|^.XQs@b&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
