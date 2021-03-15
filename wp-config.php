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
define( 'DB_NAME', 'baka-wp' );

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
define( 'AUTH_KEY',         '%aWcg0$4,TqY<6(<;e|[kdoopL7-X(c;erV`&7Z08=pbiEic`j[-J_@muvm`.gYC' );
define( 'SECURE_AUTH_KEY',  ':pK~z>TG^!oN74QICo|F;D3(d|/,_/N$2997sVkK.EM}PTQ}l8[sO/Aa{],ctvM.' );
define( 'LOGGED_IN_KEY',    'YN:%dDS+@;rOQENt@w9_ N*DuN:GsiixmC@t1eNMK,!jcf(S%wr< :f*^<jNh.X;' );
define( 'NONCE_KEY',        'XPX6c9&1C_~Nc`u-fs@cdM;g(Z!d&ex|^);kiP=LK7k8x6lJXGBU+:;?K/gP~ahN' );
define( 'AUTH_SALT',        'l~(-NRZbU5cO>h?$cW8zNFTH@Ms7L*!Z;K*p+wCcfP/PU7[qRxvPz=!;Y5K8I#H0' );
define( 'SECURE_AUTH_SALT', '4CB@/BYW(Eh>MVs.hhkL#ws4#1sZ.rX6eDn h6*xGk9QyR.`|)waAVx.VoV4V)Pf' );
define( 'LOGGED_IN_SALT',   '@>k[k+fHY ^<.MXo,Jt>dI{gyZj+$RV^ =itM%hQjeALb=qM/Qg=!&9f=TuY6*? ' );
define( 'NONCE_SALT',       'axzS7,c[@fZdJmKG=#;[rwGcNXUroubUQ9s]W>4Z%IvJuFK-Z;1=X0f8A-:Z]C0Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('ALLOW_UNFILTERED_UPLOADS', true);
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
