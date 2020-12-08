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
define( 'DB_NAME', 'business2' );

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
define( 'AUTH_KEY',         'eXMZlD_G~JPVqj%`$HlE;&lj`i7x`&5 &YIDQu&N;X/O?~/yBXh({/i)KQeaQiGX' );
define( 'SECURE_AUTH_KEY',  'ZtCt$Fp>6$Qr$v/2c7m$; <cs*I<MDfq74,r:bz4u_q/c2;+:*br^z.0&j*[L2&9' );
define( 'LOGGED_IN_KEY',    '$WXC<tbfOxKfbfmUFd>5a%p}ytv*+~*oKT)OitFPn/cg(lU%0sXjbsK_ndhGl&~M' );
define( 'NONCE_KEY',        '[|Na.*=&@FQg(`+iH:1gV3Nc0 j.P$wr~E90/^<zp=yg0^-{UBBwK`ppZmx/|7G}' );
define( 'AUTH_SALT',        '_ZUJ?8kA{OyJ%u$eEJ[8m%9qQ%x-9v:NZ>@&g<Tgr=#SNjffB7|tl6(Am rd0a&J' );
define( 'SECURE_AUTH_SALT', 'N559G06?$e:qIBd3c4sA0w/pkAD8rt(zVKr/(reR#:mE@4NNxKsO.zt?X;?sWnf8' );
define( 'LOGGED_IN_SALT',   '-IhT;_L]VJ0mqjl8IBy,Q?b~Ozb*tW O6_Tn-?=1IS[@s{E @GxT.a[(pZm?Zs2@' );
define( 'NONCE_SALT',       '/cx;x_AW,sz>d&IW~BaY+1[W@u`m@+QoGQ]@Q8{a:By/s3~u0M$S#Q:CN@d8W(OS' );

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
