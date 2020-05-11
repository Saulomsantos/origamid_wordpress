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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KHUxavcIsQjkNd0MaV6TKByjYY33LBrDaQSpFPfkzRr9kvN2eq6DSLUTKhE9uoI4XCXs2aUItqArxI7KWOdGhQ==');
define('SECURE_AUTH_KEY',  'mAm+8gSmpaN5X+hpSslrinOUKbKPI8iTMOhI6o5wvMFFM1GYyCjTYacL0fomj67BpXJcxSs2BF4ad6cFYInW/A==');
define('LOGGED_IN_KEY',    '7KaW9YsWUXFJJeQHaB2qJ+TGDd88JOee5KKK0z5oeQb86yGuccQl4XXJON1cOg3A5M3auMywFaVy2dkj78JWyQ==');
define('NONCE_KEY',        'XMMBS8Y8gK1eVqQPZblejqep/GI6mVn6X7E3UtvOTQqSfCBA8LUWjpw82MCc0NxQlsL9HS1JQvS9jR0iC00IEw==');
define('AUTH_SALT',        'lIA75yqy0f/hxqcaY/ILLZrzlXaYyi5/Z0YMeixLCX3/EDYwpLyqP1ndUMa+5OsOUTR5q+IcBR+NlgAIXaxWLw==');
define('SECURE_AUTH_SALT', 'AanrI6Zwz0TEyMvjyjRXoanOlJ26COKUcfo9XIwzpSAjpIZH2qFoUqvJZNsfspAs7ZHVo1dfoHu8Umm6MOIBBA==');
define('LOGGED_IN_SALT',   'uP8JY/pBBpL4qXCkFn1x0gM/EXCdrg1JBittj1noFi5QN0vTc6GSzlUxAoFbfnjeaDqy4AbeT33yzmpYlI9S1w==');
define('NONCE_SALT',       'iR+8G3/CyCHdI6OU+IRN1ACQS1hGeI6e1dboQ5NRynkCIVB8Pl7ACQu6swNCXabnUhCAPvETWLKAcdEyvCVX8g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
