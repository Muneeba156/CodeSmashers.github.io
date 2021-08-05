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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'o 9{fR6U>[xy-g&nd`RDimW~-D@EAhb`W;U>UQ5[L`K|^n6Z&9d&QpW*#CvO3fGE' );
define( 'SECURE_AUTH_KEY',  'x@/s|mC.BR$MuJ]0PHz[Pss[n1<>![TK(HX))Eg<<<-xRnDN?sZ3W7~U:_as#Ou>' );
define( 'LOGGED_IN_KEY',    '5] n^!Bj3a6cGWEor_QJ&H_{RHh-r<&*ctGX+d_Ev Daye1RQ)9sO;x%V6AJ&_@4' );
define( 'NONCE_KEY',        '!/ ,3KKTSr-YS2(8Ct^e9lelLb)d,kaw(ZGpt+,nK%|vlTYkveBTVmvEmmrSuH>W' );
define( 'AUTH_SALT',        'i&60(bgh[7_MBPv% ^q6oTMa;)8`=Sdf+JMF]V<.MAC30WoYRyWm5pWEriA_kb!>' );
define( 'SECURE_AUTH_SALT', 'PoT.h{4D4*T|#J03W}4qBIMQ]SVYP_E}|:+-1Q9dpX8cW! g.L+BC.G1IGF#s:tX' );
define( 'LOGGED_IN_SALT',   'Fw4;9~C?Yf:6Uc,i:==QI#%;#<4>ePdO1Ae>XL0(K )##b@@k9Ir7N|BRpU>)Z+&' );
define( 'NONCE_SALT',       ',bQ%2|F^A6WTsuE5(:B)+P]|bNl#.=&kEbS a!ktQ8X,}&M=28bJvf~D;G!(20w@' );

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
