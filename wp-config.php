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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-sava');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J;$0T-rjh|7W)pv|G/pj$xKL%}!.uw9QY7ZILa7o%bvf=eVo5;bL%NYVyyF?%Qhy');
define('SECURE_AUTH_KEY',  'GA(f/U4v~Y_CJo6718RmpoVf<V!Lq+=zGWh*@Fj4`4alYCjd+H5aK@Xv]$_~1VDi');
define('LOGGED_IN_KEY',    'c`Ec;^fh7>[0Zm1rP@;)RFhwJR%K|Z}tZuSb?%sVaBa8^V]![F*W:DcP;@9Py>/o');
define('NONCE_KEY',        'ffxq9w#F|$&>,;{5P!(`Pr/e/Mj?|# ~rDECGGUib$^@xAn8fFw~;~1_XkBT#Wgp');
define('AUTH_SALT',        'Q}Bd!$ RHMOCG.y_E8uNEtY/([R[}$|/N3eH|^haPUs!ewp@1p-^;88_Q#WxzgQD');
define('SECURE_AUTH_SALT', 'K=Vo$vLX@B+Sdx@#~#=-TlWdf-i2vTfVxW`IXuiQTn+AH:7mmDCI=T&>W_A}7|dV');
define('LOGGED_IN_SALT',   '49CoN)<ZNrC$yvEOO4jWwFzk?l%VH0T`OwcQ?*h(E#)ed_?1.?=pVT$KcBBRdp6V');
define('NONCE_SALT',       '^t{DMqrs}>3p%$Y{_(2t;,;#HG`Y( f`2}Lx.]ev O3Z[Tid}{sG`T48h#Y1P94X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
