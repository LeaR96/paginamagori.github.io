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


define('AUTH_KEY',         'ZNpvaRQAVZQMY2GDsC1DCLtywIatiJs4oxOyC0ubBYZnBHkIYzHBUUXyfKqZd8lUvEWocZsnEuwySEEATecKzg==');
define('SECURE_AUTH_KEY',  'I4C0+Ghjq9hg5uC3zB8M6IK9o8QeNqUbbHxmgTI9gmkYH3IskluQcfth4AyVYKEgFfai3LMh+jRWPa5v3GXeYg==');
define('LOGGED_IN_KEY',    'vs9CPBjpo14ta1SlxjPZtrQz1dg4PVMiQd4D5rm5e7x/IcNkcTyZhtX4gPee2QCEsDrfKW2jNEygpq3p8K33uw==');
define('NONCE_KEY',        'pb9C631NXgiTtborI7I4dM3/ACGEp3bvHfvo3rH4vfZGLg+yXRzG1hsVssYN5xUFiH5rCPehBc857VpXImOERA==');
define('AUTH_SALT',        'NDuyX69yIXOUPcMsCCH9dccNNjyU4PWWJpbWixHPWj5D+82P/tTC7s5QikuN5+KYfMwCEF3HCsY5Cu+6cVjN4Q==');
define('SECURE_AUTH_SALT', 'dNpZqqjpQXiZbKzMvIhuUZjVxA7i62iI3eA5/PVTsqNHgTaFGwwEEQhgCsA0J7KTf4B/dLbSxzHTVh6wSBLrkQ==');
define('LOGGED_IN_SALT',   'b9ZLBkmFpEvz5yRNscH+OuIyp6VfUtcJg56DvFB3xkMrOnvgt8j6zuJtv+mZJLXLXdWfqGEAhAjkG0KQPb3gPQ==');
define('NONCE_SALT',       'nQiEBy3Gc8tABIewnD0ViY13d7HrpQRhSHDcLKx0RFV6KApDScnKUNt5IVB6hyew3Iq24AMcMwBe+FOE6wJWYw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
