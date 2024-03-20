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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sia%knR`[M9YlNCc/LCyx01DTp[Wt+!jA[hI(=[{zu5Mu}deJ3$)5qHs<jo}8&j,' );
define( 'SECURE_AUTH_KEY',   ';rO7Nr$1BhbzprYog[CHS*Nr[8mdF%vL#:8;.2Oj|t M_Om|Zl{o`g_F&_e8{rmp' );
define( 'LOGGED_IN_KEY',     'f`p|UkE&HH9$j=:+,Mg7/U|L$L5K4N^I%STO4t,xu~Yz5Q)/r=<6ED<T;X+e?#?k' );
define( 'NONCE_KEY',         'f882Q)KgDd7M*p,>tvnqRxiRp*>YANLB>=Kl#D2C.]y9p_jmR}+21Y0?x}HFI|[]' );
define( 'AUTH_SALT',         'Rzpb+|90l&;D#)7w_vl`2Gn56-(&M%H!TsVH*.-a}aH`Y9*,8!GOoUt%i!<`:h*=' );
define( 'SECURE_AUTH_SALT',  '};A6E4f~T@/<sBGKKp[hX#t!ue3*ePpz*.G:@zl#uO!g,|{my~8Mkcj/s0m3,ZT3' );
define( 'LOGGED_IN_SALT',    ':NR|VDJ*S9^~:l9diK0ulL(,V]wfT%A(h_9;;0g#pPc(WK$*xNNVVVZ->Ii5-x>n' );
define( 'NONCE_SALT',        'Qt&{3y&rg{P?JVhh{bv/QMzQdLQo6.rTT`dKnjAJS^MHv1JUf&f1.GKXV4R<g60>' );
define( 'WP_CACHE_KEY_SALT', 'P|l8Vk&oERaBpb:I,TE-#`(I!B43^)QsH!wo~+lh}O^/P#S8%=Sj S+V;0N=<yU)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEVELOPMENT_MODE', 'true');


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

// define( 'WP_ENVIRONMENT_TYPE', 'local' );<
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
