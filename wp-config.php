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
define('DB_NAME', 'athena.la');

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
define('AUTH_KEY',         'Ic|iSS!<csl#^alHa}FdN)|YaOP4+r}*rQ[()x$1{lK~WU7%`sK|,Kw4Md;*>W7K');
define('SECURE_AUTH_KEY',  '%D7GRS%:Eecws](ycMm?iuZI{f!uk.t2wQiB4+W7J+Fxxo6E4wJcC3T[~EkJDG)>');
define('LOGGED_IN_KEY',    '-qtW?&TzJ99[]1OQqcI67fHI]NATpx~Qr!}u%.2{@,mL=sd|OAj|:{B=pBPjw1og');
define('NONCE_KEY',        '#eE[[m=b`}3#RNo!hh~RlTHp3_:/:KY]Is,.<+vN#T78~5{]U5.$4&uZ$r>M.8,8');
define('AUTH_SALT',        '_B1Zk^@k5Ki>eJ9A:_4hB#~`57]fSD! 6dzrz]j!RimQ>99R=KuO64,0R]30]CkB');
define('SECURE_AUTH_SALT', '=h 4}iF0u=e>ml6yRf}|2T sU!>D4;sAdbAtQZ:mXj0k5l BMa*=ZxXqnf-lH?TH');
define('LOGGED_IN_SALT',   '()xD9-d&d2<%6OW5>hQ=q%ZB[,M+B}A#[d,4q%&jPs%-~cJASzwwD9|]UB)]dl@N');
define('NONCE_SALT',       'v5]%<hxmIU(Kxo/Mp~^@!SZ@G~Wcd4U[I*DK:E=yyWKJVPI2@BWIr*AK:qiB-r4~');

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
