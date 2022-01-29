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
define( 'DB_NAME', 's_e-commerce_kilife' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'J#W/u}BW2Padsu@x4~j|};MtuT$(cJEm%UWy#v|L/D<|^TKwoqIV73Gm)?^C]#22' );
define( 'SECURE_AUTH_KEY',  'x ?,BDKV5Agv0cPN;1YQQB#r]FM%}2H8WTk<-,iS%~kdL$#]S<HFxG$45;iH2Pbr' );
define( 'LOGGED_IN_KEY',    '/XCUh&pruDnm+MshQHrH/!1YMUn4[q%I%X:1L[/+8vM?;q-q3pF&LL2g+T{Yg>6b' );
define( 'NONCE_KEY',        '+/?Z`} l{HXo^[{P@L-3F/@<f;t]MA$yy<A=pP@9ZD52tg6Y/n5;Tv?%eVv6qT[i' );
define( 'AUTH_SALT',        '4YJZ z2,$r;SnDPWk8:_XSEG%zqIZ6*aqr9C2jRxb5G=[e=vdALJHd{7&Fi9<}qr' );
define( 'SECURE_AUTH_SALT', 'Fc.:Qn]GIX *oeQ<k^Jko+,z(^kKxj,Q-NW:5?x3XIPE]Nn6K^*anW!eQH{kn_ws' );
define( 'LOGGED_IN_SALT',   ')?$sEP}5B`Rf2&?!j~lGp48AerTC/r&uyE:LZL=3yFK:ixuk/_ --/8W@o$O.se#' );
define( 'NONCE_SALT',       '.MYQDRI&TM FC&*N8?}LROK}T25>>F69r8c$CyI^8pJpl9gKk|B9|s%5WxeBWhnD' );

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
