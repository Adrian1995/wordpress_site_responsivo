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
define('DB_NAME', 'teste');

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
define('AUTH_KEY',         'A:!<Za-`i5JqZ34O1d,k2MOWc|xZe(yX5}cfZZ.#z-hT?o8!>8pYz2dv11K|dU{>');
define('SECURE_AUTH_KEY',  '4W[r8$7gw2*q@`}eZ)No9xO*VSk#! t56O(Sl;iReQnrvP7EsuSu mh} N$1!y!c');
define('LOGGED_IN_KEY',    '4nTMn8:ObY{#10nR6La@:0Wex7-wM]N_Orax!1rXl{MK:+@lfrCTlAf)f5zwXJo(');
define('NONCE_KEY',        'aZ[O-26@r)4PCx[qJniW #7!)rf?mR+(_? |H<D40#mEvDj?!3Ms:Fid=v A%6*p');
define('AUTH_SALT',        'H3xN>2Rt]Jn/z_%@Wmny?E7 pSJ5x5-1dck/(GM$5-:w]OZ;.oA:?ZF|m/qP_-UK');
define('SECURE_AUTH_SALT', 'tpQx 1oP=rAX6!~oym=vW3QA=&4P#%$/qTE[]<x(#WlSo+7[=Z!H^|!|-(`ti7T_');
define('LOGGED_IN_SALT',   '=TkR9h|}Xp0>ox4X8?Xpmyeo{Y+~Vc7P3iS^23$,IXBhYf4++(-@pIyy6_X+])l|');
define('NONCE_SALT',       'Oi@Ow8Pc&&=%FG`;eHOCl[k{tkVKImyD+1^D5E8wO/iuQ7OUxh-87+@A%n33-,1K');

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
