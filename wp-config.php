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
define( 'DB_NAME', 'jadoo' );

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
define( 'AUTH_KEY',         'm7o[k[bQtge] L >Ho}oj|x 0:@1(Ru<^Ss;eC@<=*&uH_A1@p2Nk8!en?{C U-V' );
define( 'SECURE_AUTH_KEY',  'q,BT/NJ?R9c)}h6eP^=dDR=X|q$;AU)LXV$FdV*}eVY_g[1.W^mc;;@t4n,KJuVt' );
define( 'LOGGED_IN_KEY',    'TpZ]+f,nYQT#M+SKiL3wZ)&}_`7.zKCQiDq_9z`o|3;b8Tn|qUQsY4$B; dvka7;' );
define( 'NONCE_KEY',        '$-PRv0wbKyn9nqo$H|u`aS$K&bXc^jc:uF`240E`<][%=TS^/$H(I9_PCHIbUFd:' );
define( 'AUTH_SALT',        'f[28eCdApS)72i-.o:?b?H=a6kLf{1eq{VZw~7BZ$48$2;~j02xBDy.1kr3(ztaq' );
define( 'SECURE_AUTH_SALT', 'QB+!/18D7%%{aILD,L7oLm.fnq/#>56F1s2-/Z(B)s)n_|W[.W{cTzbowQNe|Pt%' );
define( 'LOGGED_IN_SALT',   'wf_fu.b/w-JltqUmz6*>R:aE?/ 1#AK/ sLc,gb1@j :AZ9qT@KQ|7nP0P[Kuh@x' );
define( 'NONCE_SALT',       'Ufs,dy!vv]E)0pNeJn@s/B>S4t]Qf/6DORYn}]N5a[zH7gp}3Np6uiMDN[ A~nw}' );

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
