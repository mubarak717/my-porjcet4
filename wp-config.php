<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'mubarak' );

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
define( 'AUTH_KEY',         'T{Q!7,:thEFZaX0&%Ohf3>5Ae,9q hnP40vTQ(2,L7,.ZF!&X:%,<`1V@,yJ2:i)' );
define( 'SECURE_AUTH_KEY',  '@azbotsAK/yxNFLWLZ|wC8_ffM)cl0jWH_jSjq2cUnjlrtt>}|C<*2 tU[#v*s6q' );
define( 'LOGGED_IN_KEY',    '$GuP8mCb<;f^?d^hif]/*0B/cze,XK@9?hwar9KC1!p3.v/=`H,QUP:OXD)<v%M$' );
define( 'NONCE_KEY',        ';pEE,CHBdTvO<CfDAU,N1e,3LJC}a!Ny(SwyJ+PR<>1_<)Ht: =$aRB;Yc(XW7+4' );
define( 'AUTH_SALT',        'FwZP@y9N*b-bZ};b~9@:lF_FJNXsg]a! h3f<fh#IN2PC-91)OQ<gu)cTSt|cH*9' );
define( 'SECURE_AUTH_SALT', 'Nf`rTi|^&0e9v0 eFS<?p>[{,k?@ir4[JhUTdl.t{6cVB++Bps`Cg:puZ(G?4@Xf' );
define( 'LOGGED_IN_SALT',   '0bu,]Fk0*R6$qO0h6i+1fb~CLC [PUupAOU~w.%5{Yr5>s!5A>7+IMm%Xf|Z:1OJ' );
define( 'NONCE_SALT',       'td[vD8^Q(ln93kRYwNs,00Y< 6r@[N=0A=9F746G*:9;?<GwRh&ZA^A{Z=bud9V;' );

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
