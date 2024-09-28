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
define( 'DB_NAME', 'show' );

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
define( 'AUTH_KEY',         'Fwg.p 0n/}K2kU6s[_/5T6B ;a^oXHLtvAC^q5.z*g_0UI]B_#34h19k &e?wuO]' );
define( 'SECURE_AUTH_KEY',  'lFNsk_m%@lX,~?uaCv4/@!V/YP~[wC~1lQ;762t-L7H.N,8=RoxTXHC} SeuNWX8' );
define( 'LOGGED_IN_KEY',    'RIgL=D@!e|uG3(4:m-CQB8`zIVMIP}_[Pk+4.@3%?d`&g5{C7}8n|:#bYio_^x6i' );
define( 'NONCE_KEY',        '9b}lFjltj;iC5e? @o+cPlJ4_3%ujGbxXKU<2PNJfjM1D#Y8U?e>Fi9GG`_!&xMB' );
define( 'AUTH_SALT',        'XC^*<8PQc[)T+IcqI_Y(0L+`i8W)^<J_uBZ$5awZn/96<}aQQ;nQx.QtyHmIcSUc' );
define( 'SECURE_AUTH_SALT', '0_=YL.Ec6mnA=si2T{%Xi6pEaXVmq)n(FsUHmD`0Vlsx3Ry@Q<I8+OYb}>l$^3f*' );
define( 'LOGGED_IN_SALT',   '$y$V/}aVrX!7*:;Vpn,x/tc]e i[3=pd*gWb*#9Z>9/{G*6d`P#=RQ,^(cG,7k#g' );
define( 'NONCE_SALT',       'cw/c>K3MK!w3t BJhY$f7e$vEBr6a?6sk`OITea/[=2z*HWLh9N|DOnw^p^Ead^,' );

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
