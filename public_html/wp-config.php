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
define('DB_NAME', 'u538143033_yjywy');

/** MySQL database username */
define('DB_USER', 'u538143033_ujahe');

/** MySQL database password */
define('DB_PASSWORD', 'etyJyjevag');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'gH3R3Elrx6lHrJOu02Ov7V6pKqS2XL9u2tD4yViDQIfuFy6PF0mXtr3ZGtk8UaiJ');
define('SECURE_AUTH_KEY',  'v1tuViEOVLordKICcqN23xRf0M9YMEIY1NMmM5q2MjISZwGJ8ohliN7XGNgpkeLv');
define('LOGGED_IN_KEY',    'bL4LSxZxq8oBOAGHOw1Vid04TNBrp0FJF54DAC6XdWzfqjQiIYdMWhlGIpunvKi7');
define('NONCE_KEY',        'jyXGsDOpAeDwnVKcRmLf5AcJgarFAZkfGo15AthYhaomPItmKJQwaFMTiEtWCVYl');
define('AUTH_SALT',        'gAcTWOd5S8tCMTgLN90RxJBsZPXcpHWG1aXmWloSgKXVsWHg1sdQ191lo01RTVSx');
define('SECURE_AUTH_SALT', '1Q0Y8sN8vBteFnDTslvlFG041ic8bT3LGSb8F6wvoGvc5oD56ZgcsonqMiApBrJs');
define('LOGGED_IN_SALT',   'mScOo2U3ahl4sl6BljVyb3UIVY3mgH1MZsAbwzBvvdH9BfiHFGI24G9pt9XNxdfE');
define('NONCE_SALT',       'IJepTMXDHhdW2CuJn4gsUDwL3ApFjmITkNAw9E9X0ffl178qc291AmyaXQTbwt8W');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wa8d_';

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
