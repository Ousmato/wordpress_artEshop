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
define( 'DB_NAME', 'artShoping' );

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
define( 'AUTH_KEY',         'v&#pNlw9e!$D=L`4<DumjYidXSdAYAAjoO:oEg$LgmZ~JEm.I}t0RXa~Xq@SXlLP' );
define( 'SECURE_AUTH_KEY',  'Eh`8,,lI;@G7Mfgv+w?ns/HAK_0S~XF^w SEIc&.,fI;CoV)V3#+Q$OW$#0^?hWx' );
define( 'LOGGED_IN_KEY',    'BFqLZ*+zDu/*Ln zFPOf9 1/R*GeIeG/W[ya4M-(g=p&y|IA3vh[C ndgjMMi= h' );
define( 'NONCE_KEY',        'QrrfoqLP>t6kRW+7:2d <asJpJ[FC 9S2CZN|f^$D1SFCel8az*hB.ZtX.+@FR15' );
define( 'AUTH_SALT',        '%^y~]j7*dBQo]I:BCiL#pm<c]dlhkXybwDG,}^>$3S:!U2]Sknx;W7]r$L=>g+ME' );
define( 'SECURE_AUTH_SALT', '[+T?L-2[iUiuq46:&wx%!ICcg;N/fVvjniiPc%vR*nSx5aJ#4(Zbj9(lb:QMi!k0' );
define( 'LOGGED_IN_SALT',   ']Je5_X&F:hg>Z_XN17~Ag+b<UnL@6Iq9.c>HuZ+K]`iokrMRrslvH739C[;cFe5u' );
define( 'NONCE_SALT',       '[pq)<_^gYzH{n3-`b3sG`.We7>n;&#C(n9H/ni/{]jJr7m#37DDK`dB~(uQMY|pJ' );

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
