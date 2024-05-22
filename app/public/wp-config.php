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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          ',l<r7G+a}?<E3o[GSMKVM7V:%}R[]SUeCROJ45*8HR3t 8i39&GjmEFqFOH^m[kL' );
define( 'SECURE_AUTH_KEY',   '9x?#[)g46(MI$/!KhembFHyq@4-=$2Lag[}~s5Q@t6_~J(F`8XyE;ewhpK)Y/dn5' );
define( 'LOGGED_IN_KEY',     'rcxTuxb|uSpKjcecXNwdoPV%]hnp$B3u c6<W&P? VvkY|s4qpqZP[u}}qW?uNO+' );
define( 'NONCE_KEY',         '=eue$*f_{DCPbFjz^?HWPO]B5MurH?C/Oyc`5ox(Y|oUGz;*:%l|(<MBeky{y^>U' );
define( 'AUTH_SALT',         '~P;q/`9[6!({+)wmM$s)>*CTOJvRU9QLRn4t>%/qP.;);w^qpX3+D[M0<E4TDIy@' );
define( 'SECURE_AUTH_SALT',  '6>r&mJhDjwW/ss<wvOJOhRoe[.?Ky^iUicUTCu&Q1Da+(>MB,>D]@FcBz==bXuN{' );
define( 'LOGGED_IN_SALT',    '>l@8_7@m*<vg5}Y&t!j^h1wyvi.`(U2+;:ORp!:=Dl<_:tq W--0Gm`s[2`(n`&G' );
define( 'NONCE_SALT',        '7YHk1#fZdG K2a0y-~LW7@/qzNz=]RKw_+HR=zmJiEXBvzop;gH)_6.;X[7deJvF' );
define( 'WP_CACHE_KEY_SALT', '[)#Fi=L$o(q<;)WXP=![^8@yqi>I%!?Pvmt<f}1v+{IR(Jj>x==Mw+:+PFKWoURh' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
