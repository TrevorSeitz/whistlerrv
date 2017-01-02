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
define('DB_NAME', 'whistlerrv');

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
define('AUTH_KEY',         '!j7:9(>QAawX{N|4G<7Q0FfkGV0_63%962U`hd2Coa%$yHmvFE<DCFBCN|N&lQ&/');
define('SECURE_AUTH_KEY',  'iZtiPd!g cEpZW~0>;B#wyDqg^yDFUqg ;O6!p9tX{U[/A1uC0t<@:LCLwyG IdU');
define('LOGGED_IN_KEY',    's~V@lI^ v?lRtbfZ38wuB5saM*jG+,znY;wF0|bq,=tRR 6ExW#cG({C_utnv4js');
define('NONCE_KEY',        'kT>OG4+~xSG.Fjzrb5h;2hr2Ypq>00pnna?1 j%OBAl$C7DXEhXn&Qx`)/danfvr');
define('AUTH_SALT',        'O^Ps>_HEmeYg]t0zp=ntcXor(GC0e<%`>b4:$,]!,l;uK0hX[BB-8lbO@T5Ez):L');
define('SECURE_AUTH_SALT', '^[F#&iSiWgjA}dMLQ}eZz5(eWRZ EItOVQ?|Qz2|*wLW{S0IITom`R5qcUCXzdC*');
define('LOGGED_IN_SALT',   '{:>8ItaiV|Q$G!;Gn>92wl@AIIvHY<oTzD}{nG%m))sO(%vBki*9<u5JVEU:]Okc');
define('NONCE_SALT',       'mF2fpK_3_p1PvQBs,:eff<r%3Xp#Mh.,r@/KU~:n:qc57je2pqwOoqG3TQG1={{V');

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
