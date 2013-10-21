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
define('DB_NAME', 'kasteelderozerie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '>cuzek?5)^~CueI3~khVTH,$,8}ouag]ko9LWU]yixO+|_,cSm2N|X9`>zx`Hb b');
define('SECURE_AUTH_KEY',  '~aC!b/3Kb-m<3cw~0K*i5R]TUT$Y>(-Hd9rw)~-m-p24CPg@}C4MwCp}0/H]4T2J');
define('LOGGED_IN_KEY',    'u,xq{@&/yD+(r_L0WtMgS!OnzCI}P_<l2(Lt5(UA%Q6of@F`p!doVud_lzl9lS#s');
define('NONCE_KEY',        '{BLv`i9BX_G+UOThEkz)ZYNkNeW$P.e~vb}c;y|jjKP =MWdeCLeacg1s7bn 8+ ');
define('AUTH_SALT',        'T!{BM|}hD*1.z-&F%U+`-TX]3LCDXlgo[]eWTRa~TI5N>FnK7%6Sv_kn|XkQ3(R/');
define('SECURE_AUTH_SALT', '=y;NyeElW1s*?$,4f=i^+7U)JA+$?T9Zms}UnNXj3X@UI8F~#F(5aD(2/fAyR$e-');
define('LOGGED_IN_SALT',   'OHr|1}Z`_#wN<P$|ZS0W5A@-9p3V:Ml8bn+U,l %q.l-#eYwr;P$b+z0uD:)GaRI');
define('NONCE_SALT',       'wbI1hzy{e7 K:nW+<S-I+paP)s!>hueJ0KKnC3AnJAP|w&KY%$XC#>yGde>Wm<v(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
