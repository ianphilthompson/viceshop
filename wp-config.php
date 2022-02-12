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
define('DB_NAME', 'viceshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i|,CpeXT1})[!9`NP?9Y6QY13rN2C.%EM1)p{t6hjC*&%h0e]f@V/x,)Dhs+Z$[u');
define('SECURE_AUTH_KEY',  'n=8>_k0R?v>|B1,xiXfdhM5]aG/0d|P{IK;u|W[PGim3B4d{zHh83;%ZB6G6SFs2');
define('LOGGED_IN_KEY',    '&d5N0&o&S|YP_X*B#<=,$-h2;6#L7xpbLTsD2g-P}9`_R;oRdd<Ua~anrv/N2N6v');
define('NONCE_KEY',        'cs5yXVc9*OlD<C/E]+LPC6s+|3xS;CD|c@A*pC>s.qF>&BMA;E?^-Q,,/9_utO/_');
define('AUTH_SALT',        '8Owzs#B3(^L^./P>`l!x#2`P+K,&uiWI(~SuR8P;f=o2k4yi]];*_]OI7Dv.5QNp');
define('SECURE_AUTH_SALT', 'xtYX;gU+dKVSy``&or4#w!fJ@5- 8)hdb3JLK0+#@_7DNPyxYybu6LM(l1eTih2]');
define('LOGGED_IN_SALT',   'D%1mhb<xM]4=@)Lfp|Y},:J)K3E&k&5tL.)]*{Mfv v+pLK@W-3@#)xQ{ZKf~ys6');
define('NONCE_SALT',       '*}}ZIwQgP.;X?%/Mj*zzd|H-$qLr+Bj,+( fB8`Ama^;s3 t*tzpli^^h||C&$)I');

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
