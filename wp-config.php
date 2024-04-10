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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'b}xKg}JPqi<b8$t8zT6>Y))eX5wFPfdZps:v47WYe-_ q4;z8}P-4x,m=Esm)1YZ' );
define( 'SECURE_AUTH_KEY',  'qJ4+E{k)Xk$i&W]zaUl?B5ij <>.-a8Nd!7Pu!>+jem|ZT1wMRoKFcbHqyH]tk6#' );
define( 'LOGGED_IN_KEY',    'Vf!K1.Dm>gTC2j9!A&o&ZZS{xX4ZL00.jnO}aB4qmo6g[ZjIw!RB4?4w;FB3rla@' );
define( 'NONCE_KEY',        '.5W`Y-&X]UwqEyN}gO2|K(a!)G9m GEY/UQd^Q9U %HPF(3>IU9q/QYbFDzZl/om' );
define( 'AUTH_SALT',        '5m|*f4,<W3o,p^R?:Uts{C_||/=Aq3*;nM+zK&65zz0{cNL4o:&a1/:cNVLJ::di' );
define( 'SECURE_AUTH_SALT', ',WZDS!kn/P*i^`I/j]VB>[HTqZ3+4Yex]+:{O7QFNO2w}T|.ZtGwTR}V/C_!:$a4' );
define( 'LOGGED_IN_SALT',   '3ly^}gKx+ax/7(~c^M4a|W!?NQfP[,hT&A7;WrtJv,MkT1lF~8{c}3PM(Y0p3%<s' );
define( 'NONCE_SALT',       '^Hm*^DvzXjRQF3hM|G)p|sEau$j;$AJj.L>M-<v0Ri)]:*Kq+^^!EVeW]^dP%=0e' );

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
