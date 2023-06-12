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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'administrador' );

/** Database hostname */
define( 'DB_HOST', 'rds-proyecto.c7eircgmbptz.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         ':zF]<34ef:SyhZK19$E=8:R$?@z3Gsu1DalF6b/zkx3`iLmJD5P$>@w{,aEDnPL]' );
define( 'SECURE_AUTH_KEY',  '`J_7kKImA[mg2X)$zNZ,K?8/F,.HCNu^bxp8w5U?1dhwPqXiwoPmx/ BNR{.;`ry' );
define( 'LOGGED_IN_KEY',    '34t0Tu *TZzm,kwnk%xZ~o$P:&C<eLZK8>:[yoon<EH3?f0y7[(=^wzm88Zh@2oR' );
define( 'NONCE_KEY',        '_v ~C=r$qdH2|Xkn#0N%~vbafXbQN`tJt!Q]JI>c{Ety@zgy-`Q*9_:]mwmk4AEK' );
define( 'AUTH_SALT',        'yi1Fzoy6Bfe2C-1B,i=(T[PNF1,6;37;0Ky4RCEGY8,/;vY8O#Nza6ZLupT]h-(m' );
define( 'SECURE_AUTH_SALT', 'CeEZ,BP]4vr_IOA|vMb]&e j@DGB!:zylcnf%}f9/HV`XJs}=-p4x/ZmhX9N/ao8' );
define( 'LOGGED_IN_SALT',   '9(x^w%vi<s0YHmpXlO5Cw*4S~!gpF;KFo%}[{PYVcp?Zqqt-K-2KpwJR:XDCeIn2' );
define( 'NONCE_SALT',       'Qu.lxLXRL#5O2]!N,]tMJ}!Hm;oUGd?vL37JM:[%k/GH]8p$[JE}Nn>l#KjTMlD#' );

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
define('FS_METHOD','direct');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
