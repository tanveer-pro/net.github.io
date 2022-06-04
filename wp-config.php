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
define( 'DB_NAME', 'net' );

/** Database username */
define( 'DB_USER', 'admin##' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'a7K?[CV3T(p,x$_0[H Ksx8TrA9hrv]$2lbF$PyMF<`L^`]lLUqKZPxJD?$g(mkr' );
define( 'SECURE_AUTH_KEY',  'w?$7GVWOMoR;YPP}]vj?+ _|LF+e~r-D$GIJYhoJ/Jvf,x^OS^ha$*k}Hyi(~eYF' );
define( 'LOGGED_IN_KEY',    'mm3Pu6Vtq.7a!9(6fQ|^|]tUa4nv?IigJ/<Xazw3.GHa#t7<A XE2@Lsd=pWmQ<.' );
define( 'NONCE_KEY',        '3VVs^XWxB_JRpx)ZX:C)=3r-<IS9n/[]Sj<kZIg%.A:J<32Q(3`IZESWaI{Yu-*u' );
define( 'AUTH_SALT',        'P}YpS:g)@o]}Eo6xUrd/wcwqBEp&]8V4@LS&DH+u1@2WQR]!?,E.RmXac70kk]} ' );
define( 'SECURE_AUTH_SALT', 'c;x-9Y/hhNp=mph]0H3I*_#bT*W`Z^6]O!j>S^#xIxm+ok,knlIAIsPu1CsrgWHH' );
define( 'LOGGED_IN_SALT',   'BueKFLh1}lE$9rO5DCuK 14{>mj++lmmNt@`6]{){>xV?|g#8oH`J|adwq^[H;+h' );
define( 'NONCE_SALT',       '<qE9d%I)RN`<a_[KyV5.*CZkXB.Ugn,U_V)&hcauWDIJBy{m0qRV9#M^(lnB;Yqp' );

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
