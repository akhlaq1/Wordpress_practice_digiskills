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
define('DB_NAME', 'akhlaq');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'F0]fz?7n7#yUb6sJGwg+7s(d-^nw@vCuJPHN5z4QLcLc{hISZVPuym`DCknwON1I');
define('SECURE_AUTH_KEY',  'wUGoW%o~<u%%C}RY^%,8_x$f6uyZcWI7WYT=_>PZ5~Wq]T4*=7^hudHk2P5|!QS2');
define('LOGGED_IN_KEY',    '/j=P1K*G6ul?V-O5#:=~_#+xDoN.c/;KZ9HA;ETt3 0GA*6gR(.@X[40lOum%nJ#');
define('NONCE_KEY',        'fdR<U9?]kIQI,,V6XawY8t_o%uBl8X!t92dX3P{t6Ztn~-RGB$L35^<mC{QqHdat');
define('AUTH_SALT',        '][+EC#*)D<=v%93jZ7 pd(GYo {V j=t{pp@]LN:ek>lo`:Ow9%I|+o6>e?!G8_T');
define('SECURE_AUTH_SALT', '>E`FjIW$[4Y9,G}FmC6-U~X+QEI&^t]/M}B&.aCIR;;w||u,HTVHFL]D;M4rw#vO');
define('LOGGED_IN_SALT',   's=*8M$f/%3;1rrRL1Gc.[GT{M-syG/BpYORCLfw=sb4 wh`OIs)0VlVKT( C8PT4');
define('NONCE_SALT',       'U _Z.)=UYyHV )3AR<8)/_G-9m#$^;#PE+4b-NnodC&0rp*<)Xq9@DcDm#t9O6O-');

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
