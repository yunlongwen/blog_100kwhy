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
define( 'DB_NAME', 'blog_100kwhy_cn' );

/** Database username */
define( 'DB_USER', 'blog_100kwhy_cn' );

/** Database password */
define( 'DB_PASSWORD', 'f46jew7NeR' );

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
define( 'AUTH_KEY',         'KBdh]H6n<bqo#*9o=nr&i2{Ke1.Xhs<(?G*wiun ji09nvQ,[JCw6,9</{_YQbJU' );
define( 'SECURE_AUTH_KEY',  '9A7iWrdlE]c3GPs}tRl0ofnL)Hi>8;16TL^35s9C|k<F84q^Jmz4@l6,W@`W4`-i' );
define( 'LOGGED_IN_KEY',    'F7{k-6oS|#b-I1v}2?^Kj.6*t66399Q)k:Fz_%&*nTcv_&8I83M@!Fb(%Qb7HQ3a' );
define( 'NONCE_KEY',        'Vx3fb{4f9g.~~XSx9K7.!>wf89NFq1 Z;4Kx(<x`5_XMQMLU:sOH9qWL4E>`T*[d' );
define( 'AUTH_SALT',        '8$MBVF,`aUP/GAW66F[2F^J/wQdNS8S#F:kaR5`O:cmr&.2f*q-ErLWVae5^LWfk' );
define( 'SECURE_AUTH_SALT', ':JHVXGTWY|M83YsruyQr7J8U$5Xw,6bBa=1!mB`gJxs(oJ%UhhL.gV?OP-Hy|7#A' );
define( 'LOGGED_IN_SALT',   '-HQ6H*@Oqty8zPgoEqo4i1zVe$B8H2MuBW_lfa.RU==6FUZRE]mM%:=UEU3[y-n,' );
define( 'NONCE_SALT',       ';/$ryziJ1W3I4A?J}RsEdmArjoM_u_xpQocae`>24D`]q@YwcE;<e]).hyi^-#!B' );

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
