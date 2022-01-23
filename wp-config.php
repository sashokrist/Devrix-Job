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
define( 'DB_NAME', 'devrix' );

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
define( 'AUTH_KEY',         'ku/t!S?:$L0dl&R6Yyrq&kxrmk6@<8NZcpOUg>*,E08Hld`qa(xq~359BbI8hUVc' );
define( 'SECURE_AUTH_KEY',  '25<X7_iBM?o_wmoP Nibt=m1|=`l$h#O@:[_-z{~12$*w}Iv2I1rc>hS_V1ek)2s' );
define( 'LOGGED_IN_KEY',    '#]3RpgbkB0[7>cYuM/1&mmM8i2xU&m;b([%4^B;T.gP{U1P /%@|R_0[ y{<2%Q+' );
define( 'NONCE_KEY',        '?rUX$gGx8uFI12NXns@>,uJXUmUG`F&9`=v-r:$$z:K@Ve0[FW7;4>?EV>vM0|6B' );
define( 'AUTH_SALT',        '2BAnVZK:-|^W3as-&4hH^?nx0ibkhB[]s]&[VY+9T!GrlC}NOJf0]2)`5p6!Td&.' );
define( 'SECURE_AUTH_SALT', 'Wkwm&%e@//YFQzL$?{ip<hK/8?*Ui(.k`?/,L B><hP0*v<)SJ>_}.ucq/;GsOoP' );
define( 'LOGGED_IN_SALT',   ',|GZB_o1K vR{)b|JHp8U?#mjAZD)_7z|DCB!s>C%I`U%,y*3L{o`HH1y|_Vx,6.' );
define( 'NONCE_SALT',       'Xuk|&#{7Uqgdeg?8d_BxqZ$Bj $If.aL)yP6;]x$#o]i*}gH*kZP|iP]b!P;<,Zw' );

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
