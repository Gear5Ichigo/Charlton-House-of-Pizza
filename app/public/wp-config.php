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
define( 'AUTH_KEY',          '/Lp!p%E;jrHF9oJ%Y5!HcIVa$+?*(rn*l7R#21kV5}p[V;01p#f4`MWCiM$3+5,#' );
define( 'SECURE_AUTH_KEY',   'b2*18DAfNeR 8{zgll8StVxom^e<M,GpyD4 ][FK-#]{a)=+t<f5h>/$LPz$Nc:X' );
define( 'LOGGED_IN_KEY',     'rDQfrQ%!m)z|)<>ZxGTL&]JYq%B6We|s4G 9(dip}<U7>8^996uFIjCz]kVkteW!' );
define( 'NONCE_KEY',         '[8BezXgLrbR?11z15yxGsw]FHDO1BZ|/QzFNr@LIuMZ)%vFY%b^N=FL>0-QRXT`q' );
define( 'AUTH_SALT',         'FY5Vgw6c4>,}UWb[OUDle?d[uWA].+6jfx-9LT`P*(QTurHB*@*AP1U:kV-xJN4-' );
define( 'SECURE_AUTH_SALT',  'Y2BZGHY/miz<bn f-^X$/U{qcgU&nCCUMEY8FS}abMo9KFbl_xU^CQW8ig`!*XCp' );
define( 'LOGGED_IN_SALT',    'LupCa9I%]3D`6m])%?h`;@,yDH9:8k36:H4R0Y:Xw{VW[7bThZ)<U!G0*rG5S,el' );
define( 'NONCE_SALT',        ',SNXPR~imD[ohf>RO@_JS`T#B[oS2xl*2Y/WBb$aD.%s?dV:Km1W=NUrRNQ76hY7' );
define( 'WP_CACHE_KEY_SALT', 'xT=+T/d@C~#t0ZM2_#Dx5#fbmLUv*7+?Ke+t(K>!pD(e_tk([%H03.?wgRwFYE8v' );


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
