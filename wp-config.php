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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codeanddesign' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'SA1w!;uo(4`n32Ol&#!3?AY.@<u0d62G+*a~u[]:dYwa+LOHezZZCyo.p`G(Ys@=' );
define( 'SECURE_AUTH_KEY',  'F)v3YVV1Rq]BL/DdRn2<01F.lTyC9rDmG>ruZ+8IA67H l;bi{hbaR/(W.`9Lv$M' );
define( 'LOGGED_IN_KEY',    '^]C#75]}:<<`uwW{i}@}{& t>#{*YTk6%mG2nk5L~a;%i35dp_~Q -[kB!,5pK0x' );
define( 'NONCE_KEY',        '5f,pXOYczs-M78/pzM~Uz[EBh=.F`w]Et#Yp5pHg$Uhf12U4,pBI9oSI+%u>(#>(' );
define( 'AUTH_SALT',        'Na$_8@R3NTk92fhJ6 ;l63[JLwFz78<9))W{|I/pdRh(};|Aq<iI/2bHn/R#g!nZ' );
define( 'SECURE_AUTH_SALT', '9S?0B1P7J~B=<*c&_AYKczcZb2^h4o[hVfU>vI2oss^B5%CmB!*xM(xUX,x`O4.a' );
define( 'LOGGED_IN_SALT',   'kktgy<7^C:$#4<(;J4tSno/y`GsY;E-250=|&JW]b;@11E?h2Ju*U.1?qTCDJr]0' );
define( 'NONCE_SALT',       'i5s9_YajJ9b3?|TKKw!~jM.3nt}voI3QGcoFteiqj`WE:$+@hpM}+EbbL];/w2S4' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
