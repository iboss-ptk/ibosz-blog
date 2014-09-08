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
define('DB_NAME', 'ibosz_wp');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'O[sEmx+*@FcwT&P:+ey4W!,dL01PH+HBK;{Ue4jp4m/?f-*[nucp<vw5^$UO2 9H');
define('SECURE_AUTH_KEY',  'Oj.|N1qkWHMD}8X30r>w]KfY8a`nrewI?b%* H!S_9@ht|PN)2@cR$lO;1gr`g||');
define('LOGGED_IN_KEY',    'yWtXhn|__1bd{pCF+FL,dA.0x#<?2_(@m;<JbMHcKsB~rUR+S(G0KGntN?Nl/].*');
define('NONCE_KEY',        ' s4T#oNj!7uL]}wdW*jKKsr8p-6D,5CB/SPEZg]/+J%$A~miiiS0Cd&5`4 ~}~tX');
define('AUTH_SALT',        '#q,5u>k}lwW08|_ `cwux*PaX@*9.c&btlBBY4NY^H=hS}/?e4+>vQK%m#k-W}9j');
define('SECURE_AUTH_SALT', 'x/j!%:tvPJfA1m+Q/lB*Gef{E)M$boB+rUaM9/RE`{|N;TpP6k@D<Z<E,kFRa{u[');
define('LOGGED_IN_SALT',   'J8h2])D9Dne,X7Hh~[?DrJ*G.I1a%3]#rWfo+,hUrnE#TKQO6FQ[E&+x4q.bZv0o');
define('NONCE_SALT',       '}T2DVxAE}lX^tL[[>~!LH?qBW][*{sJL,+czY,J^l9GX$s93bRUa9W<7s40FHGt0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
