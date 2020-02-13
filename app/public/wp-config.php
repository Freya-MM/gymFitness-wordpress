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
define('AUTH_KEY',         'Ot2lS3WYuXYpWN+IurKLuYo4qWOIrEr8VLkNhSCJB6+/ipLFjI5INTruutom7/FTOiQ6BXqX0g7XjN4K1Y3b0w==');
define('SECURE_AUTH_KEY',  '2pRI96m8cgE3I1B3lSo8PECScGkgVdia28pGtHWGLRqJY0g92EBDJHSxRJTuAO4w0fSjfXiW0eoCTM8aeyKG1A==');
define('LOGGED_IN_KEY',    '5+3Z7DEsxHuMDrz80PA4dKMFDQtmWdlNIbOmj34fUW/L1FKnLORqwZgkDD7/1RWv2eMet8lmEZaFvYGaUJVq2A==');
define('NONCE_KEY',        'pStAm3Yi5iADsBe15rT0rxzFnlT5lr7akHhQksPXuh4Jb49D3rD0HUm7Oxbv7MoUcYx/hDjQ1SVFRlfS99wclg==');
define('AUTH_SALT',        '5cX1shIkgY79WcWnpwHxW7XZT3231lkHF/j3CrPtaSWOPtDgf2EoOOkt7mDtFnIuhHGdKkeVftc0y3OSzfwhCg==');
define('SECURE_AUTH_SALT', 'OWM601Jj2fEO0lKiTThgwLvSiwcqEIGRzyAPh5GqFeyE3dUg4fz1qCILw1ohC3LbNxjBV1wXAtcSd3sGVeBBbw==');
define('LOGGED_IN_SALT',   'SG68fHh39/gRzhpRZdklcIF9AAoeR4tBMh2M8cqyeqvR1b8Yd8IOJrE65xM+dti/Ml/+snCmKEn1tQTuig/IZw==');
define('NONCE_SALT',       'ae9DxlPtnTxDhgdwMD/5zSOVRaDcdVnhtGJWmNAkPVjPXiWkrIWQob7A6CQGejptfhBXeEVOPq265ZS7igTYkw==');

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
