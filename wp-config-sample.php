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

/** Allow Multisite */
define('WP_ALLOW_MULTISITE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LFIRW5~^uUa=pge7C:l6JRE4w*M1|r<C|*B2_U~?fNDt$64]NTLY*]}3q-=qry*5' );
define( 'SECURE_AUTH_KEY',  '2:WI?sT%Oo0jsr2,%9Z|bvo/{!qv#l(w;)51uCCla$W<=#O7iCF?=t8(+TLb=^Ho' );
define( 'LOGGED_IN_KEY',    '>>>X%40j2,O^(YMt(@:&6C;]Q3Xh%AW)Qfl9d{0nIK8OxuRq`$V[r.g80ykvYSyW' );
define( 'NONCE_KEY',        'eTZW]2&UTUNQ>sO(lb!)4shD_H@R4bw$yowMf*5Wa;57J9bxUYci=)xv6EK[=3MJ' );
define( 'AUTH_SALT',        'Q;WDdNap`!y>%z$l~-,Z6qdqmboUf%BtuV?|X;Z8PYrysGdr3uL8ACUp`Q92VPdz' );
define( 'SECURE_AUTH_SALT', '1>0GM>d_Y!Px_l#O )T(D,M5,s|ZVgdtLUS>(XK<D[9F3w=`.J30PEE6sc`e~;,&' );
define( 'LOGGED_IN_SALT',   'bZgk|$>3liXin|wvO7UIKxF>+GHLLNtDB,,haF%,QxH+q[=k-bA}5&LDBarzwU;z' );
define( 'NONCE_SALT',       'cwUP&_rRC>gX*yEU8tEflV@^oZ%|PhANl7g!Xct/ mP=@Pw,_J2:=ich(/GWTP>t' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
