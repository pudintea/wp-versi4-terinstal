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
define('DB_NAME', 'wp-contoh');

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
define('AUTH_KEY',         'qj1ZJRX)z+&XHinkS+!.1W.F.Ct}88m/I=p>O}$`)mfAtgT!mqJN(<j$nsc?<dJo');
define('SECURE_AUTH_KEY',  'I=]pu=}}!.gk.01(P;<rIj@D3FL9uf?N?@L1b2+I}<)YN*{&7ZD$uL|pwxc?rh@U');
define('LOGGED_IN_KEY',    'OHcO*,}m-o0:Mj!w?5cQpRFf_9C_ $}gUI_J(Y2x]&?m?UE[p@]5@R;Jp&V:O<7v');
define('NONCE_KEY',        'j?M1c2Ef12>]mrFT9 wrTz1r[EfrF/#r`x,}G-56nHrG3Z^4a@d^#Qt%UC.L:b3_');
define('AUTH_SALT',        ']9{!`w>ylM*=q1B^{D-.*la/y*)Ojfe*3<@DkgBEt~LzqzL9}.a;xbCIVL>qd}nm');
define('SECURE_AUTH_SALT', 'g?A.[=3RrHm,pLa,99qs$=d5Q%dHre8qi&Z[v=|6PxD%EdAhZ]xe< ] -@&Tb,%9');
define('LOGGED_IN_SALT',   'nZ[@Aj,/80^$[qIG<uah!c=dK.Gi%g(!xGDf_??1Zq/Vw41uZ&4YCNW.X.C%NBRM');
define('NONCE_SALT',       'Qg%J%u&3.P{.($[%KK<RK1uG:pymI-O_+S&=KpA0N:wB+0GA,6)7qSYjMKy|&_AU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpc_';

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
