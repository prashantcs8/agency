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
define('DB_NAME', 'agency');

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
define('AUTH_KEY',         '>.Q+qB )|-H&&vW>/!Q)rvYCKqyd;BG-j5Rk1<I=hC10kuOfHMlR#QO<kaQ}B*(l');
define('SECURE_AUTH_KEY',  '0s>c<x5$@{%stP5@J9&Qd?<}-$a#kZg<1/jn!s,x5>!7E7EEGU88{W#dM(&rAZi<');
define('LOGGED_IN_KEY',    ':pP*Z*uc_xGlj*%<y[SIV~S3.3[;~P?Fp WBxW?i,[L`uQ&3uyE)oW6A9<Kp[~3T');
define('NONCE_KEY',        '<o4nPb#pJ{:6u++w*L>*usoky]/ O:Aa[.MDC:DKzI?_{pjZcEwL NRSdyZ44OJ|');
define('AUTH_SALT',        '8S]KAB[tm=u:{NgqM[=0K]b,klx_0<cfaBc=iN{!wGcvS8!$@/i[*M8[Y?jL7?c|');
define('SECURE_AUTH_SALT', 'xaFoj48B2P#9X-Bg.]{}h= N#GeP`_E`^wo-_G]4@&nV%!3d052,(m~/Dt4d0!iD');
define('LOGGED_IN_SALT',   'fQ,ZZs[sh5>%J 4yRO^l3}YOZ`wbd$sD:iXO1e oT`xXrU6{OcYZtfp]aoNX,KUg');
define('NONCE_SALT',       'Sb0U$3X>.Kc4TkHG1HQBI{K.Ytl?o+Gx(~UrhcFzF{2*%To>E6.XwRTc?/9Kp|]E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ag_';

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
