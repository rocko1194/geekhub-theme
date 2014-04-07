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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '5$FT+BQe)p,tfWDCe;<V>Ly3o=X_QCHmSajP0&j^aza=ly_5u^gSfgV|{JGjOU,N');
define('SECURE_AUTH_KEY',  '$w28)^!tHXVG{!WK6P/](@GT?n3L{tkj%/ {pA#{+,}?=c9C+k_ired&s-~0MoO`');
define('LOGGED_IN_KEY',    ')J[;K+#:^Zuo/Wd0R(cjZ6@E;Ub&9}M(<h[7aE#x#q=rMA&o8/#v~r,(WuSR}+$A');
define('NONCE_KEY',        'c3>h#A8F0<+F]E.),r!};Kg7`{2Hs/^jvs+D%wXwb?<U:%K0Q*e)Kxp-#yE/IdjF');
define('AUTH_SALT',        'GbMTRXa9o4$igw7w4AQjR@sgX9%4Tz0O h~J`pdLT(!ca^%U{#T.<|&d>T{7~.?J');
define('SECURE_AUTH_SALT', '(o[l3d(?*4>()x!orX?.`] S-]kz:A|Vz6OHT.ZvPf?^.!i6}_89$v{e; B=P: -');
define('LOGGED_IN_SALT',   'LsNxn[7Xdix020T7TMIK1F4@@{EU`PyUo[.^<5`|M@$?3~B&#A#EYn]l1H%hCoy^');
define('NONCE_SALT',       '!4+>u+_8 a(]u+3IFNzr$SOm$tFV2sTwZ,Q;#+G6ix>d+4d8OK9aTgwE/=:ZnToi');

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
define('WPLANG', 'ru_RU');

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