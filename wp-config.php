<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '9QPEd8GRXwekHuNVcjwMZGl+ZuNY2gYMrjAY6ducK4yuCwpLsz/vGUz8KM98l385q4kaeBpEwZc11zo0biJYvg==');
define('SECURE_AUTH_KEY',  'OMEj09y8l3gPyy6R6MMV+pzJIVkU+FObUv+5/OUQGb0nnktzfsRCE6KUPBNpBHjFWvbCn2RsrfLVOZjQID9deg==');
define('LOGGED_IN_KEY',    'QASSH+verynwZCqaxzutuxZ92PMZSc1NGi/EdU3iVGoW+Wb8sfW43KAiPs3df09OXYQTy2fnx01GyjEds55X4g==');
define('NONCE_KEY',        'U9lYHdQA5SJ5omu5u3RTGLmopPT/e7hGj8iqDAHpqZJBq0yI92cKE7OQ7zQQgT8a31os1GOjRLXUrYy4G20Xzg==');
define('AUTH_SALT',        'epCpkqHkRWklkwjdBFAKAuXC5viA+QYg040LFgtg1pZ6YcbjXij8TUlB91DoVv4AaPCxTCWX/R1Pzfe5MlEHxQ==');
define('SECURE_AUTH_SALT', 'BBYwhJfwZdUQuxi2PxZ9IYzvIxyhVAyAvov8Q8xp4I1XLyhAfnFnbv6AGrIsonrJ4dekf01DNo4bGKAdmZvtlA==');
define('LOGGED_IN_SALT',   '+DhtRJbEzYobdZEfT98vne3T0M5F+k0GxSy8SRGdA5yw9Y4xssToaxRLm/jRsBEf/xYRVWuTTDyf5osZ0LLz+g==');
define('NONCE_SALT',       'UFW/dVqRZUejU6CQNkWV1QjX94UyLOX3LXnJ8wyzf0KIG7QVBYQ8OyDDlAwCsGhLmAkcGENnIjuXQwv7wv97ew==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
