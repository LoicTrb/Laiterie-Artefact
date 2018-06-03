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
define('DB_NAME', 'laiterie');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'D4yZqL58qK9MBn QyFx#$getdLp^~u?is](7&wh@=v{6Ofs~v.r_XW+.21,F5@so');
define('SECURE_AUTH_KEY',  'BUX1o}]+; gB8I9O6n,fy+GP5Ndi*|q+f8FIkZ2jDjWg#GWk$yCfYigzVb,G<2WP');
define('LOGGED_IN_KEY',    '*16UJpLwd.]C_s]nBJ;VLX-suiz({8Cpn[E0w>tXr<<V>9}n6%$!q7IqXD.=sHyo');
define('NONCE_KEY',        '(!2RCsVe5(D2>|&4j*H$Di!-DpZhR5zCan-Mu2dw7)Q<N] m;[r(|ml8;@wbjr/-');
define('AUTH_SALT',        'Q8r,a&SkS.C59o;br.8h}LgW@eFosH1x7_HYQY|w&.0b:D&7nT.yn?96EYya8Qz`');
define('SECURE_AUTH_SALT', '}%U<`x7`M67;=i9TA{5ayu)QwolV_fWMev(Qm=Bbvp+=$XL+`NJ TNgUy$WxP`@P');
define('LOGGED_IN_SALT',   '}$|`HC1&}8FM4>]EvAXvY9]c<;X%{_}i`XQA /J}.{9StA)kL>?A5q=zh7jq^;Xc');
define('NONCE_SALT',       '],;c6SNuD72iO8tk/S~@luQh+&R4_8B=[Gpl*Xnz~/}0<0LaRwu!9`V3[n3,/TyU');

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
