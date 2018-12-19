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
define('DB_NAME', 'guten-block-practice');

/** MySQL database username */
define('DB_USER', 'JulieFred');

/** MySQL database password */
define('DB_PASSWORD', '8p34TVyHtVLXMVfc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K_>_pi#l6?;YM3[|,}|8&`^;HZFYWaAFFDD1g00GomCen/g-I[sxdSY^t3A_fe^t');
define('SECURE_AUTH_KEY',  '/l>BWev)rhZKa)1!hwU8yj:[{P/_D2=~zuNL;XJo:SgEgHld25C=0f]]`=yKO[t)');
define('LOGGED_IN_KEY',    'IIip=ZS+cK7]#~!QU]5SGUz$ZlL5@,?aNS;)]0dum06a}nP1#T &aezTkQ`Wu.?o');
define('NONCE_KEY',        '$&,yu&FkDZ4}; uqxeOG,q*P(I;xaZU`a G+45b{HK$@-s#mgVWb;HO%nWY9[$|>');
define('AUTH_SALT',        'Dhav5V%fBkht|he`1JmqaP<?a*U6BQ&!K2cg.7jgp.vH<7R cJ])Px}o{bZ|+:&(');
define('SECURE_AUTH_SALT', 'kyyIELd;WUzp>)sVT]OF@fbWVE40[}*(K. fM]2Qzuf8XPPgN_veGGeIWy/:q8Qg');
define('LOGGED_IN_SALT',   '(bdwqs,n]j#S[C&x<<}Fw3yf,M2]LKA6A.d$)ozrqn}SV,8<@qPy$v<+a<k&^ .C');
define('NONCE_SALT',       '2G+6w:t*Ez=HC5UH7 bz[uY5qPmfJ5^S0eJ:)$/=2,nS23FPao;;5(^0:2iLtQ ]');

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
