<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yebo_bicycle');

/** MySQL database username */
define('DB_USER', 'yebo_admin');

/** MySQL database password */
define('DB_PASSWORD', 'cpe03rmutp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'IuJ;yuK%HN3~MG65BN(JjTpE]*y`k#]V&mzUM-9{dY:85p4a)WFgF)GBP!sGq_ P');
define('SECURE_AUTH_KEY',  'Gt]B#~YUzqAe_lr+2r>{2Ei}T_~_fzK<k%Xh?*zU4k`=ny?JNj?xyloZ;= pcRRx');
define('LOGGED_IN_KEY',    'zgz?H72p]:bW&p<b)Y`tD7-)^S6nB5E-x.-|C):Aw;+rVA~,%W`MDmO$3cT7V@Fi');
define('NONCE_KEY',        'q|Wj4mNPe:~~:gL#ZS@hn+!OG~lSO0Z-@9~}e$!3#N-Xz^2VE{-5kSI=Ib#a#1X0');
define('AUTH_SALT',        '{s&j*AVDV{1%}O%c6?A]IabJQA.syx_V@TXQ[m3:`p~ TxsB2*vm8B+3HB/ 1!2-');
define('SECURE_AUTH_SALT', 'CzwNSnY-)R_5lTE-~h(21WTh_H/MJ#X|M?_0:[J^#C1E`?+__%(Ey*d0$Hnm$hNB');
define('LOGGED_IN_SALT',   'BDH,/[7yYXFAHw;BYLbN+i`Zz[;J/ju<F>f@{;uL(p-Z3<=7ua_pLfOZ@T6gemBG');
define('NONCE_SALT',       '=D}sZe$XXclh-(j;i.2MLH|5A2Hv:tsmr8pj.OEh*:9|rKPH${iM]yyLC=[(cawy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
