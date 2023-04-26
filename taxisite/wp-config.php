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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'taxi' );

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
define( 'AUTH_KEY',         'u)$4xP,Xol~wQ~Z|HIF~20rTZ$FYM*@]ds#@`.&WgH~l_|u6CZUcDrWxz5sN=E.@' );
define( 'SECURE_AUTH_KEY',  'aslkn1J@{q.CUzSY@q5X%D;%aL_yp|(!V@!k$I|!91RjEk:bd((3pILa_AQ-+4*x' );
define( 'LOGGED_IN_KEY',    '_o9Q`|B04V[EQI4I5Z5}p>,V+~)0E,4(=_N3CR7O 9%Qe-;o>oi!9p8@gm}gJ9Z[' );
define( 'NONCE_KEY',        'auhH}qQh[2!T/2o&=DAN=8l:&S1%ASRcr{;tNa2`Rfir{6EY_SQQ;}..|GrXrvXb' );
define( 'AUTH_SALT',        't6kI/NM`!1Hu8N;:q$XS$3Pp[$uWe:]~pckRVxAJt[GQq,`#^==LqX(sAP1i%=)B' );
define( 'SECURE_AUTH_SALT', '#az2*a3*~0jbw9Jl&/f8;P#N#^CnfaX*+#GU#)xm)I+AcrZT|k85a6&K?v<Z}M 6' );
define( 'LOGGED_IN_SALT',   'v2M=PL_<AA{pZT]3 <!a=Xr/._2Om68dJ9NLsTM@y~&@<G{AOeE=$=pMg^HAPn(S' );
define( 'NONCE_SALT',       '7Mn~AqLz~(q5u=B&tM,1C,Sr-q(:$9%Z.9_+n6A?sLpM^kh!p=@G  a.?P8vRu[Q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
