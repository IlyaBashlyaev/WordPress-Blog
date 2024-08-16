<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'GUt:Cz^,,{w8Wk[.Te+[FV>g8.!P9sz>z#0L7:}kQqH*_e<cM@O/,_R7nm5=e0.s' );
define( 'SECURE_AUTH_KEY',   'OADtR?c.uySl&Kq2t =$B5;tUH&lv1s,Og$bN5zC_`P7 @op J|& 4=vE%vz*.4Q' );
define( 'LOGGED_IN_KEY',     'sCGrfgNUUGW(<jt+]tUV?0e[O;WgQPNNswDfYNG.!pmY*N0Ci/t-#-$*mXy@_oup' );
define( 'NONCE_KEY',         'r{:A0Dgl>5M6`6Q9L*[O_pu)?ME1oU.!6UkU]8a)5{@>d$;Ds!k}v%c>6eBLkBqB' );
define( 'AUTH_SALT',         'vU$w/z>AQ^ |69jb^Lj~}wh )=m1@:uR0z.tH@VtMQf: sxK@$D`s] 1r 4EY(*k' );
define( 'SECURE_AUTH_SALT',  '{R}!KdHe))5=<3,rFkw88%&T]*<TpVa:v`5hD791H3Q( V.)rjR39jRKpRF/hlG%' );
define( 'LOGGED_IN_SALT',    'savqU!g kq/>Rs}4U2g/^3JSqTood15%rS>yl3:b?Am{{z h<h&rMFpUfc3(sM9s' );
define( 'NONCE_SALT',        'oV/X-oRv9QF(*5d`{CWsdrf2UMI2Q[-(v[bY5kAC5i;/>~p(rVg=e6z90}+=WhPM' );
define( 'WP_CACHE_KEY_SALT', 'Gx(}wA118p6:Yf-a =5YO5`4UW+2aq_sz% 8==5@GqTy0@nvr-zdZn<rCTqTdRB!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
