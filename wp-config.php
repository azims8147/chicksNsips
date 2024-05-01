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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chicksnsips' );

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
define( 'AUTH_KEY',         'cIyurf.v&mB%E#<rT=U{U>0#UL[%u})-{V;qBtW@0{XD?*,32~BK#Zq(w*qgIz]q' );
define( 'SECURE_AUTH_KEY',  'yTT_5e_0imogtMouS5iaC%tS&@E>qPKYV$VbAO.f7n)2b;;Nb KZ*op6+*txPU@{' );
define( 'LOGGED_IN_KEY',    '-[LB.7-w3={)fL,eLf/go7-M8P]yUIXLYIaw~)VvFDM8p7raR:i5D#E=e:$(1)ed' );
define( 'NONCE_KEY',        '+<#zknWwFA(4rZ.#|v V|:T18X.+Z2Y;t2+->#zK@ssx&ZLZ,I4<&?xHrL` 3P*.' );
define( 'AUTH_SALT',        '7?_gJ88M4jc:8JlK3>>L;HuI#nFSLeRJk,Q@l1Oi}-DG|||3b+/<CZIfVJt>N^(i' );
define( 'SECURE_AUTH_SALT', 'o.F4ufNx]bM`V&{??YmhG/4@/s~*0IS3Ah&/W[I}O#[ty/2jxm<[/N/7 k&O?>!r' );
define( 'LOGGED_IN_SALT',   'YvR^<Xa_dFu:X9KVhq,3w:pt=A4h|[QMi0ePjl{=//xD.u!.+;hEDh|v<#l))::z' );
define( 'NONCE_SALT',       'Z4pAC9f4fk^+qB0g<{UMNj+R!GAqXxfNwKDRI*l P<4U=JM^$w*!<%Z}R&)_U{OR' );

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
