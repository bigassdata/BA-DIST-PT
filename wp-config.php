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
define( 'DB_NAME', 'ba-dist-pt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B80Zs`m83tiI{kzg&bC>dlckxzZ3}Pvio$,#}{RN;{&DbjiX9nfh%wIjJ;H;j3-^' );
define( 'SECURE_AUTH_KEY',  'X?6B4@F[bx:dQ4v2=2)yAC~IBk-vDWtUkSkgpQ&f$+[H&0Rr=|x#:P|RPLiG6t7K' );
define( 'LOGGED_IN_KEY',    '{`d]f7mt)G$6C3h`=1K=-SMSS58@;en|),&|cI|GI%FNWy/^}@GO|A3kN6`&rqG ' );
define( 'NONCE_KEY',        'z5}MVgK;S}iJ~*.9CY6k^3*dPaRQhQW!}J.Cxv(=vtgP!Lg~wi`VB;>poavB@Q5y' );
define( 'AUTH_SALT',        'w)_HRU0o#Yi.X1AT5J$BT4=W:yM`uj_nfN3sSQmo.@Yh;357@/Rm~_R946yEP<EJ' );
define( 'SECURE_AUTH_SALT', 'j7wH`aUt>)`R7bgVvQ4{e+FEs)A?(74Gh^Udy5%c^`=l#_A#H`udK@Q;E #7)sv_' );
define( 'LOGGED_IN_SALT',   '~].q!U<&Sk}FKIQ_.A@^|Xmp>7Y<<trG)U$|+Sg:KP_IB&kBTX#3{y/T;2=*Xi_L' );
define( 'NONCE_SALT',       '=mg$WaC;7u|wSy_<@gyNxT=Sw[.H^T7.,Mra+?ILh1{UC8-U.} X6.n8Vcz/9}x0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'distributor.ba-dist-pt.localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
