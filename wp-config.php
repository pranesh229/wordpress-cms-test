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
define('DB_NAME', 'd1e8uk634pu701');

/** MySQL database username */
define('DB_USER', 'ddlaegxgcztfpv');

/** MySQL database password */
define('DB_PASSWORD', 'd4d85c5dd29f24d4dd7aacfce63b2827ab69ba0e9bf3cd007bea6a38f6122489');

/** MySQL hostname */
define('DB_HOST', 'ec2-184-73-169-151.compute-1.amazonaws.com:5432');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'g[7M6lE%U6T#R<@3QN(Gi7^%FqO`C1;ZR_ZDvWgAnlQ113[S?l|}QxmS.KJApkgk');
define('SECURE_AUTH_KEY',  '7-ebymU86/O@Ky#{=69|>x!S+E!hLohoxL|>yth,|?IY#/x. CXD.&B!GKj5X|-w');
define('LOGGED_IN_KEY',    '|j,[OpN(jj**.ol{:f[L|fJ2+}b^$VwlEptzW5H}+=!S.PF->+QcOEgg+U)5k]^Z');
define('NONCE_KEY',        '{v]:v.Y$yYxs70&4-#=4)<ja|>095vM[8Bd/bzHCrZ-b+|N+-[=4i}]~_2L:5} c');
define('AUTH_SALT',        'K|}?|-.FYO[~DbEe&slva3UIoG9HQU[JVRNs-:`:G$[Mekoo~+kR^lyWSH<-nf=0');
define('SECURE_AUTH_SALT', '*@MJcFo2R79;@5qU&f%9/we*Z$$N2Lt|XK<cRi|NTssRkT]fB|-oSGtD%_/@HUAR');
define('LOGGED_IN_SALT',   '-P+%v$L A)fDXvZ)K~mY?e>nhd6N%U&[++YP<H/%i>#5&pZcD<p+|~Ekk>yCydhU');
define('NONCE_SALT',       'T=56N|PP@<R}1 {I$(bX#a0-1O;0QXjw:u(Yp0KYUfOdzox nuMN.[W{Q}X-q/kl');


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
