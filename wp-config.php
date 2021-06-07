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
define( 'DB_NAME', 'decorous' );

/** MySQL database username */
define( 'DB_USER', 'agriculture' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hFjJ!YOI7fDz!QDi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7EXv2yw&.lFq!x4>&^6UoNJ37?prfFPj3pC@#gB~Tmfp&3qhDig$1<2w]`ZljT}n' );
define( 'SECURE_AUTH_KEY',  '@0:1{EyKSFc]F3u`<l=j5-dV-4bi3eDzB)Th/_E#uR?T]{g-EU|,0Ay^Nbe/n9n(' );
define( 'LOGGED_IN_KEY',    'bi`alGwa<#hY>[-mh6C1vJud|O,1OPKCILY_;(=D,!@J0rd`gs[K2Avy J*cKwH#' );
define( 'NONCE_KEY',        '!E]>dXw5w3ckCm[N)3 }dJ]X#-a]QZ7nCdrrZ]2ngZoHmJSKshO4+4`ug==2VKeQ' );
define( 'AUTH_SALT',        'u9dFO<+-5*-p^b@hA8PNRk}]s5[v[Hpif??JnO@|U]c)Y8YZabwzwL~lJL1{S3M{' );
define( 'SECURE_AUTH_SALT', 'sv/Z-Q*=KJsG6@R-~SmDeu9A6G ENr/+5{<k>&0vSP0G1>e:G~Zukjot-m@4JqCj' );
define( 'LOGGED_IN_SALT',   'VO55c,Gw-];]&Zuf}Q#O98uD/Q1t{l%L5ndb).oiMd8r{pu}2<v^2#hg2#9Q&11#' );
define( 'NONCE_SALT',       'aY:v*KN`u]t-^(d<0DkfeWc[QfZ(w;OV 3pWk}y8^SpX8 .gkLDY&,`LCHO@@#Au' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'da_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
