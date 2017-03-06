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
define('DB_NAME', 'wp_fx');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'r00tAdmin');

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
define('AUTH_KEY',         '&m2u$||~cW6C~@l NZY]&^BoAa-Y:B_gLe@nZiCoLNNzw2P/6J-N#Jh_l#1HYE,O');
define('SECURE_AUTH_KEY',  '?|?1ov9Tl+I#K+Qa9f#BPG?{|SFtBn[lVhC; wFe?bM;$-%a2FG]3-Tj@)NA[``@');
define('LOGGED_IN_KEY',    'Jz,`;K:CDGfiCphMrQ>Jh4:Qqk[IP[cwo2fycq$[yV2>w{l/mm#XX`P!g/74qPIf');
define('NONCE_KEY',        'hf-e|1`!NaYVC~rG1Lbd {Av-Lro/--i3~R!)2$7qz/H&;si1oZALXaV[D:GQ8UU');
define('AUTH_SALT',        '|y4-dZ?Bp^v<`f|Akn81[L/9@oa*}tRa>)CLQy%Kq~b]XsH=j/v.i?Yc3xIY@u]f');
define('SECURE_AUTH_SALT', 'yvh#y|~e-{eh!h0yvqKx0Z)k?e@+gw$,2CK5A+LIs7s&N+f0(K.Wu[Qs+vn&B]&B');
define('LOGGED_IN_SALT',   'CY@w;NqKaN89h_aOaFGPq!7+qQDbZZ)3EEG/R&4el,[<U!n#tA4Rx!XyAA|/V3IV');
define('NONCE_SALT',       '_5VXILbhN*Lp|7fh;!eqPKamJBUBxl^KlxZo6E@g7_+s6;#+8/%{yh=GZ_nq~->{');

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
