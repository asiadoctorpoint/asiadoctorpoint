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
define( 'DB_NAME', 'asiadoctorspoint' );

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
define( 'AUTH_KEY',         'QTK7%@Z^:AtaC nzoPWlX5I8e*T`CIE.=]fwlg-lA[FHVP9r:JXg&BKd _vaEZq?' );
define( 'SECURE_AUTH_KEY',  '_y3w Y8c+_c)Nz*/(8n.[ .XqZOz{-.ecS-iKDY(4atZZ.xkOL)3B[LM0_k~z6e5' );
define( 'LOGGED_IN_KEY',    '8~Qwu_voXC.e|a<-4$#3<xL~XR<aH?K&:~=p&_EDGTU%!(=5!9BDd|!=}a7]GA:-' );
define( 'NONCE_KEY',        '3gV*Mszhj7M-lF=i-4l6CZvwOor.W;]FDT)$BfziHki3%,?DxcCkPZ;q(,:1_OjT' );
define( 'AUTH_SALT',        'XZw#GI1WCDn/,1~aoLh:neB>Z&/D&LzFP[H?K:]`>0b=/!xQ_M8U.6t1w-88?on#' );
define( 'SECURE_AUTH_SALT', 'r@F; ,KLpI.U^M|mKMQ-G/r4v@I0Om`(R?/vDEX3+fzk?my7`hQ{?X;EmE?>MwCh' );
define( 'LOGGED_IN_SALT',   'THhl(}0dBQkw[jzR3T$;Q$zsvbLWs7k0M2(Xb_!AJ~|%S&6K%+PQt`a]Ha-.`zn=' );
define( 'NONCE_SALT',       'V]m>d:0ABOl5pfFtZwA4asMFW5PDB$:_zwXQK*[00/0&eCoC86Kq24wh#F3+M;}_' );

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
