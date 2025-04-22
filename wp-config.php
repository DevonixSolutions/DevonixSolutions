<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devonixsolutions_db' );

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
define( 'AUTH_KEY',         '5h3I#X_(0rdG11cx@XA05jBt-;6n-9P*v%K~_C}KFZ2.(1j6 g.=t:ph%0NIy~oc' );
define( 'SECURE_AUTH_KEY',  ';mR:R3*TF7PQVOt4X)TKw`j=MQTJ:wtS3a*P6-]IL 6QF9zENDakcUu$EWaaxPjK' );
define( 'LOGGED_IN_KEY',    '6,m{KcnELRXOAcDlFRCs/5 C;|q[CE!n-g3CB5ZEs$!jse;iFiWSR%HE[?qGrC3+' );
define( 'NONCE_KEY',        '5$>sIlB;FSM{OXR1T|!cUKv`>KLdH/L|?NdH_0|%IG a&Xs;Mn0o$m0#0;PCz?R=' );
define( 'AUTH_SALT',        'Ha0D-7vjQ TvsP@J#L5^fP`i]{JfmDwe]:bP^Ka6}V!bJ-/~)>BrB?M}Y~]`: z{' );
define( 'SECURE_AUTH_SALT', 'u>[5+X7[.X_LCq)/.*=Tdh8/Ha$!.az3$p5Ib_=7{N*T]<W`J=vMfIt9W_Sav9Ag' );
define( 'LOGGED_IN_SALT',   'Lp3x/*(F&!F2ejta&ga9Sen7DSZqJE_E/dz8I1PB_jg@p0AoVt4lZX9I~n=k]p2x' );
define( 'NONCE_SALT',       ',xPJ#ctZQQxAII;1-O0_NqN2)xjt$]h@KI}5?D_yH}$@X%VE_2Fmjisa#{NR}y]k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
