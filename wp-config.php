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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plant-hub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qId;kflK.zS_r8yw4yv._+.y&3Bl*KW=ts%zuX>*&1CP_%i?sWDV%1avX(Z0~pCS' );
define( 'SECURE_AUTH_KEY',  '{~U(V1zVwNu(?f>b1G`{b-0k 9[bcg4:v5Uh:<LjNyCMtbF)mK`ZyGqi&;JJu<3}' );
define( 'LOGGED_IN_KEY',    'B$?nJJ+:Dr-vNG^77zrzfU=Ssjfv0?L`c%e1t9%[4GWzBW@#?iRNEQBSHi2QPg^r' );
define( 'NONCE_KEY',        'pSXeN t!h{B.:0UKxV2X+m*Fl=r_Bp2e^{ !`~;zLy5(3s{0$QHmvP0#Wrhm0b#x' );
define( 'AUTH_SALT',        '&la-nL!zd}T8Q#6;ow?Sm1Q}}X,,tV=cNIR0!@DP_8,r4VYF<*Z_E8`@ycF?l(az' );
define( 'SECURE_AUTH_SALT', '7(A(w2%5y$XAHc-U&t?F(:|;FF-7=,Vk8?h;*sdpS%.x=ymsaKL.nvA.[G8v2X1A' );
define( 'LOGGED_IN_SALT',   '<rjXYz{pQJm#aRb&Y*>GPJ8^S>*A*Psv[MhGSGV5`z#]EEx}3t.!cbu(0l.OTNA%' );
define( 'NONCE_SALT',       '}T9CuZ|fv.$lded:agH=;rwC x51WsL9 h82|i`,Ckr+B_bNO,HC8oQ]D`3NTbTC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
