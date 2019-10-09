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
define( 'DB_NAME', 'gutenberg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J55<&v[1a=w5 9Zs>6O%tRSR{d-uF/rl@d?!&~9@0gX|CpkgU!>GukY1 i2}F[Q<' );
define( 'SECURE_AUTH_KEY',  ' :7gM$$4$+7Py/#K[Wm%So{?wi*1QuQ7Tg5jH9=N1(ZN(z}Y>gwE$G *{&SGHwDD' );
define( 'LOGGED_IN_KEY',    'H~7(HXp(_MzeA&v}:Q{NF92&R SxanLt%D+od&?cU-0%2wC7G2@9Tl5z#qyH9h@b' );
define( 'NONCE_KEY',        '=b6Vn-^(f#or+u2`d#Md/?1ashqpQ6e- >BFEilDmQTgV9E0 k{;t?8bJNtG/t>{' );
define( 'AUTH_SALT',        '2UF88</)so_;c$fg1JR+f_k=4.`=9 rv%D6<0wrWz5qjgPIJxt^+&$S{0<iYKUBM' );
define( 'SECURE_AUTH_SALT', 'wZZOlP5|us,dZ=!MeRR[?H+TnJWg2KSs5:mYA[FEg&d#@>J52+V}6?HUa.GP=8,Y' );
define( 'LOGGED_IN_SALT',   'GD_AsV_~US]G (WJY/d?ZHq+Si)%$^~|*JTH^MoE/HoJ|Ln0U|T+sJROMAW2;$<x' );
define( 'NONCE_SALT',       'vU.&^7%h7t}=x-Y-+Loa-fj$r4E;t:_~[bpCheUo&mwF15GiP,d!HJs.!/Q(B|{q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
