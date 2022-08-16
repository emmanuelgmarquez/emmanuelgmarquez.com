<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'emmanuelgmarquez_com');

/** MySQL database username */
define('DB_USER', 'emmanuelgmarquez');

/** MySQL database password */
define('DB_PASSWORD', 'e88N3vxj');

/** MySQL hostname */
define('DB_HOST', 'mysql.emmanuelgmarquez.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U3F8cNO;z)S?oL+lU1XKcKBpeOfQiul?KdG4U`F|PB1la@P@vW?6LhZtyAASxUXp');
define('SECURE_AUTH_KEY',  'J9#gv9$%S$nj6na+9Ga|k1RFri@htBK&aHSm*`IO1?j;&A/Q@EEUaNHa*^e9m7X7');
define('LOGGED_IN_KEY',    ':GhYLLM$gp"$!SZ3KMQJb`1Ux1+N193LM"!E4vUM+5:H?xEl`shMikVie7@Fa$uP');
define('NONCE_KEY',        'VyGZH$X3SO#BOdrY@C!Wz2/7/tx+98gz`@m&iO6xw&|ICmnB5@$nUy`"^RTEu#Lz');
define('AUTH_SALT',        '*R5odvqet@Gkw?qjo~OoQGXAQ?mb_6PLm$hZ$qKUr)"QF#w:y+Oix3:_/KVv*587');
define('SECURE_AUTH_SALT', 'o(hWl@FWhI7FSc0TOnYVA6XheVM;ftu4/#OWUsX:f%sBqb+Yc(OvO1fE&N%YBJ1C');
define('LOGGED_IN_SALT',   'AUlu2UA#2@E0wFWItMMgIAt2Cd/wnfrSAw31k6d@1A^%iBADBg#Q8%sPl`?q/o7s');
define('NONCE_SALT',       '_Db8:L*c0I19f@wSXt6wzYVu811:`F"JhXhZ#VDy^qfgt*?~oI#;q!1CwLzveT)F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_9ghytr_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
