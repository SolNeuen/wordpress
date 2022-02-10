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
define( 'DB_NAME', 'deligateau' );

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
define( 'AUTH_KEY',         'Z=7yZZG7*GohD/M5B=6!hXFZkDW]=4f,M$uc9>?HugQy5vm/*,It+YoQoy!+=Whx' );
define( 'SECURE_AUTH_KEY',  '2A<IZ-9<t$>BK~X1-H!*cF?)MO={r,dL0+Cw]U7X-UvwK8ak-`2kDX5F8?LpO]?,' );
define( 'LOGGED_IN_KEY',    'h$#f^o }#;i(%Yn8$Z {e:*k@ FZnzb^5Zr<<s%31yL 8JYMz*N%j,1IQ=9b3*sR' );
define( 'NONCE_KEY',        '$g:[JZt,YLjc9/#yFPy:cnvz[`uT# scG3~W,w~E@bA09kBR4N4i9#Ru/dR|R)Rn' );
define( 'AUTH_SALT',        'Zc,6U){G;E.q*:YQ/Szb.iP}e}}W%}Z6nBTJvPhn#/hPA)dg6q`<Kt>,$b(4@|Ce' );
define( 'SECURE_AUTH_SALT', '466sSUpy^PsY]M5iJbqN]UxHePe?AxLuT/r2a!CCVu^/dfp((fdhC8mn0>XFMgjC' );
define( 'LOGGED_IN_SALT',   'd.:i@tFfA]%a;Brq#CCVW69RKP6X>w`kO>37k|o8RP5B}D+:X.EBk:n.rn_Uv7C}' );
define( 'NONCE_SALT',       'e$=>CED+4q%#NovN)k$ps`f#i0lG^X5coUMptTd-BDzl}_}!%|RUeCu>2yBwXQRs' );

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
