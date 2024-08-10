<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cnc' );

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
define( 'AUTH_KEY',         '4,(Q0]ZKTiChV|<}n$YWfS~vB!8~):b}!sstKFwcpFu4cmuf+gOBaL*6jb)V3wvq' );
define( 'SECURE_AUTH_KEY',  'MOe]V8ycc8,Iw6,KDg:oSKNSR+*kN#3U8]kH)SI,veALTwX=#][;,C68.ijcg q]' );
define( 'LOGGED_IN_KEY',    'FCb[>i_x]gM,`aX$?Zi&70XQaDbKM.WV||PC.~T|</bd|V~sGL{rTpOJqc:oU^ga' );
define( 'NONCE_KEY',        '^:y{Y +%i3L`i H!?],wX=F89f*!{1a<fI<Nkw-De 3x|iL3uZWE[GeajSl_GbQo' );
define( 'AUTH_SALT',        'P%>c1 s~Fj[YlT[:;&FsqKVky,86feY!:[>eJi&z*_{2#[9;uNLC_*Vf2yXyQ[7a' );
define( 'SECURE_AUTH_SALT', '(X^P>H`0B$H{N9AIoHp+ykDnh0(5{|@:,.!},lbc:VUsn2?<5t{d{&cLAnA0Yu>6' );
define( 'LOGGED_IN_SALT',   'adP8j[reh#0-L=z Y4:.CdT=O8{xf9Hvy<0f?fgye<^|/Ks4Dw]RMbT|8.`>by@g' );
define( 'NONCE_SALT',       'nz_enUvlb!N0M#H~q7M1N;pi0$Bfs#%=LeZGG@W=*dfX#XD O=3(Ih*v62w})hl{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
