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
define('AUTH_KEY',         '6416BFI6yeJfw/2X+Q9Dq9+Pjkny0Z8QrNS/R37oAKBHh6Otp4EP0ICtxegNE8mdtNBvHjGbP4gauSTULfO9CQ==');
define('SECURE_AUTH_KEY',  'mq7E/tK31pNWZN3TgrVczH8y/28SUt8hf//apEYHpP3PXMqj0Nl3wgFdEVa3etY+l7Fxu+ZNpR7Le5MH8CV6ww==');
define('LOGGED_IN_KEY',    'IXcqmKLohi65QnCB+tgFIQgMR74UfNyghoGi9jkrBXLeprACt0Gbh3rtXGnsqol3cc+iow+e0rz36D1tfQGFaA==');
define('NONCE_KEY',        'RLl9aTCmACFQF6N5gT7/10LCXZsTYzTOTpR8sbF7mUbRmjwja+PbROGReI9DVyy0ef4v4ZIhGRSPQHUMfnHiNA==');
define('AUTH_SALT',        '4zhjQ+IssJlo8FQogI2yjIr1DbjKCxWIY3E3E7K+4grzIxF/KrXvFRiO3eJWfTf1mNtCkb8ME9rFulegaZWt0w==');
define('SECURE_AUTH_SALT', 'DeXIbFYoTxITsJFIv/k6veIg2R00EK84RmbpygH4eXVMo+hNeK8doUYYgfOvigVpi4rMk1yaWxYtLcnEIz7ntQ==');
define('LOGGED_IN_SALT',   '1DSdaZXQcWugDZHVTwKMzaix/YtrYe52G5F8hzCjPEZxi3pRZHQNjfzqq53IKvl59Cy6Kfg/TbT21C+ODPVuFQ==');
define('NONCE_SALT',       'wAZVjIACOcBYwTBBRfn8/0ruFP6VpCW1yz3OyiSpS2QDBP59qAv+XoEGjj71rmn3CnwNLpzbLlQHK+CUbWqDJQ==');

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
