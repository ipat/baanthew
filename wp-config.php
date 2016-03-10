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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '<K<TYS*Z$;#&XBmZ+5lEf^2sYz&.1F@FV9a4dY(vGFi,*Cv}E}fv$$<Gy;v_GF#9');
define('SECURE_AUTH_KEY',  '}N0L%xUw-4G!0 l{|zJS;!>=pLFV9AF+6|)5gJ-+y,NX-*-a*_3:)}^ih?-DiU9x');
define('LOGGED_IN_KEY',    'tJK.zZ,bJF?c#V`MXJ5ixk1V<~3)dby!j$(1(ndQlIBF(X7(1&8D9XMnsQ=ynYfg');
define('NONCE_KEY',        'QbT~|Ff]>2-.v0)7bs<Ql/;8T[&<_ZO}yL9c6N-yW;+W#u;7CfyB!UPSs`Jd~i>A');
define('AUTH_SALT',        '!ay_wI1%H/+LRSNsFV8]|cK@,4|zW!dE+f+kVv;6HegCo4d@qk#az(2<~ed&P(Nt');
define('SECURE_AUTH_SALT', '}!@=%Fg=tMM8JVmd@-u3g$C6m|lB:H&O)wA<vOP0{`8` J,Vt?gcfcYc-jH3iu~j');
define('LOGGED_IN_SALT',   'Wf{TaQ[Vm-DQZby7qQ?F1(+V/,{yiY G {o8Wz^AFb_2kt_+Z$5J*SfBV+N%v#ZJ');
define('NONCE_SALT',       '|frnF$~^fmN<n?~g$gCg(A5A.Y|pKvVgk+tFjNnY6U3gAX-0@;^Jn5[4cYAu>-|e');

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
