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
define( 'DB_NAME', 'newweb' );

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
define( 'AUTH_KEY',         'hcUvz=t]MI7Rw`%!)[MXxH=1{)O*GB8Eo%Ih!0R|ky#0a5pU-w3izM,V?`gQ>Eyu' );
define( 'SECURE_AUTH_KEY',  'Vhzx1YSA`>3#bMa l0I^OC-HTElzcI){kkgXpOsqsnAyp>Ioq_2JoJ:!gUPo|[dK' );
define( 'LOGGED_IN_KEY',    '/l6:i}{|,Q  R4r573i&&9GSgpvsaW8Df}vO3<Ux[@$9G&EpM(WV:/8FVur[carV' );
define( 'NONCE_KEY',        '8$&(Ftrq/G&rA5,]#r$J.<+^JM1R`>fzs9D`qcbsx1<r&{dWL]tiuduQI%+GwZLu' );
define( 'AUTH_SALT',        'vimvePf326I{iLk,od2#HGMnb?Na{HQ`U)%u<Sbkd_SB|b|my${Fd6cCV>u5<otC' );
define( 'SECURE_AUTH_SALT', 'ig}po!w/F^<=Y~YZ;*B{z.b!+{IS/5lGT1dF{XZ/TV]g~fFfW=VG/7KT-#`SH^^L' );
define( 'LOGGED_IN_SALT',   'Z:m{YM8YKdv,LB{mozPC):ar_aJ46>48}<fHYdtHw&|mlGyLn^dfKm{#X g_BPXb' );
define( 'NONCE_SALT',       '|dbrURm+D~0?eoi^f9*:`M@f4w!v{B5-/V)]?%Z4u9VwaF7}S,=5sMiY>,WO_kmJ' );

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
