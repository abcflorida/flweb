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
define('DB_NAME', 'fx_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'r00tAdmin');

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
define('AUTH_KEY',         '%OEsR.z/:s9>UkTf$ wp9Rhdj/xLD6s%p/P9@;YiZeV~:PT15SgX*o(FlAbJ7(F^');
define('SECURE_AUTH_KEY',  'iik_rvWr9*Os5unc$swCE!v=HiE?=<OA0pkk%87X^Dv~Evl!PCwy(9rEn5vuw},u');
define('LOGGED_IN_KEY',    'R<L&]n9=^T4Z/KOT+R0=>7lH3`}C?4YkeeY%je,^EVe!%dL[rzAlOV=1&oAD7l19');
define('NONCE_KEY',        'iiOvj+4I;t+M6dH0_]qtnO/5Nj^v$H-<Dya^6IP>?>]6`v;@6g|.lX==c~mDr&8{');
define('AUTH_SALT',        '4:.mdsaByLrIE?4JqUR8._L#`]gz(-w&h8TErfpm=1EtMVP,7,NqjNESD1?y$TfI');
define('SECURE_AUTH_SALT', 'U{JOG$fi,j{F%fS=S8UfT-Id-W!fRhQI{J.SQhO^H#c9LOpbNKcLTkx(#4N3@fD1');
define('LOGGED_IN_SALT',   'vr@=CY~Sgc=RqZunN2OnT^^Ti|s m)#VJ?Hq.jBgtT%Wl56g#FN&58%NO/Vk8bxj');
define('NONCE_SALT',       ',y~7Y~^]*Xg.N -gBy#xfS)]O=1.`9s`ZH$/[7=ru;IZD<&$2g=p1f#Ijzl*Eb$=');

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
