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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'I66y(.1z.7z%|,{Ws.z>]Bt^Ojy0A2~h7=upYhy:$(<[X-Q8n}@fd@i,tKXzM/fu' );
define( 'SECURE_AUTH_KEY',  ':(UPtPnZ%6)vaQe?vR:> {Lk0i??c`J|e|o3xEeb74o|0(` |mgxovYp(AW_:+-2' );
define( 'LOGGED_IN_KEY',    'VbPPds6+qn#&:oys>bCiRIE+/~mLceNB9V<wAv*NgN^|90*#DfV:4``Oh`SBfw]m' );
define( 'NONCE_KEY',        'vs?%+#^xNy>KA?YP{!QQS!%>)!UYog/tdfzD_~_dIs+@(rdNv;V;ML4D[4QyG ak' );
define( 'AUTH_SALT',        'e,b;*qa^:j}Rr8XFv(^o)R-kC[-$kdmuS16 8XF(J^9MLEUf7Lxf,+z~<0%GWgO4' );
define( 'SECURE_AUTH_SALT', '8h%10q0^iOSOF<E-{[4mwhajqPKef]UkyMU`+L?:C.@V*Pl2=!)Q)qhUuQaPTf?3' );
define( 'LOGGED_IN_SALT',   '=$bgm6#=2k#1k?j<s&:KN@)s>ba_0yvgdm@~bm~/W1{BT4YDp=e]Zg{Sf`j6-c88' );
define( 'NONCE_SALT',       'W5#497=0ZNWGZ%H:!9/PILW/}IB8i7`-tUb~ Z*x$P+O=iDYY)U&ZJ[6PTFbo8cW' );

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
