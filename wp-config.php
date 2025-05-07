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
define( 'DB_NAME', 'topguntechph' );

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
define( 'AUTH_KEY',         '|aHca.Xct6N$gb-s.HA~Rcv~J6fwM%^<qN#X>XIErrc<S@?&7H)^m*[[/3*KT?cc' );
define( 'SECURE_AUTH_KEY',  'kf_m-vArGT;|#|tENqZR3`:Kzp8QW8$?DK5FxM?#{*u~[kM([mCIaeOS#W_?Ekc:' );
define( 'LOGGED_IN_KEY',    '#,N{:f>*A+wYR47*7V_m7yeSa?WTxQL0=.d4o*mEs4ufE+46a@g~<MydC^i;Bj0|' );
define( 'NONCE_KEY',        'kCgIdD:W;)/:,X/P^CGYQPrT}[n6W1DR`fKTLF}g $?p3cc/@ib*+&]kHu@?_J v' );
define( 'AUTH_SALT',        'sT]<QCI>0SC;:m&}Z`Y0~^]P%4*?#j$(~S|x(wOwvurA)a*3vqMG0YJ_BW.t2(!U' );
define( 'SECURE_AUTH_SALT', '%[:Gy>/?WqPOo^J?9AT72X{?nqH&n+KD.9gKK5H5?!.=DNtn;(nrhx:Sd&@vl27A' );
define( 'LOGGED_IN_SALT',   'bgL|xB kz=da&|8a%i/a;:^GUqtD!56)@L8,Z4QoJCGqFA!p=>{~Ed{<kCxl5X{^' );
define( 'NONCE_SALT',       ':EdxXI%_c=mv_KlvH+_>HvZn,19~u-iA-e|%uL$dF4qU=0ndeE3CeSI!L|`9D.8b' );

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
