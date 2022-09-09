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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Evaluation-Covid-Studi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'B9VLzQTWacDmPG8EXFS0XFqwRHRuCi3qPESA1KDSSMWltSo6K6CV1hfoz7fEnpvm' );
define( 'SECURE_AUTH_KEY',  'qrrQJbI58hHb7ozIMkMUdcVKT74bW1biDWLzxtxlkePBY9mn05ehAIjiewtC3Tne' );
define( 'LOGGED_IN_KEY',    'bhWIHAZATozd4rjUfL2A27Eor6U9U8j1dM41UmRrMC90e7HiJwVdr5k99EReFb6c' );
define( 'NONCE_KEY',        'V7rAF1h7Fuse2v46IchfP2n3Y5L7SdsHMCksggbxd1sGv43ejXB0irlY3MeQhuNb' );
define( 'AUTH_SALT',        '14He2wQV3PEOsXn098BYfxz6lycrPxVoTNQzYvCXHkvvlr2tdKpjbMWHEEq9rKL5' );
define( 'SECURE_AUTH_SALT', '1wWFb8S8fbFBALZkcOhBer1AdDj2pgpTMwK9uUu3azZCWwnmiYh3k3snwfK5yPz5' );
define( 'LOGGED_IN_SALT',   'bYdwJzYzLu4YkSZfYWhr6zYd6w67JcTK90SNoXwOEXB02cYY1j3DWt8bSqNJMfGQ' );
define( 'NONCE_SALT',       'yoyOGV8iCIMVHjpVrvAvPXtYYeyDKmnWXHezEEHk0ul8CsQilJG536T7Gcy9918n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
