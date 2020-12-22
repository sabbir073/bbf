<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CH{Md&Wiq!H ayCO`QLKSbLmKnDsrB+ueZz! BpVuJ[DFARB*3f}l^M=xH=Q+q_D' );
define( 'SECURE_AUTH_KEY',  '/c_81s/bL.rtH_JXz)9;~B2U%6H8?QRQ`?6k0%{uutLno7:l>^:4|}utM9Ok4{Re' );
define( 'LOGGED_IN_KEY',    'W9a%8oc,ytwJY`n$(X+.GX:PBgtqCa9{l<*YksM(?zZvV?VM3 V~^Qq}to(tc#i0' );
define( 'NONCE_KEY',        'FE9J/kP4[Wt+?8xOAD2i#kIBU+o2`|G7I5bnMUvp-APXkS]L~9wkf4dW?@=}A5<?' );
define( 'AUTH_SALT',        '>{mxIK;PpR5@r_lC*Mouzx`@Z&b%T*%)`j|?6?j<;&c]Q]-VOL:U!B![IO>cKviM' );
define( 'SECURE_AUTH_SALT', '<Q/sx7Z=]@YC%DNM|e_a$LT12$fMCnNKz B`|K.+07`IF/0@FI`Vo5w}6c+EwM3)' );
define( 'LOGGED_IN_SALT',   'z`,Bl`XtAvw@b813QF:a1{%GA!jI3T*CFEype!D%~NX>cI$,g?2}g]p$yJ|N|3}p' );
define( 'NONCE_SALT',       'lg{3O_bjYJT:6]+pk=z<?7]a&__((^_U7(x0Uj=YKz0m%5@1eq]FIclWK>bz+$no' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
