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
define( 'DB_NAME', 'iedb' );

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
define( 'AUTH_KEY',         'pG,yTQC$dw}??37Cs]Ye`zt|.[U)D:r)=[@FD bu76J~)^CGCyyu]S,q~kou`#+5' );
define( 'SECURE_AUTH_KEY',  'ei* VDcO}<[`lTw&#rgPxciGo1nbo}osovQd}n7L8ByS0ON4kIDL+7<l#]d/-g>V' );
define( 'LOGGED_IN_KEY',    'Z{F2]u.#QZg}&%EeIT6Bb2P|%m/vz7k_L3K*4wqr&6iG?uG{r`t&SB!GJgHCoYTu' );
define( 'NONCE_KEY',        '@}4a-,+44cuN+FX]$C>L5 %9X0wMZ/|LT04con6Oqw>:d|N2zW9OM<NTZOoK*Gmp' );
define( 'AUTH_SALT',        '4M0%.Ih{xA[g{c{|hl7?AkZaJJ3kK}Ev_;C)M<am^0]Jjq0Q1?cQ8Lmb[V`6`0kh' );
define( 'SECURE_AUTH_SALT', 'd( .,Hdt,.ogv]KN5m`|I34=7Yh@Qa7ejS[aj1oUcbWvI->HC3*+s]SI jMgQyNH' );
define( 'LOGGED_IN_SALT',   ' e~qwjo%cGY}q_K8)IkrQ[+:V |&[{p(2k*m|-l;DBT^7xiV^tg8#D#aaY[%qSEX' );
define( 'NONCE_SALT',       'c!TpMNr7CuYpO sgt6*z7I9@+;k4/e q-Dp!Lw bGmdly[kL:JV$_f3r1{Z{b!hE' );

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
