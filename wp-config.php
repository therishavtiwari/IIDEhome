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
define( 'DB_NAME', 'iide_db' );

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
define( 'AUTH_KEY',         '<M,+bs<@n8XU^1zh2[Ej>5E;C5EIW2S7NCO{N,55|4f1Pc%vLA&EB:59.SyDq9l;' );
define( 'SECURE_AUTH_KEY',  '&LTlo!IraFw:^V0x%vYa&{A/ByLk=#<oGBs=+0Mxga&jK=A8 bdyVjJNNDfjX+>e' );
define( 'LOGGED_IN_KEY',    ')hk.oQ.GVBiqq=os7k`+*rQ{9:tL4JK{:[=NXZz t, ICovds/gT:_[F1XbeloPj' );
define( 'NONCE_KEY',        'aC5aFP,0`i[}Ip0aIu_P4:gGF.=O/s?%s)(/TKCTvc:=z>D {dJGX|X%/in&{l,g' );
define( 'AUTH_SALT',        'yi60=6?v.JP`fP]kB8% KW(cmt[@PN|&:.CtO%F;-0tNoZ-fpRIXE7Zgz*3?k>&C' );
define( 'SECURE_AUTH_SALT', '$m/9LpFSk?l,BmF,K_P)$u^-G1xH6nAXT7y^{W=1nMnLxJ;j>I[ROYIIB>M#d|5r' );
define( 'LOGGED_IN_SALT',   'j)cOO{Ba*)2nx(ZBl4(=$CNfBxELj.nvY@c${/9xn#w-dbkOmFpR^93/~+95pB30' );
define( 'NONCE_SALT',       '+zIt/O&MAV$h/NrNechIht_y(?[Gm el^fPr?d#.Fc{ C-h~pFWEA,{PTLJ.]dzN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iide_';

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
