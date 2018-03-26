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
define('AUTH_KEY',         'c04Qrc0pYSJX51e#htcpB~@9S7X_0#u4$RJMb%D*m]^r9bw<YzzQ7oHA;LAka-.W');
define('SECURE_AUTH_KEY',  'mpz%h)5Tq3Cxw=v%S35cwJ#tQi*:PDg1<m5XaBrtS;mAT2<`GrjqDY#Xwu(Trj#K');
define('LOGGED_IN_KEY',    'qW.5kMCNnQfJmWC{_N<wN rI0V`D,<kCDJL8ql6+5~${/[pO>&|cduV8_%Lx+;f<');
define('NONCE_KEY',        'L@Pr#hT+LoMbo1k/lD{QG}P. j8FVf+ieT[1NQ~6>=[1U}&oWYVt#?T|w-,T@m}7');
define('AUTH_SALT',        '|V`LGoYprv4Z_A8#e_HR6MCT%AF-b/$u!!B>a*m(Q:||W?szZd5nGFD(=44%v()n');
define('SECURE_AUTH_SALT', 'L8~TQa?wN/ln`K3(!Bj<HI=4!U/^u#t%B7Rj DU?hM,X}F!uD-|*_y-%y~>}GF?l');
define('LOGGED_IN_SALT',   'fq#U1B.j%W:(RZ$&L&$pf}4#GUl)w%AHZ25Oe1Bn[Qh$DQx[A?YTN4oyu#r6l+9r');
define('NONCE_SALT',       'A;h<LuoL]S(?ftSshN?tHPke_||uhmo]m@KLB$E]a~Ph:[~`5JrbU59Zt<mOW?Yu');

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
