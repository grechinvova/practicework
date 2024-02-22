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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practicework' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.<T9cRX=:M yHPl$NB4=G_ZrXNz%{HN$Fh[#LT sf=asTg0:m|JH@jniJ6Qk4Be:' );
define( 'SECURE_AUTH_KEY',  'U1$v)f9-s B.2OGwV0t}TH9uXe3x{$? %Q9P24o7@*bU&J^cIPM(z<X.SpMu{9Q#' );
define( 'LOGGED_IN_KEY',    '$P*<5R-#|4kC[b|xkr!|46hn2UJwQLn.r>3cXmQO|Oo!.ox~n4;#.P(WNMhLXG=F' );
define( 'NONCE_KEY',        '1.Ob^QnyM:rap!R,zyTHyYiW[P4%fe}y.%,1u$y/^,US@JC5F>;&-;3[hc9*}_.J' );
define( 'AUTH_SALT',        ')C=AIC%9~-R{;a~PDhhGH6#3@I!D~}^3UhZgs!:&e4UUz1MA[hW6>ha%e:_u/:7|' );
define( 'SECURE_AUTH_SALT', 'G]iSIG|s+if^>Q&:MA;2:uqXT<-in3,j0r=6frvDZ7%M6:XS`^.<c[9fhMwC[TfW' );
define( 'LOGGED_IN_SALT',   '!b>sIG,v AItbJbxwsjf}OL*sY(!k6i^J08H<,NS}!?!XqlbK70UCCbS1H`J)|t]' );
define( 'NONCE_SALT',       'ZJD?5fRQx&OSM UDVTlp{(mLkbxzJ/[3_V437qVgbV8|GX%<t>ev#3)Hm8>_3>J:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
