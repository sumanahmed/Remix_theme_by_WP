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
define('DB_NAME', 'remix');

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
define('AUTH_KEY',         'InziXLo*/fui4oDie&KxM8YQA*<Hd1SDUvNR;F|y=3[]#UQh^>,M_kP!dgh1|ZX&');
define('SECURE_AUTH_KEY',  'RZ KP)VUv)HEDe@G:e-?3wr-.B=@{H8+ZqPe-krJL4kx,{xL&VW?RxbS3XvBl7!%');
define('LOGGED_IN_KEY',    'nOBJk5Dq):o^ cL=(Z[Y]#J{^2Lc~,> |x|Jbk%P:A]Zt+>Q|1%FL[mn6u{5oF|5');
define('NONCE_KEY',        ',mO+7:wfipoHJe=:2#dbznCdj:v1@2`t3yf9B1/sV1Rq.<]GQN7s)nS/fKLX/YLW');
define('AUTH_SALT',        '=6im:.Z^;!L$kb>j}etx|q})S!4g3oS5%W)+P{tM;C2mioKo[IUcr4FfLPdd,*J5');
define('SECURE_AUTH_SALT', 'F4NfYO$yiZaRSA[1.{0um^vaeXI|t^,iOK-?]KlY!n=:.q>&E0Zx`tU60+scW~Y6');
define('LOGGED_IN_SALT',   'qp^m@&aA?qAI35H_/AYH|>$-czz<bWqyWdd%XF%B.>=~<^WeT(b4gH^4~$Qpl5T[');
define('NONCE_SALT',       'S53zDcM,1uyP}pj?42CK%rY]&Nh5daq$ie1=|r*U.JVYt0/u]%d:,yM&724h`7q.');

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
