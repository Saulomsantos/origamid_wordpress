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
define('AUTH_KEY',         'lLay8ev04A76vd4/GXF/1SSi5PzvAuE1AhNO1Y1VfA7iliDw5aeTFxWZrEfEWqJTAPB4icUlKAYxbOFSaqq07A==');
define('SECURE_AUTH_KEY',  'f6J1zT0Vch6BMNnESJ2ZpMWWKfdOb6Vb1rcWVR3JEE+fFqfVXXSgUyKSbBQGr0UwyuDxS7nS1tApomeFPBQ+DQ==');
define('LOGGED_IN_KEY',    'LKRGZgXhjV9WfvUBd/CiA2BzgcBhOlnJOmb3GKCabv3zHl62U1f2KPfdduPW9Zw4IdUlL9INJGyb4kkbedMaUg==');
define('NONCE_KEY',        'OmOHzA07D19IRt7m0jJTbQVRt9HNx/BL5RLbSZzxRkkhNQ6o6VWSg8eafbDjx0XpZzhr2uPYQRcbjnGg9PRjsg==');
define('AUTH_SALT',        'dqmoqFRWurI9agrifPYnitjrO4Tn92UD8/p9ziXiq2Lp31AHzDqV6OQ7D2gjR7HXabbDGrDp/kp4L41Y8JwEJQ==');
define('SECURE_AUTH_SALT', 'E8VMq0GKhb916vHM/k+8SzE+SNtzTser+BCsdTDMl+wR/qDsAXDt3t9vFqycq6ajYjHRV2L+Zymvh3s+6RkzMA==');
define('LOGGED_IN_SALT',   'nnWCvXdygpTlCDoTA0L03AWpwlVrF9T0couPXEHsM01v6Q+bea0P304lT+bjCjVy9/pFKXjJO9qEYY811I3fKg==');
define('NONCE_SALT',       'f0evo7Alca2R5TlH8VioWBPDnBqBGEi00IiBUraWk1IaOUYkKK1GlPXYH7zTirn1SHJ0cG1IioOjBo8jlgjdOQ==');

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
