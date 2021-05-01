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
define('AUTH_KEY',         'n0wTJWFr1GVAi7vTf6H5KGliqRyH0LPlMO4as56K28RMRtugNBtPGhZftGw2Ymr1oN8bttvr7bV2pSRV1sWC8A==');
define('SECURE_AUTH_KEY',  'w1C1EKKERM19W8ErfhsjAN1rigDNXx6lHOz2NVC0HRsEjb5DsL4PaVu4A/zuY9kIft58iTVnRF/loOTeR+AGeA==');
define('LOGGED_IN_KEY',    'zpnrA4JYgRfSayyv0hat/CAgkyagvwwkvsj+hk9cmtqrETxjmnlRpEC8gCuNmkqUgk2WjZxdvqFZC+FtmDcSaQ==');
define('NONCE_KEY',        '1f2XPf7x+TVpGwPeoS2ZayNi+7G+isvWfXZUI9lLhIZI4oPOykxtwKKyXBrl51JY6xUkq27R4ULQ0LZuhxIoww==');
define('AUTH_SALT',        'mauR8H5fmtO+dXGpsD01uAkDNek0GL8MlW2Is6/2uiU4rKPDJdAtkmxQV5gifqfWLNY65RAQCWbA8uKnOA6dnQ==');
define('SECURE_AUTH_SALT', 'BgKHXKMqHxg60GbLcRRSFL/j2bhAqSBRRCFYBhvOJ54h9abxlNp/AdNeec1DSF/kdt8mq7VBlNZLSN2YBTHjLA==');
define('LOGGED_IN_SALT',   '0579TPurBLeILJe26gxIhnOmWhXXrk1zCxaJNRZxtmXYOCQhu3dCrK7A7i97cwvUt4fYc+2ShinMJVFe6fVb0g==');
define('NONCE_SALT',       '0AnuWeVW1+NVJJ4V1qvcNtphOPmpZVkWWzRbqeO9Oq9DsziaH9yxR8+NSyr8p7L5kpYgUlMzcQmmWPg5A/WTIQ==');

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
