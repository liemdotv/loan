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
define('DB_NAME', 'bank');

/** MySQL database username */
define('DB_USER', 'bank');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'DBW[2jGeF.Q8B#vjUnt?iN:!/cOr|p9//jrb5C-z^W<1a[/_k*LPa!#m0l2!L@>h');
define('SECURE_AUTH_KEY',  '+jdi)]kW%U~j6zZ/4svhdwB|%;?dkW~ZOcGV_d$V(2J23#{)CIw^VMZ.a(dOI[$4');
define('LOGGED_IN_KEY',    '}^59F7r:B#YG0a%|2l8Z[Cexp7!~S-oLp7Un)*^c:*f24k>K@5SD*@&u#GLiL==<');
define('NONCE_KEY',        'cBkWD!Q$y~XK>r?}LIq+sE#}HnTDaA[e:sg$Y<eHL25OT!;lxBHYFtE9/UA,zvFy');
define('AUTH_SALT',        'JJoj8hEEn=9?85E1;:0][gZ=*KOgjDI9{k8c1dR|z9lkw:.g)aK)KnPp-r{J4S(P');
define('SECURE_AUTH_SALT', '!C8FE+kX*hUT51WNfzB]uQ]I0T+H*kFSII5>_<vxU<Ct:]z>8Y.fpfu^a*}3gC`N');
define('LOGGED_IN_SALT',   '_I1L(z<1#/L8TzlIxHbNXVSoMLq+|I9^?o:$Xvb]s:`S9~?,+QGN3QR>MHeFKsnN');
define('NONCE_SALT',       ':wv2t&6Pi]QWHQhz=(XGjiNe?-4j.!R.~bu|p!DfjmMO!x?9W8k`)k_JY~uh_`#D');

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
