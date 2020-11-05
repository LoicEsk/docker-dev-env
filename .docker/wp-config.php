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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_name');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3b8a2d9d0285d183ec814692c13bbc24c79ff8');
define( 'SECURE_AUTH_KEY',  'ebf7b9134e2f73ba319e96e972eb9be652b894');
define( 'LOGGED_IN_KEY',    '1d60024b0bed5ba1da6522c759ae852fecdd1a');
define( 'NONCE_KEY',        '646527f644487652c65d48700ed05f4d04481a');
define( 'AUTH_SALT',        '0676cf1b4400bc6a2e36b59738c68066c59774');
define( 'SECURE_AUTH_SALT', 'a0111020e000c663ec815bf47584f00d9c7cc9');
define( 'LOGGED_IN_SALT',   'c507a7b56d435c76d83612e9802a62327e020ff2');
define( 'NONCE_SALT',       '3109531254d7d4a5d3001bbc45a02881089633');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'llp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('DISALLOW_FILE_EDIT', true);

define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');


// Contact form 7 spaces
define('WPCF7_AUTOP', false);

define('ENV_CUSTOM', 'development');

// define('DISABLE_WP_CRON', true);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '256M');



// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
