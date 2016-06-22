<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admart');

/** MySQL database username */
define('DB_USER', 'manish007');

/** MySQL database password */
define('DB_PASSWORD', 'subisu');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'xjQ5LJDvzZDv}JVB~tBjhfJ9vK{i$lZc2WvE_#yqeqEM`:U0| K/tA?w@U ,T^Py');
define('SECURE_AUTH_KEY',  'uM/yM-FJ~muM: lBUc)(c:7gW}GqMv&%U#DFC<nX(bAO|In:y!3TC;Qk8mPM5bM^');
define('LOGGED_IN_KEY',    '4o-[mXz|BH7Rh[^)Nx)#pDWI!7:JQP^F3nqF:<MCF74$zdL>`8Txz.[`syimR<SU');
define('NONCE_KEY',        '9]I0o[Ci_luwv~9wp}}wRhu$u8&bNXS5B$5iLRHV$-iId$g$24u?#SwnnY7tr_h[');
define('AUTH_SALT',        'O]ixys, =37Ah^Q3F<4<+oI&5%IB.o(WDGo9;Mw6ys oP1NpnH05S{h1zk&_r)^h');
define('SECURE_AUTH_SALT', '5t)(s/;OVxNJSV>SgJM1SSgZU8~K?N6mh4%EKFSS+]Sk/>6)# OW#Z-&Ylmri(>-');
define('LOGGED_IN_SALT',   '%[7.(Ji:}HzrA *QQnm#1oH| :gB0Kh~(V! Faz^J(lu->1Mek)*>ck7,b8P,uL:');
define('NONCE_SALT',       'e[|dLs&qpIA8tC+=$sj0%jw V4GS[3R/^yl.GxK#4JtE@P[ReOMG`MVSfZvCq5Od');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
